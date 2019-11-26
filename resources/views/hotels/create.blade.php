@extends('layout.inc.app')

@section('content')

<section class="content-header">
    <h1>
        Nouvel Hôtel
        <small>Ajouter un Nouvel Hôtel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Ajout Hôtel</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-solid box-success">
                <div class="box-header">
                    <h3 class="box-title">Ajout d'un Hôtel</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            {!! Form::open(['action' => 'hotelController@store', 'method' => 'POST','enctype'=>'multipart/form-data']) !!}
                            <div class="form-group">
                                {!! Form::label('nom', 'Nom') !!}
                                {!! Form::text('nom','', ['class' => 'form-control', 'placeholder' => 'Nom Hôtel',
                                'required' => 'required']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('responsable', 'Responsable') !!}
                                <div class="input-group">
                                    <div class="input-group-addon">
                                            <i class="fa fa-user-o"></i>
                                    </div>
                                    {!! Form::text('responsable','', ['class' => 'form-control', 'placeholder' =>
                                    'Nom Responsable','required' => 'required']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('mobileresp', 'N° Mobile Resp.') !!}
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-phone"></i>
                                    </div>
                                    {!! Form::text('mobileresp','', ['class' => 'form-control','pattern' =>
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
                                        {!! Form::text('telfixe','', ['class' => 'form-control','pattern' =>
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
                                    {!! Form::text('lattitude','', ['class' => 'form-control',
                                    'placeholder' => 'Coordonnées Lattitude Hôtel','required' => 'required'])
                                    !!}
                                </div>
                            </div>
                            <div class="form-group">
                                    {!! Form::label('longitude', 'Longitude') !!}
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        {!! Form::text('longitude','', ['class' => 'form-control',
                                        'placeholder' => 'Coordonnées Longitude Hôtel','required' => 'required'])
                                        !!}
                                    </div>
                                </div>
                            <div class="form-group">
                                {!! Form::label('email', 'Email') !!}
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-envelope"></i>
                                    </div>
                                    {!! Form::email('email','', ['class' => 'form-control','pattern' =>
                                    '[A-za-z0-9_\-]+[@][A-za-z]+[\.][A-za-z]+','placeholder' =>
                                    'hotel@email.com','required' => 'required']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('logo', 'Logo') !!}

                                <div class="input-group">

                                    <div class="input-group-addon">
                                        {!! Form::file('logo', ['class' => 'form-control','required' =>
                                        'required']) !!}
                                    </div>
                                    <div class="input-group-addon">
                                        <img src="{{asset('admin/dist/img/hotel-logo.png')}}" class="direct-chat-img"
                                            alt="User Image" />
                                    </div>
                                </div>


                            </div>
                        </div>
                        </div-->


                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group">
                                {!! Form::label('adresse', 'Adresse') !!}
                                {!! Form::textarea('adresse','', ['class' => 'form-control textarea']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Ajouter', ['class' => 'btn btn-success']) !!}
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
