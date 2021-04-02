@extends('layouts.app', ['activePage' => 'document', 'menuParent' => 'document', 'titlePage' => __('Administrador de documentos')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">recent_actors</i>
                </div>
                <h4 class="card-title">{{ __('Documentos') }}</h4>
              </div>
              <div class="card-body">
                @can('create', App\Role::class)
                  <div class="row">
                    <div class="col-12 text-right">
                      <a href="{{ route('document.create') }}" class="btn btn-sm btn-rose">{{ __('Agregar documento') }}</a>
                    </div>
                  </div>
                @endcan
                <div class="table-responsive">
                  <table id="datatables" class="table table-striped table-no-bordered table-hover" style="display:none">
                    <thead class="text-primary">
                    <th>
                        {{ __('ID') }}
                    </th>
                      <th>
                          {{ __('Nombre') }}
                      </th>
                      <th>
                         {{ __('Area') }}
                      </th>
                      @can('manage-users', App\User::class)
                        <th class="text-right">
                          {{ __('Acción') }}
                        </th>
                      @endcan
                    </thead>
                    <tbody>
                  @if(auth()->user()->role_id != 1)
                    @foreach($documents as $document)
                            @if($document->area->id == 2)
                                <tr>
                                    <td>
                                        {{ $document->id }}
                                    </td>
                                    <td>
                                        <a rel="tooltip" class="btn btn-success btn-link" href="{{ url('/storage/document/'.$document->path) }}" data-original-title="" title="" target="_blank">
                                            {{ $document->name }}
                                        </a>
                                    </td>
                                    <td>  {{ $document->area->name }} </td>
                                    @can('manage-users', App\User::class)
                                        <td class="td-actions text-right">
                                            <form action="{{ route('document.destroy', $document) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                {{--                                    <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('document.edit', $document) }}" data-original-title="" title="">--}}
                                                {{--                                        <i class="material-icons">edit</i>--}}
                                                {{--                                        <div class="ripple-container"></div>--}}
                                                {{--                                    </a>--}}
                                                <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("¿Estás seguro de que deseas eliminar este documento?") }}') ? this.parentElement.submit() : ''">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                            </form>
                                        </td>
                                    @endcan
                                </tr>
                            @endif
                    @endforeach
                      @foreach($documents as $document)
                        @foreach(auth()->user()->areas as $areas)
                        @if($areas->id == $document->area->id)
                        <tr>
                          <td>
                            {{ $document->id }}
                          </td>
                          <td>
                              <a rel="tooltip" class="btn btn-success btn-link" href="{{ url('/storage/document/'.$document->path) }}" data-original-title="" title="" target="_blank">
                                  {{ $document->name }}
                              </a>
                          </td>
                          <td>  {{ $document->area->name }} </td>
                          @can('manage-users', App\User::class)
                            <td class="td-actions text-right">
                                <form action="{{ route('document.destroy', $document) }}" method="post">
                                    @csrf
                                    @method('delete')
{{--                                    <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('document.edit', $document) }}" data-original-title="" title="">--}}
{{--                                        <i class="material-icons">edit</i>--}}
{{--                                        <div class="ripple-container"></div>--}}
{{--                                    </a>--}}
                                    <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("¿Estás seguro de que deseas eliminar este documento?") }}') ? this.parentElement.submit() : ''">
                                        <i class="material-icons">close</i>
                                        <div class="ripple-container"></div>
                                    </button>
                                </form>
                            </td>
                          @endcan
                        </tr>
                        @endif
                        @endforeach
                      @endforeach
                  @else
                      @foreach($documents as $document)
                              <tr>
                                  <td>
                                      {{ $document->id }}
                                  </td>
                                  <td>
                                      <a rel="tooltip" class="btn btn-success btn-link" href="{{ url('/storage/document/'.$document->path) }}" data-original-title="" title="" target="_blank">
                                          {{ $document->name }}
                                      </a>
                                  </td>
                                  <td>  {{ $document->area->name }} </td>
                                  @can('manage-users', App\User::class)
                                      <td class="td-actions text-right">
                                          <form action="{{ route('document.destroy', $document) }}" method="post">
                                              @csrf
                                              @method('delete')
                                              {{--                                    <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('document.edit', $document) }}" data-original-title="" title="">--}}
                                              {{--                                        <i class="material-icons">edit</i>--}}
                                              {{--                                        <div class="ripple-container"></div>--}}
                                              {{--                                    </a>--}}
                                              <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("¿Estás seguro de que deseas eliminar este documento?") }}') ? this.parentElement.submit() : ''">
                                                  <i class="material-icons">close</i>
                                                  <div class="ripple-container"></div>
                                              </button>
                                          </form>
                                      </td>
                                  @endcan
                              </tr>
                      @endforeach
                  @endif
                    </tbody>
                  </table>
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
    $('#datatables').fadeIn(1100);
    $('#datatables').DataTable({
      "pagingType": "full_numbers",
      "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
      ],
      responsive: true,
      language: {
          search: "_INPUT_",
          searchPlaceholder: "Buscar documentos",
          paginate: {
              first:      "Primero",
              last:       "Último",
              next:       "Siguiente",
              previous:   "Anterior"
          },
          info: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
          infoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
          lengthMenu: "Mostrar _MENU_ registros",
          emptyTable: "Ningún dato disponible en esta tabla",
      },
      "columnDefs": [
        { "orderable": false, "targets": 4 },
      ],
    });
  });
</script>
@endpush
