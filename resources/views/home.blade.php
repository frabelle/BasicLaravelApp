@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container-fluid">
        <div class="card mb-4">
        <img src="../resources/image/banner.png" class="card-img-top" alt="moneda">

            <div class="card-body">

                <div class="table-responsive">

                    <h2>Gestión de Productos</h2>

                    <div style="text-align: right;">

                     <a href="{{ route('login') }}">
                        <button type="button" class="btn btn-outline-primary btn-md">
                            <i class="fas fa-plus"></i> Agregar nuevo producto
                        </button>
                     </a><br><br>

                    </div>

                    <table class="table table-bordered" id="tbl" width="100%" style="text-align: center;" cellspacing="0">

                    <thead class="thead">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Existencias</th>
                                <th>Categoría</th>
                                <th>Precio</th>
                                <th width="20%">Opciones</th>
                            </tr>
                    </thead>
                        <tbody>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                        </tbody>
                    <tfoot class="thead-dark">
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
