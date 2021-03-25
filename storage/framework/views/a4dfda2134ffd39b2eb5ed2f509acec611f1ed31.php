<!-- this is used so that only this page uses the css. head section is in the layout.php-->
<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div id='wrapper'>
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">Update Article</h1>
            <!-- PUT method to save the information. reroutes to the edited article page-->
            <form method="POST" action="/articles/<?php echo e($article->id); ?>">
                <!-- this is for the 419 error page -->
                <?php echo csrf_field(); ?>
                <!-- Must put POST above and PUT here to use the method PUT-->
                <?php echo method_field('PUT'); ?>

                <div class="field">

                    <label class="label" for="title">Title</label>

                    <div class="control">
                        <!-- sets the value to the title of the article-->
                        <input class="input" type="text" name="title" id="title" value="<?php echo e($article->title); ?>">
                    </div>

                </div>

                <div class="field">

                    <label class="label" for="excerpt">Excerpt</label>

                    <div class="control">
                        <textarea class="textarea" name="excerpt" id="excerpt"><?php echo e($article->excerpt); ?></textarea>
                    </div>

                </div>

                <div class="field">

                    <label class="label" for="body">Body</label>

                    <div class="control">
                        <textarea class="textarea" name="body" id="body"><?php echo e($article->body); ?></textarea>
                    </div>

                </div>

                <div class="field is-grouped">

                    <div class="control">

                        <button class="button is-text">Submit</button>
                    </div>

                </div>

            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/juan/juan.comet.software/resources/views/articles/edit.blade.php ENDPATH**/ ?>