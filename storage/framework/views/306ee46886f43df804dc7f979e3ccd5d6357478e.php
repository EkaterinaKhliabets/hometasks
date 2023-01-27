<?php $__env->startSection('content'); ?>
    <!--main content start-->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-6">
                                <article class="post post-grid">
                                    <div class="post-thumb">
                                        <a href="<?php echo e(route('post.show', $post->slug)); ?>"> <img
                                                src="<?php echo e(asset("storage/". $post->image)); ?>"
                                                alt=""></a>

                                        <a href="<?php echo e(route('post.show', $post->slug)); ?>"
                                           class="post-thumb-overlay text-center">
                                            <div class="text-uppercase text-center">View Post</div>
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <header class="entry-header text-center text-uppercase">
                                            <?php if($post->category): ?>
                                            <h6>
                                                <a href="<?php echo e(route('category.show', $post->category->slug)); ?>"><?php echo e($post->category->title); ?></a>
                                            </h6>
                                            <?php endif; ?>

                                            <h1 class="entry-title"><a
                                                    href="<?php echo e(route('post.show', $post->slug)); ?>"><?php echo e($post->title); ?></a></h1>


                                        </header>
                                        <div class="entry-content">
                                            <p><?php echo $post->description; ?>

                                            </p>

                                            <div class="social-share">
                                                <span class="social-share-title pull-left text-capitalize">By Rubel On <?php echo e($post->getDate()); ?></span>
                                            </div>
                                        </div>
                                    </div>

                                </article>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php echo e($posts->links('vendor.pagination.default')); ?>

                </div>
                <?php echo $__env->make('pages._sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
    <!-- end main content-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\php-laravel\resources\views/pages/list.blade.php ENDPATH**/ ?>