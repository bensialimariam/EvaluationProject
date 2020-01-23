<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    public $timestampes = false;
    public $guarded = [];

    public function ScopeProfessor($sql = null ,$id)
    {
            return Professor::find($id);
    }
    public function Subjects()
    {
        return $this->hasMany('App\Subject');
    }
    public function Departement()
    {
        return $this->belongsTo('App\Departement');
    }
    public function ResponsableDepartement()
    {
        return $this->hasOne('App\Departement');
    }
    public function Diploma()
    {
        return $this->hasOne('App\Diploma');
    }
    public function Option()
    {
        return $this->hasOne('App\Option');
    }
    public function Quiz()
    {
        return $this->hasMany('App\Quiz');
    }
    public function Module()
    {
        return $this->hasOne('App\Module');
    }

}
