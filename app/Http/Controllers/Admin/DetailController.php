<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Detail;
use App\Models\Stock;
class DetailController extends Controller
{
    public function create(Request $request){        
        return view('admin.details.create',["output_id"=>$request->output_id]);
    }  
    public function store(Request $request){            
        $request->validate([
            'producto'=>'required',
            'cantidad'=>'required'
        ]);
        $productoBuscar=Product::where('nombre',$request->producto)->first();
        $productoStock=Stock::where('product_id',$productoBuscar->id)->get();                
        // dd((int)$request->cantidad>$productoStock[0]->stock);
        if((int)$request->cantidad>$productoStock[0]->stock){
            return redirect()->route('admin.details.create',["output_id"=>$request->output_id])->with('info','The stock is insufficient.');
        }else{                        
            $diferencia=$productoStock[0]->stock-$request->cantidad;
            $productoStock[0]->stock=$diferencia;            
            $productoStock[0]->save();
            $detailProducts=Detail::create($request->all());
            return redirect()->route('admin.details.create',["output_id"=>$request->output_id])->with('info-success','The product was added successfully.');
        }
    }
    
}