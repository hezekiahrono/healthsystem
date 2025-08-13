

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Register Users</title>
    <link rel="stylesheet" href="{{asset('assets/css/registeruser.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo_style.css')}}">
    
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body> 
    
                 
    
@extends('layouts.main')
@section('content')
  <div class="container">
  
        @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
        @endif
    
    <div class="title">Registration details</div>
    <div class="content">
      <form method="POST" action="{{ url('auth/register') }}" enctype="multipart/form-data">
      @csrf
        <div class="user-details" style="height:370px;">
        <div class="input-box">
        <span class="details">Add User Details</span>
        <br> 
           <button id="btn" onclick="openForm()">Click to Add</button>
          </div> 
            <div id = "form">
            <div class="user-details">
            <div class="input-box">
        <span class="details">Are you married?(optional)</span>
        <br> 
           <a href="{{ url('auth/spouse/create') }}"id="btn" >Click to Add spouse details</a>
          </div> 
            <div class="input-box">
            <span class="details">Your Full Name</span>
            <input type="text" placeholder="Full Names"name="name" required>
          </div>
          
          <div class="input-box">
            <span class="details">D.O.B</span>
            <input type="date" placeholder="Enter Birth Date" name="birthday" required>
          </div> 
          <div class="input-box">
            <span class="details">ID</span>
            <input type="text" placeholder="Enter ID number" name="id_number" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email"name="email"  required>
          </div>
		   <div class="input-box">
            <span class="details">Gender</span>
            <select name="gender" >
  <option value="">--Please choose an option--</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>
          </div>
          </div> 
          <div class="input-box">
            <span class="details">Select your spouse name</span>
            <select name="spouses_id">
            <option value="">--Please choose an option--</option>
              @foreach($spouses as $item)
              <option value="{{$item->id}}">{{$item->name}}</option>
              @endforeach
  </select>
          </div>
          <div class="input-box">
      <button id="btn" onclick="closeForm()">Close Form</button>
          </div> 

        </div>
		
		  <div class="input-box">
        <span class="details">Add Address Details</span>
        <br> 
           <button id="btn" onclick="openForm1()">Click to Add</button>
          </div>  
		  <div id = "form1">
		    <div class="user-details">
        
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" placeholder="Enter Address" name="address" required>
          </div> 
          <div class="input-box">
            <span class="details">Residence</span>
            <input type="text" placeholder="Enter Residence" name="residence" required>
          </div>
          <div class="input-box">
            <span class="details">Estate</span>
            <input type="text" placeholder="Enter Your Estate" name="estate" required>
          </div>
          <div class="input-box">
            <span class="details">Town</span>
            <input type="text" placeholder="Enter your town" name="town" required>
          </div>
          <div class="input-box">
            <span class="details">County</span>
            <input type="text" placeholder="Enter your county" name="county" required>
          </div>
		   </div>
		      <div class="input-box">
      <button id="btn" onclick="closeForm1()">Close Form</button>
          </div> 
		     </div>
          <div class="input-box">
            <span class="details">Default Registration fee</span>
            <input type="number" placeholder="KSH 200" name="registration_fee" required>
          </div>
          <div class="input-box">
            <span class="details">contribution</span>
            <input type="number" placeholder="contribution fee " name="contribution" required>
          </div>
          <div class="input-box">
            <span class="details">Occupation</span>
            <input type="text" placeholder="Enter your occupation "name="occupation" required>
          </div>
         
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="phone"required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm your password" required>
          </div>
          <div class="input-box">
            <span class="details">Upload Image</span>
            <input  type="file" class="form-control" name="image"  required>
          </div>
          
        </div>
       
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
     
    </div>
    
  </div>

</body>
<script src="{{asset('assets/js/register.js')}}"></script>


</html>
<!-- <div id="templatemo_footer"style=width:1261px; >
</div>templatemo_footer_wrapper -->

<div id="templatemo_footer_wrapper"style=width:1261px; >
</div>

@endsection




