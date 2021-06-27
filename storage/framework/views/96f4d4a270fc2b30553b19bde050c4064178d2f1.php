<?php $__env->startSection('content'); ?>

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
                           <?php echo e(count($assignments), false); ?> 
                         </span></a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                   aria-controls="v-pills-profile" aria-selected="false">Exams
                   <span class="badge badge-success float-right">
                           <?php echo e(count($exams), false); ?> 
                         </span></a>
                <a class="nav-link" id="v-pills-Lectures-tab" data-toggle="pill" href="#v-pills-Lectures" role="tab"
                   aria-controls="v-pills-Lectures" aria-selected="false">Lectures
                   <span class="badge badge-success float-right">
                           <?php echo e(count($lectures), false); ?> 
                         </span></a>
                <a class="nav-link" id="v-pills-project-tab" data-toggle="pill" href="#v-pills-project" role="tab"
                  aria-controls="v-pills-project" aria-selected="false">Projects
                  <span class="badge badge-success float-right">
                           <?php echo e(count($projects), false); ?> 
                         </span></a>
                <a class="nav-link" id="v-pills-quizzes-tab" data-toggle="pill" href="#v-pills-quizzes" role="tab"
                  aria-controls="v-pills-quizzes" aria-selected="false">Quizzes
                  <span class="badge badge-success float-right">
                           <?php echo e(count($quizzes), false); ?> 
                         </span></a>
                <a class="nav-link" id="v-pills-books-tab" data-toggle="pill" href="#v-pills-books" role="tab"
                  aria-controls="v-pills-books" aria-selected="false">Books
                  <span class="badge badge-success float-right">
                           <?php echo e(count($books), false); ?> 
                         </span></a>
                <a class="nav-link" id="v-pills-Syllabus-tab" data-toggle="pill" href="#v-pills-Syllabus" role="tab"
                  aria-controls="v-pills-Syllabus" aria-selected="false">Syllabus
                   <span class="badge badge-success float-right">
                           <?php echo e(count($syllabuses), false); ?> 
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
                              <?php if($assignments): ?>
                              <?php if(count($assignments)>0): ?>
                                <?php $__currentLoopData = $assignments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assignment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="/university/<?php echo e(Request::segment(2), false); ?>/file/<?php echo e($assignment->id, false); ?>" class="list-group-item list-group-item-action disabled">
                                        <?php echo e($assignment->name, false); ?>

                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?> <h3>No available assaignments</h3>
                                <?php endif; ?>
                                <?php else: ?> <h3>No available assaignments</h3>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="card">
                        <h5 class="card-header">Available Exams</h5>
                        <div class="card-body">
                            <div class="list-group">
                              <?php if($exams): ?>
                              <?php if(count($exams)>0): ?>
                                <?php $__currentLoopData = $exams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="/university/<?php echo e(Request::segment(2), false); ?>/file/<?php echo e($exam->id, false); ?>" class="list-group-item list-group-item-action disabled">
                                        <?php echo e($exam->name, false); ?>

                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?> <h3>No available exams</h3>
                                <?php endif; ?>
                                  <?php else: ?> <h3>No available exams</h3>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="tab-pane fade" id="v-pills-Lectures" role="tabpanel" aria-labelledby="v-pills-Lectures-tab">
                  <div class="card">
                      <h5 class="card-header">Available Lectures</h5>
                      <div class="card-body">
                          <div class="list-group">
                              <?php if($lectures): ?>
                              <?php if(count($lectures)>0): ?>
                              <?php $__currentLoopData = $lectures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lecture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <a href="/university/<?php echo e(Request::segment(2), false); ?>/file/<?php echo e($lecture->id, false); ?>"  class="list-group-item list-group-item-action disabled">
                                      <?php echo e($lecture->name, false); ?>

                                  </a>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <?php else: ?> <h3>No available Lectures</h3>
                              <?php endif; ?>
                                <?php else: ?> <h3>No available Lectures</h3>
                              <?php endif; ?>
                          </div>
                      </div>
                  </div>
                </div>


                <div class="tab-pane fade" id="v-pills-project" role="tabpanel" aria-labelledby="v-pills-project-tab">
                  <div class="card">
                      <h5 class="card-header">Available Projects</h5>
                      <div class="card-body">
                          <div class="list-group">
                            <?php if($projects): ?>
                            <?php if(count($projects)>0): ?>
                              <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <a href="/university/<?php echo e(Request::segment(2), false); ?>/file/<?php echo e($project->id, false); ?>" class="list-group-item list-group-item-action disabled">
                                      <?php echo e($project->name, false); ?>

                                  </a>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <?php else: ?> <h3>No available projects</h3>
                              <?php endif; ?>
                              <?php else: ?> <h3>No available projects</h3>
                              <?php endif; ?>
                          </div>
                      </div>
                  </div>
                </div>



              <div class="tab-pane fade" id="v-pills-quizzes" role="tabpanel" aria-labelledby="v-pills-quizzes-tab">
                <div class="card">
                    <h5 class="card-header">Available Quizzes</h5>
                    <div class="card-body">
                        <div class="list-group">
                            <?php if($quizzes): ?>
                            <?php if(count($quizzes)>0): ?>
                            <?php $__currentLoopData = $quizzes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quizz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="/university/<?php echo e(Request::segment(2), false); ?>/file/<?php echo e($quizz->id, false); ?>" class="list-group-item list-group-item-action disabled">
                                    <?php echo e($quizz->name, false); ?>

                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?> <h3>No available Quizzes</h3>
                            <?php endif; ?>
                            <?php else: ?> <h3>No available Quizzes</h3>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
              </div>


            <div class="tab-pane fade" id="v-pills-books" role="tabpanel" aria-labelledby="v-pills-books-tab">
              <div class="card">
                  <h5 class="card-header">Available Books</h5>
                  <div class="card-body">
                      <div class="list-group">
                          <?php if($books): ?>
                          <?php if(count($books)>0): ?>
                          <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <a href="/university/<?php echo e(Request::segment(2), false); ?>/file/<?php echo e($book->id, false); ?>" class="list-group-item list-group-item-action disabled">
                                  <?php echo e($book->name, false); ?>

                              </a>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php else: ?> <h3>No available books</h3>
                          <?php endif; ?>
                          <?php else: ?>   <h3>no available books</h3>

                          <?php endif; ?>
                      </div>
                  </div>
              </div>
            </div>

            <div class="tab-pane fade" id="v-pills-Syllabus" role="tabpanel" aria-labelledby="v-pills-Syllabus-tab">
              <div class="card">
                  <h5 class="card-header">Available Syllabus</h5>
                  <div class="card-body">
                      <div class="list-group">
                          <?php if($syllabuses): ?>
                          <?php if(count($syllabuses)>0): ?>
                          <?php $__currentLoopData = $syllabuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $syllabus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <a href="/university/<?php echo e(Request::segment(2), false); ?>/file/<?php echo e($syllabus->id, false); ?>" class="list-group-item list-group-item-action disabled">
                                  <?php echo e($syllabus->name, false); ?>

                              </a>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php else: ?>   <h3>no available syllabuses</h3>
                          <?php endif; ?>
                          <?php else: ?>   <h3>no available syllabuses</h3>
                          <?php endif; ?>


                      </div>
                  </div>
              </div>
            </div>


            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studybox\resources\views/users/courses/single_course.blade.php ENDPATH**/ ?>