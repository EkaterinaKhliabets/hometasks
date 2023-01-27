<h1>Спасибо, кликните по ссылке</h1>
<!--<a href="http://php-laravel/verification/<?php echo e($subscriber->token); ?>"><?php echo e($subscriber->token); ?></a> -->

<!--<a href="http://ekhliabets.beget.tech/verification/<?php echo e($subscriber->token); ?>"><?php echo e($subscriber->token); ?></a> -->

<a href="<?php echo e(url('/')); ?>/verification/<?php echo e($subscriber->token); ?>"><?php echo e(url('/')); ?></a>

<?php echo e($subscriber->email); ?>

<?php /**PATH C:\OpenServer\domains\php-laravel\resources\views/emails/verification.blade.php ENDPATH**/ ?>