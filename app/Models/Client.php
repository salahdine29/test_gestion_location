<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['cin','nom','prenom','sexe','email','permis'];

    protected $table = 'clients';

    public function reservation(){
        return $this->hasMany(Reservation::class,'client_id');
    }
}
