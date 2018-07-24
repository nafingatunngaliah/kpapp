<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'album';
    protected $primaryKey = 'id_album';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
        'nama_album',
    ]; 
}
