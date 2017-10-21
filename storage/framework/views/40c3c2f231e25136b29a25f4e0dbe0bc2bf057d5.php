<?php $__env->startSection('page_heading','Buttons'); ?>

<?php $__env->startSection('section'); ?>

    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-6">
                <?php $__env->startComponent('admin.widgets.panel'); ?>
                    <?php $__env->slot('panelTitle', 'Default Buttons'); ?>
                    <?php $__env->slot('panelBody'); ?>
                        <h4>Normal Buttons</h4>
                        <p>
                            <?php echo $__env->make('admin.widgets.button', array('value'=>'Primary', 'class'=>'primary'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php echo $__env->make('admin.widgets.button', array('class'=>'primary', 'value'=>'Primary'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php echo $__env->make('admin.widgets.button', array('class'=>'success', 'value'=>'Success'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php echo $__env->make('admin.widgets.button', array('class'=>'warning', 'value'=>'Warning'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php echo $__env->make('admin.widgets.button', array('class'=>'danger', 'value'=>'Danger'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </p>
                        <br>
                        <h4>Disabled Buttons</h4>
                        <p>
                            <?php echo $__env->make('admin.widgets.button', array('value'=>'Default', 'disabled'=>true), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php echo $__env->make('admin.widgets.button', array('class'=>'primary', 'value'=>'Primary', 'disabled'=>true), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php echo $__env->make('admin.widgets.button', array('class'=>'success', 'value'=>'Success', 'disabled'=>true), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php echo $__env->make('admin.widgets.button', array('class'=>'warning', 'value'=>'Warning', 'disabled'=>true), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php echo $__env->make('admin.widgets.button', array('class'=>'danger', 'value'=>'Danger', 'disabled'=>true), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </p>
                        <br>
                        <h4>Button Sizes</h4>
                        <p>
                            <?php echo $__env->make('admin.widgets.button', array('class'=>'primary', 'size'=>'lg', 'value'=>'Large Button'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php echo $__env->make('admin.widgets.button', array('class'=>'primary', 'value'=>'Default'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php echo $__env->make('admin.widgets.button', array('class'=>'primary', 'size'=>'sm', 'value'=>'Small'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php echo $__env->make('admin.widgets.button', array('class'=>'primary', 'size'=>'xs', 'value'=>'Extra Small'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <br>
                            <br>
                        <?php echo $__env->make('admin.widgets.button', array('class'=>'primary', 'size'=>'lg btn-block', 'value'=>'Block level Button'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>
            </div>

            <div class="col-sm-6">
                <?php $__env->startComponent('admin.widgets.panel'); ?>
                    <?php $__env->slot('panelTitle', 'Default Buttons'); ?>
                    <?php $__env->slot('panelBody'); ?>
                        <h4>Normal Circle Buttons</h4>
                        <button type="button" class="btn btn-default btn-circle"><i class="fa fa-check"></i></button>
                        <button type="button" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></button>
                        <button type="button" class="btn btn-success btn-circle"><i class="fa fa-link"></i></button>
                        <button type="button" class="btn btn-info btn-circle"><i class="fa fa-check"></i></button>
                        <button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i></button>
                        <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-heart"></i></button>

                        <br>
                        <br>

                        <h4>Large Circle Buttons</h4>
                        <button type="button" class="btn btn-default btn-circle btn-lg"><i class="fa fa-check"></i>
                        </button>
                        <button type="button" class="btn btn-primary btn-circle btn-lg"><i class="fa fa-list"></i>
                        </button>
                        <button type="button" class="btn btn-success btn-circle btn-lg"><i class="fa fa-link"></i>
                        </button>
                        <button type="button" class="btn btn-info btn-circle btn-lg"><i class="fa fa-check"></i>
                        </button>
                        <button type="button" class="btn btn-warning btn-circle btn-lg"><i class="fa fa-times"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-circle btn-lg"><i class="fa fa-heart"></i>
                        </button>
                    <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>

                <br/>
                <?php $__env->startComponent('admin.widgets.panel'); ?>
                    <?php $__env->slot('panelTitle', 'Outline buttons with smooth transition'); ?>
                    <?php $__env->slot('panelBody'); ?>

                        <h4>Outline Buttons</h4>
                        <p>
                            <?php echo $__env->make('admin.widgets.button', array('value'=>'Default', 'class'=>'default btn-outline'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php echo $__env->make('admin.widgets.button', array('class'=>'primary btn-outline', 'value'=>'Primary'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php echo $__env->make('admin.widgets.button', array('class'=>'success btn-outline', 'value'=>'Success'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php echo $__env->make('admin.widgets.button', array('class'=>'warning btn-outline', 'value'=>'Warning'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php echo $__env->make('admin.widgets.button', array('class'=>'danger btn-outline', 'value'=>'Danger'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </p>
                        <br>
                        <h4>Outline Button Sizes</h4>
                        <p>
                            <?php echo $__env->make('admin.widgets.button', array('class'=>'primary btn-outline', 'size'=>'lg', 'value'=>'Large Button'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php echo $__env->make('admin.widgets.button', array('class'=>'primary btn-outline', 'value'=>'Default'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php echo $__env->make('admin.widgets.button', array('class'=>'primary btn-outline', 'size'=>'sm', 'value'=>'Small'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php echo $__env->make('admin.widgets.button', array('class'=>'primary btn-outline', 'size'=>'xs', 'value'=>'Extra Small'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </p>
                        <br>
                        <br>
                        <?php echo $__env->make('admin.widgets.button', array('class'=>'primary btn-o', 'size'=>'lg btn-block', 'value'=>'Block level Button'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>
            </div>
            <!-- /.col-sm-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.col-sm-12 -->

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layouts.dashboard.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>