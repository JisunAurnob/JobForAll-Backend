@extends('layouts.app')
@section('content')
@if(Session::has('admin'))
<center><h3>Admin Profile</h3></center>
<h3>UserID: {{Session()->get('adminId')}}</h3><hr>
<h3>Name: {{$admin->Name}}</h3><hr>
<h3>Email: {{$admin->Email}}</h3><hr>
<h3>Username: {{Session()->get('admin')}}</h3><hr>
<h3>Phone: {{$admin->Phone}}</h3><hr>
<h3>Date Of Birth: {{$admin->Dob}}</h3><hr>
<h3>Gender: {{$admin->Gender}}</h3><hr>
<a class="btn btn-primary" href="{{route('editAdminInfo')}}"> Edit Profile </a> 
@endif
@endsection