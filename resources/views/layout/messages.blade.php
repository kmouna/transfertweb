

@if(count ($errors)>0)
@foreach ($errors->all() as $error)

<div id="errors_noneimp" class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-ban"></i> Erreur</h4>
   {{ $error }}
  </div>
  @endforeach
@endif


@if (session('error'))
<div id="error_noneimp" class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-ban"></i> Erreur</h4>
   {{session('success')  }}
  </div>

@endif
@if (session('success'))
  <div id="succes_noneimp" class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-check"></i> Succès</h4>
    {{ session('success') }}
  </div>
  @endif
