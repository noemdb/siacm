<?php $__env->startSection('body'); ?>
    <div class="container">
        <div class="row" style="margin-top: 25px;">
            <div class="col-md-4 col-md-offset-4 centered">
                <?php $__env->startComponent('admin.widgets.panel'); ?>
                    <?php $__env->slot('panelTitle', 'Please Sign In'); ?>
                    <?php $__env->slot('panelBody'); ?>
                        <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">

                            <div class="col-md-12">
                                <label for="email" class="control-label">E-Mail Address</label>
                                

                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">@</span>
                                  <input type="text" class="form-control" id="email" name="email" placeholder="email" aria-describedby="basic-addon1" value="<?php echo e(old('email')); ?>" required>
                                </div>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            

                            <div class="col-md-12">
                                <label for="password" class="control-label">Password</label>
                                

                                <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1">
                                    <i class="fa fa-key" aria-hidden="true"></i>
                                  </span>
                                  <input type="password" class="form-control" id="password" name="password" placeholder="password" aria-describedby="basic-addon1" required>
                                </div>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-success btn-block">
                                        Login
                                    </button>
                                    <br>
                                    <a class="btn-link" href="#">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>
                    <?php $__env->endSlot(); ?>
                <?php echo $__env->renderComponent(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>