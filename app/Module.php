<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
  public $timestampes = false;
  public $guarded = [];

    public function subjects()
      {
        return $this->hasMany(Subject::class);
      }
}
