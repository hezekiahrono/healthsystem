<!DOCTYPE html>
<html>
<head>
    <title>M-Hai</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="{{asset('assets/css/templatemo_style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap4.min.css')}}">
    
</head>
<body>
@extends('layouts.main')
@section('content')
<div id="templatemo_wrapper">
 
	
<div class="container" style="margin-top:25px;">
    <div class="row">
        <div class="col-12 table-responsive">
        @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
        @endif
            <table class="table table-bordered users_datatable">
                <thead>
                    <tr>
                    <th>Name</th>
                        <th>Birthday</th>
                        <th>Id Number</th>
                        <th>Address</th>
                        <th>Residence</th>
                        <th>Estate</th>
                        <th>Town</th>
                        <th>County</th>
                        <th>Occupation</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th width="100px">Action</th>
                        
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
</div>


<script type="text/javascript">
  $(function () {
    var table = $('.users_datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('auth.index') }}",
        columns: [
           
            {data: 'name', name: 'name'},
            {data: 'birthday', name: 'birthday'},
            {data: 'idNumber', name: 'idNumber'},
            {data: 'address', name: 'address'},
            {data: 'residence', name: 'residence'},
            {data: 'estate', name: 'estate'},
            {data: 'town', name: 'town'},
            {data: 'county', name: 'county'},
            {data: 'occupation', name: 'occupation'},
            {data: 'gender', name: 'gender'},
            {data: 'phone', name: 'phone'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
           
        ]
    });
  });
</script>
@endsection




