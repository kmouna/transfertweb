@extends('layout.inc.app')
@section('content')

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->

    <!-- Small boxes (Stat box) -->
    @include('layout.inc.entetedash')
    <!-- /.row -->
    <!-- Main row -->
    <p></p>
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-6">
            <div class="box box-primary">
                <div class="box-header text-center">
                    <strong>Etat des Transferts de la Semaine</strong>
                </div>
                <div class="box-body">
                    <!-- /.progress-group -->
                    <div class="progress-group">
                        <span class="progress-text">Transfert(s) avec retard</span>
                        <span class="progress-number"><b>{{$retarde}}</b>/{{$nbtrans}}</span>

                        <div class="progress sm">
                            <div class="progress-bar progress-bar-red" style="width: {{$retarde_P}}%"></div>
                        </div>
                    </div>
                    <!-- /.progress-group -->
                    <div class="progress-group">
                        <span class="progress-text">Transfert(s) Aéroport</span>
                        <span class="progress-number"><b>{{$aeros}}</b>/{{$nbtrans}}</span>

                        <div class="progress sm">
                            <div class="progress-bar progress-bar-yellow" style="width: {{$aeros_P}}%"></div>
                        </div>
                    </div>
                    <!-- /.progress-group -->
                    <div class="progress-group">
                        <span class="progress-text">Transfert(s) Hôtel</span>
                        <span class="progress-number"><b>{{$hots}}</b>/{{$nbtrans}}</span>

                        <div class="progress sm">
                            <div class="progress-bar progress-bar-green" style="width: {{$hots_P}}%"></div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="col-lg-6">
            <div class="box box-primary">
                <div class="box-header text-center">
                    <strong>Etat des Demandes de Transfert</strong>
                </div>
                <div class="box-body no-padding">
                    <table class="table table-condensed">
                        <tbody>
                            <tr>
                                <th style="width: 50%">Demandes</th>
                                <th style="width: 35%">Etat</th>
                                <th style="width: 15%">Taux</th>
                            </tr>
                            <tr>
                                <td>Demandes en attente</td>
                                <td>
                                    <div class="progress progress-xs progress-striped active">
                                        <div class="progress-bar progress-bar-red" style="width: {{$attente_P}}%"></div>
                                    </div>
                                </td>
                                <td><a href="{{asset('transfertsIntermediaires/1/indexetats')}}"><span
                                            class="badge bg-red">{{$attente_P}}%</span></a></td>
                            </tr>
                            <tr>
                                <td>Demandes planifiées</td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-yellow" style="width: {{$planifie_P}}%">
                                        </div>
                                    </div>
                                </td>
                                <td><a href="{{asset('transfertsIntermediaires/2/indexetats')}}"><span
                                            class="badge bg-yellow">{{$planifie_P}}%</span></a></td>
                            </tr>
                            <tr>
                                <td>Demandes réalisées</td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-success" style="width: {{$realise_P}}%">
                                        </div>
                                    </div>
                                </td>
                                <td><a href="{{asset('transfertsIntermediaires/3/indexetats')}}"><span
                                            class="badge bg-green">{{$realise_P}}%</span></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    <!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <div class="row">
        <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h4 class="box-title">Les chauffeurs de cette semaine </h4>

                    <div class="box-tools pull-right">
                        <span class="label label-danger">5 Chauffeurs</span>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <ul class="users-list clearfix">
                        @for($i = 0; $i < 5; $i++)
                        <li>
                                <img src="{{asset('storage/chauffeurs')}}/{{$chauffs[$i]->photo}}" alt="Chauffeur photo">
                            <a class="users-list-name" href="#">

                                <span class="users-list-date"> {{$chauffs[$i]->prenom}} {{$chauffs[$i]->nom}}</span>
                            </a>
                        </li>
                        @endfor
                    </ul>
                    <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <!--div class="box-footer text-center">
                <a href="javascript:void(0)" class="uppercase">View All Users</a>
              </div-->
                <!-- /.box-footer -->
            </div>

        </section>

        <!-- right col -->
    </div>
    <!--include('layout.inc.corps')-->
    <!-- /.row (main row) -->


</section>
<!-- /.content -->

@endsection
