<div class="alert alert-<?php echo e($class); ?> <?php if(isset($dismissable)): ?> alert-dismissable <?php endif; ?>" role="alert">
    <?php if(isset($dismissable)): ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    <?php endif; ?>
    <i class="fa fa-<?php echo e((isset($icon)) ? $icon : $class); ?>"></i>&nbsp;&nbsp;

    <?php if(isset($link)): ?>
        <a href="#" class="alert-link"><?php echo e($link); ?> </a>
    <?php endif; ?> <?php echo e($message); ?>.
</div>