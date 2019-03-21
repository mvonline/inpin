<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable;

use Illuminate\Auth\Authenticatable as AuthenticableTrait;


class Listing extends Model implements Authenticatable

{

   //

   use AuthenticableTrait;

   protected $fillable = ['name','latitude','longitude','agency_id'];
   public $table = "listing";

   
   public function listing()

   {

       return $this->hasMany('App\Listing','id');

   }

}