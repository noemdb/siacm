<?php $__env->startSection('page_heading','Alerts'); ?>

<?php $__env->startSection('section'); ?>

    <?php $__env->startComponent('admin.widgets.panel'); ?>
        <?php $__env->slot('panelTitle','Regular Alerts'); ?>
        <?php $__env->slot('panelBody'); ?>
            <?php echo $__env->make('admin.widgets.alert', array('class'=>'success', 'message'=> 'You have an alert', 'icon'=> 'user'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('admin.widgets.alert', array('class'=>'info', 'message'=> 'My message'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('admin.widgets.alert', array('class'=>'warning', 'message'=> 'My message'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('admin.widgets.alert', array('class'=>'danger', 'message'=> 'My message', 'icon'=> 'remove'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row">
        <div class="col-sm-6">
            <?php $__env->startComponent('admin.widgets.panel'); ?>
                <?php $__env->slot('panelTitle','Dismissable Alerts'); ?>
                <?php $__env->slot('panelBody'); ?>
                    <?php echo $__env->make('admin.widgets.alert', array('class'=>'success', 'dismissable'=>true, 'message'=> 'My message', 'icon'=> 'check'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo $__env->make('admin.widgets.alert', array('class'=>'info', 'dismissable'=>true, 'message'=> 'My message'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo $__env->make('admin.widgets.alert', array('class'=>'warning', 'dismissable'=>true, 'message'=> 'My message'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo $__env->make('admin.widgets.alert', array('class'=>'danger', 'dismissable'=>true, 'message'=> 'My message', 'icon'=> 'remove'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php $__env->endSlot(); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
        <div class="col-sm-6">
            <?php $__env->startComponent('admin.widgets.panel'); ?>
                <?php $__env->slot('panelTitle', 'Links in Alerts'); ?>
                <?php $__env->slot('panelBody'); ?>

                    <?php echo $__env->make('admin.widgets.alert', array('class'=>'success', 'link'=> 'link', 'message'=> 'My message', 'icon'=> 'check'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo $__env->make('admin.widgets.alert', array('class'=>'info', 'link'=> 'link', 'message'=> 'My message'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo $__env->make('admin.widgets.alert', array('class'=>'warning', 'link'=> 'link', 'message'=> 'My message'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo $__env->make('admin.widgets.alert', array('class'=>'danger', 'link'=> 'link', 'message'=> 'My message', 'icon'=> 'remove'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php $__env->endSlot(); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>