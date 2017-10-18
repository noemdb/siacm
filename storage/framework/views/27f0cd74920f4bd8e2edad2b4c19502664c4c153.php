<?php $__env->startSection('page_heading','Tables'); ?>

<?php $__env->startSection('section'); ?>

    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-6">
                <?php $__env->startComponent('admin.widgets.panel'); ?>
                    <?php $__env->slot('panelTitle', 'Regular Table'); ?>
                    <?php $__env->slot('panelBody'); ?>
                        <?php echo $__env->make('admin.widgets.table', array('class'=>''), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>
            </div>
            <div class="col-sm-6">
                <?php $__env->startComponent('admin.widgets.panel'); ?>
                    <?php $__env->slot('panelTitle', 'Bordered Table'); ?>
                    <?php $__env->slot('panelBody'); ?>
                        <?php echo $__env->make('admin.widgets.table', array('class'=>'table-bordered'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <?php $__env->startComponent('admin.widgets.panel'); ?>
                    <?php $__env->slot('panelTitle', 'Striped Table'); ?>
                    <?php $__env->slot('panelBody'); ?>
                        <?php echo $__env->make('admin.widgets.table', array('class'=>'table-striped'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>
            </div>
            <div class="col-sm-6">
                <?php $__env->startComponent('admin.widgets.panel'); ?>
                    <?php $__env->slot('panelTitle', 'Hover Table'); ?>
                    <?php $__env->slot('panelBody'); ?>
                        <?php echo $__env->make('admin.widgets.table', array('class'=>'table-hover'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <?php $__env->startComponent('admin.widgets.panel'); ?>
                    <?php $__env->slot('panelTitle', 'Condensed Table'); ?>
                    <?php $__env->slot('panelBody'); ?>
                        <?php echo $__env->make('admin.widgets.table', array('class'=>'table-condensed'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>
            </div>
            <div class="col-sm-6">
                <?php $__env->startComponent('admin.widgets.panel'); ?>
                    <?php $__env->slot('panelTitle', 'Condensed, Bordered, Striped Table'); ?>
                    <?php $__env->slot('panelBody'); ?>
                        <?php echo $__env->make('admin.widgets.table', array('class'=>'table-condensed table-bordered table-striped'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <?php $__env->startComponent('admin.widgets.panel'); ?>
                    <?php $__env->slot('panelTitle', 'Coloured Table'); ?>
                    <?php $__env->slot('panelBody'); ?>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="success">
                                    <td>John</td>
                                    <td>john@gmail.com</td>
                                    <td>London, UK</td>
                                </tr>
                                <tr>
                                    <td>Wayne</td>
                                    <td>wayne@gmail.com</td>
                                    <td>Manchester, UK</td>
                                </tr>
                                <tr class="info">
                                    <td>Andy</td>
                                    <td>andy@gmail.com</td>
                                    <td>Merseyside, UK</td>
                                </tr>
                                <tr>
                                    <td>Danny</td>
                                    <td>danny@gmail.com</td>
                                    <td>Middlesborough, UK</td>
                                </tr>
                                <tr class="warning">
                                    <td>Frank</td>
                                    <td>frank@gmail.com</td>
                                    <td>Southampton, UK</td>
                                </tr>
                                <tr>
                                    <td>Scott</td>
                                    <td>scott@gmail.com</td>
                                    <td>Newcastle, UK</td>
                                </tr>
                                <tr class="danger">
                                    <td>Rickie</td>
                                    <td>rickie@gmail.com</td>
                                    <td>Burnley, UK</td>
                                </tr>
                            </tbody>
                        </table>
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