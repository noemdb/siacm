<?php $__env->startSection('page_heading','Charts'); ?>

<?php $__env->startSection('section'); ?>

    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-6">
                <?php $__env->startComponent('admin.widgets.panel'); ?>
                    <?php $__env->slot('panelTitle', 'Line Chart'); ?>
                    <?php $__env->slot('panelBody'); ?>
                        <?php echo $__env->make('admin.widgets.charts.clinechart', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>

                <?php $__env->startComponent('admin.widgets.panel'); ?>
                    <?php $__env->slot('panelTitle', 'Donut Chart'); ?>
                    <?php $__env->slot('panelBody'); ?>
                        <div style="max-width:400px; margin:0 auto;"><?php echo $__env->make('admin.widgets.charts.cdonutchart', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></div>
                    <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>
            </div>
            <div class="col-sm-6">

                <?php $__env->startComponent('admin.widgets.panel'); ?>
                    <?php $__env->slot('panelTitle', 'Pie Chart'); ?>
                    <?php $__env->slot('panelBody'); ?>
                        <div style="max-width:400px; margin:0 auto;"><?php echo $__env->make('admin.widgets.charts.cpiechart', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?></div>
                    <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>


                <?php $__env->startComponent('admin.widgets.panel'); ?>
                    <?php $__env->slot('panelTitle', 'Bar Chart'); ?>
                    <?php $__env->slot('panelBody'); ?>
                        <?php echo $__env->make('admin.widgets.charts.cbarchart', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>
            </div>
            <!-- /.col-sm-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.col-sm-12 -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>