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
    	'id_post',
        'id',
	    'komentar',
	    'balasan',  
    ]; 

    public function post()
    {
        return $this->belongsTo('App\Post', 'id_post');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id');
    }
}
