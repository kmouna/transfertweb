@extends('layout.inc.app')

@section('content')

<section class="content-header">
    <h1>
        Nouvelle Demande de Transfert
        <small>Transfert en Attente</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Transfert en Attente</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-solid box-success">
                <div class="box-header">
                    <h3 class="box-title">Demande de Transfert</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    {!! Form::open(['action' => 'transIntermediaireController@store', 'method' => 'POST']) !!}
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        {!! Form::radio('origine', 'Aéroport', true, ['class' => 'form-group','id'=>'a'])!!}
                                    </div>
                                    <div class="input-group-addon">
                                        {!! Form::label('a', 'Origine - Aéroport') !!}
                                    </div>
                                </div>
                                <!-- /input-group -->
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        {!! Form::radio('origine', 'Hôtel', false, ['class' => 'form-group', 'id'=>'h'])!!}</div>
                                    <div class="input-group-addon">
                                        {!! Form::label('h', 'Origine - Hôtel') !!}
                                    </div>


                                </div>
                                <!-- /input-group -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('id_vol', 'N° Vol') !!}
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-paper-plane"></i>
                                    </div>
                                    {!! Form::select('id_vol',
                                    ['ABO123' => 'AZA123', 'BRL456' => 'BRL456', 'CAI789' => 'CAI789', 'DBU147' =>
                                    'DBU147',
                                    'EGY258' => 'EGY258', 'FLS369' => 'FLS369', 'GNV159' => 'GNV159', 'HLD357' =>
                                    'HLD357',
                                    'ISB124' => 'ISB124', 'JDD235' => 'JDD235', 'KMR689' => 'KMR689', 'LBN457' =>
                                    'LBN457',
                                    'MRT689' => 'MRT689', 'NRG974' => 'NRG974', 'OMN412' => 'OMN412', 'POR632' =>
                                    'POR632',
                                    'QAT852' => 'QAT852', 'RUS312' => 'RUS312', 'SNG214' => 'SNG214', 'TUN322' =>
                                    'TUN322',
                                    'UKR624' => 'UKR624', 'VNZ843' => 'VNZ843', 'WSH952' => 'WSH952', 'XNV349' =>
                                    'XNV349',
                                    'YGZ573' => 'YGZ573', 'ZMB815' => 'ZMB815'],null,['class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('date_trans', 'Date') !!}
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    {!! Form::date('date_trans','', ['class' => 'form-control','id'=>'datepicker','required'
                                    => 'required']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('heure_trans', 'Heure') !!}
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-time"></i>
                                    </div>
                                    {!! Form::time('heure_trans',Carbon\Carbon::now()->format('H:i'), ['class' => 'form-control','pattern' =>
                                    '[0-9]{2}[:][0-9]{2}','placeholder' => 'Heure départ hh:mm','required' =>
                                    'required']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">

                            <div class="form-group">
                                {!! Form::label('nom_agence', 'Agence') !!}
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-suitcase"></i>
                                    </div>
                                    {!! Form::select('nom_agence', $ttesAgences, null,['class' => 'form-control'])
                                    !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('nom_hotel', 'Hôtel') !!}
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-building-o"></i>
                                    </div>
                                    {!! Form::select('nom_hotel',$tsHotels, null,['class' => 'form-control'])
                                    !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('nbperso', 'Nombre de Personnes') !!}
                                {!! Form::number('nbperso','', ['class' => 'form-control', 'pattern' => '[0-9]+',
                                'min' => '1','required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    {!! Form::submit('Ajouter', ['class' => 'btn btn-success']) !!}
                </div> <!-- /.box-body -->

            </div><!-- /.box -->
        </div><!-- /.col -->
    </div> <!-- /.row -->
    {!! Form::close() !!}
</section> <!-- /.content -->

@endsection
