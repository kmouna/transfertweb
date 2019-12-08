@extends('layout.inc.app')

@section('content')

<section class="content-header">
    <h1>
        Modification Agence de Voyage
        <small>Modifier une Agence de Voyage</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Modification Agence de Voyage</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-solid box-warning">
                <div class="box-header">
                    <h3 class="box-title">Modification d'une Agence de Voyage</h3>
                </div>
                <!-- /.box-header -->


                <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                {!! Form::open(['action' => ['agenceController@update',$uneAgence->id],
                                'method' => 'PUT', 'enctype'=>'multipart/form-data']) !!}
                                <div class="form-group">
                                    {!! Form::label('nom', 'Nom') !!}
                                    {!! Form::text('nom',$uneAgence->nom, ['class' => 'form-control', 'placeholder' => 'Nom Agence',
                                    'required' => 'required']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('responsable', 'Responsable') !!}
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                                <i class="fa fa-user-o"></i>
                                        </div>
                                        {!! Form::text('responsable',$uneAgence->Responsable, ['class' => 'form-control', 'placeholder' =>
                                        'Nom Responsable','required' => 'required']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('mobile', 'N° Mobile Resp.') !!}
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="glyphicon glyphicon-phone"></i>
                                        </div>
                                        {!! Form::text('mobile',$uneAgence->mobile, ['class' => 'form-control','pattern' =>
                                        '[0-9]{8}','placeholder' => 'N° Mobile Responsable',
                                        'required' => 'required']) !!}
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('telfixe', 'N°Tél. Fixe') !!}
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="glyphicon glyphicon-phone-alt"></i>
                                        </div>
                                        {!! Form::text('telfixe',$uneAgence->telFixe, ['class' => 'form-control','pattern' =>
                                        '[0-9]{8}','placeholder' => 'N° Tél. Fixe Agence','required' => 'required'])
                                        !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('email', 'Email') !!}
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="glyphicon glyphicon-envelope"></i>
                                        </div>
                                        {!! Form::email('email',$uneAgence->email, ['class' => 'form-control','pattern' =>
                                        '[A-za-z0-9_\-]+[@][A-za-z]+[\.][A-za-z]+','placeholder' =>
                                        'Agence@email.com','required' => 'required']) !!}
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
                                                <img src="{{asset('storage/agences')}}/{{$uneAgence->logo}}" id="previewImg"
                                                    class="direct-chat-img" alt="Agence logo" />
                                                    {{ Form::hidden('cachenomlogoagence',$uneAgence->logo,
                                                    ['class' => 'form-control'])}}
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
                                    {!! Form::textarea('adresse',$uneAgence->adresse, ['class' => 'form-control textarea']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::submit('Modifier', ['class' => 'btn btn-warning']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}

            </div><!-- /.box -->

        </div><!-- /.col -->
    </div> <!-- /.row -->
</section> <!-- /.content -->

@endsection

