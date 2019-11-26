@extends('layout.inc.app')
@section('content')

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->

      <!-- Small boxes (Stat box) -->
      @include('layout.inc.entetedash')
      <!-- /.row -->
      <!-- Main row -->
      <p></p>


      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">

            <!-- Map box -->

              <p class="text-center">
                <strong>Etats des transferts de la semaine</strong>
              </p>

              <div class="progress-group">
                <span class="progress-text">Transferts à temps</span>
                <span class="progress-number"><b>160</b>/200</span>

                <div class="progress sm">
                  <div class="progress-bar progress-bar-aqua" style="width: 60%"></div>
                </div>
              </div>
              <!-- /.progress-group -->
              <div class="progress-group">
                <span class="progress-text">Transferts en retatrd</span>
                <span class="progress-number"><b>310</b>/400</span>

                <div class="progress sm">
                  <div class="progress-bar progress-bar-red" style="width: 20%"></div>
                </div>
              </div>
              <!-- /.progress-group -->
              <div class="progress-group">
                <span class="progress-text">Transferts Aéroports</span>
                <span class="progress-number"><b>480</b>/800</span>

                <div class="progress sm">
                  <div class="progress-bar progress-bar-green" style="width: 50%"></div>
                </div>
              </div>
              <!-- /.progress-group -->
              <div class="progress-group">
                <span class="progress-text">Transferts Hôtels</span>
                <span class="progress-number"><b>250</b>/500</span>

                <div class="progress sm">
                  <div class="progress-bar progress-bar-green" style="width: 90%"></div>
                </div>
              </div>
              <!-- /.progress-group -->

               <!-- /.progress-group -->
               <div class="progress-group">
                <span class="progress-text"> Maximum des transferts avec l'Agence : AAAZZ</span>
                <span class="progress-number"><b>250</b>/500</span>

                <div class="progress sm">
                  <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                </div>
              </div>
              <!-- /.progress-group -->
               <!-- /.progress-group -->
               <div class="progress-group">
                <span class="progress-text">Maximum des transferts avec le chauffeur : Zaied Ben Amr</span>
                <span class="progress-number"><b>250</b>/500</span>

                <div class="progress sm">
                  <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                </div>
              </div>
              <!-- /.progress-group -->

            <!-- /.col -->
                <!-- /.row -->



            <!-- Calendar -->
            <!-- /.box -->

          </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="box box-warning">
              <div class="box-header with-border">
                <h4 class="box-title">Les chauffeurs de cette semaine (14 Oct)</h4>

                <div class="box-tools pull-right">
                  <span class="label label-danger">8 Chauffeurs</span>
                  <!--button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                  </button-->
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <ul class="users-list clearfix">
                  <li>
                    <img src="{{asset('admin/dist/img/user1-128x128.jpg')}}" alt="User Image">
                    <a class="users-list-name" href="#">Alexander Pierce</a>
                    <span class="users-list-date">14 oct</span>
                  </li>
                  <li>
                    <img src="{{asset('admin/dist/img/user8-128x128.jpg')}}" alt="User Image">
                    <a class="users-list-name" href="#">Norman</a>
                    <span class="users-list-date">15 oct</span>
                  </li>
                  <li>
                    <img src="{{asset('admin/dist/img/user7-128x128.jpg')}}" alt="User Image">
                    <a class="users-list-name" href="#">Jane</a>
                    <span class="users-list-date">16 oct</span>
                  </li>
                  <li>
                    <img src="{{asset('admin/dist/img/user6-128x128.jpg')}}" alt="User Image">
                    <a class="users-list-name" href="#">John</a>
                    <span class="users-list-date">18 oct</span>
                  </li>
                  <li>
                    <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" alt="User Image">
                    <a class="users-list-name" href="#">Alexander</a>
                    <span class="users-list-date">20 oct</span>
                  </li>
                  <li>
                    <img src="{{asset('admin/dist/img/user5-128x128.jpg')}}" alt="User Image">
                    <a class="users-list-name" href="#">Sarah</a>
                    <span class="users-list-date">19 oct Jan</span>
                  </li>
                  <li>
                    <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" alt="User Image">
                    <a class="users-list-name" href="#">Alexander</a>
                    <span class="users-list-date">20 oct</span>
                  </li>
                  <li>
                    <img src="{{asset('admin/dist/img/user5-128x128.jpg')}}" alt="User Image">
                    <a class="users-list-name" href="#">Sarah</a>
                    <span class="users-list-date">19 oct Jan</span>
                  </li>

                </ul>
                <!-- /.users-list -->
              </div>
              <!-- /.box-body -->
              <!--div class="box-footer text-center">
                <a href="javascript:void(0)" class="uppercase">View All Users</a>
              </div-->
              <!-- /.box-footer -->
            </div>

          </section>

        <!-- right col -->
      </div>
                                             <!--include('layout.inc.corps')-->
      <!-- /.row (main row) -->


    </section>
    <!-- /.content -->

@endsection
