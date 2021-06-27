@extends('layouts.app')
@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <h1 class="display-6" style="color: #165896;">ALL COURSES</h1>
      <hr>
        <div class="btn-toolbar d-none d-sm-block" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group" role="group" aria-label="Third group">
                <a class="page-link" href="#A"><button type="button" class="btn btn-primary">A</button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                <a class="page-link" href="#B"><button type="button" class="btn btn-primary">B</button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                <a class="page-link" href="#C"><button type="button" class="btn btn-primary">C</button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                <a class="page-link" href="#D"><button type="button" class="btn btn-primary">D</button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                <a class="page-link" href="#E"><button type="button" class="btn btn-primary">E</button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                <a class="page-link" href="#F"><button type="button" class="btn btn-primary">F</button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                <a class="page-link" href="#G"><button type="button" class="btn btn-primary">G</button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                <a class="page-link" href="#H"><button type="button" class="btn btn-primary">H</button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                <a class="page-link" href="#I"><button type="button" class="btn btn-primary">I</button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                <a class="page-link" href="#J"><button type="button" class="btn btn-primary">J</button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                <a class="page-link" href="#K"><button type="button" class="btn btn-primary">K</button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                <a class="page-link" href="#L"><button type="button" class="btn btn-primary">L</button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                <a class="page-link" href="#M"><button type="button" class="btn btn-primary">M</button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                <a class="page-link" href="#N"><button type="button" class="btn btn-primary">N</button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                <a class="page-link" href="#O"><button type="button" class="btn btn-primary">O</button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                <a class="page-link" href="#P"><button type="button" class="btn btn-primary">P</button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                <a class="page-link" href="#Q"><button type="button" class="btn btn-primary">Q</button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                <a class="page-link" href="#R"><button type="button" class="btn btn-primary">R</button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                <a class="page-link" href="#S"><button type="button" class="btn btn-primary">S</button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                <a class="page-link" href="#T"><button type="button" class="btn btn-primary">T</button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                <a class="page-link" href="#U"><button type="button" class="btn btn-primary">U</button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                <a class="page-link" href="#V"><button type="button" class="btn btn-primary">V</button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                <a class="page-link" href="#W"><button type="button" class="btn btn-primary">W</button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                <a class="page-link" href="#X"><button type="button" class="btn btn-primary">X</button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                <a class="page-link" href="#Y"><button type="button" class="btn btn-primary">Y</button></a>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                <a class="page-link" href="#Z"><button type="button" class="btn btn-primary">Z</button></a>
            </div>

        </div>

      <br>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">

                  <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course code</th>
                            <th>Faculty</th>
                        </tr>
                        </thead>
                        <tbody>
                        <h5 class="card-header" id="A">#A</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='a' || $course->name[0]=='A' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </table>
                        <br>

                      <table class="table table-striped table-bordered first">
                            <thead>
                            <tr>
                                <th>Course Name</th>
                                <th>Course code</th>
                                <th>Faculty</th>
                            </tr>
                            </thead>
                            <tbody>
                        <h5 class="card-header" id="B">#B</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='b' || $course->name[0]=='B' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                  <table class="table table-striped table-bordered first">
                      <thead>
                      <tr>
                          <th>Course Name</th>
                          <th>Course code</th>
                          <th>Faculty</th>
                      </tr>
                      </thead>

                      <tbody>
                        <h5 class="card-header" id="C">#C</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='c' || $course->name[0]=='C' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                  <table class="table table-striped table-bordered first">
                    <thead>
                    <tr>
                        <th>Course Name</th>
                        <th>Course code</th>
                        <th>Faculty</th>
                    </tr>
                    </thead>

                    <tbody>
                        <h5 class="card-header" id="D">#D</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='d' || $course->name[0]=='D' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                  <table class="table table-striped table-bordered first">
                      <thead>
                      <tr>
                          <th>Course Name</th>
                          <th>Course code</th>
                          <th>Faculty</th>
                      </tr>
                      </thead>

                      <tbody>
                        <h5 class="card-header" id="E">#E</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='e' || $course->name[0]=='E' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                  <table class="table table-striped table-bordered first">
                    <thead>
                    <tr>
                        <th>Course Name</th>
                        <th>Course code</th>
                        <th>Faculty</th>
                    </tr>
                    </thead>
                    <tbody>
                        <h5 class="card-header" id="F">#F</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='f' || $course->name[0]=='F' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                  <table class="table table-striped table-bordered first">
                    <thead>
                    <tr>
                        <th>Course Name</th>
                        <th>Course code</th>
                        <th>Faculty</th>
                    </tr>
                    </thead>
                    <tbody>
                        <h5 class="card-header" id="G">#G</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='g' || $course->name[0]=='G' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                  <table class="table table-striped table-bordered first">
                <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Course code</th>
                    <th>Faculty</th>
                </tr>
                </thead>
                <tbody>
                        <h5 class="card-header" id="H">#H</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='h' || $course->name[0]=='H' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                  <table class="table table-striped table-bordered first">
                  <thead>
                  <tr>
                      <th>Course Name</th>
                      <th>Course code</th>
                      <th>Faculty</th>
                  </tr>
                  </thead>
                  <tbody>
                        <h5 class="card-header" id="I">#I</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='i' || $course->name[0]=='I' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                  <table class="table table-striped table-bordered first">
                    <thead>
                    <tr>
                        <th>Course Name</th>
                        <th>Course code</th>
                        <th>Faculty</th>
                    </tr>
                    </thead>
                    <tbody>
                                        <h5 class="card-header" id="J">#J</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='j' || $course->name[0]=='J' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                  <table class="table table-striped table-bordered first">
                  <thead>
                  <tr>
                      <th>Course Name</th>
                      <th>Course code</th>
                      <th>Faculty</th>
                  </tr>
                  </thead>
                  <tbody>
                        <h5 class="card-header" id="K">#K</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='k' || $course->name[0]=='K' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                  <table class="table table-striped table-bordered first">
                <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Course code</th>
                    <th>Faculty</th>
                </tr>
                </thead>
                <tbody>
                  <h5 class="card-header" id="L">#L</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='l' || $course->name[0]=='L' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                  <table class="table table-striped table-bordered first">
                  <thead>
                  <tr>
                      <th>Course Name</th>
                      <th>Course code</th>
                      <th>Faculty</th>
                  </tr>
                  </thead>
                  <tbody>
                        <h5 class="card-header" id="M">#M</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='m' || $course->name[0]=='M' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                  <table class="table table-striped table-bordered first">
                <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Course code</th>
                    <th>Faculty</th>
                </tr>
                </thead>
                <tbody>
                        <h5 class="card-header" id="N">#N</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='n' || $course->name[0]=='N' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                  <table class="table table-striped table-bordered first">
                  <thead>
                  <tr>
                      <th>Course Name</th>
                      <th>Course code</th>
                      <th>Faculty</th>
                  </tr>
                  </thead>
                  <tbody>
                        <h5 class="card-header" id="O">#O</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='o' || $course->name[0]=='O' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                  <table class="table table-striped table-bordered first">
                  <thead>
                  <tr>
                      <th>Course Name</th>
                      <th>Course code</th>
                      <th>Faculty</th>
                  </tr>
                  </thead>
                  <tbody>
                        <h5 class="card-header" id="P">#P</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='P' || $course->name[0]=='p' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                  <table class="table table-striped table-bordered first">
                  <thead>
                  <tr>
                      <th>Course Name</th>
                      <th>Course code</th>
                      <th>Faculty</th>
                  </tr>
                  </thead>
                  <tbody>
                        <h5 class="card-header" id="Q">#Q</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='q' || $course->name[0]=='Q' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                  <table class="table table-striped table-bordered first">
                  <thead>
                  <tr>
                      <th>Course Name</th>
                      <th>Course code</th>
                      <th>Faculty</th>
                  </tr>
                  </thead>
                  <tbody>
                  <h5 class="card-header" id="R">#R</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='R' || $course->name[0]=='r' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                  <table class="table table-striped table-bordered first">
                  <thead>
                  <tr>
                      <th>Course Name</th>
                      <th>Course code</th>
                      <th>Faculty</th>
                  </tr>
                  </thead>
                  <tbody>
                        <h5 class="card-header" id="S">#S</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='s' || $course->name[0]=='S' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                  <table class="table table-striped table-bordered first">
                  <thead>
                  <tr>
                      <th>Course Name</th>
                      <th>Course code</th>
                      <th>Faculty</th>
                  </tr>
                  </thead>
                  <tbody>
                        <h5 class="card-header" id="T">#T</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='T' || $course->name[0]=='t' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                  <table class="table table-striped table-bordered first">
                  <thead>
                  <tr>
                      <th>Course Name</th>
                      <th>Course code</th>
                      <th>Faculty</th>
                  </tr>
                  </thead>
                  <tbody>
                        <h5 class="card-header" id="U">#U</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='u' || $course->name[0]=='U' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                  <table class="table table-striped table-bordered first">
                  <thead>
                  <tr>
                      <th>Course Name</th>
                      <th>Course code</th>
                      <th>Faculty</th>
                  </tr>
                  </thead>
                  <tbody>
                        <h5 class="card-header" id="V">#V</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='V' || $course->name[0]=='v' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                  <table class="table table-striped table-bordered first">
                  <thead>
                  <tr>
                      <th>Course Name</th>
                      <th>Course code</th>
                      <th>Faculty</th>
                  </tr>
                  </thead>
                  <tbody>
                        <h5 class="card-header" id="W">#W</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='W' || $course->name[0]=='w' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                  <table class="table table-striped table-bordered first">
                  <thead>
                  <tr>
                      <th>Course Name</th>
                      <th>Course code</th>
                      <th>Faculty</th>
                  </tr>
                  </thead>
                  <tbody>
                        <h5 class="card-header" id="X">#X</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='X' || $course->name[0]=='x' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                  <table class="table table-striped table-bordered first">
                  <thead>
                  <tr>
                      <th>Course Name</th>
                      <th>Course code</th>
                      <th>Faculty</th>
                  </tr>
                  </thead>
                  <tbody>
                        <h5 class="card-header" id="Y">#Y</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='Y' || $course->name[0]=='y' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        @endforeach
                        </tbody>
                    </table>
                    <br>
                  <table class="table table-striped table-bordered first">
                  <thead>
                  <tr>
                      <th>Course Name</th>
                      <th>Course code</th>
                      <th>Faculty</th>
                  </tr>
                  </thead>
                  <tbody>
                        <h5 class="card-header" id="Z">#Z</h5>
                        @foreach($university->faculties as $faculty)
                            @foreach($faculty->majors as $major)
                                @foreach($major->courses as $course)
                                @if($course->name[0]=='z' || $course->name[0]=='Z' )
                                    <tr class="table-row"
                                        onclick="window.location='major/{{$major->id}}/course/{{$course->id}}';">
                                        <td>{{$course->name}}</td>
                                        <td>{{$course->code}}</td>
                                        <td>{{$faculty->name}}</td>
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
