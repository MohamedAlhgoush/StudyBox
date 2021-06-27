
@extends('layouts.app_landing')
@section('landing')

<h3 class="page-title display-4 mt-5 gradient text-white text-center">
  ADD UNIVERSITY
</h3>
<hr>
@include('inc.messages')
<div class="container">
    <div class="row justify-content-center">
        <form role="form" method="POST" action="/create_university/post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="University name" >
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="short_name">Short Name</label>
                    <input type="text" class="form-control{{ $errors->has('short_name') ? ' is-invalid' : '' }}" name="short_name" placeholder="Enter Short Name here.." >
                </div>
                <div class="form-group col-md-6">
                    <label>Campus</label>
                    <input type="text" class="form-control" placeholder="Campus Location">
                </div>
            </div>
            <div class="form-group">
                <label for="descritption">Description</label>
                <textarea class="form-control{{ $errors->has('descritption') ? ' is-invalid' : '' }}" name="descritption" value="{{ old('descritption') }}"  autofocus id="descritption" rows="3"></textarea>

            </div>

            <button type="submit" class="btn btn-primary">Add University</button>
        </form>

    </div>
</div>
@endsection
