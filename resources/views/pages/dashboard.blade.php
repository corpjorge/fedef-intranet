@extends('layouts.app', ['activePage' => 'dashboard', 'menuParent' => 'dashboard', 'titlePage' => __('Tablero')])

@section('content')
<div class="content">
  <div class="content">
    <div class="container-fluid">

        @foreach($externalSystems as $externalSystem)
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">equalizer</i>
                        </div>
                        <p class="card-category">{{$externalSystem->description}}</p>
                        <h4 class="card-title">{{$externalSystem->name}}</h4>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-success">link</i>
                            <a href="{{ route('system-external.'.$externalSystem->path) }}">Clic aquí para ingresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


      <h3>Como vamos</h3>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-success" data-header-animation="true">
              <div class="ct-chart" id="websiteViewsChart"></div>
            </div>
            <div class="card-body">
              <div class="card-actions">
                <button type="button" class="btn btn-danger btn-link fix-broken-card">
                  <i class="material-icons">build</i> Fix Header!
                </button>
                <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="Refresh">
                  <i class="material-icons">refresh</i>
                </button>
                <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Change Date">
                  <i class="material-icons">edit</i>
                </button>
              </div>
              <h4 class="card-title">Website Views</h4>
              <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> campaign sent 2 days ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-success" data-header-animation="true">
              <div class="ct-chart" id="dailySalesChart"></div>
            </div>
            <div class="card-body">
              <div class="card-actions">
                <button type="button" class="btn btn-danger btn-link fix-broken-card">
                  <i class="material-icons">build</i> Fix Header!
                </button>
                <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="Refresh">
                  <i class="material-icons">refresh</i>
                </button>
                <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Change Date">
                  <i class="material-icons">edit</i>
                </button>
              </div>
              <h4 class="card-title">Daily Sales</h4>
              <p class="card-category">
                <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> updated 4 minutes ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-info" data-header-animation="true">
              <div class="ct-chart" id="completedTasksChart"></div>
            </div>
            <div class="card-body">
              <div class="card-actions">
                <button type="button" class="btn btn-danger btn-link fix-broken-card">
                  <i class="material-icons">build</i> Fix Header!
                </button>
                <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="Refresh">
                  <i class="material-icons">refresh</i>
                </button>
                <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Change Date">
                  <i class="material-icons">edit</i>
                </button>
              </div>
              <h4 class="card-title">Completed Tasks</h4>
              <p class="card-category">Last Campaign Performance</p>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> campaign sent 2 days ago
              </div>
            </div>
          </div>
        </div>
      </div>


        <div class="row">
        <div class="cards">
            <div class="container">
                <div class="title">
                    <h3>Próximos eventos</h3>
                </div>



            </div>
        </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card card-background" style="background-image: url('coopfon/img/fedef/evento.jpg')">
                    <div class="card-body">
                        <h6 class="card-category text-info">Hoy</h6>
                        <a href="#">
                            <h3 class="card-title">Salgamos de la rutina</h3>
                        </a>
                        <p class="card-description">
                            Este es el segundo ciclo paseo que realizaremos están todos cordialmente invitados el día domingo 28 de Marzo hacia Bojacá, tomaremos un descanso en las piedras de chivo negro, allí podremos tener un rato de alimentación y descanso, llevar refrigerio saludable
                        </p>
                        <a href="#" class="btn btn-white btn-link">
                            <i class="material-icons">subject</i> Inscribirse
                        </a>
                        <a href="#" class="btn btn-white btn-link">
                            <i class="material-icons">watch_later</i> 7:30 a.m
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-background" style="background-image: url('coopfon/img/fedef/evento.jpg')">
                    <div class="card-body">
                        <h6 class="card-category text-info">Mañana</h6>
                        <a href="#">
                            <h3 class="card-title">Salgamos de la rutina</h3>
                        </a>
                        <p class="card-description">
                            Este es el segundo ciclo paseo que realizaremos están todos cordialmente invitados el día domingo 28 de Marzo hacia Bojacá, tomaremos un descanso en las piedras de chivo negro, allí podremos tener un rato de alimentación y descanso, llevar refrigerio saludable
                        </p>
                        <a href="#" class="btn btn-white btn-link">
                            <i class="material-icons">subject</i> Inscribirse
                        </a>
                        <a href="#" class="btn btn-white btn-link">
                            <i class="material-icons">watch_later</i> 7:30 a.m
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-background" style="background-image: url('coopfon/img/fedef/evento.jpg')">
                    <div class="card-body">
                        <h6 class="card-category text-info">Próximamente</h6>
                        <a href="#">
                            <h3 class="card-title">Salgamos de la rutina</h3>
                        </a>
                        <p class="card-description">
                            Este es el segundo ciclo paseo que realizaremos están todos cordialmente invitados el día domingo 28 de Marzo hacia Bojacá, tomaremos un descanso en las piedras de chivo negro, allí podremos tener un rato de alimentación y descanso, llevar refrigerio saludable
                        </p>

                        <a href="#" class="btn btn-white btn-link">
                            <i class="material-icons">watch_later</i> 7:30 a.m
                        </a>
                    </div>
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
