<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Provider;
use App\Models\User;
use App\Models\Output;
class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $providers = Provider::all();
        $users = User::all();
        $outputs = Output::all();  
        $salidas=[];           
        for ($i=2010; $i <2023 ; $i++) { 
            $salidas[]=count(Output::whereYear('fecha',
            strval($i))->get());
        }
        // for ($i=1; $i <12 ; $i++) { 
        //     $salidas[]=count(Output::whereMonth('fecha',
        //     0+strval($i))->get());
        // }        
        $productos=Product::all();
        $cantidades=[];
        foreach ($productos as $producto) {
            $cantidades[]=['name'=>$producto->nombre,'y'=>$producto->stocks[0]->stock];
        }        
        return view("admin.index",[
            'products'=>count($products),
            'providers'=>count($providers),
            'users'=>count($users),
            'outputs'=>count($outputs),
            'data'=>json_encode($cantidades),
            'data2'=>json_encode($salidas)
        ]);
    }
}