<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo e(asset('admin/dist/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo e(Auth::user()->name); ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Connecté(e)</a>
            </div>
        </div>
        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Services</li>
            <li class="active treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-road"></i> <span>Transferts</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo e(asset('transferts/create')); ?>">
                            <i class="fa fa-plus-square"></i> Nouveau </a></li>
                    <li class="active"><a href="<?php echo e(asset('transferts')); ?>">
                            <i class="fa fa-file-text-o"></i>Liste </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bus"></i><span>Chauffeurs</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo e(asset('chauffeurs/create')); ?>"><i class="fa fa-user-plus"></i> Nouveau
                        </a></li>
                    <li><a href="<?php echo e(asset('chauffeurs')); ?>"><i class="fa fa-file-text-o"></i> Liste </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-suitcase"></i> <span>Agences de Voyage</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo e(asset('agences/create')); ?>"><i class="fa fa-medkit"></i> Nouvelle </a></li>
                    <!--li class="active"><a href="<?php echo e(asset('transfertsIntermediaires/create')); ?>"><i
                                class="glyphicon glyphicon-random"></i> Demande Transfert </a></li-->
                    <li><a href="<?php echo e(asset('agences')); ?>"><i class="fa fa-file-text-o"></i> Liste </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-building-o"></i> <span>Hôtels</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo e(asset('hotels/create')); ?>"><i class="fa fa-plus-square"></i> Nouveau
                        </a></li>
                    <li><a href="<?php echo e(asset('hotels')); ?>"><i class="fa fa-file-text-o"></i> Liste </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-random"></i> <span>Demande Transfert</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo e(asset('transfertsIntermediaires/create')); ?>"><i
                                class="fa fa-user-plus"></i> Nouvelle </a></li>
                    <li class="active"><a href="<?php echo e(asset('transfertsIntermediaires/1/indexetats')); ?>"><i
                                class="glyphicon glyphicon-time"></i> En attente </a></li>
                    <li><a href="<?php echo e(asset('transfertsIntermediaires/2/indexetats')); ?>"><i class="fa fa-calendar-minus-o"></i>
                            Planifiée(s) </a></li>
                    <li><a href="<?php echo e(asset('transfertsIntermediaires/3/indexetats')); ?>"><i class="fa fa-calendar-check-o"></i>
                            Réalisée(s) </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Utilisateurs</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="#"><i class="fa fa-user"></i> Nouveau </a></li>
                    <li><a href="#"><i class="fa fa-file-text-o"></i> Liste </a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bell"></i> <span>Notifications</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="#"><i class="fa fa-plus-circle"></i>
                            Nouvelle </a></li>
                    <li><a href="#"><i class="fa fa-file-text-o"></i> Liste </a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<?php /**PATH F:\xampp\htdocs\transfert\resources\views/layout/inc/colgche.blade.php ENDPATH**/ ?>