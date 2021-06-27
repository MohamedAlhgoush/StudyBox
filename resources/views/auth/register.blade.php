@extends('layouts.app_landing')

@section('landing')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 loginDesign">
            <div class="card">
              <div class="card-header"style="background-image: linear-gradient(to right, #1f3766, #254881, #295a9d, #2a6db9, #2681d7);">
              <h4 class="display-6" style="color:#fff;">REGISTER</h4>
            </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right" >{{ __('Role') }}</label>

                            <div class="col-md-6">
                                  <select class="custom-select" id='show_university_dropdown' name="role">
                                  <option value="1" selected>Student</option>
                                  <option value="2">Instructor</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row" id='university' style='display:none;'>
                            <label for="role" class="col-md-4 col-form-label text-md-right" >{{ __('university') }}</label>

                            <div class="col-md-6">
                                  <select class="custom-select"  id='show_faculty_dropdown' name='university'>
                                  <option  selected>Select University</option>
                                  @foreach(App\University::all() as $university)
                                  <option value="{{$university->id}}" >{{$university->name}}</option>
                                  @endforeach

                                </select>
                            </div>
                        </div>


                        <div class="form-group row" id='faculty' style='display:none;'>
                            <label for="role" class="col-md-4 col-form-label text-md-right" disabled>{{ __('faculty') }}</label>

                            <div class="col-md-6">
                            <select class="custom-select" name="faculty">
                                </select>
                            </div>
                        </div>


                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="  background-image: linear-gradient(to right, #1f3766, #254881, #295a9d, #2a6db9, #2681d7);" >

                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
