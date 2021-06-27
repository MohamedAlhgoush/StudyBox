@extends('layouts.app')

@section('content')

  <h1 class="display-6" style="color: #165896;">ADD COURSE</h1>
    <hr>
    <div class="container">
        <div class="row justify-content-center">
            <form role="form" method="POST" action="{{route('add.course.post')}}">
              @csrf
                <div class="form-row">

                    <!-- course name -->
                    <div class="col-md-4 mb-3">
                        <label for="name">Course Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Course Name">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <!-- end course name -->
                    <!-- course code -->
                    <div class="col-md-4 mb-3">
                        <label for="code">Course Code</label>
                        <input type="text" class="form-control" name="code" placeholder="Course Code" >
                        <div class="valid-tooltip">
                        </div>
                    </div>
                    <!-- end course code -->
                    <!-- end document instructor-->
                    <div class="col-md-12 mb-3 ml-0">
                        <div class="col-lg-12  p-0">
                            <label for="description" class="col-2 col-form-label text-sm-left p-0">Description</label>
                            <textarea name="description" id="description"  class="form-control"></textarea>
                        </div>
                    </div>
                    <!-- end description -->
                    <!-- Major name -->
                    <div class="col-md-6 mb-3">
                      <label for="major" class="col-md-4 col-form-label" disabled>{{ __('Major') }}</label>

                      <div class="col-md-6">
                        <select class="custom-select" name="major_id">
                          @foreach($faculties as $faculty)
                          @foreach($faculty->majors as $major)
                                    <option value="{{ $major->id }}"> {{ $major->name }}</option>
                                @endforeach
                                @endforeach
                            </select>
                      </div>
                    </div>
                    <!-- end major name -->

                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary" >
                            {{ __('Add Course') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
