<!--Hérite du view app - le commun-->

<?php $__env->startSection('content'); ?>

<!-- Main content -->
<section class="content">
    <div class="box box-success">
    <div class="box-header">
        <h3 class="box-title">Liste des Agences de Voyage </h3>
        <div class="box-tools pull-right">
            <a href="<?php echo e(asset('agences/create')); ?>" class="btn btn-success"><i class="fa fa-plus"></i></a>
        </div>

    </div>
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Logo</th>
                    <th>Nom</th>
                    <th>Responsable</th>
                    <th>N° Mobile Resp.</th>
                    <th>N°Tél. Fixe</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $ttesAgences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agence): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><img src="<?php echo e(asset('storage/agences')); ?>/<?php echo e($agence->logo); ?>" class="direct-chat-img" alt="Agence logo">
                        </td>
                    <td><?php echo e($agence->nom); ?></td>
                    <td><?php echo e($agence->Responsable); ?></td>
                    <td><?php echo e($agence->mobile); ?></td>
                    <td><?php echo e($agence->telFixe); ?></td>
                    <td><?php echo e($agence->email); ?></td>
                    <td><?php echo $agence->adresse; ?></td>
                    <td>
                        <a href="agences/<?php echo e($agence->id); ?>/edit" class="btn btn-warning btn-xs">
                            <i class="glyphicon glyphicon-log-out"></i></a>

                        <a type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-supp-<?php echo e($agence->id); ?>">
                            <i class="glyphicon glyphicon-trash"></i>
                        </a>
                        <div class="modal modal-danger fade" id="modal-supp-<?php echo e($agence->id); ?>">
                            <?php echo Form::open(['action' => ['agenceController@destroy',
                            $agence->id],'method'=>'DELETE']); ?>

                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Suppression Agence</h4>
                                    </div>
                                    <div class="modal-body"
                                        style="color:#D33724!important;background-color: white!important">
                                        <p>Etes vous sûr(e) de vouloir supprimer l'agence <?php echo e($agence->nom); ?> ?</p>
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
                    <?php echo e($ttesAgences->links()); ?>

                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>Logo</th>
                    <th>Nom</th>
                    <th>Responsable</th>
                    <th>N° Mobile Resp.</th>
                    <th>N°Tél. Fixe</th>
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

<?php echo $__env->make("layout.inc.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\transfert\resources\views/agences/index.blade.php ENDPATH**/ ?>