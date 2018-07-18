<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <h3> Your Blog Posts </h3>
                        <hr>
                        <a class="btn btn-primary float-right" href="/posts/create">Create Posts</a><br><br><br>
                        <?php if(count($posts)>0): ?>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Updated at</th>
                                    <th scope="col">Editable</th>
                                    <th scope="col">Deletable</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row"><?php echo e($loop->iteration); ?></th>
                                        <td><?php echo e($post->title); ?></td>
                                        <td>
                                            <?php echo e($post->created_at); ?>

                                        </td>
                                        <td>
                                            <?php echo e($post->updated_at); ?>

                                        </td>
                                        <td><a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-info">Edite</a></td>
                                        <td>
                                            <?php echo Form::open(['action'=>['PostsController@destroy',$post->id,'method'=>'POST','class'=>'']]); ?>

                                            <?php echo e(Form::hidden('_method','DELETE')); ?>

                                            <?php echo e(Form::submit('Delete',['class'=>'btn btn-danger'])); ?>

                                            <?php echo Form::close(); ?>

                                        </td>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>

                            </table>
                        <?php else: ?>
                         <p> You have no posts</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>