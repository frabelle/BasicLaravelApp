@extends('layouts.productbase')

@section('contenido')

<div class="table-responsive">

    <div class="row py-2">
        <div class="col-6">
            <h2><b>Gestión de Productos</b></h2>
        </div>
        <div class="col-6">
            <div style="text-align: right;">

                <a href="productos/create">
                   <button type="button" class="btn btn-outline-primary btn-md">
                       <i class="fas fa-plus"></i> Agregar nuevo producto
                   </button>
                </a><br><br>

               </div>
        </div>
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
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
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

@endsection
