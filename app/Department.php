<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
  public $timestampes = false;
  public $guarded = [];
    public function professors()
      {
        return $this->hasMany(Professor::class);
      }
}

