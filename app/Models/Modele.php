<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
    use HasFactory;
    protected $fillable = ['modele','marque_id'];

    protected $table = 'modeles';

    public function voiture(){
        return $this->hasMany(Voiture::class,'modele_id');
    }

    public function marque(){
        return $this->belongsTo(Marque::class,'marque_id');
    }

}
