<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Centre extends Model
{
    public function sesions()
{
    return $this->belongsToMany(Sessio::class);
}
}
