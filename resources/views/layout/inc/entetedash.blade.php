<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="info-box">
            <a href="{{asset('transferts')}}">
                <span class="info-box-icon bg-aqua"><i class="fa fa-road"></i></span>
            </a>
            <div class="info-box-content">
                <span class="info-box-text">Transferts <br />De la semaine</span>
                <span class="info-box-number">{{ $nbtrans }}</span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="info-box">
            <a href="{{asset('transferts')}}">
                <span class="info-box-icon bg-red"><i class="fa fa-clock-o"></i></span>
            </a>
            <div class="info-box-content">
                <span class="info-box-text">Transferts<br /> Retartdés</span>
                <span class="info-box-number">{{$retarde_P}}<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="info-box">
            <a href="{{asset('transferts')}}">
                <span class="info-box-icon bg-yellow"><i class="fa fa-plane"></i></span>
            </a>

            <div class="info-box-content">
                <span class="info-box-text">Transferts<br /> Aéroport</span>
                <span class="info-box-number">{{$aeros_P}}<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="info-box">
            <a href="{{asset('transferts')}}">
                <span class="info-box-icon bg-green"><i class="fa fa-hotel"></i></span>
            </a>
            <div class="info-box-content">
                <span class="info-box-text">Transferts<br /> Hôtel</span>
                <span class="info-box-number">{{$hots_P}}<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
    <!-- ./col -->

</div>
