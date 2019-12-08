<?php $__env->startSection('content'); ?>

<!-- Main content -->
<section class="content">
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">Liste des Transferts</h3>
            <div class="box-tools pull-right">
                <a href="<?php echo e(asset('transferts/create')); ?>" class="btn btn-success"><i class="fa fa-plus"></i></a>
            </div>

        </div>
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Chauffeur</th>
                        <th>Départ</th>
                        <th>Arrivée</th>
                        <th>Origine</th>
                        <th>Retardé </th>
                        <th>Nb. Pers.</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $tsTransferts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unTransfert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($unTransfert->date); ?></td>
                        <td><?php echo e($unTransfert->prenom); ?> <?php echo e($unTransfert->nom); ?></td>
                        <td><?php echo e($unTransfert->heure_d); ?></td>
                        <td><?php echo e($unTransfert->heure_a); ?></td>
                        <td><?php echo e($unTransfert->origine); ?></td>
                        <?php if($unTransfert->retarde == 1): ?>
                        <td style="font-weight:bold;color:red">Oui</td>
                        <?php else: ?>
                        <td>Non</td>
                        <?php endif; ?>
                        <td><?php echo e($unTransfert->nbpersonnes); ?></td>
                        <td>
                            <a href="transferts/<?php echo e($unTransfert->id); ?>" class="btn btn-warning btn-xs">
                                <!--appel à show-->
                                <i class="glyphicon glyphicon-log-out"></i>
                            </a>
                                <!--Affichage du bouton pour le retard-->

                            <?php if($unTransfert->origine == 'Aéroport'): ?>

                            <!--a href="<?php echo e(asset('transferts')); ?>/<?php echo e($unTransfert->id); ?>/edit" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-time"></i></a-->
                            <a type="button" class="btn btn-primary btn-xs" data-toggle="modal"
                                data-target="#modal-retard-<?php echo e($unTransfert->id); ?>">
                                <i class="glyphicon glyphicon-time"></i>
                            </a>
                            <div class="modal modal-primary fade" id="modal-retard-<?php echo e($unTransfert->id); ?>">
                                <?php echo Form::open(['action' => ['transfertController@update',
                                $unTransfert->id],'method'=>'PUT']); ?>

                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Retard du Transfert</h4>
                                        </div>
                                        <div class="modal-body"
                                            style="color:#367FA9!important;background-color: white!important">
                                            <p>Etes vous sûr(e) de confirmer le retard de ce transfert ?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline pull-left"
                                                data-dismiss="modal">Non</button>
                                            <button type="submit" class="btn btn-outline">Oui</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                                <?php echo Form::close(); ?>

                            </div>
                            <!-- /.modal -->

                            <?php endif; ?>

                            <a type="button" class="btn btn-danger btn-xs" data-toggle="modal"
                                data-target="#modal-supp-<?php echo e($unTransfert->id); ?>">
                                <i class="glyphicon glyphicon-trash"></i>
                            </a>

                            <div class="modal modal-danger fade" id="modal-supp-<?php echo e($unTransfert->id); ?>">
                                <?php echo Form::open(['action' => ['transfertController@destroy',
                                $unTransfert->id],'method'=>'DELETE']); ?>

                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Suppression Transfert</h4>
                                        </div>
                                        <div class="modal-body"
                                            style="color:#D33724!important;background-color: white!important">
                                            <p>Etes vous sûr(e) de vouloir supprimer ce transfert ?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline pull-left"
                                                data-dismiss="modal">Non</button>
                                            <button type="submit" class="btn btn-outline">Oui</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->

                            </div>
                            <!-- /.modal -->
                            <?php echo Form::close(); ?>



                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Date</th>
                        <th>Chauffeur</th>
                        <th>Départ</th>
                        <th>Arrivée</th>
                        <th>Origine</th>
                        <th>Retardé </th>
                        <th>Nb. Pers.</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.inc.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\transfert\resources\views/transferts/index.blade.php ENDPATH**/ ?>