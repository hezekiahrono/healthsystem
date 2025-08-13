<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\spouse;
use App\Http\Controllers\Controller;


use App\Http\Requests\SpouseRequest;


use DataTables;

class SpouseController extends Controller
{
    //
    public function index(Request $request){

        if ($request->ajax()) {
            $data = spouse::select('name','birthday','idNumber',
            'address','residence','estate','town','county', 'occupation',
            'gender','phone')->get();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="javascript:void(0)" class="btn btn-primary btn-sm">Update</a>';
                  
                    return $btn;
                    
                    
                     })
              
                ->rawColumns(['action'])
                ->make(true);
              



                
        }



        $spouses=spouse::all();
        return view('auth.spouse.index',compact('spouses'));
    }
    public function create(){
        return view('auth.spouse.create');
    }
    // public function store(Request $request){
    //     spouse::create([
    //         'name'=>$request->name,
    //        'birthday'=>$request->birthday,
    //        'idNumber'=>$request->idNumber,
    //        'address'=>$request->address,
    //        'residence'=>$request->residence,
    //        'estate'=>$request->estate,
    //        'town'=>$request->town,
    //        'county'=>$request->county,
    //        'occupation'=>$request->occupation,
    //        'gender'=>$request->gender,
    //         'phone'=>$request->phone

    //     ]);

    public function store(SpouseRequest $request)
    {
       

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

       
        
    
            return redirect( route('register'))->with('message','Added Successfuly');
    }
}
