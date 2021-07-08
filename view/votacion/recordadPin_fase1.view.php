<!-- Vista para pantalla de login -->
<div class="row">
    <div class="col-sm-12">
        <h2 align="Center">Presupuesto participativo Dosquebradas 2021</h2>
        <h3 align="Center">Votacion</h3>
        <br><br>
    </div>
</div>

<div class="row">
    <div class="col-sm-3"></div>

    <div class="col-sm-6">

        <form method="post" action="?c=Votacion&a=recordarPin_fase2" role="login">
            <div class="form-group">
                <input type="number" class="form-control form-control-lg" style="font-size: 16pt;" name="documento" placeholder="Documento de identificacion" required value="" autocomplete="off" />
                <small id="emailHelp" class="form-text text-muted">Digite su numero de idenitifacion sin puntos ni comas</small><br><br>
                <input type="text" class="form-control form-control-lg" style="font-size: 16pt;" name="nombre" placeholder="Primer nombre" required value="" autocomplete="off" />
                <small id="emailHelp" class="form-text text-muted">Digite su primer nombre</small><br><br>
                <input type="text" class="form-control form-control-lg" style="font-size: 16pt;" name="apellido" placeholder="Primer apellido" required value="" autocomplete="off" />
                <small id="emailHelp" class="form-text text-muted">Digite su primer apellido</small><br><br>
                <input type="number" class="form-control form-control-lg" style="font-size: 16pt;" name="comuna" placeholder="N° de comuna" required value="" autocomplete="off" />
                <small id="emailHelp" class="form-text text-muted">Digite el numero de comuna para la cual se inscribio</small>
                <br><br>
            </div>
            <br>
            <button type="submit" class="btn btn-success btn-lg btn-block" name="go" class="btn btn-lg btn-default btn-block">Recordar mi PIN</button>
        </form>

        <br><br>

    </div>

    <div class="col-sm-3"></div>


    <div class="col-lg-12 col-md-12 col-xs-12" align="center">
        <hr>
    </div>

</div>