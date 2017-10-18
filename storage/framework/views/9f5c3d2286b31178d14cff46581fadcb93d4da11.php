<?php $__env->startSection('page_heading', 'Collapse'); ?>

<?php $__env->startSection('section'); ?>

<?php echo $__env->make('admin.widgets.collapse', array('id'=>'1', 'class'=>'primary', 'header'=> 'This is a header', 'body'=>'Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.','collapseIn'=>true), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.widgets.collapse', array('id'=>'2', 'header'=> 'This is a header', 'body'=>'Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.widgets.collapse', array('id'=>'3', 'class'=>'success', 'header'=> 'This is a header', 'body'=>'Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('admin.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>