<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Apuesta extends Model
{
    protected $table = "apuestas";
    use HasFactory;

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function retos()
    {
        return $this->belongsToMany(Reto::class);
    }
}
