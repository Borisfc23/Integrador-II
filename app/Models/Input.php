<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Provider;
use App\Models\Product;
class Input extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];

    //Relacion de 1 a muchos inverso
    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }
    //Relacion de 1 a muchos 
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}