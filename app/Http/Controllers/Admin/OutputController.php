<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Output;
use App\Models\Detail;
use App\Models\User;
class OutputController extends Controller
{
    public function index(){
        $outputs=Output::all();                
        return view('admin.outputs.index',['outputs'=>$outputs]);
    }
    public function show(Output $output){      
        $user=User::where('id',$output->user_id)->first();      
        $products=Detail::where('output_id',$output->id)->get();        
        return view('admin.outputs.show',['output'=>$output,'user'=>$user,'products'=>$products]);
    }
    public function create(){                
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $codigo = strtoupper(substr(str_shuffle($permitted_chars), 0, 15));
        return view('admin.outputs.create',['codigo'=>$codigo]);
    }

    public function store(Request $request){
        $user=User::where('dni',$request->dni)->first();        
        $request->validate([
            'fecha'=>'required',
            'ubicacion'=>'required',
            'codigo'=>'required',
            'dni'=>'required',
        ]);
        $output=new Output();
        $output->fecha=$request->fecha;
        $output->codigo=$request->codigo;
        $output->ubicacion=$request->ubicacion;
        $output->user_id=$user->id;
        $output->save();
        return redirect()->route('admin.outputs.index')->with('info','Output created!!');
    }
    public function edit(Output $output){                
        return view('admin.outputs.edit',['output'=>$output]);
    }
    public function destroy(Output $output){
        $output->delete();
        return redirect()->route('admin.outputs.index')->with('info','The Input was deleted successfully');
    }
}