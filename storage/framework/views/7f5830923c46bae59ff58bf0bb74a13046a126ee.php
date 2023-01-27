<?php $__env->startSection('content'); ?>
    <!--main content start-->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    
                    <article class="post">
                        <div class="post-thumb">
                            <a href="<?php echo e(route('post.show', $post->slug)); ?>"><img src="<?php echo e(asset("storage/". $post->image)); ?>"
                                                                               alt=""></a>
                        </div>
                        <div class="post-content">
                            <header class="entry-header text-center text-uppercase">
                                <?php if($post->category): ?>
                                    <h6>
                                        <a href="<?php echo e(route('category.show', $post->category->slug)); ?>"> <?php echo e($post->category->title); ?> </a>
                                    </h6>
                                <?php endif; ?>
                                <h1 class="entry-title"><a
                                        href="<?php echo e(route('post.show', $post->slug)); ?>"><?php echo e($post->title); ?></a></h1>


                            </header>
                            <div class="entry-content">
                                <?php echo $post->content; ?>

                            </div>
                            <div class="decoration">
                                <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="<?php echo e(route('tag.show', $tag->slug)); ?>"
                                       class="btn btn-default"><?php echo e($tag->title); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                            <div class="social-share">
							<span
                                class="social-share-title pull-left text-capitalize">By <?php echo e($post->author->name); ?> On <?php echo e($post->getDate()); ?></span>
                                <ul class="text-center pull-right">
                                    <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <div class="top-comment"><!--top comment-->
                        <img src="<?php echo e(asset("storage/". $post->author->avatar)); ?>" class="pull-left img-circle"
                             style="max-width: 110px" alt="">
                        <h4><?php echo e($post->author->name); ?></h4>

                        <p><?php echo e($post->author->status); ?></p>
                    </div><!--top comment end-->
                    <div class="row"><!--blog next previous-->
                        <div class="col-md-6">
                            <?php if($post->hasPrevious()): ?>
                                <div class="single-blog-box">
                                    <a href="<?php echo e(route('post.show' , $post->getPrevious()->slug)); ?>">
                                        <img src="<?php echo e(asset("storage/". $post->getPrevious()->image)); ?>" alt="">

                                        <div class="overlay">

                                            <div class="promo-text">
                                                <p><i class=" pull-left fa fa-angle-left"></i></p>
                                                <h5><?php echo e($post->getPrevious()->title); ?></h5>
                                            </div>
                                        </div>


                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <?php if($post->hasNext()): ?>
                                <div class="single-blog-box">
                                    <a href="<?php echo e(route('post.show' , $post->getNext()->slug)); ?>">
                                        <img src="<?php echo e(asset("storage/". $post->getNext()->image)); ?>" alt="">

                                        <div class="overlay">
                                            <div class="promo-text">
                                                <p><i class=" pull-right fa fa-angle-right"></i></p>
                                                <h5><?php echo e($post->getNext()->title); ?></h5>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div><!--blog next previous end-->
                    <div class="related-post-carousel"><!--related post carousel-->
                        <div class="related-heading">
                            <h4>You might also like</h4>
                        </div>
                        <div class="items">
                            <?php $__currentLoopData = $post->related(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="single-item">
                                    <a href="<?php echo e(route('post.show', $item->slug)); ?>">
                                        <img src="<?php echo e(asset("storage/". $item->image)); ?>" alt="">

                                        <p><?php echo e($item->title); ?></p>
                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div><!--related post carousel-->
                    <?php if(!$post->comments->isEmpty()): ?>
                        <?php $__currentLoopData = $post->comments()->published()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="bottom-comment"><!--bottom comment-->

                                <div class="comment-img">

                                    <img class="img-circle" src="<?php echo e(asset("storage/". $comment->author->avatar)); ?>"
                                         alt="" width="110px" height="110px">
                                </div>

                                <div class="comment-text">
                                    <h5><?php echo e($comment->author->name); ?></h5>

                                    <?php if($comment->created_at): ?>
                                        <p class="comment-date">
                                            <?php echo e($comment->created_at->diffForHumans()); ?>

                                        </p>
                                    <?php endif; ?>


                                    <p class="para"><?php echo e($comment->text); ?></p>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                <!-- end bottom comment-->

                    <?php if(\Illuminate\Support\Facades\Auth::check()): ?>
                        <?php echo $__env->make('admin.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="leave-comment"><!--leave comment-->
                            <h4>Leave a reply</h4>

                            <form class="form-horizontal contact-form" role="form" method="post"
                                  action="<?php echo e(route('comment')); ?>">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="post_id" value="<?php echo e($post->id); ?>">

                                <div class="form-group">
                                    <div class="col-md-12">
										<textarea class="form-control" rows="6" name="message"
                                                  placeholder="Write Massage"></textarea>
                                    </div>
                                </div>
                                <button class="btn send-btn">Post Comment</button>
                            </form>
                        </div><!--end leave comment-->
                    <?php endif; ?>
                </div>
                <?php echo $__env->make('pages._sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
    <!-- end main content-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\php-laravel\resources\views/pages/show.blade.php ENDPATH**/ ?>