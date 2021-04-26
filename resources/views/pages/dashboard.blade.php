@extends('layouts.app', ['activePage' => 'dashboard', 'menuParent' => 'dashboard', 'titlePage' => __('Tablero')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            @foreach($comunicados as $comunicado)
            <div class="col-md-4">
                <div class="card card-plain card-blog">
                    <a href="{{  $comunicado->url ? $comunicado->url : ''  }}" target="_blank">
                    <div class="card-header card-header-image">

                            <img class="img img-raised" src="storage/img/comunicados/{{$comunicado->ruta}}">

                        <div class="colored-shadow" ></div>
                    </div>
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

      md.initVectorMap();

    });
  </script>
@endpush
