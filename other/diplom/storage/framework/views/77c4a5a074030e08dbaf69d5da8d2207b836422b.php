<h1>Hello mail</h1>

<a href="<?php echo e(route('email.confirmation',['tokean'=>$user->token])); ?>">
    <?php echo e(route('email.confirmation',['tokean'=>$user->token])); ?>

</a>

