<div class="container-fluid">
    <h1 class="mt-4">Gestión de Moneda</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
        <li class="breadcrumb-item "><a href="#">Gestión de Moneda</a></li>
        <li class="breadcrumb-item "><a href="tbl_moneda.php">Moneda</a></li>
        <li class="breadcrumb-item active">Registrar una Moneda</li>
    </ol>
    <div class="card mb-4">
        <img src="../resources/image/banner.png" class="card-img-top" alt="moneda">

        <div class="card-body">

            <div class="table">

                <h2>Registrando una nueva moneda</h2>

                <div style="text-align: right;">
                    <a href="tbl_moneda.php" title="Regresar a la página anterior">
                        <i class="fas fa-arrow-circle-left"></i>
                        Regresar a la página anterior
                    </a><br><br>
                </div>

                <form method="POST" action="">
                    <div class="form-row">
                        <div class="col-md-12" >

                            <div class="row">

                                <div class="col">
                                    <label class="small mb-1" >Nombre de la Moneda: </label>
                                    <input class="form-control" name="moneda" id="moneda"
                                    type="text" placeholder="Nombre de Moneda" title="Ingrese el nombre de la Moneda" required/>
                                    <input type="hidden" id="txtaccion" name="txtaccion" value="1"/>
                                </div>

                                <div class="col">
                                <label class="small mb-1" >Simbolo de la Moneda: </label>
                                    <input class="form-control" name="simbolo" id="simbolo"
                                    type="text" placeholder="Ejemplo: C$" title="Ingrese el simbolo de la Moneda" required/>
                                </div>

                            </div>

                            <br>

                            <div class="form-group">
                                <div class="form-row" style="text-align: center;">

                                    <div class="col-md-6">
                                        <input class="btn btn-primary btn-block" type="submit" value="Registrar nueva moneda"/>
                                    </div>

                                    <div class="col-md-6">
                                        <input class="btn btn-outline-danger btn-block" type="reset" value="Cancelar"/>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
