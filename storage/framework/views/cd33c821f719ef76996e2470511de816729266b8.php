<?php $__env->startSection('page_heading','Panels and Collapsibles'); ?>

<?php $__env->startSection('section'); ?>

    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-6">
                <?php $__env->startComponent('admin.widgets.panel'); ?>
                    <?php $__env->slot('panelTitle', 'Default Title'); ?>
                    <?php $__env->slot('panelBody'); ?>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>

                <?php $__env->startComponent('admin.widgets.panel'); ?>
                    <?php $__env->slot('class', 'primary'); ?>
                    <?php $__env->slot('panelTitle', 'Inverse Header'); ?>
                    <?php $__env->slot('panelBody'); ?>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>

                <?php $__env->startComponent('admin.widgets.panel'); ?>
                    <?php $__env->slot('class', 'success'); ?>
                    <?php $__env->slot('panelTitle', 'Header'); ?>
                    <?php $__env->slot('panelBody'); ?>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <?php $__env->endSlot(); ?>
                    <?php $__env->slot('panelFooter'); ?>
                        View All
                    <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>
            </div>
            <div class="col-sm-6">
                <?php $__env->startComponent('admin.widgets.panel'); ?>
                    <?php $__env->slot('class', 'info'); ?>
                    <?php $__env->slot('panelTitle', 'Hello World!'); ?>
                    <?php $__env->slot('panelBody'); ?>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>

                <?php $__env->startComponent('admin.widgets.panel'); ?>
                    <?php $__env->slot('class', 'warning'); ?>
                    <?php $__env->slot('panelTitle', 'Warning'); ?>
                    <?php $__env->slot('panelBody'); ?>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>

                <?php $__env->startComponent('admin.widgets.panel'); ?>
                    <?php $__env->slot('class', 'danger'); ?>
                    <?php $__env->slot('panelTitle', 'Danger'); ?>
                    <?php $__env->slot('panelBody'); ?>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>
            </div>
            <div class="col-sm-12">
                <?php $__env->startComponent('admin.widgets.panel'); ?>
                    <?php $__env->slot('panelTitle', 'Collapsible Panel Group'); ?>
                    <?php $__env->slot('panelBody'); ?>
                        <?php echo $__env->make('admin.widgets.collapse', array('id'=>'1', 'class'=>'primary', 'header'=> 'This is a header', 'body'=>'Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.','collapseIn'=>true), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->make('admin.widgets.collapse', array('id'=>'2', 'header'=> 'This is a header', 'body'=>'Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->make('admin.widgets.collapse', array('id'=>'3', 'class'=>'success', 'header'=> 'This is a header', 'body'=>'Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.col-sm-12 -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>