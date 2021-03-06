<?php $__env->startSection('body'); ?>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            
            <!-- .navbar-header -->
            <?php echo $__env->make('admin.layouts.partials.navbar-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle alert-primary" data-toggle="dropdown" href="#">
                        <span class="label label-primary">
                            <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle alert-info" data-toggle="dropdown" href="#">
                        <span class="label label-info">
                            <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>

                                    <div>
                                        <?php echo $__env->make('admin.widgets.progress', array('animated'=> true, 'class'=>'success', 'value'=>'40'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>

                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>

                                    <div>
                                        <?php echo $__env->make('admin.widgets.progress', array('animated'=> true, 'class'=>'info', 'value'=>'20'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        <span class="sr-only">20% Complete</span>
                                    </div>

                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>

                                    <div>
                                        <?php echo $__env->make('admin.widgets.progress', array('animated'=> true, 'class'=>'warning', 'value'=>'60'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>

                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>

                                    <div>
                                        <?php echo $__env->make('admin.widgets.progress', array('animated'=> true,'class'=>'danger', 'value'=>'80'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>

                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle alert-warning" data-toggle="dropdown" href="#">
                        <span class="label label-warning">
                            <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle alert-danger" data-toggle="dropdown" href="#">
                        <span class="label label-danger">
                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo e(url('login')); ?>">
                                <i class="fa fa-sign-out fa-fw"></i> Logout
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo e(url ('dashboard')); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>

                        <li>
                            <a href="#"><i class="ion-pie-graph"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo e(url ('admin/charts/sbadmin')); ?>">
                                        <i class="fa fa-area-chart" aria-hidden="true"></i>
                                        SBAdmin
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="<?php echo e(url ('admin/charts/morris')); ?>">
                                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                        Morris.js
                                    </a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Tables<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo e(url ('admin/tables/simple')); ?>"><i class="fa fa-table fa-fw"></i> Tables</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url ('admin/tables/tableavance')); ?>"><i class="fa fa-table fa-fw"></i> Tables Advance</a>
                                </li>
                            </ul>
                        </li>
                        <li <?php echo e((Request::is('*forms') ? 'class="active"' : '')); ?>>
                            <a href="<?php echo e(url ('admin/forms')); ?>"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li <?php echo e((Request::is('*panels') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('admin/panels')); ?>">Panels and Collapsibles</a>
                                </li>
                                <li <?php echo e((Request::is('*buttons') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('admin/buttons' )); ?>">Buttons</a>
                                </li>
                                <li <?php echo e((Request::is('*notifications') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url('admin/notifications')); ?>">Alerts</a>
                                </li>
                                <li <?php echo e((Request::is('*typography') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('admin/typography')); ?>">Typography</a>
                                </li>
                                <li <?php echo e((Request::is('*icons') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('icons')); ?>"> Icons</a>
                                </li>
                                <li <?php echo e((Request::is('*grid') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('admin/grid')); ?>">Grid</a>
                                </li>
                                <li <?php echo e((Request::is('*progressbars') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('admin/progressbars')); ?>">Progressbars</a>
                                </li>
                                <li <?php echo e((Request::is('*collapse') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('admin/collapse')); ?>">Collapse</a>
                                </li>
                                <li <?php echo e((Request::is('*stats') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('admin/stats')); ?>">Stats</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li <?php echo e((Request::is('*blank') ? 'class="active"' : '')); ?>>
                                    <a href="<?php echo e(url ('admin/blank')); ?>">Blank Page</a>
                                </li>
                                <li>
                                    <a href="<?php echo e(url ('admin/login')); ?>">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li <?php echo e((Request::is('*documentation') ? 'class="active"' : '')); ?>>
                            <a href="<?php echo e(url ('admin/documentation')); ?>"><i class="fa fa-file-word-o fa-fw"></i> Documentation</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $__env->yieldContent('page_heading'); ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <?php echo $__env->yieldContent('section'); ?>
            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>