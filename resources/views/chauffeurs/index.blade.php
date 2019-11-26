@extends("layout.inc.app")
<!--Hérite du view app - le commun-->

@section('content')
<!-- début de la section content-->

<!-- Main content -->
<section class="content">
<div class="box box-success">
    <div class="box-header">
        <h3 class="box-title">Liste des Chauffeurs </h3>
        <div class="box-tools pull-right">
            <a href="chauffeurs/create" class="btn btn-success"><i class="fa fa-plus"></i></a>
        </div>

    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>N° Mobile</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tsChauffeurs as $chauffeur)
                <tr>
                    <td><img src="{{asset('storage/chauffeurs')}}/{{$chauffeur->photo}}" class="direct-chat-img"
                            alt="Chauffeur photo">

                        {{--$chauffeur->photo--}}</td>
                    <td>{{$chauffeur->nom}}</td>
                    <td>{{$chauffeur->prenom}}</td>
                    <td>{{$chauffeur->datenais}}</td>
                    <td>{{$chauffeur->mobile}}</td>
                    <td>{{$chauffeur->email}}</td>
                    <td>{!!$chauffeur->adresse!!}</td>
                    <td>
                        <a href="chauffeurs/{{$chauffeur->id}}/edit" class="btn btn-warning btn-xs">
                            <i class="glyphicon glyphicon-log-out"></i>
                        </a>
                        <a type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-supp-{{$chauffeur->id}}">
                            <i class="glyphicon glyphicon-trash"></i>
                        </a>
                        <div class="modal modal-danger fade" id="modal-supp-{{$chauffeur->id}}">
                            {!! Form::open(['action' => ['chauffeurController@destroy',
                            $chauffeur->id],'method'=>'DELETE']) !!}
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" >Suppression Chauffeur</h4>
                                    </div>
                                    <div class="modal-body" style="color:#D33724!important;background-color: white!important">
                                    <p>Etes vous sûr(e) de vouloir supprimer le chauffeur {{$chauffeur->prenom}} {{$chauffeur->nom}} ?</p>
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
                    {{$tsChauffeurs->links()}}
                </tr>

            </tbody>
            <tfoot>
                <tr>
                    <th>Photo</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>N° Mobile</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.box-body -->
</div>
</section>
@endsection
