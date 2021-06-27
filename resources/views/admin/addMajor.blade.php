@extends('layouts.app')

@section('content')

  <h1 class="display-6" style="color: #165896;">ADD MAJOR</h1>
    <hr>
    <div class="container">
        <div class="row justify-content-center">
            <form role="form" method="POST" action="/university/{{Request::segment(2)}}/add_Major/post">
              @csrf
                <div class="form">

                    <!-- course name -->
                    <div class="col-md-10 mb-3">
                        
                        <input type="text" class="form-control" name="name" placeholder="Major Name">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <!-- end course name -->
                    <!-- course code -->
                    <div class="col-md-10 mb-3">
                   
                        <select class="custom-select" name="faculty" required>
                        <option > Faculty</option>
                          @foreach($faculties as $faculty)
                                    <option value="{{ $faculty->id }}"> {{ $faculty->name }}</option>
                                @endforeach
                            </select>
                     
                        
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                   

                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary" >
                            {{ __('Add Major') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
