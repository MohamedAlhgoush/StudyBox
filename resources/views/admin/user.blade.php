@extends('layouts.app')
@section('content')
<h1 class="display-6" style="color: #165896;">ALL USERS</h1>
<hr>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="card">
<h5 class="card-header">System Users</h5>
<div class="card-body">
<div class="table-responsive">

<table class="table table-striped table-bordered first">
<thead>
<tr>
<th>User Name</th>
<th>User Email</th>
<th>Role</th>
<th>Status</th>
<th></th>
</tr>
</thead>

<tbody>
@foreach($users as $user)
<tr class="table-row">
<td>{{$user->name}}</td>
<td>{{$user->email}}</td>
<td>
@if($user->role==1)
Student
@else
@if($user->role==2)
Instructor
@else
Admin
@endif
@endif

</td>
<td>{{$user->status}}</td>
<td>
<li class="list-inline-item float-right">
<a  onclick="return confirm('Are you sure you want to delete this user ?')"  href="/university/{{Request::segment(2)}}/deleteuser/{{$user->id}}">
<i class="fa fa-trash" aria-hidden="true"></i>
</a>
</li>
</td>
</tr>
@endforeach
</tbody>

</table>

</div>
</div>
</div>
</div>
@endsection
