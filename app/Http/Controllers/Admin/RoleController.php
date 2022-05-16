<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

use Spatie\Permission\Models\Permission;
class RoleController extends Controller
{
    public function index(){
        $roles=Role::all();
        return view('admin.roles.index',['roles'=>$roles]);
    }
    public function create(){        
        $permissions = Permission::all();
        return view('admin.roles.create',['permissions'=>$permissions]);
    }
    public function store(Request $req){
        $req->validate([
            'name'=>'required'
        ]);
        $role = Role::create($req->all());
        $role->permissions()->sync($req->permissions);          
        return redirect()->route('admin.roles.index')->with('info','The role was created successfully');
    }

    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('admin.roles.edit',['role'=>$role,'permissions'=>$permissions]);
    }
    public function destroy(Role $role){
        $role->delete();
        return redirect()->route('admin.roles.index')->with('info','The role was updated successfully');
    }
}