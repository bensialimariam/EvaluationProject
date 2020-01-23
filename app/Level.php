<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
  public $timestampes = false;
  public $guarded = [];

    public function students()
    {
      return $this->hasMany(Student::class);
    }
    public function modules()
    {
      return $this->hasMany(Module::class);
    }
}
