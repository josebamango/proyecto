<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Reto extends Model
{
    protected $table="retos";
    use HasFactory;


    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    
    public function apuesta()
    {
        return $this->belongsToMany(Apuesta::class);
    }


}
