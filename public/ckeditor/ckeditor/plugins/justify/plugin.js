<<<<<<< HEAD
﻿/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

/**
 * @fileOverview Justify commands.
 */

( function() {
	function getAlignment( element, useComputedState ) {
		useComputedState = useComputedState === undefined || useComputedState;

		var align;
		if ( useComputedState )
			align = element.getComputedStyle( 'text-align' );
		else {
			while ( !element.hasAttribute || !( element.hasAttribute( 'align' ) || element.getStyle( 'text-align' ) ) ) {
				var parent = element.getParent();
				if ( !parent )
					break;
				element = parent;
			}
			align = element.getStyle( 'text-align' ) || element.getAttribute( 'align' ) || '';
		}

		// Sometimes computed values doesn't tell.
		align && ( align = align.replace( /(?:-(?:moz|webkit)-)?(?:start|auto)/i, '' ) );

		!align && useComputedState && ( align = element.getComputedStyle( 'direction' ) == 'rtl' ? 'right' : 'left' );

		return align;
	}

	function justifyCommand( editor, name, value ) {
		this.editor = editor;
		this.name = name;
		this.value = value;
		this.context = 'p';
		var classes = editor.config.justifyClasses,
			blockTag = editor.config.enterMode == CKEDITOR.ENTER_P ? 'p' : 'div';

		if ( classes ) {
			switch ( value ) {
				case 'left':
					this.cssClassName = classes[ 0 ];
					break;
				case 'center':
					this.cssClassName = classes[ 1 ];
					break;
				case 'right':
					this.cssClassName = classes[ 2 ];
					break;
				case 'justify':
					this.cssClassName = classes[ 3 ];
					break;
			}

			this.cssClassRegex = new RegExp( '(?:^|\\s+)(?:' + classes.join( '|' ) + ')(?=$|\\s)' );
			this.requiredContent = blockTag + '(' + this.cssClassName + ')';
		}
		else {
			this.requiredContent = blockTag + '{text-align}';
		}

		this.allowedContent = {
			'caption div h1 h2 h3 h4 h5 h6 p pre td th li': {
				// Do not add elements, but only text-align style if element is validated by other rule.
				propertiesOnly: true,
				styles: this.cssClassName ? null : 'text-align',
				classes: this.cssClassName || null
			}
		};

		// In enter mode BR we need to allow here for div, because when non other
		// feature allows div justify is the only plugin that uses it.
		if ( editor.config.enterMode == CKEDITOR.ENTER_BR )
			this.allowedContent.div = true;
	}

	function onDirChanged( e ) {
		var editor = e.editor;

		var range = editor.createRange();
		range.setStartBefore( e.data.node );
		range.setEndAfter( e.data.node );

		var walker = new CKEDITOR.dom.walker( range ),
			node;

		while ( ( node = walker.next() ) ) {
			if ( node.type == CKEDITOR.NODE_ELEMENT ) {
				// A child with the defined dir is to be ignored.
				if ( !node.equals( e.data.node ) && node.getDirection() ) {
					range.setStartAfter( node );
					walker = new CKEDITOR.dom.walker( range );
					continue;
				}

				// Switch the alignment.
				var classes = editor.config.justifyClasses;
				if ( classes ) {
					// The left align class.
					if ( node.hasClass( classes[ 0 ] ) ) {
						node.removeClass( classes[ 0 ] );
						node.addClass( classes[ 2 ] );
					}
					// The right align class.
					else if ( node.hasClass( classes[ 2 ] ) ) {
						node.removeClass( classes[ 2 ] );
						node.addClass( classes[ 0 ] );
					}
				}

				// Always switch CSS margins.
				var style = 'text-align';
				var align = node.getStyle( style );

				if ( align == 'left' )
					node.setStyle( style, 'right' );
				else if ( align == 'right' )
					node.setStyle( style, 'left' );
			}
		}
	}

	justifyCommand.prototype = {
		exec: function( editor ) {
			var selection = editor.getSelection(),
				enterMode = editor.config.enterMode;

			if ( !selection )
				return;

			var bookmarks = selection.createBookmarks(),
				ranges = selection.getRanges();

			var cssClassName = this.cssClassName,
				iterator, block;

			var useComputedState = editor.config.useComputedState;
			useComputedState = useComputedState === undefined || useComputedState;

			for ( var i = ranges.length - 1; i >= 0; i-- ) {
				iterator = ranges[ i ].createIterator();
				iterator.enlargeBr = enterMode != CKEDITOR.ENTER_BR;

				while ( ( block = iterator.getNextParagraph( enterMode == CKEDITOR.ENTER_P ? 'p' : 'div' ) ) ) {
					if ( block.isReadOnly() )
						continue;

					// Check if style or class might be applied to currently processed element (#455).
					var tag = block.getName(),
						isAllowedTextAlign, isAllowedCssClass;

					isAllowedTextAlign = editor.activeFilter.check( tag + '{text-align}' );
					isAllowedCssClass = editor.activeFilter.check( tag + '(' + cssClassName + ')' );

					if ( !isAllowedCssClass && !isAllowedTextAlign ) {
						continue;
					}

					block.removeAttribute( 'align' );
					block.removeStyle( 'text-align' );

					// Remove any of the alignment classes from the className.
					var className = cssClassName && ( block.$.className = CKEDITOR.tools.ltrim( block.$.className.replace( this.cssClassRegex, '' ) ) );

					var apply = ( this.state == CKEDITOR.TRISTATE_OFF ) && ( !useComputedState || ( getAlignment( block, true ) != this.value ) );

					if ( cssClassName && isAllowedCssClass ) {
						// Append the desired class name.
						if ( apply )
							block.addClass( cssClassName );
						else if ( !className )
							block.removeAttribute( 'class' );
					} else if ( apply && isAllowedTextAlign ) {
						block.setStyle( 'text-align', this.value );
					}
				}

			}

			editor.focus();
			editor.forceNextSelectionCheck();
			selection.selectBookmarks( bookmarks );
		},

		refresh: function( editor, path ) {
			var firstBlock = path.block || path.blockLimit,
				name = firstBlock.getName(),
				isEditable = firstBlock.equals( editor.editable() ),
				isStylable = this.cssClassName ? editor.activeFilter.check( name + '(' + this.cssClassName + ')' ) :
					editor.activeFilter.check( name + '{text-align}' );

			// #455
			// 1. Check if we are directly in editbale. Justification should be always allowed, and not highlighted.
			//    Checking path.elements.length is required to filter out situation `body > ul` where ul is selected and path.blockLimit returns editable.
			// 2. Check if current element can have applied specific class.
			// 3. Check if current element can have applied text-align style.
			if (  isEditable && path.elements.length === 1 ) {
				this.setState( CKEDITOR.TRISTATE_OFF );
			} else if ( !isEditable && isStylable ) {
				// 2 & 3 in one condition.
				this.setState( getAlignment( firstBlock, this.editor.config.useComputedState ) == this.value ? CKEDITOR.TRISTATE_ON : CKEDITOR.TRISTATE_OFF );
			} else {
				this.setState( CKEDITOR.TRISTATE_DISABLED );
			}
		}
	};

	CKEDITOR.plugins.add( 'justify', {
		icons: 'justifyblock,justifycenter,justifyleft,justifyright', // %REMOVE_LINE_CORE%
		hidpi: true, // %REMOVE_LINE_CORE%
		init: function( editor ) {
			if ( editor.blockless )
				return;

			var left = new justifyCommand( editor, 'justifyleft', 'left' ),
				center = new justifyCommand( editor, 'justifycenter', 'center' ),
				right = new justifyCommand( editor, 'justifyright', 'right' ),
				justify = new justifyCommand( editor, 'justifyblock', 'justify' );

			editor.addCommand( 'justifyleft', left );
			editor.addCommand( 'justifycenter', center );
			editor.addCommand( 'justifyright', right );
			editor.addCommand( 'justifyblock', justify );

			if ( editor.ui.addButton ) {
				editor.ui.addButton( 'JustifyLeft', {
					label: editor.lang.common.alignLeft,
					command: 'justifyleft',
					toolbar: 'align,10'
				} );
				editor.ui.addButton( 'JustifyCenter', {
					label: editor.lang.common.center,
					command: 'justifycenter',
					toolbar: 'align,20'
				} );
				editor.ui.addButton( 'JustifyRight', {
					label: editor.lang.common.alignRight,
					command: 'justifyright',
					toolbar: 'align,30'
				} );
				editor.ui.addButton( 'JustifyBlock', {
					label: editor.lang.common.justify,
					command: 'justifyblock',
					toolbar: 'align,40'
				} );
			}
			editor.on( 'dirChanged', onDirChanged );
		}
	} );
} )();

