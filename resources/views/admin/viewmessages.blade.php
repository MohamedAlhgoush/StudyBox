@extends('layouts.app')
@section('content')
<h1 class="display-6" style="color: #165896;">Messages</h1>
<hr>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th> Name</th>
                            <th> Email</th>
                            <th> subject</th>
                            <th>message</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($messages as $message)
                                    <tr class="table-row">
                                        <td>{{$message->name}}</td>
                                        <td>{{$message->email}}</td>
                                        <td>{{$message->subjet}}</td>
                                        <td>{{$message->message}}</td>
                                        <td><a  class="text-center "  onclick="return confirm('Are you sure you want to remove this message?')"  href="/university/{{Request::segment(2)}}/read/{{$message->id}}"><i class="fa fa-times fa-2x" aria-hidden="true"></a></i></td>
                                      </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
