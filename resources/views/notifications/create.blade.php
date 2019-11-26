@extends('layout.inc.app')

@section('content')

<section class="content-header">
    <h1>
        Nouvelle Notification
        <small>Ajouter une nouvelle Notification</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li class="active">Ajout Notification</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-solid box-danger">
                <div class="box-header">
                    <h3 class="box-title">Ajout d'une Notification</h3>
                </div>
                <!-- /.box-header -->

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                {!! Form::label('chauffeur', 'Chauffeur') !!}
                                {!! Form::select('id_chauffeur',
                                ['Fehmi Ben Mohamed' => 'Fehmi Ben Mohamed', 'Saousen Maalej' => 'Saousen Maalej',
                                'Soufiene Ben Farhat' => 'Soufiene Ben Farhat',
                                'Ahmed Ben Saleh' => 'Ahmed Ben Saleh'],null,['class' => 'form-control']) !!}
                                 <hr />
                                 {!! Form::label('message', 'Message') !!}
                                 {!! Form::textarea('message','Des retards ont eu lieu, merci de consulter vos horaires de départ/arrivée.',
                                  ['class' => 'form-control textarea' ]) !!}
                            </div>


                            <div class="form-group">
                                {!! Form::submit('Notifier', ['class' => 'btn btn-danger']) !!}
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
