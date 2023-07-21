<div class="modal fade" id="storeVehiculo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-secondary">
                <h4 class="modal-title">Vehiculo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('vehiculo') }}" method="POST">
                @csrf
                <div class="modal-body bg-dark">
                    <div class="form-group">
                        <label for="marcaVehiculo">Marca</label>
                        <input type="text" class="form-control" id="marcaVehiculo" name="marca">
                    </div>
                    <div class="form-group">
                        <label for="modeloVehiculo">Modelo</label>
                        <input type="text" class="form-control" id="modeloVehiculo" name="modelo">
                    </div>
                    <div class="form-group">
                        <label for="colorVehiculo">Color</label>
                        <input type="text" class="form-control" id="colorVehiculo" name="color">
                    </div>
                    <div class="form-group">
                        <label for="categoriaVehiculo" class="text-white">Cateria</label>
                        <select class="custom-select rounded-0" name="categoria_id" id="categoriaVehiculo">
                            <option></option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="userVehiculo" class="text-white">Usuario</label>
                        <select class="custom-select rounded-0" name="user_id" id="userVehiculo">
                            <option></option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer justify-content-between bg-white">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-info">
                        Registrar
                    </button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="seeCategoria">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-secondary">
                <h4 class="modal-title">Categorias</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-dark">
                <table class="table table-hover text-nowrap text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categorias as $categoria)
                            <tr>
                                <td>{{$categoria->id}}</td>
                                <td>{{$categoria->categoria}}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">No Hay Datos</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="modal-footer justify-content-center bg-white">
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
