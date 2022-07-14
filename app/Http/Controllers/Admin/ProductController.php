<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Input;
use App\Models\Stock;

class ProductController extends Controller
{
    public function index(){        
        return view('admin.products.index');
    }
    public function create(Request $request){   
        $selected = Input::where('id',$request->id)->get();        
        $inputs = Input::pluck('factura','id');
        return view('admin.products.create',['inputs'=>$inputs,'selected'=>$selected]);
    }
    public function store(Request $request){
        $request->validate([
            'nombre'=>'required',
            'cantidad'=>'required',
            'marca'=>'required',
            'tipo'=>'required',
            'precio'=>'required',
            'estado'=>'required',
            'input_id'=>'required',
        ]);
        $product=Product::create($request->all());
        $stock = new Stock();
        $stock->stock = $request->cantidad;
        $stock->product_id=$product->id;
        $stock->save();
        return redirect()->route("admin.inputs.show",$product->input_id)->with('info','The Product was saved successfully');
    }
    public function edit(Product $product){
        $inputs = Input::pluck('factura','id');
        return view('admin.products.edit',['product'=>$product,'inputs'=>$inputs]);
    }
    public function update(Request $request,Product $product){
        $request->validate([
            'nombre'=>'required',
            'cantidad'=>'required',
            'marca'=>'required',
            'tipo'=>'required',
            'precio'=>'required',
            'input_id'=>'required',
        ]);
        $product->update($request->all());
        return redirect()->route("admin.inputs.show",$product->input_id)->with('info','The Product was updated successfully');
    }
    public function destroy(Product $product){
        $product->delete();
        return redirect()->route("admin.inputs.show",$product->input_id)->with('info','The Product was deleted successfully');
    }
}