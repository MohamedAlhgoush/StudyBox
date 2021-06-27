@extends('layouts.app')
@section('content')
<h1 class="display-6" style="color: #165896;">APPROVE INSTRUCTORS</h1>
<hr>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Instructor Name</th>
                            <th>Instructor Email</th>
                            <th>Instructor Status</th>
                            <th>Approve</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($instructors as $instructor)
                                    <tr class="table-row">
                                        <td>{{$instructor->name}}</td>
                                        <td>{{$instructor->email}}</td>
                                        <td>Not Active</td>
                                        <td><a  class="text-center "  onclick="return confirm('Are you sure you want to approve this instructor?')"  href="/university/{{Request::segment(2)}}/approve/{{$instructor->id}}"><i class="fa fa-check-square fa-2x" aria-hidden="true"></a></i></td>
                                      </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
