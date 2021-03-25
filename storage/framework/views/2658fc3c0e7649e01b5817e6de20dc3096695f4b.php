<?php $__env->startSection('content'); ?>

    <div id="wrapper">

        <div id="page" class="container">

            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div id="content">

                    <div class="title">

                        <!-- <h2><a href="/articles/<?php echo e($article->id); ?>"><?php echo e($article->title); ?></a></h2>-->
                        <!-- refereences the name created on web.php -->
                        <h2><a href="<?php echo e($article->path()); ?>"><?php echo e($article->title); ?></a></h2>

                        <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>

                        <?php echo e($article->excerpt); ?>


                    </div>

                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/juan/juan.comet.software/resources/views/articles/index.blade.php ENDPATH**/ ?>