<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Изменить статью
                <small>приятные слова..</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <form action="<?php echo e(route('admin.posts.update', $post->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Обновляем статью</h3>
                        <?php echo $__env->make('admin.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Название</label>
                                <input name="title" type="text" class="form-control" id="exampleInputEmail1"
                                       placeholder=""
                                       value="<?php echo e($post->title); ?>">
                            </div>

                            <div class="form-group">
                                <img src="<?php echo e(asset("storage/". $post->image)); ?>" alt="" class="img-responsive"
                                     width="200">
                                <label for="exampleInputFile">Лицевая картинка</label>
                                <input type="file" id="exampleInputFile" name="image">

                                <p class="help-block">Какое-нибудь уведомление о форматах..</p>
                            </div>
                            <div class="form-group">
                                <label>Категория</label>
                                <select name="category_id" class="form-control select2" style="width: 100%;"
                                        data-placeholder="Выберите категорию">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($id == $post->category_id): ?>
                                            <option value="<?php echo e($id); ?>" selected><?php echo e($value); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($id); ?>"><?php echo e($value); ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Теги</label>
                                <select name="tags[]" class="form-control select2" multiple="multiple"
                                        data-placeholder="Выберите теги" style="width: 100%;">
                                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(in_array($id, $post_tag)): ?>
                                            <option value="<?php echo e($id); ?>" selected><?php echo e($value); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($id); ?>"><?php echo e($value); ?></option>
                                        <?php endif; ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <!-- Date -->
                            <div class="form-group">
                                <label>Дата:</label>

                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="datepicker"
                                           value="<?php echo e($post->date); ?>" name="date">
                                </div>
                                <!-- /.input group -->
                            </div>

                            <!-- checkbox -->
                            <div class="form-group">
                                <label>
                                    <?php if($post->is_recommended == 1): ?>
                                        <input type="checkbox" name="is_recommended" class="minimal" checked>
                                    <?php else: ?>
                                        <input type="checkbox" name="is_recommended" class="minimal">
                                    <?php endif; ?>
                                </label>
                                <label>Рекомендовать</label>
                            </div>
                            <!-- checkbox -->
                            <div class="form-group">
                                <label>
                                    <?php if($post->is_publish): ?>
                                        <input type="checkbox" name='is_publish' class="minimal" >
                                    <?php else: ?>
                                        <input type="checkbox" name='is_publish' class="minimal" checked>
                                    <?php endif; ?>
                                </label>
                                <label>Черновик</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Описание</label>
                                <textarea id="" cols="30" rows="10" class="form-control"
                                          name="description"><?php echo e($post->description); ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Полный текст</label>
                                <textarea name="content" id="" cols="30" rows="10"
                                          class="form-control"><?php echo e($post->content); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button class="btn btn-warning pull-right">Изменить</button>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\php-laravel\resources\views/admin/posts/edit.blade.php ENDPATH**/ ?>