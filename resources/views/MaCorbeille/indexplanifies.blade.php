@extends("layout.inc.app")
<!--Hérite du view app - le commun-->

@section('content')
<!-- début de la section content-->

<!-- Main content -->
<section class="content">
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">Liste des Demandes de Transfert Planifiées </h3>
            <!--div class="box-tools pull-right">
            <a href="#" class="btn btn-success"><i
                    class="fa fa-plus"></i></a>
        </div-->

        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <!--td>J'aurais besoin---**---
            <a href="#" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
            <a href="#" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-time"></i></a>
            <a href="#" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>

        </td-->
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Chauffeur</th>
                        <th>Date</th>
                        <th>Départ</th>
                        <th>Arrivée</th>
                        <th>Dép. RTD</th>
                        <th>Arr. RTD</th>
                        <th>Origine</th>
                        <th>Nb. Pers.</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach($ttesPlanifiees as $unePlanifiee)
                    <tr>
                        <td>{{$unePlanifiee->date_trans}}</td>
                        <td>{{$unePlanifiee->id_vol}}</td>
                        <td>{{$unePlanifiee->heure_trans}}</td>
                        <td>{{$unePlanifiee->heure_d}}</td>
                        <td>{{$unePlanifiee->heure_a}}</td>
                        <td>{{$unePlanifiee->origine}}</td>
                        <td>{{$unePlanifiee->nom_hotel}}</td>
                        <td>{{$unePlanifiee->nom_agence}}</td>
                        <td>{{$unePlanifiee->nbperso}}</td>
                        <td> <a href="#" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-time"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Chauffeur</th>
                        <th>Date</th>
                        <th>Départ</th>
                        <th>Arrivée</th>
                        <th>Dép. RTD</th>
                        <th>Arr. RTD</th>
                        <th>Origine</th>
                        <th>Nb. Pers.</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
            </table>
            <!--div class="box-tools pull-right">
            <br /><a href="{{asset('transferts/create')}}" class="btn btn-success">
                <i class="fa fa-plus"></i> Créer un Transfert</a>
        </div-->
        </div>
        <!-- /.box-body -->
    </div>
</section>
@endsection
