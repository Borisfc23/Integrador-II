<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
class SearchInfo extends Controller
{
    public function indexProduct(Request $request){
        $term=$request->get('term');
        $querys=Product::where('nombre','LIKE','%'.$term.'%')->get();
        $data=[];
        foreach ($querys as $query) {
            $data[]=[
                'label'=>$query->nombre
            ];
        }
        return $data;
    }
    public function indexUser(Request $request){
        $term=$request->get('term');
        $querys=User::where('dni','LIKE',$term.'%')->get();
        $data=[];
        foreach ($querys as $query) {
            $data[]=[
                'label'=>$query->dni
            ];
        }
        return $data;
    }
}