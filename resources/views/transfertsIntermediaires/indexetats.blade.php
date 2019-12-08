@extends("layout.inc.app")
<!--Hérite du view app - le commun-->

@section('content')

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
        <h3 class="box-title">Liste des Demandes de Transfert {{$etat}} </h3>
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
                    @if(($etat == "Planifiées")||($etat == "Réalisées"))
                    <th>Retardé</th>
                    @endif
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
                @foreach($tstransSelonetats as $unTransEtat)
                <tr>
                    <td>{{$unTransEtat->date_trans}}</td>
                    <td>{{$unTransEtat->id_vol}}</td>
                    <td>{{$unTransEtat->heure_trans}}</td>
                    <td>{{$unTransEtat->heure_d}}</td>
                    <td>{{$unTransEtat->heure_a}}</td>
                    @if(($etat == "Planifiées")||($etat == "Réalisées"))
                        @if ( $unTransEtat->heure_d_retard != '00:00:00')
                        <td style="font-weight:bold;color:red">Oui</td>
                        @else
                        <td>Non</td>
                        @endif
                    @endif
                    <!--td class="text-center" style="color:red">
                        @if ( $unTransEtat->heure_d_retard != 0)
                            {{$unTransEtat->heure_d_retard}}
                        @else
                            --:--
                        @endif
                    </td>
                    <td class="text-center" style="color:red">
                        @if ( $unTransEtat->heure_a_retard != 0)
                            {{$unTransEtat->heure_a_retard}}
                        @else
                            --:--
                        @endif
                    </td-->
                    <td>{{$unTransEtat->origine}}</td>
                    <td>{{$unTransEtat->nom_hotel}}</td>
                    <td>{{$unTransEtat->nom_agence}}</td>
                    <td>{{$unTransEtat->nbperso}}</td>
                    <!--td>{!! Form::checkbox('ids_trans[]', $unTransEtat->id, false, ['class' => 'form-group'])!!}

                    </td-->
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Date</th>
                    <th>N° Vol</th>
                    <th>Heure</th>
                    <th>Départ</th>
                    <th>Arrivée</th>
                    @if(($etat == "Planifiées")||($etat == "Réalisées"))
                    <th>Retardé</th>
                    @endif
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
@endsection
