<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Transfert Touristique | Tableau de bord</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/bower_components/font-awesome/css/font-awesome.min.css')); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/bower_components/Ionicons/css/ionicons.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/dist/css/AdminLTE.min.css')); ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/dist/css/skins/_all-skins.min.css')); ?>">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/bower_components/morris.js/morris.css')); ?>">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/bower_components/jvectormap/jquery-jvectormap.css')); ?>">
    <!-- Date Picker -->
    <link rel="stylesheet"
        href="<?php echo e(asset('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')); ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/bower_components/bootstrap-daterangepicker/daterangepicker.css')); ?>">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php echo $__env->make('layout.inc.entete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Left side column. contains the logo and sidebar -->
        <?php echo $__env->make('layout.inc.colgche', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            <?php echo $__env->make('layout.mess', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-------------------------------------------------------->
            <?php echo $__env->yieldContent('content'); ?>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php echo $__env->make('layout.inc.pied', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Control Sidebar -->

        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <!--script src="https://kit.fontawesome.com/958bd9205b.js" ></script-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>

    <script src="<?php echo e(asset('admin/bower_components/jquery/dist/jquery.min.js')); ?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo e(asset('admin/bower_components/jquery-ui/jquery-ui.min.js')); ?>"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo e(asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
    <!-- Morris.js charts -->
    <script src="<?php echo e(asset('admin/bower_components/raphael/raphael.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/bower_components/morris.js/morris.min.js')); ?>"></script>
    <!-- Sparkline -->
    <script src="<?php echo e(asset('admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')); ?>"></script>
    <!-- jvectormap -->
    <script src="<?php echo e(asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo e(asset('admin/bower_components/jquery-knob/dist/jquery.knob.min.js')); ?>"></script>
    <!-- daterangepicker -->
    <script src="<?php echo e(asset('admin/bower_components/moment/min/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/bower_components/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>
    <!-- datepicker -->
    <script src="<?php echo e(asset('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')); ?>"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo e(asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')); ?>"></script>
    <!-- Slimscroll -->
    <script src="<?php echo e(asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo e(asset('admin/bower_components/fastclick/lib/fastclick.js')); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo e(asset('admin/dist/js/adminlte.min.js')); ?>"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo e(asset('admin/dist/js/pages/dashboard.js')); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo e(asset('admin/dist/js/demo.js')); ?>"></script>
    <script>
        $(document).ready(function() {
         //this calculates values automatically
         $("#btplus").on("click", function() {
             //alert('hello plus');
              ajoutnbpersonnes();
         });
         $("#hdepTransGlobal").on("keydown keyup", function(){
            var x = document.getElementById('hdepTransGlobal').value;
            document.getElementById('departTransglobal').value = x;
         });
         $("#harrTransGlobal").on("keydown keyup", function(){
                   var y = document.getElementById('harrTransGlobal').value ;
                   document.getElementById('arriveeTransglobal').value =  y;
         });

      });

      function ajoutnbpersonnes() {
        //  alert('hello ajout');
        var nbp_initial = document.getElementById('nbp').value;
        //alert('hello '+ nbp_initial);
        var nbp_intermediaire = document.getElementById('tdnbp').value;
        //alert('hello' + nbp_intermediaire);
        var result = parseInt(nbp_initial) + parseInt(nbp_intermediaire);
        //alert('hello' + result);
        if (!isNaN(result))
        {
          document.getElementById('nbp').value = result;
          document.getElementById('nbpTotal').value = result;

        }
      }
    </script>
</body>

</html>
<?php /**PATH F:\xampp\htdocs\transfert\resources\views/layout/inc/app.blade.php ENDPATH**/ ?>