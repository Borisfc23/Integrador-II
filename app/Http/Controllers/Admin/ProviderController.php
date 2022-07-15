<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provider;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProviderImport;
use PDF;
class ProviderController extends Controller
{
    public function index(){
        $providers=Provider::paginate(7);
        return view("admin.providers.index",['providers'=>$providers]);
    }
    public function create(){
        return view('admin.providers.create');
    }
    public function store(Request $request){
        if($request->file('import_file')==null){
            //Guardao por formulario
            $request->validate([
                'nombre'=>'required',
                'encargado'=>'required',
                'ubicacion'=>'required',
                'telefono'=>'required|unique:providers',
            ]);
            $provider=Provider::create($request->all());
            return redirect()->route('admin.providers.index')->with('info','The provider was saved successfully');
        }
        //Guardao por Importacion de excel
        $file=$request->file('import_file');
        Excel::import(new ProviderImport,$file);
        $providers=Provider::paginate(7);
        return view('admin.providers.index',['providers'=>$providers])->with('info','The provider was imported successfully');
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