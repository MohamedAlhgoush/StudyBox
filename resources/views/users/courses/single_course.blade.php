@extends('layouts.app')
@section('content')

<div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
    <h1 class="display-6" style="color: #165896;">CATEGORIES</h1>
</div>
<hr>
    <div class="row">

        <div class="col-md-3 col-sm-12">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                   aria-controls="v-pills-home" aria-selected="true">Assignments 
                    <span class="badge badge-success float-right">
                           {{count($assignments)}} 
                         </span></a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                   aria-controls="v-pills-profile" aria-selected="false">Exams
                   <span class="badge badge-success float-right">
                           {{count($exams)}} 
                         </span></a>
                <a class="nav-link" id="v-pills-Lectures-tab" data-toggle="pill" href="#v-pills-Lectures" role="tab"
                   aria-controls="v-pills-Lectures" aria-selected="false">Lectures
                   <span class="badge badge-success float-right">
                           {{count($lectures)}} 
                         </span></a>
                <a class="nav-link" id="v-pills-project-tab" data-toggle="pill" href="#v-pills-project" role="tab"
                  aria-controls="v-pills-project" aria-selected="false">Projects
                  <span class="badge badge-success float-right">
                           {{count($projects)}} 
                         </span></a>
                <a class="nav-link" id="v-pills-quizzes-tab" data-toggle="pill" href="#v-pills-quizzes" role="tab"
                  aria-controls="v-pills-quizzes" aria-selected="false">Quizzes
                  <span class="badge badge-success float-right">
                           {{count($quizzes)}} 
                         </span></a>
                <a class="nav-link" id="v-pills-books-tab" data-toggle="pill" href="#v-pills-books" role="tab"
                  aria-controls="v-pills-books" aria-selected="false">Books
                  <span class="badge badge-success float-right">
                           {{count($books)}} 
                         </span></a>
                <a class="nav-link" id="v-pills-Syllabus-tab" data-toggle="pill" href="#v-pills-Syllabus" role="tab"
                  aria-controls="v-pills-Syllabus" aria-selected="false">Syllabus
                   <span class="badge badge-success float-right">
                           {{count($syllabuses)}} 
                         </span></a>

            </div>
        </div>


        <div class="col-md-9 col-sm-12">
            <div class="tab-content" id="v-pills-tabContent">

                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                     aria-labelledby="v-pills-home-tab">
                    <div class="card">
                        <h5 class="card-header">Available Assignments</h5>
                        <div class="card-body">
                            <div class="list-group">
                              @if($assignments)
                              @if(count($assignments)>0)
                                @foreach($assignments as $assignment)
                                    <a href="/university/{{Request::segment(2)}}/file/{{$assignment->id}}" class="list-group-item list-group-item-action disabled">
                                        {{$assignment->name}}
                                    </a>
                                @endforeach
                                @else <h3>No available assaignments</h3>
                                @endif
                                @else <h3>No available assaignments</h3>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="card">
                        <h5 class="card-header">Available Exams</h5>
                        <div class="card-body">
                            <div class="list-group">
                              @if($exams)
                              @if(count($exams)>0)
                                @foreach($exams as $exam)
                                    <a href="/university/{{Request::segment(2)}}/file/{{$exam->id}}" class="list-group-item list-group-item-action disabled">
                                        {{$exam->name}}
                                    </a>
                                @endforeach
                                @else <h3>No available exams</h3>
                                @endif
                                  @else <h3>No available exams</h3>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>


                <div class="tab-pane fade" id="v-pills-Lectures" role="tabpanel" aria-labelledby="v-pills-Lectures-tab">
                  <div class="card">
                      <h5 class="card-header">Available Lectures</h5>
                      <div class="card-body">
                          <div class="list-group">
                              @if($lectures)
                              @if(count($lectures)>0)
                              @foreach($lectures as $lecture)
                                  <a href="/university/{{Request::segment(2)}}/file/{{$lecture->id}}"  class="list-group-item list-group-item-action disabled">
                                      {{$lecture->name}}
                                  </a>
                              @endforeach
                              @else <h3>No available Lectures</h3>
                              @endif
                                @else <h3>No available Lectures</h3>
                              @endif
                          </div>
                      </div>
                  </div>
                </div>


                <div class="tab-pane fade" id="v-pills-project" role="tabpanel" aria-labelledby="v-pills-project-tab">
                  <div class="card">
                      <h5 class="card-header">Available Projects</h5>
                      <div class="card-body">
                          <div class="list-group">
                            @if($projects)
                            @if(count($projects)>0)
                              @foreach($projects as $project)
                                  <a href="/university/{{Request::segment(2)}}/file/{{$project->id}}" class="list-group-item list-group-item-action disabled">
                                      {{$project->name}}
                                  </a>
                              @endforeach
                              @else <h3>No available projects</h3>
                              @endif
                              @else <h3>No available projects</h3>
                              @endif
                          </div>
                      </div>
                  </div>
                </div>



              <div class="tab-pane fade" id="v-pills-quizzes" role="tabpanel" aria-labelledby="v-pills-quizzes-tab">
                <div class="card">
                    <h5 class="card-header">Available Quizzes</h5>
                    <div class="card-body">
                        <div class="list-group">
                            @if($quizzes)
                            @if(count($quizzes)>0)
                            @foreach($quizzes as $quizz)
                                <a href="/university/{{Request::segment(2)}}/file/{{$quizz->id}}" class="list-group-item list-group-item-action disabled">
                                    {{$quizz->name}}
                                </a>
                            @endforeach
                            @else <h3>No available Quizzes</h3>
                            @endif
                            @else <h3>No available Quizzes</h3>
                            @endif
                        </div>
                    </div>
                </div>
              </div>


            <div class="tab-pane fade" id="v-pills-books" role="tabpanel" aria-labelledby="v-pills-books-tab">
              <div class="card">
                  <h5 class="card-header">Available Books</h5>
                  <div class="card-body">
                      <div class="list-group">
                          @if($books)
                          @if(count($books)>0)
                          @foreach($books as $book)
                              <a href="/university/{{Request::segment(2)}}/file/{{$book->id}}" class="list-group-item list-group-item-action disabled">
                                  {{$book->name}}
                              </a>
                          @endforeach
                          @else <h3>No available books</h3>
                          @endif
                          @else   <h3>no available books</h3>

                          @endif
                      </div>
                  </div>
              </div>
            </div>

            <div class="tab-pane fade" id="v-pills-Syllabus" role="tabpanel" aria-labelledby="v-pills-Syllabus-tab">
              <div class="card">
                  <h5 class="card-header">Available Syllabus</h5>
                  <div class="card-body">
                      <div class="list-group">
                          @if($syllabuses)
                          @if(count($syllabuses)>0)
                          @foreach($syllabuses as $syllabus)
                              <a href="/university/{{Request::segment(2)}}/file/{{$syllabus->id}}" class="list-group-item list-group-item-action disabled">
                                  {{$syllabus->name}}
                              </a>
                          @endforeach
                          @else   <h3>no available syllabuses</h3>
                          @endif
                          @else   <h3>no available syllabuses</h3>
                          @endif


                      </div>
                  </div>
              </div>
            </div>


            </div>
        </div>
    </div>

@endsection
