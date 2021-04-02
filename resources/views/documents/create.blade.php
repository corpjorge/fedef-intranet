@extends('layouts.app', ['activePage' => 'document', 'menuParent' => 'document', 'titlePage' => __('Administrador de documentos')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('document.store') }}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="card ">
              <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">description</i>
                </div>
                <h4 class="card-title">{{ __('Añadir documento') }}</h4>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('document.index') }}" class="btn btn-sm btn-rose">{{ __('Volver a la lista') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Nombre') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Nombre') }}" value="{{ old('name') }}" required="required" aria-required="true"/>
                      @include('alerts.feedback', ['field' => 'name'])
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Documento') }}</label>
                  <div class="col-sm-7">
                      <input class="form-control{{ $errors->has('document') ? ' is-invalid' : '' }}" id="input-document" type="file" name="document" required="required" aria-required="true">
                  </div>
                </div>
                  <div class="row">
                      <label class="col-sm-2 col-form-label">{{ __('Area') }}</label>
                      <div class="col-sm-7">
                          <div class="form-group{{ $errors->has('area_id') ? ' has-danger' : '' }}">
                              <select class="selectpicker form-control{{ $errors->has('area_id') ? ' is-invalid' : '' }}" data-size="7" data-style="btn btn-primary btn-round" id="input-current-gender_id" title="Genero" name="area_id" required>
                                  @foreach($areas as $area)
                                      <option value="{{$area->id}}" {{ old('area_id') == $area->id ? 'selected' : '' }}>{{$area->name}}</option>
                                  @endforeach
                              </select>
                              @include('alerts.feedback', ['field' => 'area_id'])
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-rose">{{ __('Guardar') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
