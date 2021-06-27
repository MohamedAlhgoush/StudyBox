@extends('layouts.app')
@section('content')
<h1 class="display-6" style="color: #165896;">ALL UNIVERSITIES</h1>
<hr>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="card">
<h5 class="card-header">Universities</h5>
<div class="card-body">
<div class="table-responsive">

<table class="table table-striped table-bordered first">
<thead>
<tr>
<th>Name</th>
<th>University Name</th>

<th></th>
</tr>
</thead>

<tbody>
@foreach($faculties as $faculty)
<tr class="table-row">
<td>{{$faculty->name}}</td>
<td>{{$faculty->university->name}}</td>

<td>
<li class="list-inline-item float-right">
<a  onclick="return confirm('Are you sure you want to delete this Faculty?')" href="/university/{{Request::segment(2)}}/deletefaculties/{{$faculty->id}}">
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
