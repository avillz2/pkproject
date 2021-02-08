<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  //  use HasFactory;


     /* to link user id to post*/
  public function user(){
      return $this->belongsTo('App\Models\User');
  }
}
