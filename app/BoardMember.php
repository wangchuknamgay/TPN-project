<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoardMember extends Model
{
   protected $table='boards'; 
   protected $fillable=['id','name','designation','year','descriptions','files','created_at'];
}
