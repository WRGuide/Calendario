<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{

    protected $table = 'asignatura';

    public function usuarios() {
      return $this->belongsTo('App\Usuario);
    }
}
