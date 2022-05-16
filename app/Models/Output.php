<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Details;
use App\Models\User;
class Output extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];

      //Relacion de 1 a muchos 
      public function details(){
        return $this->hasMany(Detail::class);
    }
    
    //relacion 1 a 1
    public function user()
    {
        return $this->hasOne(User::class);
    }
}