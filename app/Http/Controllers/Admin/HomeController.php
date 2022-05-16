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
        return view("admin.index",['products'=>count($products),'providers'=>count($providers),'users'=>count($users),'outputs'=>count($outputs)]);
    }
}