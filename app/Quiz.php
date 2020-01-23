<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
  public $timestampes = false;
  public $guarded = [];
    public function questions()
      {
        return $this->hasMany(Question::class);
      }
}
