<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Spatie\Permission\Models\Role;//listado de roles
use Livewire\WithPagination;
class UsersIndex extends Component
{
    //Paginacion con bootstrap
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public $search;
    public function render()
    {
        $users = User::where('name','LIKE','%'.$this->search.'%')
                        ->orWhere('email','LIKE','%'.$this->search.'%')
                        ->paginate(8);
                        $roles=Role::all();
        return view('livewire.admin.users-index',['users'=>$users,'roles'=>$roles]);
    }
}