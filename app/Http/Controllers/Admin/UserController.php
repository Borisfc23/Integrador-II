<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;//listado de roles
class UserController extends Controller
{
    public function index(){        
        return view('admin.users.index');
    }
    public function edit(User $user){
        $roles=Role::all();
        return view('admin.users.edit',['roles'=>$roles,'user'=>$user]);
    }
    public function update(Request $request,User $user){
        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.edit',$user)->with('info','The user role was updated successfully.');
    }
    public function destroy(User $user){
        $user->delete();
        return redirect()->route('admin.users.index')->with('info','The user was deleted successfully.');
    }

}