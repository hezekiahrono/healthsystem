<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\spouse;
use App\Http\Requests\SpouseRequest;


class SpouseOtherController extends Controller
{
    //
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
       $user_id=$request->input('user_id');
       $spouses= spouse::all();
       $spouses=spouse::where('user_id',$user_id )->get();
        return view('spouses.index', ['spouse'=>$spouses, 'user_id'=>$user_id]);
        //return view('spouses.index',['spouses'=>$spouses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('spouses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BookRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SpouseRequest $request)
    {
        $user_id = $request->input('user_id');

        $spouse = new spouse;
		$spouse->name = $request->input('name');
        $spouse->birthday = $request->input('birthday');
        
        $spouse->idNumber = $request->input('idNumber');
        $spouse->address = $request->input('address');
        $spouse->residence = $request->input('residence');
        $spouse->estate = $request->input('estate');
        $spouse->town = $request->input('town');
        $spouse->county = $request->input('county');
        
        $spouse->occupation = $request->input('occupation');
        $spouse->gender = $request->input('gender');
        $spouse->phone = $request->input('phone');
		$spouse->user_id = $request->input('user_id');
        $spouse->save();

       // return to_route('books.index');
        return redirect("/spouses?user_id={$user_id}");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $spouse = spouse::findOrFail($id);
        return view('spouses.show',['spouse'=>$spouse]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $spouse = spouse::findOrFail($id);
        return view('spouses.edit',['spouse'=>$spouse]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SpouseRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(SpouseRequest $request, $id)
    {
        $user_id = $request->input('user_id');
        $spouse = spouse::findOrFail($id);
		$spouse->name = $request->input('name');
        $spouse->birthday = $request->input('birthday');
        $spouse->idNumber = $request->input('idNumber');
        $spouse->address = $request->input('address');
        $spouse->residence = $request->input('residence');
        $spouse->estate = $request->input('estate');
        $spouse->town = $request->input('town');
        $spouse->county = $request->input('county');
        $spouse->occupation = $request->input('occupation');
        $spouse->gender = $request->input('gender');
        $spouse->phone = $request->input('phone');
       
		$spouse->user_id = $request->input('user_id');

        $spouse->save();

        //return to_route('books.index');
        return redirect("/spouses?user_id={$user_id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $spouse = spouse::findOrFail($id);
        $user_id=$spouse->user_id;
        $spouse->delete();
        return redirect()->route('spouses.index',['user_id' =>$user_id]);

       // return to_route('books.index');
    }

}
