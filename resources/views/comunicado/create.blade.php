@extends('layouts.app', ['activePage' => 'comunicado', 'menuParent' => 'comunicado', 'titlePage' => __('comunicado')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('comunicado.store') }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="card ">
                            <div class="card-header card-header-success card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">thumb_up_off_alt</i>
                                </div>
                                <h4 class="card-title">{{ __('Crear comunicado') }}</h4>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <a href="{{ route('comunicado.index') }}" class="btn btn-sm btn-rose">{{ __('Volver a la lista') }}</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('URL') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('url') ? ' has-danger' : '' }}">
                                            <input type="url" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url" id="input-description"  placeholder="{{ __('https://fedef-intranet.test/') }}" aria-required="true">{{ old('url') }}</input>
                                            @include('alerts.feedback', ['field' => 'url'])
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Img') }}</label>
                                    <div class="col-sm-7">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                          <span class="btn btn-outline-secondary btn-file ">
                                            <span class="fileinput-new">Archivo</span>
                                            <span class="fileinput-exists">Cambiar</span>
                                            <input type="file" class="form-control{{ $errors->has('ruta') ? ' is-invalid' : '' }}" name="ruta" id="input-doc" value="{{ old('ruta') }}" placeholder="{{ __('ruta') }}">
                                          </span>
                                            <span class="fileinput-filename"></span>
                                            <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
                                        </div>
                                        @include('alerts.feedback', ['field' => 'ruta'])
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose" style="color: #ffffff">{{ __('Guardar') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
