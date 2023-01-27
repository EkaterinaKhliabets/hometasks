<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Добавить пользователя
                <small>приятные слова..</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <form action="<?php echo e(route('admin.users.store')); ?>" method='POST' enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Добавляем пользователя</h3>
                        <?php echo $__env->make('admin.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Имя</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                       value="<?php echo e(old('name')); ?>" placeholder="">
                            </div>
                            <div class= "form-group">
                                <label for="exampleInputEmail1">E-mail</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                       value="<?php echo e(old('email')); ?>" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Пароль</label>
                                <input type="password" name='password' class="form-control" id="exampleInputEmail1"
                                       placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Аватар</label>
                                <input type="file" name="avatar" id="exampleInputFile">

                                <p class="help-block">Какое-нибудь уведомление о форматах..</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button class="btn btn-success pull-right">Добавить</button>
                    </div>
                    <!-- /.box-footer-->
                </div>
                <!-- /.box -->
            </form>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\php-laravel\resources\views/admin/users/create.blade.php ENDPATH**/ ?>