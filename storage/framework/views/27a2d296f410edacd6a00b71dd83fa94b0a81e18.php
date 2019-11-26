<!--Hérite du view app - le commun-->

<?php $__env->startSection('content'); ?>

<!-- Main content -->
<section class="content">
        <div class="box box-success">
    <div class="box-header">
        <h3 class="box-title">Liste des Hôtels </h3>
        <div class="box-tools pull-right">
            <a href="<?php echo e(asset('hotels/create')); ?>" class="btn btn-success"><i class="fa fa-plus"></i></a>
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
                    <!--Lattitude et Longitude sont inutiles dans l'index-->
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $tsHotels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><img src="<?php echo e(asset('storage/hotels')); ?>/<?php echo e($hotel->logo); ?>" class="direct-chat-img" alt="User Image">
                        </td>
                    <td><?php echo e($hotel->nom); ?></td>
                    <td><?php echo e($hotel->responsable); ?></td>
                    <td><?php echo e($hotel->mobileresp); ?></td>
                    <td><?php echo e($hotel->telfixe); ?></td>
                    <td><?php echo e($hotel->email); ?></td>
                    <td><?php echo $hotel->adresse; ?></td>
                    <td>
                        <a href="hotels/<?php echo e($hotel->id); ?>/edit" class="btn btn-warning btn-xs">
                            <i class="glyphicon glyphicon-log-out"></i></a>

                        <a type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-supp-<?php echo e($hotel->id); ?>">
                            <i class="glyphicon glyphicon-trash"></i>
                        </a>
                        <div class="modal modal-danger fade" id="modal-supp-<?php echo e($hotel->id); ?>">
                            <?php echo Form::open(['action' => ['hotelController@destroy',
                            $hotel->id],'method'=>'DELETE']); ?>

                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Suppression Hôtel</h4>
                                    </div>
                                    <div class="modal-body"
                                        style="color:#D33724!important;background-color: white!important">
                                        <p>Etes vous sûr(e) de vouloir supprimer l'hôtel <?php echo e($hotel->nom); ?> ?</p>
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
                    <?php echo e($tsHotels->links()); ?>

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

<?php echo $__env->make("layout.inc.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\transfert\resources\views/hotels/index.blade.php ENDPATH**/ ?>