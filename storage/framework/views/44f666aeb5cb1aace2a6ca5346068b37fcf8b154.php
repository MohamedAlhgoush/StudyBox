<?php $__env->startSection('content'); ?>

  <?php
    $count=0;
    $countcourses=0;
    $countdoc=0;
  ?>

  <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>

  <div class="col-12">

    <h1 class="display-6" style="color: #165896;">Welcome To  <?php echo e($university->name, false); ?></h1>

  </div>

  <hr>

  <!-- ============================================================== -->
            <div class="row mt-4" >
             <!-- metric 1 -->
             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="card">
                     <h5 class="card-header text-light">Courses</h5>
                        <div class="card-body">
                            <div class="metric-value d-inline-block">
                                <h1 class="mb-1 text-primary">
                                    <?php $__currentLoopData = $university->faculties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faculty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <?php $__currentLoopData = $faculty->majors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $major): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $countcourses+=count($major->courses);
                                         ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             <h1 class="mb-1 text-primary">
                                     <?php
                                        echo $countcourses;
                                     ?>
                            </h1>
                                </div>
                            <div id="sparkline-revenue"></div>
                        </div>
                    </div>
              </div>
                    <!-- end of metric 1 -->


            <!-- metric 2 -->
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                  <h5 class="card-header text-light">Instructors</h5>
                    <div class="card-body">
                      <div class="metric-value d-inline-block">
                          <?php $__currentLoopData = $university->faculties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faculty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                              $count+=count($faculty->users);
                            ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <h1 class="mb-1 text-primary">
                                <?php
                                  echo $count;
                                   ?>
                              </h1>
                             </div>
                      <div id="sparkline-revenue2"></div>
                    </div>
                  </div>
                </div>
                    <!-- end of metric 2-->

            <!-- metric 3-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                      <div class="card">
                        <h5 class="card-header text-light"> No. of Downloads</h5>
                          <div class="card-body">
                            <div class="metric-value d-inline-block">
                              <h1 class="mb-1 text-primary"><?php echo e(count($downloads), false); ?> </h1>
                                </div>
                                    <div id="sparkline-revenue3"></div>
                              </div>
                        </div>
                      </div>
                    <!-- end of metric 3 -->

            <!-- metric 4-->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                  <div class="card">
                    <h5 class="card-header text-light">Documents</h5>
                      <div class="card-body">
                        <div class="metric-value d-inline-block">
                          <h1 class="mb-1 text-primary">
                            <?php $__currentLoopData = $university->faculties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faculty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php $__currentLoopData = $faculty->majors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $major): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $major->courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                              if($course->uploads)
                              $countdoc+=count($course->uploads);
                            ?>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           <h1 class="mb-1 text-primary">
                            <?php
                              echo $countdoc;
                             ?>
                          </h1>
                            </div>
                          <div id="sparkline-revenue4"></div>
                        </div>
                      </div>
                    </div>
                    <!-- end of metric 4 -->
                </div>
                <hr>

            <div class="row">
              <div  class="col-xl-5 col-lg-5 col-md-5 col-sm-12" style="width:500px; height:500px;">
                <canvas  id="pie-chart"></canvas>
              </div>
                  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                      <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card">
                          <h5 class="card-header text-light"><?php echo e($university->name, false); ?></h5>
                            <div class="card-body">
                              Description:
                              <?php echo e($university->descritption, false); ?>

                            </div>
                        </div>
                      </div>
                <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12 col-12 ">
                  <div class="card">
                    <h5 class="card-header text-light">Faculties</h5>
                      <div class="card-body">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th scope="col">Faculties</th>
                                <th scope="col" class="text-center">Number of Majors</th>
                            </tr>
                          </thead>
                              <tbody>
                                    <?php if($university): ?>
                                      <?php $__currentLoopData = $university->faculties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faculty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="table-row" >
                                          <td ><?php echo e($faculty->name, false); ?></td>
                                          <td class="text-center"><?php echo e($faculty->majors->count(), false); ?> </td>
                                        </tr>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
<script>
   var url = "<?php echo e(url('/chart'), false); ?>";
        var names = new Array();
        var downloas = new Array();
        var Prices = new Array();
        $(document).ready(function(){
          $.get(url, function(response){
            response.forEach(function(data){
                names.push(data.name);
                downloas.push(data.total_download);

            });
            new Chart(document.getElementById("pie-chart"), {
                type: 'pie',
                data: {
                labels:  names,
                datasets: [{
                    label: downloas,
                    backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                    data: downloas
                }],

    },
    options: {
      title: {
        display: true,
        text: 'Most Downloaded'
      }
    }
});
          });
        });

