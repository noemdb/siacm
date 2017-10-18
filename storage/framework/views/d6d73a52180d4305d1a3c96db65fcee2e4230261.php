<div class="panel panel-<?php echo e(isset($class) ? $class : 'default'); ?>">
    <?php if(isset($panelTitle)): ?>
        <div class="panel-heading">
            <h3 class="panel-title">
                <?php echo e($panelTitle); ?>

                <?php if(isset($panelControls)): ?>
                    <div class="panel-control pull-right">
                        <a class="panelButton"><i class="fa fa-refresh"></i></a>
                        <a class="panelButton"><i class="fa fa-minus"></i></a>
                        <a class="panelButton"><i class="fa fa-remove"></i></a>
                    </div>
                <?php endif; ?>
            </h3>
        </div>
    <?php endif; ?>

    <?php if(isset($panelBody)): ?>
        <div class="panel-body">
            <?php echo e($panelBody); ?>

        </div>
    <?php endif; ?>

    <?php if(isset($panelFooter)): ?>
        <div class="panel-footer">
            <?php echo e($panelFooter); ?>

        </div>
    <?php endif; ?>
</div>

