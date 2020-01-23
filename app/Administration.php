<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administration extends Model
{
    public $timestampes = false;
    public $guarded = [];
    
    public function Quiz()
    {
        return $this->hasMany('app\Quiz');
    }
}
