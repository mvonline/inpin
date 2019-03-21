<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable;

use Illuminate\Auth\Authenticatable as AuthenticableTrait;


class Agency extends Model implements Authenticatable

{
   //
   use AuthenticableTrait;

   protected $fillable = ['parent_agency_id',	'name'];
   public $table = "agency";

   
   public function agency()

   {

       return $this->hasMany('App\Agency','id');

   }

}