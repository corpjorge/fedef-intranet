@extends('layouts.app_external', [
  'class' => 'landing-page sidebar-collapse',
  'classPage' => '',
  'activePage' => '',
  'title' => env('APP_NAME'),
  'pageBackground' => asset("coopfon").'/img/login.jpg'
])

@section('content')
    <div class="page-header header-filter" data-parallax="true" style="background-image: url({{ asset('coopfon/img/background/'.rand(1, 5).'.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="title">Disfrutar de todos los beneficios y servicios.</h2>

                    <a href="{{ route('login') }}" class="btn btn-rose btn-raised btn-lg">
                        <i class="fa fa-fingerprint"></i> Ingresar
                    </a>
                </div>
                <div class="col-md-3 ml-auto ">
                    <div class="card" style="width: 200px;">
                        <img class="card-img-top" src='{{ asset('coopfon/img/logo_empresa.png') }}' alt="Card image cap">

                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- End Head  --}}

    <div class="main main-raised">
        <div class="container">
            <div class="section text-center">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="title">Comunicado interno</h2>
                        <h5 class="description">Participa en los eventos que tenemos para ti.</h5>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card card-plain card-blog">
                            <div class="card-header card-header-image">
                                <a href="https://material-blog-pro-laravel.creative-tim.com/article/6-insights-into-the-french-fashion-landscape">
                                    <img class="img img-raised" src="{{ asset('coopfon/img/fedef/evento.jpg')}}">
                                </a>
                                <div class="colored-shadow" style="background-image: url("{{ asset('coopfon/img/fedef/evento.jpg') }}"); opacity: 1;"></div></div>
                            <div class="card-body">
                                <h6 class="card-category">
                                    <a href="{{ asset('coopfon/img/fedef/evento.jpg') }}" class="text-dark">Hoy</a>
                                </h6>
                                <h4 class="card-title">
                                    <a href="{{ asset('coopfon/img/fedef/evento.jpg') }}">Salgamos de la rutina </a>
                                </h4>
                                <p class="card-tags">
                                    <a href="{{ asset('coopfon/img/fedef/evento.jpg') }}"><span style="background-color: #f44336;" class="badge badge-pill">Inscripciones cerradas</span></a>
                                </p>
                                <p class="card-description">
                                    Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.
                                    <a href="{{ asset('coopfon/img/fedef/evento.jpg') }}"> Ver mas</a>
                                </p>
                                <p class="author">

                                    <a href="">
                                        <b>Salgamos de la rutina</b>
                                    </a> • Jul 9, 2020 • 2 min
                                </p>
                            </div>
                        </div>
                    </div>                                            <div class="col-md-4">
                        <div class="card card-plain card-blog">
                            <div class="card-header card-header-image">
                                <a href="https://material-blog-pro-laravel.creative-tim.com/article/10-stress-related-health-issues-you-can-avoid-by-quitting-your-job">
                                    <img class="img img-raised" src="{{ asset('coopfon/img/fedef/evento.jpg') }}">
                                </a>
                                <div class="colored-shadow" style="background-image: url("{{ asset('coopfon/img/fedef/evento.jpg') }}"); opacity: 1;"></div></div>
                            <div class="card-body">
                                <h6 class="card-category">
                                    <a href="{{asset('coopfon/img/fedef/evento.jpg') }}" class="text-dark">Mañana</a>
                                </h6>
                                <h4 class="card-title">
                                    <a href="{{ asset('coopfon/img/fedef/evento.jpg') }}">Tour Olaya</a>
                                </h4>
                                <p class="card-tags">
                                    <a href="{{ asset('coopfon/img/fedef/evento.jpg') }}"><span style="background-color: #6c757d;" class="badge badge-pill">Inscripciones abiertas</span></a>
                                </p>
                                <p class="card-description">
                                    This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here.
                                    <a href="{{ asset('coopfon/img/fedef/evento.jpg') }}"> Ver mas </a>
                                </p>
                                <p class="author">

                                    <a href="{{ asset('coopfon/img/fedef/evento.jpg') }}">
                                        <b>Salgamos de la rutina</b>
                                    </a> • Jul 9, 2020 • 5 min
                                </p>
                            </div>
                        </div>
                    </div>                                            <div class="col-md-4">
                        <div class="card card-plain card-blog">
                            <div class="card-header card-header-image">
                                <a href="https://material-blog-pro-laravel.creative-tim.com/article/make-more-out-of-your-personal-time">
                                    <img class="img img-raised" src="{{ asset('coopfon/img/fedef/evento.jpg') }}">
                                </a>
                                <div class="colored-shadow" style="background-image: url("{{ asset('coopfon/img/fedef/evento.jpg') }}"); opacity: 1;"></div></div>
                            <div class="card-body">
                                <h6 class="card-category">
                                    <a href="{{ asset('coopfon/img/fedef/evento.jpg') }}" class="text-dark">Mañana</a>
                                </h6>
                                <h4 class="card-title">
                                    <a href="{{ asset('coopfon/img/fedef/evento.jpg') }}">Por Nueva York</a>
                                </h4>
                                <p class="card-tags">
                                    <a href="{{ asset('coopfon/img/fedef/evento.jpg') }}"><span style="background-color: #6c757d;" class="badge badge-pill">Inscripciones abiertas</span></a>
                                </p>
                                <p class="card-description">
                                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is meh.
                                    <a href="{{ asset('coopfon/img/fedef/evento.jpg') }}"> Ver mas </a>
                                </p>
                                <p class="author">
                                    <a href="{{ asset('coopfon/img/fedef/evento.jpg') }}">
                                        <b>Salgamos de la rutina</b>
                                    </a> • Jul 9, 2020 • 5 min
                                </p>
                            </div>
                        </div>
                    </div>
                    <a href="" class="btn btn-rose btn-raised btn-round">
                        Ver todos
                    </a>
                </div>

    </div>
    </div>

    <div class="team-5 section-image" style="background-image: url('{{ asset('coopfon/img/cumple/'.rand(1,3).'.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">Feliz cumpleaños</h2>
                    <h5 class="description">Felicidades a todos aquellos que están en este día especial.
                        <br>Felicítalo seleccionado <i class="fa fa-edit"></i>
                    </h5>
                </div>
            </div>
        </div>
        <div class="container col-11">
            <div class="scrollbar scrollbar-primary">
                <div class="row">
                    @foreach($birthUsers as $user)
                    <div class="col-4">
                        <h4 class="card-title text-white text-center">
                            {{$user->fullname}}
                            <a class="btn btn-just-icon btn-link btn-white" href="{{ route('felicitaciones.show', [ $user, str_replace(" ", "_",$user->name) ]) }}" target="_blank" title="Felicítalo" ><i class="fa fa-edit"></i></a>
                        </h4>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <style>
        .scrollbar {
            position: relative;
            width: 100%;
            height: 800px;
            overflow: auto;
        }
    </style>

    <div class="section section-contacts">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="row">
                    <div class="col-md-4 ml-auto mr-auto text-center">
                        <a href="{{ url('login') }}" class="btn btn-primary btn-raised">
                            Ingresar
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

@endsection
