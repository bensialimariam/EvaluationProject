<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestampes = false;
    public $guarded = [];
 
    public function Level()
    {
        return $this->belongsTo('App\Level');
    }
    public function Quiz()
    {
        return $this->belongsTo('App\Quiz');
    }
}
