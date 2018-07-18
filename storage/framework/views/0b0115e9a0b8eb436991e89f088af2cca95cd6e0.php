<?php $__env->startSection('content'); ?>
    <h1>Posts</h1>
    <?php if(count($posts) > 0): ?>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if($post->cover_image=="noimage.jpg"): ?>
                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="card-title">
                            <?php echo e($post->title); ?>

                        </h3>
                    </div>
                    <div class="card-body px-2">


                        <a href="/posts/<?php echo e($post->id); ?>" class="card-link btn btn-primary">
                            View
                        </a> <br><br>
                        <div class="card-footer text-muted">
                            <small>Written on <?php echo e($post->created_at); ?>

                                by <?php echo e($post->user->name); ?></small>
                        </div>
                    </div>
                </div>

            <?php else: ?>

                <div class="card flex-row flex-wrap">
                    <div class="card-header border-0">
                        <img src="/storage/cover_images/<?php echo e($post->cover_image); ?>" class="rounded img-fluid" alt="">
                    </div>
                    <div class="card-body px-2">

                        <h3 class="card-title">
                            <?php echo e($post->title); ?>

                        </h3>
                        <a href="/posts/<?php echo e($post->id); ?>" class="card-link btn btn-primary">
                            View
                        </a> <br><br>
                        <div class="card-footer text-muted">
                            <span class="small">Written on <?php echo e($post->created_at); ?>

                                by <?php echo e($post->user->name); ?></span>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($posts->links()); ?>

    <?php else: ?>
        <p>No posts found</p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>