@extends("layout.inc.app")
<!--Hérite du view app - le commun-->

@section('content')
<!-- début de la section content-->

<!-- Main content -->
<section class="content">
        <div class="box box-success">
    <div class="box-header">
        <h3 class="box-title">Liste des Demandes de Transfert Réalisées </h3>
        <!--div class="box-tools pull-right">
            <a href="#" class="btn btn-success"><i
                    class="fa fa-plus"></i></a>
        </div-->

    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Chauffeur</th>
                    <th>Date</th>
                    <th>Départ</th>
                    <th>Arrivée</th>
                    <th>Dép. RTD</th>
                    <th>Arr. RTD</th>
                    <th>Origine</th>
                    <th>Nb. Pers.</th>
                    <th>Détails</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ahmed Ben Ahmed</td>
                    <td>2019/10/20</td>
                    <td>20:55</td>
                    <td>22:00</td>
                    <td>--:--</td>
                    <td>--:--</td>
                    <td>Hôtel </td>
                    <td>13</td>
                    <td> <a href="#" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-edit"></i></a></td>
                </tr>
                <tr>
                    <td>Ali Ben Fadhl</td>
                    <td>2019/10/20</td>
                    <td>20:55</td>
                    <td>22:00</td>
                    <td>--:--</td>
                    <td>--:--</td>
                    <td>Hôtel </td>
                    <td>8</td>
                    <td> <a href="#" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-edit"></i></a></td>
                </tr>
                <tr>
                    <td>Saleh Ben Saleh</td>
                    <td>2019/10/20</td>
                    <td>20:55</td>
                    <td>22:00</td>
                    <td style ="color:red">21:15</td>
                    <td style ="color:red">22:20</td>
                    <td>Aéroport </td>
                    <td>13</td>
                    <td> <a href="#" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-edit"></i></a></td>
                </tr>
                <tr>
                        <td>Ahmed Ben Ahmed</td>
                        <td>2019/10/20</td>
                        <td>20:55</td>
                        <td>22:00</td>
                        <td>--:--</td>
                        <td>--:--</td>
                        <td>Hôtel </td>
                        <td>15</td>
                        <td> <a href="#" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-edit"></i></a></td>
                    </tr>
                    <tr>
                        <td>Ali Ben Fadhl</td>
                        <td>2019/10/20</td>
                        <td>20:55</td>
                        <td>22:00</td>
                        <td>--:--</td>
                        <td>--:--</td>
                        <td>Hôtel </td>
                        <td>25</td>
                        <td> <a href="#" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-edit"></i></a></td>
                    </tr>
                    <tr>
                        <td>Saleh Ben Saleh</td>
                        <td>2019/10/20</td>
                        <td>20:55</td>
                        <td>22:00</td>
                        <td style ="color:red">21:15</td>
                        <td style ="color:red">22:20</td>
                        <td>Aéroport </td>
                        <td>3</td>
                        <td> <a href="#" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-edit"></i></a></td>
                    </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>Chauffeur</th>
                    <th>Date</th>
                    <th>Départ</th>
                    <th>Arrivée</th>
                    <th>Dép. RTD</th>
                    <th>Arr. RTD</th>
                    <th>Origine</th>
                    <th>Nb. Pers.</th>
                    <th>Détails</th>
                </tr>
            </tfoot>
        </table>

    </div>
    <!-- /.box-body -->
</div>
</section>
@endsection
