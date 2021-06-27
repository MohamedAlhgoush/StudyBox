@extends('layouts.app')
@section('content')
<h5 class="display-6" style="color: #165896;">AVAILABLE COURSES</h5>
<hr>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">

                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course code</th>
                            <th>Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>

                        <tbody>

                        <h5 class="card-header">#A</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='a' || $course->name[0]=='A' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                        <td>
                                        <li class="list-inline-item float-right">
                                        <a href="/university/{{Request::segment(2)}}/editcourse/{{$course->id}}">
                                        <i class="fa fa-pencil-alt ml-2" aria-hidden="true"></i>
                                        </a>
                                        <a  onclick="return confirm('Are you sure you want to delete this Course?')"  href="/university/{{Request::segment(2)}}/deletecourse/{{$course->id}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </table>
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course code</th>
                            <th>Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <h5 class="card-header">#B</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='b' || $course->name[0]=='B' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                        <td>
                                        <li class="list-inline-item float-right">
                                        <a href="/university/{{Request::segment(2)}}/editcourse/{{$course->id}}">
                                        <i class="fa fa-pencil-alt ml-2" aria-hidden="true"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure you want to delete this Course?')" href="/university/{{Request::segment(2)}}/deletecourse/{{$course->id}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course code</th>
                            <th>Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <h5 class="card-header">#C</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='c' || $course->name[0]=='C' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                        <td>
                                        <li class="list-inline-item float-right">
                                        <a href="/university/{{Request::segment(2)}}/editcourse/{{$course->id}}">
                                        <i class="fa fa-pencil-alt ml-2" aria-hidden="true"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure you want to delete this Course?')" href="/university/{{Request::segment(2)}}/deletecourse/{{$course->id}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course code</th>
                            <th>Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <h5 class="card-header">#D</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='d' || $course->name[0]=='D' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                        <td>
                                        <li class="list-inline-item float-right">
                                        <a href="/university/{{Request::segment(2)}}/editcourse/{{$course->id}}">
                                        <i class="fa fa-pencil-alt ml-2" aria-hidden="true"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure you want to delete this Course?')" href="/university/{{Request::segment(2)}}/deletecourse/{{$course->id}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course code</th>
                            <th>Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <h5 class="card-header">#E</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='e' || $course->name[0]=='E' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                        <td>
                                        <li class="list-inline-item float-right">
                                        <a href="/university/{{Request::segment(2)}}/editcourse/{{$course->id}}">
                                        <i class="fa fa-pencil-alt ml-2" aria-hidden="true"></i>
                                        </a>
                                        <a  onclick="return confirm('Are you sure you want to delete this Course?')" href="/university/{{Request::segment(2)}}/deletecourse/{{$course->id}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course code</th>
                            <th>Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <h5 class="card-header">#F</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='f' || $course->name[0]=='F' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                        <td>
                                        <li class="list-inline-item float-right">
                                        <a href="/university/{{Request::segment(2)}}/editcourse/{{$course->id}}">
                                        <i class="fa fa-pencil-alt ml-2" aria-hidden="true"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure you want to delete this Course?')" href="/university/{{Request::segment(2)}}/deletecourse/{{$course->id}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course code</th>
                            <th>Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <h5 class="card-header">#G</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='g' || $course->name[0]=='G' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                        <td>
                                        <li class="list-inline-item float-right">
                                        <a href="/university/{{Request::segment(2)}}/editcourse/{{$course->id}}">
                                        <i class="fa fa-pencil-alt ml-2" aria-hidden="true"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure you want to delete this Course?')" href="/university/{{Request::segment(2)}}/deletecourse/{{$course->id}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course code</th>
                            <th>Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <h5 class="card-header">#H</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='h' || $course->name[0]=='H' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                        <td>
                                        <li class="list-inline-item float-right">
                                        <a href="/university/{{Request::segment(2)}}/editcourse/{{$course->id}}">
                                        <i class="fa fa-pencil-alt ml-2" aria-hidden="true"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure you want to delete this Course?')" href="/university/{{Request::segment(2)}}/deletecourse/{{$course->id}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course code</th>
                            <th>Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <h5 class="card-header">#I</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='i' || $course->name[0]=='I' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                        <td>
                                        <li class="list-inline-item float-right">
                                        <a href="/university/{{Request::segment(2)}}/editcourse/{{$course->id}}">
                                        <i class="fa fa-pencil-alt ml-2" aria-hidden="true"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure you want to delete this Course?')" href="/university/{{Request::segment(2)}}/deletecourse/{{$course->id}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course code</th>
                            <th>Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <h5 class="card-header">#J</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='j' || $course->name[0]=='J' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                        <td>
                                        <li class="list-inline-item float-right">
                                        <a href="/university/{{Request::segment(2)}}/editcourse/{{$course->id}}">
                                        <i class="fa fa-pencil-alt ml-2" aria-hidden="true"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure you want to delete this Course?')" href="/university/{{Request::segment(2)}}/deletecourse/{{$course->id}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course code</th>
                            <th>Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <h5 class="card-header">#K</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='k' || $course->name[0]=='K' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                        <td>
                                        <li class="list-inline-item float-right">
                                        <a href="/university/{{Request::segment(2)}}/editcourse/{{$course->id}}">
                                        <i class="fa fa-pencil-alt ml-2" aria-hidden="true"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure you want to delete this Course?')" href="/university/{{Request::segment(2)}}/deletecourse/{{$course->id}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course code</th>
                            <th>Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <h5 class="card-header">#L</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='l' || $course->name[0]=='L' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                        <td>
                                        <li class="list-inline-item float-right">
                                        <a href="/university/{{Request::segment(2)}}/editcourse/{{$course->id}}">
                                        <i class="fa fa-pencil-alt ml-2" aria-hidden="true"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure you want to delete this Course?')" href="/university/{{Request::segment(2)}}/deletecourse/{{$course->id}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course code</th>
                            <th>Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <h5 class="card-header">#M</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='m' || $course->name[0]=='M' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                        <td>

                                        <li class="list-inline-item float-right">
                                        <a href="/university/{{Request::segment(2)}}/editcourse/{{$course->id}}">
                                        <i class="fa fa-pencil-alt ml-2" aria-hidden="true"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure you want to delete this Course?')" href="/university/{{Request::segment(2)}}/deletecourse/{{$course->id}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course code</th>
                            <th>Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <h5 class="card-header">#N</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='n' || $course->name[0]=='N' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                        <td>

                                        <li class="list-inline-item float-right">
                                        <a href="/university/{{Request::segment(2)}}/editcourse/{{$course->id}}">
                                        <i class="fa fa-pencil-alt ml-2" aria-hidden="true"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure you want to delete this Course?')" href="/university/{{Request::segment(2)}}/deletecourse/{{$course->id}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course code</th>
                            <th>Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <h5 class="card-header">#O</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='o' || $course->name[0]=='O' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                        <td>

                                        <li class="list-inline-item float-right">
                                        <a href="/university/{{Request::segment(2)}}/editcourse/{{$course->id}}">
                                        <i class="fa fa-pencil-alt ml-2" aria-hidden="true"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure you want to delete this Course?')" href="/university/{{Request::segment(2)}}/deletecourse/{{$course->id}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course code</th>
                            <th>Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <h5 class="card-header">#P</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='P' || $course->name[0]=='p' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                        <td>

                                        <li class="list-inline-item float-right">
                                        <a href="/university/{{Request::segment(2)}}/editcourse/{{$course->id}}">
                                        <i class="fa fa-pencil-alt ml-2" aria-hidden="true"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure you want to delete this Course?')" href="/university/{{Request::segment(2)}}/deletecourse/{{$course->id}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course code</th>
                            <th>Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <h5 class="card-header">#Q</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='q' || $course->name[0]=='Q' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>

                                        <td>
                                        <li class="list-inline-item float-right">
                                        <a href="/university/{{Request::segment(2)}}/editcourse/{{$course->id}}">
                                        <i class="fa fa-pencil-alt ml-2" aria-hidden="true"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure you want to delete this Course?')" href="/university/{{Request::segment(2)}}/deletecourse/{{$course->id}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course code</th>
                            <th>Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <h5 class="card-header">#R</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='R' || $course->name[0]=='r' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                        <td>
                                        <li class="list-inline-item float-right">
                                        <a href="/university/{{Request::segment(2)}}/editcourse/{{$course->id}}">
                                        <i class="fa fa-pencil-alt ml-2" aria-hidden="true"></i>
                                        </a>
                                        <a  onclick="return confirm('Are you sure you want to delete this Course?')" href="/university/{{Request::segment(2)}}/deletecourse/{{$course->id}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course code</th>
                            <th>Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <h5 class="card-header">#S</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='s' || $course->name[0]=='S' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                        <td>
                                        <li class="list-inline-item float-right">
                                        <a href="/university/{{Request::segment(2)}}/editcourse/{{$course->id}}">
                                        <i class="fa fa-pencil-alt ml-2" aria-hidden="true"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure you want to delete this Course?')" href="/university/{{Request::segment(2)}}/deletecourse/{{$course->id}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course code</th>
                            <th>Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <h5 class="card-header">#T</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='T' || $course->name[0]=='t' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                        <td>
                                        <li class="list-inline-item float-right">
                                        <a href="/university/{{Request::segment(2)}}/editcourse/{{$course->id}}">
                                        <i class="fa fa-pencil-alt ml-2" aria-hidden="true"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure you want to delete this Course?')" href="/university/{{Request::segment(2)}}/deletecourse/{{$course->id}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course code</th>
                            <th>Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <h5 class="card-header">#U</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='u' || $course->name[0]=='U' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                        <td>
                                        <li class="list-inline-item float-right">
                                        <a href="/university/{{Request::segment(2)}}/editcourse/{{$course->id}}">
                                        <i class="fa fa-pencil-alt ml-2" aria-hidden="true"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure you want to delete this Course?')" href="/university/{{Request::segment(2)}}/deletecourse/{{$course->id}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course code</th>
                            <th>Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <h5 class="card-header">#V</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='V' || $course->name[0]=='v' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                        <td>
                                        <li class="list-inline-item float-right">
                                        <a href="/university/{{Request::segment(2)}}/editcourse/{{$course->id}}">
                                        <i class="fa fa-pencil-alt ml-2" aria-hidden="true"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure you want to delete this Course?')" href="/university/{{Request::segment(2)}}/deletecourse/{{$course->id}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course code</th>
                            <th>Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <h5 class="card-header">#W</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                    @if($course->name[0]=='W' || $course->name[0]=='w' )
                                        <tr class="table-row"
                                            onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                            <td>{{$course->name}}</td>
                                            <td>{{$course->code}}</td>
                                            <td>{{$faculty->name}}</td>
                                            <td>
                                                <li class="list-inline-item float-right">
                                                    <a href="/university/{{Request::segment(2)}}/editcourse/{{$course->id}}">
                                                        <i class="fa fa-pencil-alt ml-2" aria-hidden="true"></i>
                                                    </a>
                                                    <a onclick="return confirm('Are you sure you want to delete this Course?')" href="/university/{{Request::segment(2)}}/deletecourse/{{$course->id}}">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach
                                        @endforeach
                                        @endforeach
                                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course code</th>
                            <th>Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <h5 class="card-header">#X</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='X' || $course->name[0]=='x' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                        <td>
                                        <li class="list-inline-item float-right">
                                        <a href="/university/{{Request::segment(2)}}/editcourse/{{$course->id}}">
                                        <i class="fa fa-pencil-alt ml-2" aria-hidden="true"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure you want to delete this Course?')" href="/university/{{Request::segment(2)}}/deletecourse/{{$course->id}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course code</th>
                            <th>Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <h5 class="card-header">#Y</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='Y' || $course->name[0]=='y' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                        <td>
                                        <li class="list-inline-item float-right">
                                        <a href="/university/{{Request::segment(2)}}/editcourse/{{$course->id}}">
                                        <i class="fa fa-pencil-alt ml-2" aria-hidden="true"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure you want to delete this Course?')" href="/university/{{Request::segment(2)}}/deletecourse/{{$course->id}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course code</th>
                            <th>Faculty</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <h5 class="card-header">#Z</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='z' || $course->name[0]=='Z' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                        <td>
                                        <li class="list-inline-item float-right">
                                        <a href="/university/{{Request::segment(2)}}/editcourse/{{$course->id}}">
                                        <i class="fa fa-pencil-alt ml-2" aria-hidden="true"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure you want to delete this Course?')"  href="/university/{{Request::segment(2)}}/deletecourse/{{$course->id}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        </li>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
@endsection
