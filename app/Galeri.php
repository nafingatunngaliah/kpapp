<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeri';
    protected $primaryKey = 'id_galeri';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = [
        'id_album',
        'image_galeri',
        'nama',
    ]; 

    public function album()
    {
        return $this->belongsTo('App\Album', 'id_album');
    }

}
