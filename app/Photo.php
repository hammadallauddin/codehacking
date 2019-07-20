<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
      'file'
    ];

    protected $uploads = '/images/';

//accessor here//
    public function getFileAttribute($photo){
      return $this->uploads . $photo;
    }

}
