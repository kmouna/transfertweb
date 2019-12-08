<!--Hérite du view app - le commun-->

<?php $__env->startSection('content'); ?>

<!-- Main content -->
<section class="content">
        <div class="box box-success">
    <div class="box-header">
        <?php
        if($status == 1){
            $etat = 'En attente';
        }
        elseif ($status == 2) {
            $etat = 'Planifiées';
        }
        elseif ($status == 3) {
            $etat = 'Réalisées';
        }
        ?>
        <h3 class="box-title">Liste des Demandes de Transfert <?php echo e($etat); ?> </h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>N° Vol</th>
                    <th>Heure</th>
                    <th>Départ</th>
                    <th>Arrivée</th>
                    <?php if(($etat == "Planifiées")||($etat == "Réalisées")): ?>
                    <th>Retardé</th>
                    <?php endif; ?>
                    <!--th>Dép. RTD</th>
                    <th>Arr. RTD</th-->
                    <th>Origine</th>
                    <th>Hôtel </th>
                    <th>Agence </th>
                    <th>Nb. Pers.</th>
                    <!--th>Sélection</th-->
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $tstransSelonetats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unTransEtat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($unTransEtat->date_trans); ?></td>
                    <td><?php echo e($unTransEtat->id_vol); ?></td>
                    <td><?php echo e($unTransEtat->heure_trans); ?></td>
                    <td><?php echo e($unTransEtat->heure_d); ?></td>
                    <td><?php echo e($unTransEtat->heure_a); ?></td>
                    <?php if(($etat == "Planifiées")||($etat == "Réalisées")): ?>
                        <?php if( $unTransEtat->heure_d_retard != '00:00:00'): ?>
                        <td style="font-weight:bold;color:red">Oui</td>
                        <?php else: ?>
                        <td>Non</td>
                        <?php endif; ?>
                    <?php endif; ?>
                    <!--td class="text-center" style="color:red">
                        <?php if( $unTransEtat->heure_d_retard != 0): ?>
                            <?php echo e($unTransEtat->heure_d_retard); ?>

                        <?php else: ?>
                            --:--
                        <?php endif; ?>
                    </td>
                    <td class="text-center" style="color:red">
                        <?php if( $unTransEtat->heure_a_retard != 0): ?>
                            <?php echo e($unTransEtat->heure_a_retard); ?>

                        <?php else: ?>
                            --:--
                        <?php endif; ?>
                    </td-->
                    <td><?php echo e($unTransEtat->origine); ?></td>
                    <td><?php echo e($unTransEtat->nom_hotel); ?></td>
                    <td><?php echo e($unTransEtat->nom_agence); ?></td>
                    <td><?php echo e($unTransEtat->nbperso); ?></td>
                    <!--td><?php echo Form::checkbox('ids_trans[]', $unTransEtat->id, false, ['class' => 'form-group']); ?>


                    </td-->
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Date</th>
                    <th>N° Vol</th>
                    <th>Heure</th>
                    <th>Départ</th>
                    <th>Arrivée</th>
                    <?php if(($etat == "Planifiées")||($etat == "Réalisées")): ?>
                    <th>Retardé</th>
                    <?php endif; ?>
                    <!--th>Dép. RTD</th>
                    <th>Arr. RTD</th-->
                    <th>Origine</th>
                    <th>Hôtel </th>
                    <th>Agence </th>
                    <th>Nb. Pers.</th>
                    <!--th>Sélection</th-->
                </tr>
            </tfoot>
        </table>

    </div>
    <!-- /.box-body -->
</div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout.inc.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\transfert\resources\views/transfertsIntermediaires/indexetats.blade.php ENDPATH**/ ?>