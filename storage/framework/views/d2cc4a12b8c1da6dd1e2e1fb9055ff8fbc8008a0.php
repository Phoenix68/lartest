<?php $__env->startSection('content'); ?>

    <div class="d-flex">
        <div class="container ">
            <a href="/posts" class="btn btn-primary">Go Back</a>
        </div>
        <?php if(!Auth::guest()): ?>
            <?php if(Auth::user()->id==$post->user_id): ?>
                <div class="container">
                    <?php echo Form::open(['action'=>['PostsController@destroy',$post->id,'method'=>'POST','class'=>'form-inline']]); ?>

                    <?php echo e(Form::hidden('_method','DELETE')); ?>

                    <?php echo e(Form::submit('Delete',['class'=>'btn btn-danger float-right'])); ?>

                    <a href="/posts/<?php echo e($post->id); ?>/edit" class=" btn btn-info float-right mr-2">Edit</a>
                    <?php echo Form::close(); ?>

                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <br>
    <div class="card ">
        <img src="/storage/cover_images/<?php echo e($post->cover_image); ?>" class="rounded img-fluid card-img-top" alt="">
        <div class="card-header"><h1><?php echo e($post->title); ?></h1></div>

        <div class="card-body"><p><?php echo e($post->body); ?></p></div>
        <div class="card-footer text-muted">
            <span class="small">Written on </span> <?php echo e($post->created_at); ?> <span class="small"> by </span> <?php echo e($post->user->name); ?>

        </div>
    </div>
    <hr>

    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>