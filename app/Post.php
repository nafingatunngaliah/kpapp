<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $primaryKey = 'id_post';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
    	'image_post',
	    'judul_post',
	    'isi_post', 
    ]; 


    // public function sampah()
    // {
    //     return $this->belongsToMany('App\Transaksi');
    // }
}
