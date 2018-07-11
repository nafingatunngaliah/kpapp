<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    protected $primaryKey = 'id_comment';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
    	'id',
        'id_post',
	    'komentar',
    ]; 

    public function users()
    {
        return $this->belongsTo('App\User', 'id');
    }

    public function post()
    {
        return $this->belongsTo('App\Post', 'id_post');
    }


}
