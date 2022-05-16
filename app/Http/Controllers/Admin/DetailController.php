<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function create(){
        return view('admin.details.create');
    }
    public function store(){
        return view();
    }
    
}