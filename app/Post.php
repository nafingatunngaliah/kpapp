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
    	'id',
        'kategori_post',
        'judul_post',
        'image_post',
	    'isi_post', 
    ]; 


    public function users()
    {
        return $this->belongsTo('App\User', 'id');
    }
}
