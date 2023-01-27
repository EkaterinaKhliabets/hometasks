<div class="col-md-4" data-sticky_column>
    <div class="primary-sidebar">

        <?php echo $__env->make('weather.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <aside class="widget news-letter">
            <h3 class="widget-title text-uppercase text-center">Get Newsletter</h3>
            <?php echo $__env->make('admin.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <form action="<?php echo e(route('subscribe')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input type="text" placeholder="Your email address" name="email">
                <input type="submit" value="Subscribe Now"
                       class="text-uppercase text-center btn btn-subscribe">
            </form>

        </aside>
        <aside class="widget">



            <h3 class="widget-title text-uppercase text-center">Popular Posts</h3>
            <?php $__currentLoopData = $popularPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="popular-post">


                    <a href="<?php echo e(route('post.show', $post->slug)); ?>" class="popular-img"><img
                            src="<?php echo e(asset("storage/". $post->image)); ?>" alt="">

                        <div class="p-overlay"></div>
                    </a>

                    <div class="p-content">
                        <a href="<?php echo e(route('post.show', $post->slug)); ?>" class="text-uppercase"><?php echo e($post->title); ?></a>
                        <span class="p-date"><?php echo e($post->getDate()); ?></span>

                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </aside>
        <aside class="widget">
            <h3 class="widget-title text-uppercase text-center">Featured Posts</h3>

            <div id="widget-feature" class="owl-carousel">

                <?php $__currentLoopData = $recommendedPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item">
                        <div class="feature-content">
                            <img src="<?php echo e(asset("storage/". $post->image)); ?>" alt="">

                            <a href="#" class="overlay-text text-center">
                                <h5 class="text-uppercase"><?php echo e($post->title); ?></h5>

                                <p><?php echo $post->description; ?></p>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </aside>
        <aside class="widget pos-padding">
            <h3 class="widget-title text-uppercase text-center">Recent Posts</h3>
            <?php $__currentLoopData = $recentPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="thumb-latest-posts">
                    <div class="media">
                        <div class="media-left">
                            <a href="<?php echo e(route('post.show', $post->slug)); ?>" class="popular-img"><img
                                    src="<?php echo e(asset("storage/". $post->image)); ?>" alt="">
                                <div class="p-overlay"></div>
                            </a>
                        </div>
                        <div class="p-content">
                            <a href="<?php echo e(route('post.show', $post->slug)); ?>" class="text-uppercase"><?php echo e($post->title); ?></a>
                            <span class="p-date"><?php echo e($post->getDate()); ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </aside>
        <aside class="widget border pos-padding">
            <h3 class="widget-title text-uppercase text-center">Categories</h3>
            <ul>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href="<?php echo e(route('category.show', $category->slug)); ?>"><?php echo e($category->title); ?></a>
                        <span class="post-count pull-right"> (<?php echo e($category->posts()->published()->count()); ?>)</span>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </aside>
    </div>
</div>
<?php /**PATH C:\OpenServer\domains\php-laravel\resources\views/pages/_sidebar.blade.php ENDPATH**/ ?>