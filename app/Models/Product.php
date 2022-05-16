<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stock;
use App\Models\Input;

class Product extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];
     //relacion de 1 a muchos
    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }  
      //relacion de 1 a muchos inversa
      public function input()
      {
          return $this->belongsTo(Input::class);
      }
}