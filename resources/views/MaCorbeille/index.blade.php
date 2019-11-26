@extends("layout.inc.app")
<!--****************** Pluuuuuuuuuuuuus besoin************************-->

@section('content')
<!-- début de la section content-->

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Liste des Demandes de Transfert </h3>
        <div class="box-tools pull-right">
            <a href="{{asset('transfertsIntermediaires/create')}}" class="btn btn-success"><i
                    class="fa fa-plus"></i></a>
        </div>

    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <!--td>J'aurais besoin---**---
            <a href="#" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
            <a href="#" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-log-out"></i></a>
            <a href="#" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>

        </td-->
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>N° Vol</th>
                    <th>Heure</th>
                    <th>Origine</th>
                    <th>Hôtel </th>
                    <th>Agence </th>
                    <th>Nb. Pers.</th>
                    <th>Actions </th>
                </tr>
            </thead>
            <tbody>
                @foreach($ttesDemandes as $uneDemande)
                <tr>
                    <td>{{date('d/m/Y',strtotime($uneDemande->date_trans))}}</td>
                    <td>{{$uneDemande->id_vol}}</td>
                    <td>{{$uneDemande->heure_trans}}</td>
                    <td>{{$uneDemande->origine}}</td>
                    <td>{{$uneDemande->nom_hotel}}</td>
                    <td>{{$uneDemande->nom_agence}}</td>
                    <td>{{$uneDemande->nbperso}}</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-log-out"></i></a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Date</th>
                    <th>N° Vol</th>
                    <th>Heure</th>
                    <th>Origine</th>
                    <th>Hôtel </th>
                    <th>Agence </th>
                    <th>Nb. Pers.</th>
                    <th>Actions </th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.box-body -->
</div>



@endsection
<!-- fin de la section content-->

<!-- /.box -->
