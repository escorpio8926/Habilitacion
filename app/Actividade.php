<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividade extends Model
{
    //
//relación pertenece a Proyecto
public function proyecto()
{
		return $this->belongsTo(Proyecto::class);
}
}
