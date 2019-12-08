<?php $__env->startSection('content'); ?>

<section class="content-header">
    <h1>
        Détails Transfert
        <small>Planning du Transfert</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Détails Transfert</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-solid box-success">
                <div class="box-header">
                    <h3 class="box-title">Données </h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">

                    <?php $idtransclic = 0; ?>
                    <!---->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">

                                <?php echo Form::label('id_chauffeur', 'Chauffeur'); ?>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-bus"></i>
                                    </div>
                                    <?php $np = $leChauffeur->prenom . ' ' . $leChauffeur->nom;?>
                                    <?php echo Form::text('id_chauffeur', $np, ['class' => 'form-control', 'readonly'=>'true']); ?>


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
                                    <?php echo Form::date('date',$leTransfert->date, ['class' =>
                                    'form-control','readonly'=>'true','required'
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
                                    <?php echo Form::text('origine',$leTransfert->origine, ['class'
                                    => 'form-control', 'readonly' => 'true']); ?>

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
                                    <?php echo Form::time('heure_d',$leTransfert->heure_d,
                                    ['id'=>'hdepTransGlobal','class' =>'form-control','readonly' => 'true']); ?>

                                    <!-- à corriger lors de la mise à jour : il vaut mieux qu'elle soit à part-->
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
                                    <?php echo Form::time('heure_a',$leTransfert->heure_a,
                                    ['id'=>'harrTransGlobal','class' => 'form-control', 'readonly' => 'true' ]); ?>

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
                                    <?php echo e(Form::text('nbpersonnes',$leTransfert->nbpersonnes, ['class' => 'form-control',
                                    'id'=>'nbp','readonly' => 'true'])); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <hr />
                            <div class="box box-solid box-warning">
                                <div class="box-header">
                                    <h4 class="box-title">Planning </h4>
                                </div>
                            </div>
                            <!-- Afficher tout ce qui est sélectionné du bas -->
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Date </th>
                                        <th>N° Vol</th>
                                        <th>Heure Vol</th>
                                        <th>Départ</th>
                                        <th>Arrivée</th>
                                        <th>Retardé</th>
                                        <!--th>Départ RTD.</th>
                                        <th>Arrivée RTD.</th-->
                                        <th>Hôtel </th>
                                        <th>Agence </th>
                                        <th>Nb. Pers.</th>

                                    </tr>
                                </thead>
                                <tbody>


                                    <?php $__currentLoopData = $ttesLignes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ligne): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($ligne->date_trans); ?></td>
                                        <td><?php echo e($ligne->id_vol); ?></td>
                                        <td><?php echo e($ligne->heure_trans); ?></td>
                                        <td><?php echo e($ligne->heure_d); ?></td>
                                        <td><?php echo e($ligne->heure_a); ?></td>
                                        <?php if( $ligne->heure_d_retard != '00:00:00'): ?>
                                        <td style="font-weight:bold;color:red">Oui</td>
                                        <?php else: ?>
                                        <td>Non</td>
                                        <?php endif; ?>
                                        <!--td><?php echo e($ligne->heure_d_retard); ?></td>
                                        <td><?php echo e($ligne->heure_a_retard); ?></td-->
                                        <td><?php echo e($ligne->nom_hotel); ?></td>
                                        <td><?php echo e($ligne->nom_agence); ?></td>
                                        <td><?php echo e($ligne->nbperso); ?></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Date </th>
                                        <th>N° Vol</th>
                                        <th>Heure Vol</th>
                                        <th>Départ</th>
                                        <th>Arrivée</th>
                                        <th>Retardé</th>
                                        <!--th>Départ RTD.</th>
                                        <th>Arrivée RTD.</th-->
                                        <th>Hôtel </th>
                                        <th>Agence </th>
                                        <th>Nb. Pers.</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <hr />
                            <div class="box box-solid box-primary">
                                <div class="box-header">
                                    <h4 class="box-title">Arrêts à Ajouter</h4>
                                </div>
                            </div>
                            <!--Sélectionner des transferts intermédiaires-->
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Date </th>
                                        <th>N° Vol</th>
                                        <th>Heure Vol</th>
                                        <th>Départ</th>
                                        <th>Arrivée</th>
                                        <th>Origine</th>
                                        <th>Hôtel </th>
                                        <th>Agence </th>
                                        <th>Nb. Pers.</th>
                                        <th>Ajout au Transfert</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $__currentLoopData = $tsTransfertsOrigineEnAttente; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unTransInter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <?php echo e(Form::open(['action' => ['transIntermediaireController@update',$unTransInter->id], 'method' => 'PUT'])); ?>

                                    <?php echo Form::hidden('id_transfert_recup',$leTransfert->id, ['class' => 'form-control']); ?> <tr>
                                        <td><?php echo e($unTransInter->date_trans); ?></td>
                                        <td><?php echo e($unTransInter->id_vol); ?></td>
                                        <td><?php echo e($unTransInter->heure_trans); ?></td>
                                        <td> <?php echo e(Form::time('heure_d_modif',$unTransInter->heure_d, ['class' => 'form-control',
                                            'required'=>'required'])); ?>

                                        </td>
                                        <td> <?php echo e(Form::time('heure_a_modif',$unTransInter->heure_a, ['class' => 'form-control',
                                            'required'=>'required'])); ?>

                                        </td>
                                        <td><?php echo e($unTransInter->origine); ?></td>
                                        <td><?php echo e($unTransInter->nom_hotel); ?></td>
                                        <td><?php echo e($unTransInter->nom_agence); ?></td>
                                        <td class="text-right"><?php echo e($unTransInter->nbperso); ?>

                                            <?php echo e(Form::hidden('cachenbperso',$unTransInter->nbperso,
                                                ['class' => 'form-control','id'=>'tdnbp'])); ?>

                                        </td>
                                        <td>
                                            <div class="box-tools text-center">
                                                <!--?php $idtransclic = $unTransInter->id; ?-->
                                                <!-- ça marche pas la mise à jour jquery change-->
                                                <!-- à corriger lors de la mise à jour : il vaut mieux qu'elle soit à part-->
                                                
                                                <?php echo e(Form::hidden('cachenbpTotal',$leTransfert->nbpersonnes,
                                                ['class' => 'form-control','id'=>'nbpTotal'])); ?>


                                                <a href="#">
                                                    <?php echo e(Form::button('<i class="fa fa-plus"></i>',
                                                ['type' => 'submit','id'=>'btplus','class' => 'btn btn-primary btn-xs'] )); ?>


                                                    <?php echo e(Form::close()); ?>

                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Date </th>
                                        <th>N° Vol</th>
                                        <th>Heure Vol</th>
                                        <th>Départ</th>
                                        <th>Arrivée</th>
                                        <th>Origine</th>
                                        <th>Hôtel </th>
                                        <th>Agence </th>
                                        <th>Nb. Pers.</th>
                                        <th>Ajout au Transfert</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <?php echo Form::open(['action' => ['transfertController@index'], 'method' => 'GET']); ?>

                            <?php echo Form::submit('Confirmer', ['class' => 'btn btn-success']); ?>

                            <?php echo Form::close(); ?>

                        </div>

                    </div>
                </div> <!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div> <!-- /.row -->

</section> <!-- /.content -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.inc.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\transfert\resources\views/transferts/show.blade.php ENDPATH**/ ?>