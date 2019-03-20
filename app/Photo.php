<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $fillable = array('album_id','decription','photo','title','size');


    //creating relationship
    public function album(){
        return $this->belongsTo(App\Album);
    }
   
}
