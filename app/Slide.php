<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = 'slide';
    protected $primaryKey = 'id_slide';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
        'image_slide',
        'judul_slide',
	    'isi_slide', 
    ];
}
