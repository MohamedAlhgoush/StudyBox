@if(count($errors) > 0)
    <div class="form-group">
        <div class="alert alert-danger" role="alert">
            <h6>OOPPSS! Look what happened! </h6>
            @foreach($errors->all() as $error)
                <li> {{$error}}</li>
            @endforeach
        </div>
    </div>

@endif

@if(session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-warning" role="alert">
        OOPPSS! {{session('error')}}
    </div>
@endif
