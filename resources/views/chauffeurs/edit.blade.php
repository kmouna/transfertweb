@extends('layout.inc.app')

@section('content')

<section class="content-header">
    <h1>
      Modification Chauffeur
      <small>Modifier un Chauffeur</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Accueil</a></li>
      <li class="active">Modification Chauffeur</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-solid box-warning">
          <div class="box-header">
            <h3 class="box-title">Modification d'un Chauffeur</h3>
          </div>
        <!-- /.box-header -->

     <div class="box-body">
      <div class="row">
        <div class="col-md-6">

                {!! Form::open(['action' => ['chauffeurController@update',$unChauffeur->id], 'method' => 'PUT']) !!}
            <div class="form-group">
              {!! Form::label('nom', 'Nom') !!}
              {!! Form::text('nom',$unChauffeur->nom, ['class' => 'form-control', 'placeholder' => 'Nom Chauffeur','required' => 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('prenom', 'Prénom') !!}
                {!! Form::text('prenom',$unChauffeur->prenom, ['class' => 'form-control', 'placeholder' => 'Prénom Chauffeur','required' => 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('datenais', 'Date de naissance') !!}
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  {!! Form::date('datenais',$unChauffeur->datenais, ['class' => 'form-control','id'=>'datepicker','required' => 'required']) !!}
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="form-group">
              {!! Form::label('mobile', 'Mobile') !!}
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="glyphicon glyphicon-phone"></i>
                </div>
                {!! Form::text('mobile',$unChauffeur->mobile, ['class' => 'form-control','pattern' => '[0-9]{8}','placeholder' => 'N° Mobile','required' => 'required']) !!}
              </div>
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                <div class="input-group">
                    <div class="input-group-addon">
                      <i class="glyphicon glyphicon-envelope"></i>
                    </div>
                    {!! Form::email('email',$unChauffeur->email, ['class' => 'form-control','pattern' => '[A-za-z0-9_\-]+[@][A-za-z]+[\.][A-za-z]+','placeholder' => 'chauffeur@email.com','required' => 'required']) !!}
                </div>
            </div>
            <div class="form-group">
                    {!! Form::label('photo', 'Photo') !!}

                    <div class="input-group">

                        <div class="input-group-addon">
                            {!! Form::text('photo',$unChauffeur->photo, ['class' => 'form-control','required' =>
                            'required']) !!}
                        </div>
                        <div class="input-group-addon">
                            <img src="{{asset('admin/dist/img/avatar5.png')}}" class="direct-chat-img"
                                alt="User Image" />
                        </div>
                    </div>


            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <div class="form-group">
              {!! Form::label('adresse', 'Adresse') !!}
              {!! Form::textarea('adresse',$unChauffeur->adresse, ['class' => 'form-control textarea']) !!}
            </div>
            <div class="form-group">
              {!! Form::submit('Modifier', ['class' => 'btn btn-warning']) !!}
            </div>
        </div>
            {!! Form::close() !!}

        </div>
    </div>  <!-- /.box-body -->
</div><!-- /.box -->

</div><!-- /.col -->
</div> <!-- /.row -->
  </section>  <!-- /.content -->

@endsection


