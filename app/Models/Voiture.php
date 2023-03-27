<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;
    protected $fillable = ['matricule','couleur','puissance','coutparjour','image','modele_id','carburant_id'] ;

    protected $table = 'voitures';


    public function modele(){
        return $this->belongsTo(Model::class,'modele_id');
    }
    public function carburant(){
        return $this->belongsTo(Carburant::class,'carburant_id');
    }
    public function reservation(){
        return $this->hasMany(Reservation::class,'voiture_id');
    }
}
