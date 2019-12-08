<header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>T</b>R<b>S</b>F</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Trans<b>FERT</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- Notifications: style can be found in dropdown.less -->

          <!-- Tasks: style can be found in dropdown.less -->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo e(asset('storage/users')); ?>/<?php echo e(Auth::user()->photo); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo e(Auth::user()->name); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo e(asset('storage/users')); ?>/<?php echo e(Auth::user()->photo); ?>" class="img-circle" alt="User Image">

                <p>
                    <?php echo e(Auth::user()->name); ?>

                  <!--small>Member since Nov. 2012</small-->
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">

                <div class="pull-right">
                  <a class="btn btn-default btn-flat" href="<?php echo e(route('logout')); ?>"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   <?php echo e(__('Se déconnecter')); ?>

               </a>

               <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                   <?php echo csrf_field(); ?>
               </form>
                </div>

              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a  data-toggle="control-sidebar"></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
<?php /**PATH F:\xampp\htdocs\transfert\resources\views/layout/inc/entete.blade.php ENDPATH**/ ?>