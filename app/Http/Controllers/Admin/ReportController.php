<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provider;
use App\Models\User;
use App\Models\Product;
use App\Models\Input;
use App\Models\Output;
use App\Models\Detail;
use Spatie\Permission\Models\Role;//listado de roles
use PDF;
class ReportController extends Controller
{
    public function indexProvider(){
        $providers=Provider::all();
        return view("admin.reports.providers",['providers'=>$providers]);
    }

    //export to pdf file
    public function providerPDF(){ 
        $providers=Provider::all();
        $pdf=PDF::loadView('admin.reports.providers',compact('providers'));
        return $pdf->download('providers.pdf');
    }

    public function indexUser(){
        $users=User::all();
        $roles=Role::all();
        return view("admin.reports.users",['users'=>$users,'roles'=>$roles]);
    }

    //export to pdf file
    public function userPDF(){ 
        $users=User::all();
        $roles=Role::all();
        $pdf=PDF::loadView('admin.reports.users',['users'=>$users,'roles'=>$roles]);
        return $pdf->download('users.pdf');
    }

    public function indexAlmacen(){
        $products=Product::all();
        return view("admin.reports.almacen",['products'=>$products]);
    }

    //export to pdf file
    public function almacenPDF(){ 
        $products=Product::all();
        $pdf=PDF::loadView('admin.reports.almacen',['products'=>$products]);
        return $pdf->download('almacen.pdf');
    }
    
    public function indexInput(Input $input){
        $providers=Provider::pluck('nombre','id');
        $products=Product::where('input_id',$input->id)->get();
        return view("admin.reports.inputs",['products'=>$products,'providers'=>$providers,'input'=>$input]);
    }

    //export to pdf file
    public function inputPDF(Input $input){ 
        $providers=Provider::pluck('nombre','id');
        $products=Product::where('input_id',$input->id)->get();
        $pdf=PDF::loadView('admin.reports.inputs',['products'=>$products,'providers'=>$providers,'input'=>$input]);
        return $pdf->download('input.pdf');
    }

    public function indexOutput(Output $output){
        $user=User::where('id',$output->user_id)->first();      
        $products=Detail::where('output_id',$output->id)->get();   
        return view("admin.reports.outputs",['output'=>$output,'user'=>$user,'products'=>$products]);
    }

    //export to pdf file
    public function outputPDF(Output $output){ 
        $user=User::where('id',$output->user_id)->first();      
        $products=Detail::where('output_id',$output->id)->get();   
        $pdf=PDF::loadView('admin.reports.outputs',['output'=>$output,'user'=>$user,'products'=>$products]);
        return $pdf->download('output.pdf');
    }
}