/**
 * List of classes to use for aligning the contents. If it's `null`, no classes will be used
 * and instead the corresponding CSS values will be used.
 *
 * The array should contain 4 members, in the following order: left, center, right, justify.
 *
 *		// Use the classes 'AlignLeft', 'AlignCenter', 'AlignRight', 'AlignJustify'
 *		config.justifyClasses = [ 'AlignLeft', 'AlignCenter', 'AlignRight', 'AlignJustify' ];
 *
 * @cfg {Array} [justifyClasses=null]
 * @member CKEDITOR.config
 */
=======
﻿/*
 Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.md or http://ckeditor.com/license
*/
(function(){function q(a,c){c=void 0===c||c;var b;if(c)b=a.getComputedStyle("text-align");else{for(;!a.hasAttribute||!a.hasAttribute("align")&&!a.getStyle("text-align");){b=a.getParent();if(!b)break;a=b}b=a.getStyle("text-align")||a.getAttribute("align")||""}b&&(b=b.replace(/(?:-(?:moz|webkit)-)?(?:start|auto)/i,""));!b&&c&&(b="rtl"==a.getComputedStyle("direction")?"right":"left");return b}function h(a,c,b){this.editor=a;this.name=c;this.value=b;this.context="p";c=a.config.justifyClasses;var f=a.config.enterMode==
CKEDITOR.ENTER_P?"p":"div";if(c){switch(b){case "left":this.cssClassName=c[0];break;case "center":this.cssClassName=c[1];break;case "right":this.cssClassName=c[2];break;case "justify":this.cssClassName=c[3]}this.cssClassRegex=new RegExp("(?:^|\\s+)(?:"+c.join("|")+")(?\x3d$|\\s)");this.requiredContent=f+"("+this.cssClassName+")"}else this.requiredContent=f+"{text-align}";this.allowedContent={"caption div h1 h2 h3 h4 h5 h6 p pre td th li":{propertiesOnly:!0,styles:this.cssClassName?null:"text-align",
classes:this.cssClassName||null}};a.config.enterMode==CKEDITOR.ENTER_BR&&(this.allowedContent.div=!0)}function m(a){var c=a.editor,b=c.createRange();b.setStartBefore(a.data.node);b.setEndAfter(a.data.node);for(var f=new CKEDITOR.dom.walker(b),d;d=f.next();)if(d.type==CKEDITOR.NODE_ELEMENT)if(!d.equals(a.data.node)&&d.getDirection())b.setStartAfter(d),f=new CKEDITOR.dom.walker(b);else{var e=c.config.justifyClasses;e&&(d.hasClass(e[0])?(d.removeClass(e[0]),d.addClass(e[2])):d.hasClass(e[2])&&(d.removeClass(e[2]),
d.addClass(e[0])));e=d.getStyle("text-align");"left"==e?d.setStyle("text-align","right"):"right"==e&&d.setStyle("text-align","left")}}h.prototype={exec:function(a){var c=a.getSelection(),b=a.config.enterMode;if(c){for(var f=c.createBookmarks(),d=c.getRanges(),e=this.cssClassName,h,g,k=a.config.useComputedState,k=void 0===k||k,n=d.length-1;0<=n;n--)for(h=d[n].createIterator(),h.enlargeBr=b!=CKEDITOR.ENTER_BR;g=h.getNextParagraph(b==CKEDITOR.ENTER_P?"p":"div");)if(!g.isReadOnly()){var l=g.getName(),
p;p=a.activeFilter.check(l+"{text-align}");if((l=a.activeFilter.check(l+"("+e+")"))||p){g.removeAttribute("align");g.removeStyle("text-align");var m=e&&(g.$.className=CKEDITOR.tools.ltrim(g.$.className.replace(this.cssClassRegex,""))),r=this.state==CKEDITOR.TRISTATE_OFF&&(!k||q(g,!0)!=this.value);e&&l?r?g.addClass(e):m||g.removeAttribute("class"):r&&p&&g.setStyle("text-align",this.value)}}a.focus();a.forceNextSelectionCheck();c.selectBookmarks(f)}},refresh:function(a,c){var b=c.block||c.blockLimit,
f=b.getName(),d=b.equals(a.editable()),f=this.cssClassName?a.activeFilter.check(f+"("+this.cssClassName+")"):a.activeFilter.check(f+"{text-align}");d&&1===c.elements.length?this.setState(CKEDITOR.TRISTATE_OFF):!d&&f?this.setState(q(b,this.editor.config.useComputedState)==this.value?CKEDITOR.TRISTATE_ON:CKEDITOR.TRISTATE_OFF):this.setState(CKEDITOR.TRISTATE_DISABLED)}};CKEDITOR.plugins.add("justify",{lang:"af,ar,az,bg,bn,bs,ca,cs,cy,da,de,de-ch,el,en,en-au,en-ca,en-gb,eo,es,es-mx,et,eu,fa,fi,fo,fr,fr-ca,gl,gu,he,hi,hr,hu,id,is,it,ja,ka,km,ko,ku,lt,lv,mk,mn,ms,nb,nl,no,oc,pl,pt,pt-br,ro,ru,si,sk,sl,sq,sr,sr-latn,sv,th,tr,tt,ug,uk,vi,zh,zh-cn",
icons:"justifyblock,justifycenter,justifyleft,justifyright",hidpi:!0,init:function(a){if(!a.blockless){var c=new h(a,"justifyleft","left"),b=new h(a,"justifycenter","center"),f=new h(a,"justifyright","right"),d=new h(a,"justifyblock","justify");a.addCommand("justifyleft",c);a.addCommand("justifycenter",b);a.addCommand("justifyright",f);a.addCommand("justifyblock",d);a.ui.addButton&&(a.ui.addButton("JustifyLeft",{label:a.lang.justify.left,command:"justifyleft",toolbar:"align,10"}),a.ui.addButton("JustifyCenter",
{label:a.lang.justify.center,command:"justifycenter",toolbar:"align,20"}),a.ui.addButton("JustifyRight",{label:a.lang.justify.right,command:"justifyright",toolbar:"align,30"}),a.ui.addButton("JustifyBlock",{label:a.lang.justify.block,command:"justifyblock",toolbar:"align,40"}));a.on("dirChanged",m)}}})})();
>>>>>>> ckeditor
