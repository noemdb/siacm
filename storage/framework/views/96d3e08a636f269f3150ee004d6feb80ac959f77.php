<?php $__env->startSection('page_heading','Documentation'); ?>

<?php $__env->startSection('section'); ?>

    <?php $__env->startComponent('admin.widgets.panel'); ?>
        <?php $__env->slot('panelTitle', 'Default title'); ?>
        <?php $__env->slot('panelBody'); ?>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('panelFooter'); ?>
<pre class="codeWrapper">
    <i class="fa fa-at"></i>section ('inside_panel_title', 'Default title')
    <i class="fa fa-at"></i>section ('inside_panel_body')
    &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/p&gt;
    <i class="fa fa-at"></i>endsection
    <i class="fa fa-at"></i>include('admin.widgets.panel', array('header'=>true, 'as'=>'inside'))
</pre>
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <?php $__env->startComponent('admin.widgets.panel'); ?>
        <?php $__env->slot('panelTitle', 'Collapssible'); ?>
        <?php $__env->slot('panelBody'); ?>
            <?php echo $__env->make('admin.widgets.collapse', array('id'=>'2', 'header'=> 'This is a header', 'body'=>'Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('panelFooter'); ?>
<pre class="codeWrapper">
    <i class="fa fa-at"></i>include('admin.widgets.collapse', array('id'=>'2', 'header'=> 'This is a header', 'body'=>'Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.'))
</pre>
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <?php $__env->startComponent('admin.widgets.panel'); ?>
        <?php $__env->slot('panelTitle', 'Buttons'); ?>
        <?php $__env->slot('panelBody'); ?>
            <?php echo $__env->make('admin.widgets.button', array('value'=>'Info button', 'class'=>'info'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('admin.widgets.button', array('class'=>'danger', 'size'=>'lg', 'value'=>'Large Button'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('admin.widgets.button', array('class'=>'success btn-outline', 'value'=>'Primary'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('panelFooter'); ?>
<pre class="codeWrapper">
    <i class="fa fa-at"></i>include('admin.widgets.button', array('value'=>'Info button', 'class'=>'info'))
    <i class="fa fa-at"></i>include('admin.widgets.button', array('class'=>'danger', 'size'=>'lg', 'value'=>'Large Button'))
    <i class="fa fa-at"></i>include('admin.widgets.button', array('class'=>'success btn-outline', 'value'=>'Primary'))
</pre>
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <?php $__env->startComponent('admin.widgets.panel'); ?>
        <?php $__env->slot('panelTitle', 'Buttons'); ?>
        <?php $__env->slot('panelBody'); ?>
            <?php echo $__env->make('admin.widgets.alert', array('class'=>'success', 'message'=> 'You have an alert', 'icon'=> 'user'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('admin.widgets.alert', array('class'=>'info', 'dismissable'=>true, 'message'=> 'My message'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('panelFooter'); ?>
<pre class="codeWrapper">
    <i class="fa fa-at"></i>include('admin.widgets.alert', array('class'=>'success', 'message'=> 'You have an alert', 'icon'=> 'user'))
    <i class="fa fa-at"></i>include('admin.widgets.alert', array('class'=>'info', 'dismissable'=>true, 'message'=> 'My message'))
</pre>
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>



    <?php $__env->startComponent('admin.widgets.panel'); ?>
        <?php $__env->slot('panelTitle', 'Progressbars'); ?>
        <?php $__env->slot('panelBody'); ?>
            <?php echo $__env->make('admin.widgets.progress', array('class'=> 'success', 'value'=>'44'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('admin.widgets.progress', array('animated'=> true, 'value'=>'72'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->make('admin.widgets.progress', array('class'=> 'danger', 'value'=>'12', 'badge'=>true), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('panelFooter'); ?>
<pre class="codeWrapper">
    <i class="fa fa-at"></i>include('admin.widgets.progress', array('class'=> 'success', 'value'=>'44'))
    <i class="fa fa-at"></i>include('admin.widgets.progress', array('animated'=> true, 'value'=>'72'))
    <i class="fa fa-at"></i>include('admin.widgets.progress', array('class'=> 'danger', 'value'=>'12', 'badge'=>true))
</pre>
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>