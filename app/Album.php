<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = array('name','decription','cover_image');
    //creating the relationship
    public function photos(){
return $this->hasMany('App\Photo');


    }
}
