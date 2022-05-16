<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Provider extends Model
{
    use HasFactory;
    protected $fillable=['nombre','encargado','ubicacion','telefono'];

    //Relacion de 1 a muchos
    public function inputs(){
        return $this->hasMany(Input::class);
    }    
}