<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    ////relacion pertenece a un User
public function user()
{
		return $this->belongsTo(User::class);
}
//relacion tiene muchas Tarea
public function actividades()
{
		return $this->hasMany(Actividade::class);
}
}
