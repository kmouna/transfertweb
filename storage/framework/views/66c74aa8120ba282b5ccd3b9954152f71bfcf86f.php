<?php $__env->startSection('content'); ?>

<section class="content-header">
    <h1>
        Modification Chauffeur
        <small>Modifier un Chauffeur</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Modification Chauffeur</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-solid box-warning">
                <div class="box-header">
                    <h3 class="box-title">Modification d'un Chauffeur</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">

                            <?php echo Form::open(['action' => ['chauffeurController@update',$unChauffeur->id],
                            'method' => 'PUT', 'enctype'=>'multipart/form-data']); ?>

                            <div class="form-group">
                                <?php echo Form::label('nom', 'Nom'); ?>

                                <?php echo Form::text('nom',$unChauffeur->nom, ['class' => 'form-control', 'placeholder' =>
                                'Nom Chauffeur','required' => 'required']); ?>

                            </div>
                            <div class="form-group">
                                <?php echo Form::label('prenom', 'Prénom'); ?>

                                <?php echo Form::text('prenom',$unChauffeur->prenom, ['class' => 'form-control', 'placeholder'
                                => 'Prénom Chauffeur','required' => 'required']); ?>

                            </div>
                            <div class="form-group">
                                <?php echo Form::label('datenais', 'Date de naissance'); ?>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <?php echo Form::date('datenais',$unChauffeur->datenais, ['class' =>
                                    'form-control','id'=>'datepicker','required' => 'required']); ?>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?php echo Form::label('mobile', 'Mobile'); ?>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-phone"></i>
                                    </div>
                                    <?php echo Form::text('mobile',$unChauffeur->mobile, ['class' => 'form-control','pattern'
                                    => '[0-9]{8}','placeholder' => 'N° Mobile','required' => 'required']); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('email', 'Email'); ?>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-envelope"></i>
                                    </div>
                                    <?php echo Form::email('email',$unChauffeur->email, ['class' => 'form-control','pattern' =>
                                    '[A-za-z0-9_\-]+[@][A-za-z]+[\.][A-za-z]+','placeholder' =>
                                    'chauffeur@email.com','required' => 'required']); ?>

                                </div>
                            </div>
                            <!--div class="form-group col-md-6">
                                {--!! Form::label('motpasse', 'Mot de passe') !!--}
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                    {--!! Form::password ('motpasse', ['class' => 'form-control',
                                    'required' => 'required']) !!--}
                                </div>
                            </div-->

                            <div class="form-group">
                                <?php echo Form::label('photo', 'Photo'); ?>


                                <div class="input-group">

                                    <div class="input-group-addon">
                                        <?php echo Form::file('photo', ['class' => 'form-control',
                                        'onchange'=>'previewFile()']); ?>

                                    </div>

                                    <div class="input-group-addon">
                                        <img src="<?php echo e(asset('storage/chauffeurs')); ?>/<?php echo e($unChauffeur->photo); ?>"
                                            id="previewImg" class="direct-chat-img" alt="Aperçu chauffeur photo" />
                                        <?php echo e(Form::hidden('cachenomphoto',$unChauffeur->photo,
                                        ['class' => 'form-control'])); ?>

                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group">
                                <?php echo Form::label('adresse', 'Adresse'); ?>

                                <?php echo Form::textarea('adresse',$unChauffeur->adresse, ['class' => 'form-control
                                textarea']); ?>

                            </div>
                            <div class="form-group">
                                <?php echo Form::submit('Modifier', ['class' => 'btn btn-warning']); ?>

                            </div>
                        </div>
                        <?php echo Form::close(); ?>


                    </div>
                </div> <!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col -->
    </div> <!-- /.row -->
</section> <!-- /.content -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.inc.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\transfert\resources\views/chauffeurs/edit.blade.php ENDPATH**/ ?>