@extends('layouts.app', ['activePage' => 'dashboard', 'menuParent' => 'dashboard', 'titlePage' => __('Tablero')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card card-plain card-blog">
                    <div class="card-header card-header-image">
                        <a href="#">
                            <img class="img img-raised" src="https://fedef-intranet.test/coopfon/img/fedef/evento.jpg">
                        </a>
                        <div class="colored-shadow" ></div>
                    </div>
                </div>
            </div>
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
