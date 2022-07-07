<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provider;
use App\Models\User;
use App\Models\Product;
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
}