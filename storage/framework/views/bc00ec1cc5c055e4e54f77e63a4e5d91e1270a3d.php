<!--Hérite du view app - le commun-->

<?php $__env->startSection('content'); ?>
<!-- début de la section content-->

<!-- Main content -->
<section class="content">
<div class="box box-success">
    <div class="box-header">
        <h3 class="box-title">Liste des Chauffeurs </h3>
        <div class="box-tools pull-right">
            <a href="chauffeurs/create" class="btn btn-success"><i class="fa fa-plus"></i></a>
        </div>

    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>N° Mobile</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $tsChauffeurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chauffeur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><img src="<?php echo e(asset('storage/chauffeurs')); ?>/<?php echo e($chauffeur->photo); ?>" class="direct-chat-img"
                            alt="Chauffeur photo">

                        </td>
                    <td><?php echo e($chauffeur->nom); ?></td>
                    <td><?php echo e($chauffeur->prenom); ?></td>
                    <td><?php echo e($chauffeur->datenais); ?></td>
                    <td><?php echo e($chauffeur->mobile); ?></td>
                    <td><?php echo e($chauffeur->email); ?></td>
                    <td><?php echo $chauffeur->adresse; ?></td>
                    <td>
                        <a href="chauffeurs/<?php echo e($chauffeur->id); ?>/edit" class="btn btn-warning btn-xs">
                            <i class="glyphicon glyphicon-log-out"></i>
                        </a>
                        <a type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-supp-<?php echo e($chauffeur->id); ?>">
                            <i class="glyphicon glyphicon-trash"></i>
                        </a>
                        <div class="modal modal-danger fade" id="modal-supp-<?php echo e($chauffeur->id); ?>">
                            <?php echo Form::open(['action' => ['chauffeurController@destroy',
                            $chauffeur->id],'method'=>'DELETE']); ?>

                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" >Suppression Chauffeur</h4>
                                    </div>
                                    <div class="modal-body" style="color:#D33724!important;background-color: white!important">
                                    <p>Etes vous sûr(e) de vouloir supprimer le chauffeur <?php echo e($chauffeur->prenom); ?> <?php echo e($chauffeur->nom); ?> ?</p>
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
                    <?php echo e($tsChauffeurs->links()); ?>

                </tr>

            </tbody>
            <tfoot>
                <tr>
                    <th>Photo</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>N° Mobile</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.box-body -->
</div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout.inc.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\transfert\resources\views/chauffeurs/index.blade.php ENDPATH**/ ?>