<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Админ-панель</span>
        </a>
    </li>
    <li><a href="<?php echo e(route('admin.posts.index')); ?>"><i class="fa fa-sticky-note-o"></i> <span>Посты</span></a></li>
    <li><a href="<?php echo e(route('admin.categories.index')); ?>"><i class="fa fa-list-ul"></i> <span>Категории</span></a></li>
    <li><a href="<?php echo e(route('admin.tags.index')); ?>"><i class="fa fa-tags"></i> <span>Теги</span></a></li>
    <li>
        <a href="<?php echo e(route('admin.comments.index')); ?>">
            <i class="fa fa-commenting"></i> <span>Комментарии</span>
            <span class="pull-right-container">
              <small
                  class="label pull-right bg-green"><?php echo e($newCommentsCount); ?> </small>
            </span>
        </a>
    </li>
    <li><a href="<?php echo e(route('admin.users.index')); ?>"><i class="fa fa-users"></i> <span>Пользователи</span></a></li>
    <li><a href="<?php echo e(route('admin.subscriptions.index')); ?>"><i class="fa fa-user-plus"></i> <span>Подписчики</span></a></li>

</ul>
<?php /**PATH C:\OpenServer\domains\php-laravel\resources\views/admin/_sidebar.blade.php ENDPATH**/ ?>