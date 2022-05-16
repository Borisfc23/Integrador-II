<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provider;
class ProviderController extends Controller
{
    public function index(){
        $providers=Provider::all();
        return view("admin.providers.index",['providers'=>$providers]);
    }
    public function create(){
        return view('admin.providers.create');
    }
    public function store(Request $request){
        $request->validate([
            'nombre'=>'required',
            'encargado'=>'required',
            'ubicacion'=>'required',
            'telefono'=>'required|unique:providers',
        ]);
        $provider=Provider::create($request->all());
        return redirect()->route('admin.providers.index')->with('info','The provider was saved successfully');
    }

    public function edit(Provider $provider){
        return view('admin.providers.edit',['provider'=>$provider]);
    }
    public function update(Request $request,Provider $provider){
        $request->validate([
            'nombre'=>'required',
            'encargado'=>'required',
            'ubicacion'=>'required',
            'telefono'=>"required|unique:providers,telefono,$provider->id",
        ]);
        $provider->update($request->all());
        return redirect()->route('admin.providers.index')->with('info','The provider was updated successfully');
    }
    public function destroy(Provider $provider){
        $provider->delete();
        return redirect()->route('admin.providers.index')->with('info','The provider was deleted successfully');
    }
}