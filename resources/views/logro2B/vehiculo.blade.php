@extends('app')
@section('title', 'Vehiculos')
@section('contenido')
    <!--Formulario-->
    <div class="mb-2 d-flex justify-content-around ">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#storeVehiculo">
            Add Vehiculo
        </button>
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#seeCategoria">
            Ver Categorias
        </button>
        @include('logro2B.modal.modals')
    </div>
    <!--/.formulario-->

    <!--Tabla-->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h3 class="card-title">Vehiculos</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm bg-success" style="width: 245px;">
                            <form class="d-flex flex-row" method="GET">
                                @csrf
                                <input type="search" name="search" class="form-control float-right"
                                    placeholder="Categoria...">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Color</th>
                                <th>Categoria</th>
                                <th>Usuario</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($vehiculos as $vehiculo)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $vehiculo->marca }}</td>
                                    <td>{{ $vehiculo->modelo }}</td>
                                    <td>{{ $vehiculo->color }}</td>
                                    <td>{{ $vehiculo->categoria->categoria }}</td>
                                    <td>{{ $vehiculo->user->name }}</td>
                                    <td>
                                        <form action="{{ url('vehiculo-delete', $vehiculo->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger" style="border: none">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                    <path
                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                                </svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7">No Hay Datos</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!--/.tabla-->
@endsection

