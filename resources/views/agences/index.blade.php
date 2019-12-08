@extends("layout.inc.app")
<!--Hérite du view app - le commun-->

@section('content')

<!-- Main content -->
<section class="content">
    <div class="box box-success">
    <div class="box-header">
        <h3 class="box-title">Liste des Agences de Voyage </h3>
        <div class="box-tools pull-right">
            <a href="{{asset('agences/create')}}" class="btn btn-success"><i class="fa fa-plus"></i></a>
        </div>

    </div>
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Logo</th>
                    <th>Nom</th>
                    <th>Responsable</th>
                    <th>N° Mobile Resp.</th>
                    <th>N°Tél. Fixe</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ttesAgences as $agence)
                <tr>
                    <td><img src="{{asset('storage/agences')}}/{{$agence->logo}}" class="direct-chat-img" alt="Agence logo">
                        {{--$agence->photo--}}</td>
                    <td>{{$agence->nom}}</td>
                    <td>{{$agence->Responsable}}</td>
                    <td>{{$agence->mobile}}</td>
                    <td>{{$agence->telFixe}}</td>
                    <td>{{$agence->email}}</td>
                    <td>{!!$agence->adresse!!}</td>
                    <td>
                        <a href="agences/{{$agence->id}}/edit" class="btn btn-warning btn-xs">
                            <i class="glyphicon glyphicon-log-out"></i></a>

                        <a type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-supp-{{$agence->id}}">
                            <i class="glyphicon glyphicon-trash"></i>
                        </a>
                        <div class="modal modal-danger fade" id="modal-supp-{{$agence->id}}">
                            {!! Form::open(['action' => ['agenceController@destroy',
                            $agence->id],'method'=>'DELETE']) !!}
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Suppression Agence</h4>
                                    </div>
                                    <div class="modal-body"
                                        style="color:#D33724!important;background-color: white!important">
                                        <p>Etes vous sûr(e) de vouloir supprimer l'agence {{$agence->nom}} ?</p>
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
                    {{$ttesAgences->links()}}
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>Logo</th>
                    <th>Nom</th>
                    <th>Responsable</th>
                    <th>N° Mobile Resp.</th>
                    <th>N°Tél. Fixe</th>
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
