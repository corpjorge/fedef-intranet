@extends('layouts.app_external', [
  'class' => 'landing-page sidebar-collapse',
  'classPage' => '',
  'activePage' => '',
  'title' => env('APP_NAME'),
  'pageBackground' => asset("coopfon").'/img/login.jpg'
])

@section('content')
    <div class="page-header header-filter" data-parallax="true" style="background-image: url({{ asset('coopfon/img/fedef/'.rand(1, 5).'.jpg') }})">
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
                @foreach($comunicados as $cominucado)
                <div class="col-md-4">
                    <div class="card card-plain card-blog">
                        <div class="card-header card-header-image">
                            <a href="{{ $cominucado->url ? $cominucado->url : '' }}" target="_blank">
                                <img class="img img-raised" src="{{ asset('storage/img/comunicados/'.$cominucado->ruta)}}">
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
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
