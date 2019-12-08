@extends('layout.inc.app')

@section('content')

<section class="content-header">
    <h1>
        Modification Hôtel
        <small>Modifier un Hôtel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Modification Hôtel</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-solid box-warning">
                <div class="box-header">
                    <h3 class="box-title">Modification d'un Hôtel</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            {!! Form::open(['action' => ['hotelController@update',$unHotel->id], 'method' => 'PUT',
                            'enctype'=>'multipart/form-data']) !!}
                            <div class="form-group">
                                {!! Form::label('nom', 'Nom') !!}
                                {!! Form::text('nom',$unHotel->nom, ['class' => 'form-control', 'placeholder' => 'Nom
                                d\'Hôtel',
                                'required' => 'required']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('responsable', 'Responsable') !!}
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user-o"></i>
                                    </div>
                                    {!! Form::text('responsable',$unHotel->responsable, ['class' => 'form-control',
                                    'placeholder' =>
                                    'Nom Responsable','required' => 'required']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('mobileresp', 'N° Mobile Resp.') !!}
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-phone"></i>
                                    </div>
                                    {!! Form::text('mobileresp',$unHotel->mobileresp, ['class' =>
                                    'form-control','pattern' =>
                                    '[0-9]{8}','placeholder' => 'N° Mobile Responsable',
                                    'required' => 'required']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('telfixe', 'N°Tél. Fixe') !!}
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-phone-alt"></i>
                                    </div>
                                    {!! Form::text('telfixe',$unHotel->telfixe, ['class' => 'form-control','pattern' =>
                                    '[0-9]{8}','placeholder' => 'N° Tél. Fixe Hôtel','required' => 'required'])
                                    !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('lattitude', 'Lattitude') !!}
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    {!! Form::text('lattitude',$unHotel->lattitude, ['class' => 'form-control','pattern'
                                    =>
                                    '[0-9]{8}','placeholder' => 'Coordonnées Lattitude Hôtel','required' => 'required'])
                                    !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('longitude', 'Longitude') !!}
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    {!! Form::text('longitude',$unHotel->longitude, ['class' => 'form-control','pattern'
                                    =>
                                    '[0-9]{8}','placeholder' => 'Coordonnées Longitude Hôtel','required' => 'required'])
                                    !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('email', 'Email') !!}
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-envelope"></i>
                                    </div>
                                    {!! Form::email('email',$unHotel->email, ['class' => 'form-control','pattern' =>
                                    '[A-za-z0-9_\-]+[@][A-za-z]+[\.][A-za-z]+','placeholder' =>
                                    'hotel@email.com','required' => 'required']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('logo', 'Logo') !!}

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        {!! Form::file('logo', ['class' => 'form-control',
                                        'onchange'=>'previewFile()']) !!}
                                    </div>
                                    <div class="input-group-addon">
                                        <img src="{{asset('storage/hotels')}}/{{$unHotel->logo}}" id="previewImg"
                                            class="direct-chat-img" alt="Hotel logo" />
                                            {{ Form::hidden('cachenomlogo',$unHotel->logo,
                                            ['class' => 'form-control'])}}
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group">
                                {!! Form::label('adresse', 'Adresse') !!}
                                {!! Form::textarea('adresse',$unHotel->adresse, ['class' => 'form-control textarea'])
                                !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Modifier', ['class' => 'btn btn-warning']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div> <!-- /.box-body -->


            </div><!-- /.box -->

        </div><!-- /.col -->
    </div> <!-- /.row -->
</section> <!-- /.content -->

@endsection
