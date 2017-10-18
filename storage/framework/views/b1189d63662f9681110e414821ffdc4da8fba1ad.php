<div class="panel-group" id="accordion">
    <div class="panel panel-<?php echo e(isset($class) ? $class : 'default'); ?>">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion"
                   href="#collapse<?php echo e($id); ?>">
                    <?php echo e($header); ?>

                </a>
            </h4>
        </div>
        <div id="collapse<?php echo e($id); ?>" class="panel-collapse collapse <?php echo e(isset($collapseIn) ? 'in' : ''); ?>">
            <div class="panel-body">
                <?php echo e($body); ?>

            </div>
        </div>
    </div>
</div>