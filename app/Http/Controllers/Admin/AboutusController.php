<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\abouts;


class AboutusController extends Controller
{
    //
    public function index(){

        $aboutus = abouts::all();
        return view('admin.aboutus')->with('aboutus', $aboutus);
    }
    public function store(Request $request){

        $aboutus = new abouts;

        $aboutus->title = $request->input('title');
        $aboutus->subtitle = $request->input('subtitle');
        $aboutus->description = $request->input('description');

        $aboutus->save();
        return redirect('/aboutus')->with('status','saved successfully');

    }
    public function edit($id){

        $aboutus = abouts::findOrFail($id);
      return view('admin.aboutus.edit')->with('aboutus',$aboutus);

    }
    public function update(Request $request, $id){

        $aboutus = abouts::findOrFail($id);

        $aboutus->title = $request->input('title');
        $aboutus->subtitle = $request->input('subtitle');
        $aboutus->description = $request->input('description');
        $aboutus->update();

        return redirect('/aboutus')->with('status','updated successfully');

    }

    public function delete($id){

        $aboutus = abouts::findOrFail($id);
        $aboutus->delete();
        return redirect('/aboutus')->with('status','deleted successfully');


    }
}
