<?php $__env->startSection('content'); ?>
<h1 class="display-6" style="color: #165896;">ALL USERS</h1>
<hr>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="card">
<h5 class="card-header">System Users</h5>
<div class="card-body">
<div class="table-responsive">

<table class="table table-striped table-bordered first">
<thead>
<tr>
<th>User Name</th>
<th>User Email</th>
<th>Role</th>
<th>Status</th>
<th></th>
</tr>
</thead>

<tbody>
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr class="table-row">
<td><?php echo e($user->name, false); ?></td>
<td><?php echo e($user->email, false); ?></td>
<td>
<?php if($user->role==1): ?>
Student
<?php else: ?>
<?php if($user->role==2): ?>
Instructor
<?php else: ?>
Admin
<?php endif; ?>
<?php endif; ?>

</td>
<td><?php echo e($user->status, false); ?></td>
<td>
<li class="list-inline-item float-right">
<a  onclick="return confirm('Are you sure you want to delete this user ?')"  href="/university/<?php echo e(Request::segment(2), false); ?>/deleteuser/<?php echo e($user->id, false); ?>">
<i class="fa fa-trash" aria-hidden="true"></i>
</a>
</li>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>

</table>

</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studybox\resources\views/admin/user.blade.php ENDPATH**/ ?>