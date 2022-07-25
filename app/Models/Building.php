<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;
    /** 
     * making all of the attributes mass assignable
     * Note - not a good idea to make all the attributes mass assignable since a mass assignment vulnereblity occurs.
     * */
   protected $guarded =[];
}
