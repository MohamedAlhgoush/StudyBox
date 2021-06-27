@extends('layouts.app')
@section('content')
  <h1 class="display-6" style="color: #165896;">EDIT PROFILE</h1>

    <hr>
    <div class="container-fliud justify-content-center">
        <div class="row">
          <form class="col-12" role="form" method="POST" action="/profile_edit/{{$user->id}}"  enctype="multipart/form-data">
              @csrf

                <div class="form-group row">
                    <label for="semester" class="col-md-4 col-form-label">{{ __('Name') }}</label>
                    <div class="col-md-3">
                      <input id="name" type="text" placeholder="Name" name="name" value="{{ $user->name }}" required class="form-control">
                      @if ($errors->has('Name'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('Name') }}</strong>
                          </span>
                      @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="year" class="col-md-4 col-form-label">{{ __('Email') }}</label>
                    <div class="col-md-3">
                      <input id="email" type="text" placeholder="Email" name="email" value="{{  $user->email  }}" required autofocus class="form-control">
                      @if ($errors->has('Email'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('Email') }}</strong>
                          </span>
                      @endif
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
