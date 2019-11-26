@extends("layout.inc.app")
<!--Hérite du view app - le commun-->

@section('content')

<!-- Main content -->
<section class="content">
        <div class="box box-success">
    <div class="box-header">
        <h3 class="box-title">Liste des Hôtels </h3>
        <div class="box-tools pull-right">
            <a href="{{asset('hotels/create')}}" class="btn btn-success"><i class="fa fa-plus"></i></a>
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
                    <!--Lattitude et Longitude sont inutiles dans l'index-->
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tsHotels as $hotel)
                <tr>
                    <td><img src="{{asset('storage/hotels')}}/{{$hotel->logo}}" class="direct-chat-img" alt="User Image">
                        {{--$hotel->photo--}}</td>
                    <td>{{$hotel->nom}}</td>
                    <td>{{$hotel->responsable}}</td>
                    <td>{{$hotel->mobileresp}}</td>
                    <td>{{$hotel->telfixe}}</td>
                    <td>{{$hotel->email}}</td>
                    <td>{!!$hotel->adresse!!}</td>
                    <td>
                        <a href="hotels/{{$hotel->id}}/edit" class="btn btn-warning btn-xs">
                            <i class="glyphicon glyphicon-log-out"></i></a>

                        <a type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-supp-{{$hotel->id}}">
                            <i class="glyphicon glyphicon-trash"></i>
                        </a>
                        <div class="modal modal-danger fade" id="modal-supp-{{$hotel->id}}">
                            {!! Form::open(['action' => ['hotelController@destroy',
                            $hotel->id],'method'=>'DELETE']) !!}
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Suppression Hôtel</h4>
                                    </div>
                                    <div class="modal-body"
                                        style="color:#D33724!important;background-color: white!important">
                                        <p>Etes vous sûr(e) de vouloir supprimer l'hôtel {{$hotel->nom}} ?</p>
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
                    {{$tsHotels->links()}}
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
