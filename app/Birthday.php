<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Birthday extends Model
{
   	protected $table = 'birthday';
    protected $primaryKey = 'id_bd';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
        'nama',
        'deskripsi', 
        'tgl_bd',
    ]; 
}
