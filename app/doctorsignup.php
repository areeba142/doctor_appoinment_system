<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctorsignup extends Model
{
    //
      public $timestamps=false;
    protected $fillable = ['First_name' , 'Last_name' , 'Email' , 'Password' , 'City' , 'Degree_from' , 'Specialization_in' , 'CV'];
}
