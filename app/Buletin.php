<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buletin extends Model
{
    protected $table = 'buletin';
    protected $primaryKey = 'id_buletin';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
        'file_buletin',
        'judul_buletin',
        'cover_buletin',
    ];
}
