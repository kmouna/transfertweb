<?php $__env->startSection('content'); ?>

<section class="content-header">
    <h1>
        Nouveau Transfert
        <small>Créer un Nouveau Transfert</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Nouveau Transfert</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-solid box-success">
                <div class="box-header">
                    <h3 class="box-title">Nouveau Transfert</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">
                    <?php echo Form::open(['action' => 'transfertController@store', 'method' => 'POST']); ?>


                    <!---->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <?php echo Form::label('id_chauffeur', 'Chauffeur'); ?>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-bus"></i>
                                    </div>
                                    <?php echo Form::select('id_chauffeur',$tschauffeurs,null,['class' => 'form-control']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?php echo Form::label('date', 'Date'); ?>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <?php echo Form::date('date','', ['class' =>
                                    'form-control','id'=>'datepicker','required'
                                    => 'required']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?php echo Form::label('origine', 'Origine'); ?>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-hand-o-right"></i>
                                    </div>
                                    <?php echo Form::select('origine',['Aéroport'=>'Aéroport', 'Hôtel'=>'Hôtel'],null, ['class'
                                    => 'form-control']); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <?php echo Form::label('heure_d', 'Départ'); ?>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-time"></i>
                                    </div>
                                    <?php echo Form::time('heure_d','', ['class' =>
                                    'form-control',
                                    'required' => 'required']); ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?php echo Form::label('heure_a', 'Arrivée'); ?>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-time"></i>
                                    </div>
                                    <?php echo Form::time('heure_a','',['class' => 'form-control' ]); ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <?php echo Form::label('nbpersonnes', 'Nombre Personnes'); ?>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <?php echo e(Form::text('nbpersonnes','0', ['class' => 'form-control','readonly' => 'true'])); ?>

                                </div>
                            </div>
                        </div>
                    </div>

                    <?php echo Form::submit('Ajouter', ['class' => 'btn btn-success']); ?>

                </div> <!-- /.box-body -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">

                        </div>
                    </div>

                </div>
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div> <!-- /.row -->
    <?php echo Form::close(); ?>

</section> <!-- /.content -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.inc.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\transfert\resources\views/transferts/create.blade.php ENDPATH**/ ?>