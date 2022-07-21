<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Output;
use App\Models\User;
use App\Models\Detail;

class OrderController extends Controller
{
    public function index(){
        $outputs=Output::where('user_id',auth()->user()->id)->get();    
        return view('admin.orders.index',['outputs'=>$outputs]);
    }
    public function show($output){
        // dd($output);
        $products=Detail::where('output_id',$output)->get();        
        // dd($products);
        return view('admin.orders.show',['products'=>$products]);
    }
}