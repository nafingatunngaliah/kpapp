<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
    	'judul_post',
        'image_post',
	    'isi_post', 
    ]; 


    // public function sampah()
    // {
    //     return $this->belongsToMany('App\Transaksi');
    // }
}
