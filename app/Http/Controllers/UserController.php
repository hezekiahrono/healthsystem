<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Http\Controllers\Controller;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $users= User::all();
        return view('users.index', ['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  UserRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request)
    {
        $author = new Author;
		$author->name = $request->input('name');
        $author->save();

        return to_route('authors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit',['user'=> $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UserRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserRequest $request, $id)
    {
        $user  = User::findOrFail($id);
		$user ->name = $request->input('name');
        $user -> birthday= $request->input('birthday');
        $user ->id_number = $request->input('id_number');
        $user ->email = $request->input('email');
       
        $user ->address = $request->input('address');
        $user ->residence = $request->input('residence');
        $user ->estate = $request->input('estate');
        $user ->county = $request->input('county');
        $user ->occupation = $request->input('occupation');
        $user ->gender = $request->input('gender');
        $user ->marital_status = $request->input('marital_status');
        $user ->registration_fee = $request->input('registration_fee');
        $user ->contribution = $request->input('contribution');
        $user ->phone = $request->input('phone');

        
        
        
        $user ->save();

        return to_route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return to_route('users.index');
    }

    public function search()
    {
        return view('beneficiaries.test');
    }
  
    public function autocomplete(Request $request)
    {        
        $data = User::select("name")
                ->where("name","LIKE","%{$request->str}%")
                ->get('query');   
        return response()->json($data);
    }

}
