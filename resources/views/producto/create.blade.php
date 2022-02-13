@extends('layouts.productbase')

@section('contenido')

<div class="row py-2">
    <div class="col-6">
        <h2><b>Registrando un Producto</b></h2>
    </div>
    <div class="col-6">
        <div style="text-align: right;">

            <a href="{{ route('home') }}">
               Regresar a la página principal
            </a><br><br>

           </div>
    </div>
</div>

<form method="POST" action="/productos">
    @csrf
    <div class="form-row">
        <div class="col-md-12" >

            <div class="row">

                <div class="col">
                    <label class="medium mb-1" >Nombre del producto: </label>
                    <input class="form-control" name="nombre" id="nombre"
                    type="text" placeholder="Nombre del producto" title="Ingrese el nombre del producto" required/>
                    <input type="hidden" id="txtaccion" name="txtaccion" value="1"/>
                </div>

                <div class="col">
                <label class="medium mb-1" >Categoría: </label>
                    <input class="form-control" name="categoria" id="categoria"
                    type="text" placeholder="Nombre de la categoría" title="Ingrese el nombre de la categoría" required/>
                </div>

            </div>

            <br>

            <div class="row">

                <div class="col">
                    <label class="medium mb-1" >Existencias: </label>
                    <input class="form-control" name="existencias" id="existencias"
                    type="number" placeholder="Número de existencias" title="Ingrese el número de existencias" required/>
                    <input type="hidden" id="txtaccion" name="txtaccion" value="1"/>
                </div>

                <div class="col">
                <label class="medium mb-1" >Precio: </label>
                    <input class="form-control" name="precio" id="precio"
                    type="number" placeholder="Precio del producto" title="Ingrese el precio" required/>
                </div>

            </div>

            <br>

            <div class="form-group">
                <div class="row" style="text-align: center;">

                    <div class="col-md-6">
                        <input class="btn btn-primary btn-block col-md-12" type="submit" value="Registrar nuevo producto"/>
                    </div>

                    <div class="col-md-6">
                        <input class="btn btn-outline-danger btn-block col-md-12" type="reset" value="Cancelar"/>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>
@endsection
