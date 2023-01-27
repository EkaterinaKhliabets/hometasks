<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Изменить тэг
                <small>приятные слова..</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Меняем тэг</h3>
                    <?php echo $__env->make('admin.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="box-body">

                    <form action="<?php echo e(route('admin.tags.update', ['tag' => $tag])); ?>" method='POST'>
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Название</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="" value="<?php echo e($tag->title); ?>">
                            </div>
                        </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="<?php echo e(route('admin.tags.index')); ?>" class="btn btn-default">Назад</a>
                    <button  class="btn btn-warning pull-right">Изменить</button>
                </div>
                </form>
                <!-- /.box-footer-->

            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\php-laravel\resources\views/admin/tags/edit.blade.php ENDPATH**/ ?>