<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\spouse;
use DataTables;
use App\Traits\Upload;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
   
    

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(Request $request)
    {
       
        $request->validate([

            'name' => 'required', 'string', 'max:255',
                'phone' => 'required', 'string', 'max:10', 'min:10',
                'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
               
                
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function display(){
    $spouses = spouse::all();
    return view('auth.register',compact('spouses'));
    }
    public function store(Request $request)
    {
        $user = new User;
        
        $user->name=$request->input('name');
        $user->phone=$request->input('phone');
        $user->email=$request->input('email');
        
        $user->password = \Hash::make($request->input('password'));
        
        $user->birthday=$request->input('birthday');
        $user->id_number=$request->input('id_number');
        $user->address=$request->input('address');
        $user->residence=$request->input('residence');
        $user->estate=$request->input('estate');
        $user->town=$request->input('town');
        $user->county=$request->input('county');
        $user->registration_fee=$request->input('registration_fee');
        $user->contribution=$request->input('contribution');
        $user->occupation=$request->input('occupation');
        $user->gender=$request->input('gender');
       
        
        if($request->hasFile('image')){
            $file=$request->file('image');
            $exe =$file->getClientOriginalExtension();
            $fileName=time().'.'.$exe;
            $file->move('uploads/images/',$fileName);
            $user->image=$fileName;

        }
        $user->save();
        
       

        
      

   
}

    public function index(Request $request){

        if ($request->ajax()) {
            $data = User::select('name','birthday','idNumber',
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



        $users=User::all();
        return view('auth.index',compact('users'));
    }
}
