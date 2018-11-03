<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
   public function posts()
   {
   	return $this->belongsToMany('App\Model\user\post','post_tags')->orderBy('created_at','DESC')->paginate(2);
   }

   public function getRouteKeyName()
   {
   	   return 'slug';
   }
   
}
