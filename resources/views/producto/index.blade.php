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
                <th>Categoría</th>
                <th>Existencias</th>
                <th>Precio</th>
                <th width="18%">Opciones</th>
            </tr>
    </thead>
        <tbody>

            @foreach ($productos as $producto)
                <tr>
                    <td>{{$producto->id}}</td>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->categoria}}</td>
                    <td>{{$producto->existencias}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>
                        <form action="{{ route('productos.destroy', $producto->id)}}" method="POST">
                            <a href="/productos/{{$producto->id}}/edit" class="btn btn-sm btn-outline-primary">Editar</a>
                            @csrf
                            @method('DELETE');
                            <button type="submit" class="btn btn-sm btn-danger">Borrar</button>
                        </form>

                    </td>
                </tr>
            @endforeach

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
