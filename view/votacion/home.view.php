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

        <form method="post" action="?c=Votacion&a=validar" role="login">
            <div class="form-group">
                <input type="number" class="form-control form-control-lg" style="font-size: 16pt;" name="cedula" placeholder="Cedula" required value="" autocomplete="off" />
                <small id="emailHelp" class="form-text text-muted">Digite su numero de idenitifacion sin puntos ni comas</small>
                <br><br>
                <input type="number" class="form-control form-control-lg" style="font-size: 24pt;" name="pin" placeholder="Pin votacion" required value="" autocomplete="off" />
                <small id="emailHelp" class="form-text text-muted">Digite el numero PIN de votacion que le fue asignando durante el proceso de preinscripcion</small>
            </div>
            <br>
            <button type="submit" class="btn btn-success btn-lg btn-block" name="go" class="btn btn-lg btn-default btn-block">Ingresar a votar...</button>
        </form>

        <br><br>

    </div>

    <div class="col-sm-3"></div>


    <div class="col-lg-12 col-md-12 col-xs-12" align="center">
        <p><a href="?c=Votacion&a=recordarPin_fase1&token=<?php echo @$_GET['token']; ?>">Olvide mi PIN de votacion</a></p>
    </div>


    <div class="col-lg-12 col-md-12 col-xs-12" align="center">
        <hr>
    </div>

</div>