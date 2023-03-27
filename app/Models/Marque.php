<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    use HasFactory;
    protected $fillable = ['maraque'];

    protected $table = 'marques';

    public function modele(){
        return $this->hasMany(Model::class,'marque_id');
    }
}
