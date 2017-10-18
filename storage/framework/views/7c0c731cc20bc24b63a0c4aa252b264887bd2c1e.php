<?php $__env->startSection('page_heading', 'Stats'); ?>

<?php $__env->startSection('section'); ?>
    <div class="row">
        <div class="col-md-3">
            <?php $__env->startComponent('admin.widgets.panel'); ?>
                <?php $__env->slot('class', 'primary'); ?>
                <?php $__env->slot('panelBody'); ?>
                    <?php echo $__env->make('admin.widgets.stat', array('icon'=> 'whatsapp', 'header'=> 'Views', 'value'=>'71,842', 'href'=>'#', 'color'=>'primary'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php $__env->endSlot(); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>

        <div class="col-md-3">
            <?php $__env->startComponent('admin.widgets.panel'); ?>
                <?php $__env->slot('class', 'info'); ?>
                <?php $__env->slot('panelBody'); ?>
                    <?php echo $__env->make('admin.widgets.stat', array('icon'=> 'archive', 'header'=> 'header', 'value'=>'19,968', 'href'=>'#', 'color'=>'info'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php $__env->endSlot(); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>

        <div class="col-md-3">
            <?php $__env->startComponent('admin.widgets.panel'); ?>
                <?php $__env->slot('class', 'success'); ?>
                <?php $__env->slot('panelBody'); ?>
                    <?php echo $__env->make('admin.widgets.stat', array('icon'=> 'desktop', 'header'=> 'Header', 'value'=>'000', 'href'=>'#', 'color'=>'success'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php $__env->endSlot(); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>

        <div class="col-md-3">
            <?php $__env->startComponent('admin.widgets.panel'); ?>
                <?php $__env->slot('class', 'danger'); ?>
                <?php $__env->slot('panelBody'); ?>
                    <?php echo $__env->make('admin.widgets.stat', array('icon'=> 'folder', 'header'=> 'Title', 'value'=>'758,412,304', 'href'=>'#', 'color'=>'danger'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php $__env->endSlot(); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>