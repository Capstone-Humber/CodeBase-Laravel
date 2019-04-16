<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoGalary extends Model
{
    protected $table = 'photo_galaries';
    protected $fillable = [ 'album_id', 'image_title','image_description', 'image'];
}
