@extends('layouts.app', ['activePage' => 'comunicado', 'menuParent' => 'comunicado', 'titlePage' => __('comunicados')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">thumb_up_off_alt</i>
                            </div>
                            <h4 class="card-title">{{ __('Comunicados') }}</h4>
                        </div>
                        <div class="card-body">
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a href="{{ route('comunicado.create') }}" class="btn btn-sm btn-rose">{{ __('Añadir comunicado') }}</a>
                                    </div>
                                </div>
                            <div class="table-responsive">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" style="display:none">
                                    <thead class="text-primary">
                                    <th>
                                        {{ __('ID') }}
                                    </th>
                                    <th>
                                        {{ __('Img') }}
                                    </th>
                                    <th>
                                        {{ __('Fecha de creación') }}
                                    </th>
                                    <th class="text-right">
                                        {{ __('Acción') }}
                                    </th>
                                    </thead>
                                    <tbody>
                                    @foreach($comunicados as $comunicado)
                                        <tr>
                                            <td class="td-actions text-right">
                                                {{ $comunicado->id }}
                                            </td>
                                            <td>
                                                <a href="{{ url('/storage/img/comunicados/'.$comunicado->ruta) }}" target="_blank">img</a>
                                            </td>
                                            <td>
                                                {{ $comunicado->created_at->format('Y-m-d') }}
                                            </td>
                                            <td>
                                                <form action="{{ route('comunicado.delete', $comunicado->id ) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger btn-sm" ><span class="material-icons"> clear </span> eliminar </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
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
                    searchPlaceholder: "Buscar",
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
                "order": [[ 0, "desc" ]],
                "columnDefs": [
                    { "orderable": true, "targets": 1 },
                ],
            });
        });
    </script>
@endpush
