@extends('layout.inc.app')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">Liste des Transferts</h3>
            <div class="box-tools pull-right">
                <a href="{{asset('transferts/create')}}" class="btn btn-success"><i class="fa fa-plus"></i></a>
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
                    @foreach($tsTransferts as $unTransfert)
                    <tr>
                        <td>{{$unTransfert->date}}</td>
                        <td>{{$unTransfert->prenom}} {{$unTransfert->nom}}</td>
                        <td>{{$unTransfert->heure_d}}</td>
                        <td>{{$unTransfert->heure_a}}</td>
                        <td>{{$unTransfert->origine}}</td>
                        <td>
                            @if($unTransfert->retarde == 0)
                            {{$rep = 'Non'}}
                            @else
                            {{$rep ='Oui'}}
                            @endif
                        </td>

                        <td>{{$unTransfert->nbpersonnes}}</td>
                        <td>
                            <a href="transferts/{{$unTransfert->id}}" class="btn btn-warning btn-xs">
                                <!--appel à show-->
                                <i class="glyphicon glyphicon-log-out"></i>
                            </a>
                                <!--Affichage du bouton pour le retard-->

                            @if($unTransfert->origine == 'Aéroport')

                            <a href="{{asset('transferts')}}/{{$unTransfert->id}}/edit" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-time"></i></a>

                            @endif

                            <a type="button" class="btn btn-danger btn-xs" data-toggle="modal"
                                data-target="#modal-supp-{{$unTransfert->id}}">
                                <i class="glyphicon glyphicon-trash"></i>
                            </a>

                            <div class="modal modal-danger fade" id="modal-supp-{{$unTransfert->id}}">
                                {!! Form::open(['action' => ['transfertController@destroy',
                                $unTransfert->id],'method'=>'DELETE']) !!}
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
                            {!! Form::close() !!}


                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        {{--$tsTransferts->links()--}}
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

    @endsection
