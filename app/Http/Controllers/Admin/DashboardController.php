<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function registered(){
        $users = User::all();
        return view('admin.register')->with('users',$users);
    }
    public function registerededit(Request $request, $id){

        $users = User::findOrFail($id);
        return view('admin.register-edit')->with('users', $users);

    }
    public function registerupdate(Request $request, $id){

        $users = User::find($id);
        $users->name = $request->input('name');
        $users->usertype = $request->input('usertype');
        $users->update();

        return redirect('/role-register')->with('status', 'updated successfully');

    }

    public function registerdelete(Request $request, $id){

        $users = User::findOrFail($id);
        $users->delete();
        return redirect('/role-register')->with('status', 'deleted successfully');
    }

    public function index(){

        return view('admin.aboutus');
    }
}
