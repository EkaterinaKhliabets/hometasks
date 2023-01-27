<?php $__env->startSection('content'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Blank page
                <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            

            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Листинг сущности</h3>
                    <?php echo $__env->make('admin.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="<?php echo e(route('admin.posts.create')); ?>" class="btn btn-success">Добавить</a>
                        <?php echo e($posts->links('vendor.pagination.default')); ?>

                    </div>

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Категория</th>
                            <th>Теги</th>
                            <th>Картинка</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($post->id); ?></td>
                            <td><?php echo e($post->title); ?></td>
                            <td><?php echo e($post->getCategoryTitle()); ?></td>
                            <td><?php echo e($post->getTagsTitles()); ?></td>
                            <td>
                                <img src="<?php echo e(asset("storage/". $post->image)); ?>" alt="" width="100">
                            </td>
                            <td>
                                <a href="<?php echo e(route('admin.posts.edit', $post->id)); ?>" class="fa fa-pencil"></a>
                                <form method="POST" action="<?php echo e(route("admin.posts.delete", $post->id)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field("DELETE"); ?>
                                    <button onclick="return confirm('Are you sure?')" type="submit" class="delete">
                                        <a class="fa fa-remove"></a>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tfoot>

                    </table>

                </div>
                <!-- /.box-body -->



            </div>
            <!-- /.box -->

           

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\php-laravel\resources\views/admin/posts/index.blade.php ENDPATH**/ ?>