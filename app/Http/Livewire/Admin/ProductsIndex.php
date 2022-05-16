<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
class ProductsIndex extends Component
{
     //Paginacion con bootstrap
     use WithPagination;
     protected $paginationTheme='bootstrap';
     public $search;
    public function render()
    {
        $products=Product::where('nombre','LIKE','%'.$this->search.'%')
                            // ->orWhere('email','LIKE','%'.$this->search.'%')
                            ->paginate(8);
        return view('livewire.admin.products-index',['products'=>$products]);
    }
}