<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\Upload;
use App\Models\beneficiary;
use App\Models\CustomTier;
use App\Models\User;
use App\Http\Requests\BeneficiaryRequest;

class BeneficiaryController extends Controller
{
    //
        //
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function dependents(Request $request){
       
        $contribution =[200, 300, 1000];

       
        return view('beneficiaries.request',array('contribution'=>$contribution));
       
      
    }
    public function search(Request $request)
{
    $user_id=$request->input('user_id');
       $beneficiary= beneficiary::all();
       $beneficiary=beneficiary::where('user_id',$user_id )->get();
    
    $contribution= $request->input('contribution');
    $contributions = CustomTier::all();
    // $results = CustomTier::where('contribution', 'like', "%$contribution%")->get();
    

    return view('beneficiaries.create', ['beneficiary'=>$beneficiary,'contribution' => $contribution,'contributions' =>$contributions,
'user_id'=>$user_id]);
}
   
   
    public function index(Request $request)
    {
       $user_id=$request->input('user_id');
       $beneficiary= beneficiary::all();
       $beneficiary=beneficiary::where('user_id',$user_id )->get();
        return view('beneficiaries.index', ['beneficiary'=>$beneficiary, 'user_id'=>$user_id]);
        //return view('spouses.index',['spouses'=>$spouses]);
    }
    public function index2(Request $request)
    {
       //$user_id=$request->input('user_id');
       $beneficiaries= beneficiary::all();
       //$beneficiary=beneficiary::where('user_id',$user_id )->get();
       // return view('beneficiaries.index', ['beneficiary'=>$beneficiary, 'user_id'=>$user_id]);
        return view('beneficiaries.listall',['beneficiaries'=>$beneficiaries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create(Request $request)
    {
        $user_id=$request->input('user_id');
        $beneficiary= beneficiary::all();
        $beneficiary=beneficiary::where('user_id',$user_id )->get();
        $contribution= $request->input('contribution');
       
        $contributions = CustomTier::all();
        $users = User::all();
        return view('beneficiaries.create',['beneficiary'=>$beneficiary, 'user_id'=>$user_id,
        'contribution' => $contribution,'contributions' =>$contributions, 'users'=>$users ]);
    }
    public function autocomplete(Request $request)
    {        
        $data = User::select("name")
                ->where("name","LIKE","%{$request->str}%")
                ->get('query');   
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BookRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(BeneficiaryRequest $request)
    {
        $user_id = $request->input('user_id');

        $beneficiary = new beneficiary;
		$beneficiary->name = $request->input('name');
        $beneficiary->birthday = $request->input('birthday');
        
        $beneficiary->gender = $request->input('gender');
        $beneficiary->education = $request->input('education');
        $beneficiary->schooling = $request->input('schooling');
        
		$beneficiary->user_id = $request->input('user_id');
        if($request->hasFile('image')){
            $file=$request->file('image');
            $exe =$file->getClientOriginalExtension();
            $fileName=time().'.'.$exe;
            $file->move('uploads/images/',$fileName);
            $beneficiary->image=$fileName;

        }
        $beneficiary->save();

       // return to_route('books.index');
        return redirect("/beneficiaries?user_id={$user_id}");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $beneficiary = beneficiary::findOrFail($id);
        return view('beneficiaries.show',['beneficiaries'=>$beneficiary]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $beneficiary = beneficiary::findOrFail($id);
        return view('spouses.edit',['beneficiaries'=>$beneficiary]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  BeneficiaryRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(BeneficiaryRequest $request, $id)
    {
        $user_id = $request->input('user_id');
        $beneficiary = beneficiary::findOrFail($id);
		$beneficiary->name = $request->input('name');
        $beneficiary->birthday = $request->input('birthday');
        
        $beneficiary->gender = $request->input('gender');
        $beneficiary->education = $request->input('education');
        $beneficiary->schooling = $request->input('schooling');
       
		$beneficiary->user_id = $request->input('user_id');

        $beneficiary->save();

        //return to_route('books.index');
        return redirect("/beneficiaries?user_id={$user_id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $beneficiary = beneficiary::findOrFail($id);
        $user_id=$beneficiary->user_id;
        $spouse->delete();
        return redirect()->route('benefiaciries.index',['user_id' =>$user_id]);

       // return to_route('books.index');
    }

}
