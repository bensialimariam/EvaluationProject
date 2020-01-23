<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
  public $timestampes = false;
  public $guarded = [];
    public function levels()
    {
      return $this->hasMany(Level::class);
    }
}
