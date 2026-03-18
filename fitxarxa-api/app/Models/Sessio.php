<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sessio extends Model
{
    public function entrenador()
{
    return $this->belongsTo(Entrenador::class);
}

public function centres()
{
    return $this->belongsToMany(Centre::class);
}
}
