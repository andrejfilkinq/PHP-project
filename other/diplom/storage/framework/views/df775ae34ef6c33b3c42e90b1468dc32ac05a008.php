<?php $__env->startSection('content'); ?>
<link rel="stylesheet" type="text/css" href="css/foto.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                    <?php endif; ?>

                    You are logged in admin!<br/>
                    <?php echo e(Auth::user()->images); ?><br/>
                    <!--<?php echo Html::image('foto_user/'.Auth::user()->images); ?>-->
                    <img style="width:130px;" src="foto_user/<?php echo e(Auth::user()->images); ?>"class="round">
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>