</script>
<!-- sparkline js -->
<script src="../assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
<script src="../assets/vendor/charts/sparkline/spark-js.js"></script>


<script>
    // ==============================================================
// Revenue Cards
// ==============================================================
$("#sparkline-revenue").sparkline([5, 5, 7, 7, 9, 5, 3, 5, 2, 4, 6, 7], {
    type: 'line',
    width: '99.5%',
    height: '100',
    lineColor: '#5969ff',
    fillColor: '#dbdeff',
    lineWidth: 2,
    spotColor: undefined,
    minSpotColor: undefined,
    maxSpotColor: undefined,
    highlightSpotColor: undefined,
    highlightLineColor: undefined,
    resize:true
});



$("#sparkline-revenue2").sparkline([3, 7, 6, 4, 5, 4, 3, 5, 5, 2, 3, 1], {
    type: 'line',
    width: '99.5%',
    height: '100',
    lineColor: '#ff407b',
    fillColor: '#ffdbe6',
    lineWidth: 2,
    spotColor: undefined,
    minSpotColor: undefined,
    maxSpotColor: undefined,
    highlightSpotColor: undefined,
    highlightLineColor: undefined,
    resize:true
});



$("#sparkline-revenue3").sparkline([5, 3, 4, 6, 5, 7, 9, 4, 3, 5, 6, 1], {
    type: 'line',
    width: '99.5%',
    height: '100',
    lineColor: '#25d5f2',
    fillColor: '#dffaff',
    lineWidth: 2,
    spotColor: undefined,
    minSpotColor: undefined,
    maxSpotColor: undefined,
    highlightSpotColor: undefined,
    highlightLineColor: undefined,
    resize:true
});



$("#sparkline-revenue4").sparkline([6, 5, 3, 4, 2, 5, 3, 8, 6, 4, 5, 1], {
    type: 'line',
    width: '99.5%',
    height: '100',
    lineColor: '#fec957',
    fillColor: '#fff2d5',
    lineWidth: 2,
    spotColor: undefined,
    minSpotColor: undefined,
    maxSpotColor: undefined,
    highlightSpotColor: undefined,
    highlightLineColor: undefined,
    resize:true,
});
</script>

<script>
$("#sparkline-1").sparkline([5, 5, 7, 7, 9, 5, 3, 5, 2, 4, 6, 7], {
    type: 'line',
    width: '99.5%',
    height: '100',
    lineColor: '#5969ff',
    fillColor: '',
    lineWidth: 2,
    spotColor: undefined,
    minSpotColor: undefined,
    maxSpotColor: undefined,
    highlightSpotColor: undefined,
    highlightLineColor: undefined,
    resize:true
});



$("#sparkline-2").sparkline([3, 7, 6, 4, 5, 4, 3, 5, 5, 2, 3, 1], {
    type: 'line',
    width: '99.5%',
    height: '100',
    lineColor: '#ff407b',
    fillColor: '',
    lineWidth: 2,
    spotColor: undefined,
    minSpotColor: undefined,
    maxSpotColor: undefined,
    highlightSpotColor: undefined,
    highlightLineColor: undefined,
    resize:true
});



$("#sparkline-3").sparkline([5, 3, 4, 6, 5, 7, 9, 4, 3, 5, 6, 1], {
    type: 'line',
    width: '99.5%',
    height: '100',
    lineColor: '#25d5f2',
    fillColor: '',
    lineWidth: 2,
    spotColor: undefined,
    minSpotColor: undefined,
    maxSpotColor: undefined,
    highlightSpotColor: undefined,
    highlightLineColor: undefined,
    resize:true
});



$("#sparkline-4").sparkline([6, 5, 3, 4, 2, 5, 3, 8, 6, 4, 5, 1], {
    type: 'line',
    width: '99.5%',
    height: '100',
    lineColor: '#ffc750',
    fillColor: '',
    lineWidth: 2,
    spotColor: undefined,
    minSpotColor: undefined,
    maxSpotColor: undefined,
    highlightSpotColor: undefined,
    highlightLineColor: undefined,
    resize:true,
});
</script>
</body>

</html>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\studybox\resources\views/home.blade.php ENDPATH**/ ?>