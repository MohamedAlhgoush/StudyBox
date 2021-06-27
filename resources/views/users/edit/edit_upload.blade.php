@extends('layouts.app')
@section('content')
  <h1 class="display-6" style="color: #165896;">EDIT DOCUMENT</h1>

    <hr>
    <div class="container-fliud justify-content-center">
        <div class="row">
          <form class="col-12" role="form" method="POST" action="/edit_document/{{$upload->id}}"  enctype="multipart/form-data">
              @csrf

                <div class="form-group row">
                    <label for="faculty" class="col-md-4 col-form-label  " >{{ __('Faculty') }}</label>
                    <div class="col-md-6">
                      <select class="custom-select" name="faculty">
                        <option selected>Edit Course By Selecting Faculty</option>
                          @foreach($faculties as $faculty)
                              <option value="{{ $faculty->id }}"> {{ $faculty->name }}</option>
                          @endforeach
                      </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="major" class="col-md-4 col-form-label" disabled>{{ __('Major') }}</label>
                    <div class="col-md-6">
                      <select class="custom-select" name="major">
                        <option selected value="{{$current_major->id}}">{{$current_major->name}}</option>
                      </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="course" class="col-md-4 col-form-label" disabled>{{ __('Course') }}</label>
                    <div class="col-md-6">
                      <select class="custom-select" name="course">
                        <option selected value="{{$current_course->id}}">{{$current_course->name}}</option>
                      </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="instructor" class="col-md-4 col-form-label" disabled>{{ __('Instructor') }}</label>
                    <div class="col-md-6">
                        <select  class="custom-select" name="instructor_id">
                              @foreach($instructors as $instructor)
                                  <option value="{{ $instructor->id }}"> {{ $instructor->name }}</option>
                              @endforeach
                          </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">{{ __('Document Name') }}</label>
                    <div class="col-md-6">
                      <input id="name" placeholder="Name" type="text" name="name" value="{{ $upload->name }}" required class="form-control">
                      @if ($errors->has('name'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="semester" class="col-md-4 col-form-label">{{ __('Semester') }}</label>
                    <div class="col-md-3">
                      <select id="semester" type="text" class="form-control{{ $errors->has('semester') ? ' is-invalid' : '' }}" name="semester" value="{{ old('semester') }}" required autofocus>
                                <option  value="" selected>Select Semester</option>
                                <option value="Fall">Fall</option>
                                <option value="Spring">Spring</option>
                                <option value="Summer">Summer</option>
                            </select>
                      @if ($errors->has('semester'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('semester') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="year" class="col-md-4 col-form-label">{{ __('Year') }}</label>
                    <div class="col-md-3">
                      <input id="year" type="date" placeholder="Year" name="year" value="{{ $upload->year }}" required autofocus class="form-control">
                      @if ($errors->has('year'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('year') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">{{ __('Document Description') }}</label>
                    <div class="col-md-6">
                      <textarea name="description" value="Description" required autofocus id="description" rows="3" class="form-control">{{$upload->description}}</textarea>
                      @if ($errors->has('description'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('description') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="instructor" class="col-md-4 col-form-label" disabled>{{ __('Category') }}</label>
                    <div class="col-md-6">
                      <select class="custom-select" name="category_id">
                          @foreach($categories as $category)
                              <option {{ $upload->categories()->first()->id == $category->id ? 'selected' : '' }} value="{{ $category->id }}"> {{ $category->name }}</option>
                          @endforeach
                          </select>
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary" >
                            {{ __('Edit') }}
                        </button>
                    </div>
                </div>
       </form>

        </div>
    </div>
@endsection
