<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrenador extends Model
{
    public function sesions()
    {
        return $this->hasMany(Sessio::class);
    }
}
