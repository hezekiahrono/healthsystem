<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Register Users</title>
    <link rel="stylesheet" href="{{asset('assets/css/registeruser.css')}}">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body> 
   

    @extends('layouts.main')
@section('content')
<div id="templatemo_wrapper">
<div class="container">




<div class="card-header">
 
<div class="title">Spouse details</div>
</div>

<div class="card-body">
 <form action="{{url('auth/spouse')}}" method="POST">
      @csrf
        <div class="user-details">
        <div class="input-box">
        <span class="details">Add User Details</span>
        <br> 
           <button id="btn" onclick="openForm()">Click to Add</button>
          </div> 
            <div id = "form">
            <div class="user-details">
            <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Full Names"name="name" required>
          </div>
          
          <div class="input-box">
            <span class="details">D.O.B</span>
            <input type="date" placeholder="Enter Birth Date" name="birthday" required>
          </div> 
          <div class="input-box">
            <span class="details">ID</span>
            <input type="text" placeholder="Enter ID number" name="idNumber" required>
          </div>
         
          <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
                </div>
        </div>
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
            <span class="details">Occupation</span>
            <input type="text" placeholder="Enter your occupation "name="occupation" required>
          </div>
         
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="phone"required>
          </div>
          <div class="input-box">
            <span class="details">User id</span>
            <input type="number" placeholder="Enter your number" name="user_id"required>
          </div>
        
         
        </div>
       
        <div class="button">
          <input type="submit" value="Register">
        </div>
        <div class="button">
        <a href="{{  route('register')  }}"id="btn" >Return Back</a>
        </div>
      </form>

</div>

</div>
</div>









</body>
<script src="{{asset('assets/js/register.js')}}"></script>
</html>
<div id="templatemo_footer_wrapper"style=width:1261px; >
</div>
@endsection