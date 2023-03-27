<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['date_debut','date_fin','client_id','voiture_id'];

    protected $table = 'reservations';

    public function client(){
        return $this->belongsTo(Client::class,'client_id');
    }
    public function voiture(){
        return $this->belongsTo(Voiture::class,'voiture_id');
    }
}
