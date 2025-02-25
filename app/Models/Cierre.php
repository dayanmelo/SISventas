<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cierre extends Model
{
    use HasFactory;

    public function detallescierre()
    {
        return $this->hasMany(DetalleCierre::class);
    }
}
