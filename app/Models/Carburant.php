<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carburant extends Model
{
    use HasFactory;

    protected $fillable = ['type'];

    protected $table = 'carburant';

    public function carburant(){
        return $this->hasMany(Voiture::class,'carburant_id');
    }


}
