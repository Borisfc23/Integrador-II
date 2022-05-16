<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Input;
use App\Models\Provider;
use App\Models\Product;
class InputController extends Controller
{
    public function index(){
        $inputs=Input::all();
        return view('admin.inputs.index',['inputs'=>$inputs]);
    }
    public function show(Input $input){
        $providers=Provider::pluck('nombre','id');
        $products=Product::where('input_id',$input->id)->get();
        return view('admin.inputs.show',['products'=>$products,'providers'=>$providers,'input'=>$input]);
    }
    public function create(){
        $providers=Provider::pluck('nombre','id');
        return view('admin.inputs.create',['providers'=>$providers]);
    }
    public function store(Request $request){
        $request->validate([
            'fecha'=>'required',
            'factura'=>'required|unique:inputs',
            'provider_id'=>'required',
        ]);
        Input::create($request->all());
        return redirect()->route('admin.inputs.index')->with('info','The Input was saved successfully');
    }
    public function edit(Input $input){
        $providers=Provider::pluck('nombre','id');
        return view('admin.inputs.edit',['input'=>$input,'providers'=>$providers]);
    }
    public function update(Request $request,Input $input){
        $request->validate([
            'fecha'=>'required',
            'factura'=>"required|unique:inputs,factura,$input->id",
            'provider_id'=>'required',
        ]);
        $input->update($request->all());
        return redirect()->route('admin.inputs.index')->with('info','The Input was updated successfully');
    }
    public function destroy(Input $input){
        $input->delete();
        return redirect()->route('admin.inputs.index')->with('info','The Input was deleted successfully');
    }
}