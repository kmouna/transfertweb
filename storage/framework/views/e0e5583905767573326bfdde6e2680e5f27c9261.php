<?php $__env->startSection('content'); ?>

<section class="content-header">
    <h1>
        Modification Agence de Voyage
        <small>Modifier une Agence de Voyage</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Modification Agence de Voyage</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-solid box-warning">
                <div class="box-header">
                    <h3 class="box-title">Modification d'une Agence de Voyage</h3>
                </div>
                <!-- /.box-header -->


                <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <?php echo Form::open(['action' => ['agenceController@update',$uneAgence->id],
                                'method' => 'PUT', 'enctype'=>'multipart/form-data']); ?>

                                <div class="form-group">
                                    <?php echo Form::label('nom', 'Nom'); ?>

                                    <?php echo Form::text('nom',$uneAgence->nom, ['class' => 'form-control', 'placeholder' => 'Nom Agence',
                                    'required' => 'required']); ?>

                                </div>
                                <div class="form-group">
                                    <?php echo Form::label('responsable', 'Responsable'); ?>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                                <i class="fa fa-user-o"></i>
                                        </div>
                                        <?php echo Form::text('responsable',$uneAgence->Responsable, ['class' => 'form-control', 'placeholder' =>
                                        'Nom Responsable','required' => 'required']); ?>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <?php echo Form::label('mobile', 'N° Mobile Resp.'); ?>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="glyphicon glyphicon-phone"></i>
                                        </div>
                                        <?php echo Form::text('mobile',$uneAgence->mobile, ['class' => 'form-control','pattern' =>
                                        '[0-9]{8}','placeholder' => 'N° Mobile Responsable',
                                        'required' => 'required']); ?>

                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label('telfixe', 'N°Tél. Fixe'); ?>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="glyphicon glyphicon-phone-alt"></i>
                                        </div>
                                        <?php echo Form::text('telfixe',$uneAgence->telFixe, ['class' => 'form-control','pattern' =>
                                        '[0-9]{8}','placeholder' => 'N° Tél. Fixe Agence','required' => 'required']); ?>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <?php echo Form::label('email', 'Email'); ?>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="glyphicon glyphicon-envelope"></i>
                                        </div>
                                        <?php echo Form::email('email',$uneAgence->email, ['class' => 'form-control','pattern' =>
                                        '[A-za-z0-9_\-]+[@][A-za-z]+[\.][A-za-z]+','placeholder' =>
                                        'Agence@email.com','required' => 'required']); ?>

                                    </div>
                                </div>
                                <div class="form-group">
                                        <?php echo Form::label('logo', 'Logo'); ?>


                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <?php echo Form::file('logo', ['class' => 'form-control',
                                                'onchange'=>'previewFile()']); ?>

                                            </div>
                                            <div class="input-group-addon">
                                                <img src="<?php echo e(asset('storage/agences')); ?>/<?php echo e($uneAgence->logo); ?>" id="previewImg"
                                                    class="direct-chat-img" alt="Agence logo" />
                                                    <?php echo e(Form::hidden('cachenomlogoagence',$uneAgence->logo,
                                                    ['class' => 'form-control'])); ?>

                                            </div>
                                        </div>
                                    </div>
                            </div>
                            </div-->


                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group">
                                    <?php echo Form::label('adresse', 'Adresse'); ?>

                                    <?php echo Form::textarea('adresse',$uneAgence->adresse, ['class' => 'form-control textarea']); ?>

                                </div>
                                <div class="form-group">
                                    <?php echo Form::submit('Modifier', ['class' => 'btn btn-warning']); ?>

                                </div>
                            </div>
                            <?php echo Form::close(); ?>


            </div><!-- /.box -->

        </div><!-- /.col -->
    </div> <!-- /.row -->
</section> <!-- /.content -->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.inc.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\transfert\resources\views/agences/edit.blade.php ENDPATH**/ ?>