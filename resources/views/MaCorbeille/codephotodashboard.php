<!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <!--div class="row">
        <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h4 class="box-title">Les chauffeurs de cette semaine </h4>

                    <div class="box-tools pull-right">
                        <span class="label label-danger">5 Chauffeurs</span>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <ul class="users-list clearfix">
                        @for($i = 0; $i < 5; $i++)
                        <li>
                                <img src="{{asset('storage/chauffeurs')}}/{{$chauffs[$i]->photo}}" alt="Chauffeur photo">
                            <a class="users-list-name" href="#">

                                <span class="users-list-date"> {{$chauffs[$i]->prenom}} {{$chauffs[$i]->nom}}</span>
                            </a>
                        </li>
                        @endfor
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
