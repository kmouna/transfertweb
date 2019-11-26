@extends('layout.inc.app')

@section('content')

<section class="content-header">
    <h1>
        Nouveau Transfert
        <small>Créer un Nouveau Transfert</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Nouveau Transfert</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-solid box-success">
                <div class="box-header">
                    <h3 class="box-title">Nouveau Transfert</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">
                    {!! Form::open(['action' => 'transfertController@store', 'method' => 'POST']) !!}

                    <!---->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('id_chauffeur', 'Chauffeur') !!}
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-bus"></i>
                                    </div>
                                    {!! Form::select('id_chauffeur',$tschauffeurs,null,['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('date', 'Date') !!}
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    {!! Form::date('date','', ['class' =>
                                    'form-control','id'=>'datepicker','required'
                                    => 'required']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('origine', 'Origine') !!}
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-hand-o-right"></i>
                                    </div>
                                    {!! Form::select('origine',['Aéroport'=>'Aéroport', 'Hôtel'=>'Hôtel'],null, ['class'
                                    => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('heure_d', 'Départ') !!}
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-time"></i>
                                    </div>
                                    {!! Form::time('heure_d','', ['class' =>
                                    'form-control',
                                    'required' => 'required']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('heure_a', 'Arrivée') !!}
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-time"></i>
                                    </div>
                                    {!! Form::time('heure_a','',['class' => 'form-control' ]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('nbpersonnes', 'Nombre Personnes') !!}
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    {{ Form::text('nbpersonnes','0', ['class' => 'form-control','readonly' => 'true']) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    {!! Form::submit('Ajouter', ['class' => 'btn btn-success']) !!}
                </div> <!-- /.box-body -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">

                        </div>
                    </div>

                </div>
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div> <!-- /.row -->
    {!! Form::close() !!}
</section> <!-- /.content -->
@endsection
{{--
<div class="row">
                        <div class="col-xs-12">
                            <hr />
                            <div class="box box-solid box-warning">
                                <div class="box-header">
                                    <h4 class="box-title">Détails Transfert</h4>
                                </div>
                            </div>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>N° Vol</th>
                                        <th>Heure</th>
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
                                    @foreach($tsTransEnAttente as $unTransEnAttente)
                                    <tr>
                                        <td>{{$unTransEnAttente->date_trans}}</td>
                                        <td>{{$unTransEnAttente->id_vol}}</td>
                                        <td>{{$unTransEnAttente->heure_trans}}</td>
                                        <td> {{ Form::time('heure_d',$unTransEnAttente->heure_d, ['class' => 'form-control',
                                            'required'=>'required']) }}
                                        </td>
                                        <td> {{ Form::time('heure_a',$unTransEnAttente->heure_a, ['class' => 'form-control',
                                            'required'=>'required']) }}
                                        </td>
                                        <td>{{$unTransEnAttente->origine}}</td>
                                        <td>{{$unTransEnAttente->nom_hotel}}</td>
                                        <td>{{$unTransEnAttente->nom_agence}}</td>
                                        <td>{{$unTransEnAttente->nbperso}}</td>
                                        <td>
                                            <div class="box-tools pull-right">
                                                <a href="#">
                                                    {{ Form::button('<i class="fa fa-plus"></i>', ['type' => 'submit', 'class' => 'small btn btn-warning'] )}}
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>N° Vol</th>
                                        <th>Date</th>
                                        <th>Heure</th>
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
                        </div>
                    </div>
--}}
