<?php $__env->startSection('content'); ?>
    <div>
        <h1>Edit Post</h1>
        <?php echo Form::open(['action'=>['PostsController@update',$post->id],'method'=>'POST']); ?>


        <div class="form-group">
            <?php echo e(Form::label('title','Title')); ?>

            <?php echo e(Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('body','Body')); ?>

            <?php echo e(Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body Text'])); ?>

        </div>
        <?php echo e(Form::submit('Submit',['class'=>'btn btn-primary'])); ?>

        <button type="reset" class="btn btn-secondary">Reset</button>
        <?php echo e(Form::hidden('_method','PUT')); ?>

        <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>