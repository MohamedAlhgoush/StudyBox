@extends('layouts.app')

@section('content')

  <h1 class="display-6" style="color: #165896;">ADD FACULTY</h1>
    <hr>
    <div class="container">
        <div class="row justify-content-center">
            <form role="form" method="POST" action="/university/{{Request::segment(2)}}/add_Faculty/post">
              @csrf
                <div class="form">

                    <!-- course name -->
                    <div class="col-md-10 mb-3">
                        
                        <input type="text" class="form-control" name="name" placeholder="Faculty Name">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <!-- end course name -->
                    <!-- course code -->
                    <div class="col-md-10 mb-3">
                    <h2>This faculty will be added to {{$university->name}}  </h2>

                    </div>
                   

                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary" >
                            {{ __('Add Faculty') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
