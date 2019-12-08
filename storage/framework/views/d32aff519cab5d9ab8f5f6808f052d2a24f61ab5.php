<?php $__env->startSection('content'); ?>

<section class="content-header">
    <h1>
        Nouvel Hôtel
        <small>Ajouter un Nouvel Hôtel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Ajout Hôtel</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-solid box-success">
                <div class="box-header">
                    <h3 class="box-title">Ajout d'un Hôtel</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <?php echo Form::open(['action' => 'hotelController@store', 'method' => 'POST','enctype'=>'multipart/form-data']); ?>

                            <div class="form-group">
                                <?php echo Form::label('nom', 'Nom'); ?>

                                <?php echo Form::text('nom','', ['class' => 'form-control', 'placeholder' => 'Nom Hôtel',
                                'required' => 'required']); ?>

                            </div>
                            <div class="form-group">
                                <?php echo Form::label('responsable', 'Responsable'); ?>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                            <i class="fa fa-user-o"></i>
                                    </div>
                                    <?php echo Form::text('responsable','', ['class' => 'form-control', 'placeholder' =>
                                    'Nom Responsable','required' => 'required']); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <?php echo Form::label('mobileresp', 'N° Mobile Resp.'); ?>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-phone"></i>
                                    </div>
                                    <?php echo Form::text('mobileresp','', ['class' => 'form-control','pattern' =>
                                    '[0-9]{8}','placeholder' => 'N° Mobile Responsable',
                                    'required' => 'required']); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                    <?php echo Form::label('telfixe', 'N°Tél. Fixe'); ?>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="glyphicon glyphicon-phone-alt"></i>
                                        </div>
                                        <?php echo Form::text('telfixe','', ['class' => 'form-control','pattern' =>
                                        '[0-9]{8}','placeholder' => 'N° Tél. Fixe Hôtel','required' => 'required']); ?>

                                    </div>
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?php echo Form::label('lattitude', 'Lattitude'); ?>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <?php echo Form::text('lattitude','', ['class' => 'form-control',
                                    'placeholder' => 'Coordonnées Lattitude Hôtel','required' => 'required']); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                    <?php echo Form::label('longitude', 'Longitude'); ?>

                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <?php echo Form::text('longitude','', ['class' => 'form-control',
                                        'placeholder' => 'Coordonnées Longitude Hôtel','required' => 'required']); ?>

                                    </div>
                                </div>
                            <div class="form-group">
                                <?php echo Form::label('email', 'Email'); ?>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-envelope"></i>
                                    </div>
                                    <?php echo Form::email('email','', ['class' => 'form-control','pattern' =>
                                    '[A-za-z0-9_\-]+[@][A-za-z]+[\.][A-za-z]+','placeholder' =>
                                    'hotel@email.com','required' => 'required']); ?>

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
                                        <img src="<?php echo e(asset('admin/dist/img/hotel-logo.png')); ?>"
                                        id="previewImg" class="direct-chat-img"
                                            alt="Aperçu logo hotel" />

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

                                <?php echo Form::textarea('adresse','', ['class' => 'form-control textarea']); ?>

                            </div>
                            <div class="form-group">
                                <?php echo Form::submit('Ajouter', ['class' => 'btn btn-success']); ?>

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

<?php echo $__env->make('layout.inc.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\transfert\resources\views/hotels/create.blade.php ENDPATH**/ ?>