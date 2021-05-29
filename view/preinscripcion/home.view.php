<!-- Vista para pantalla de login -->
<div class="row">
    <div class="col-sm-12">
        <h1 align="Center">Presupuesto Participativo | Dosquebradas | 2021</h1>
        <h3 align="Center">Preinscripcion de cedulas</h3>
        <br><br>
    </div>
</div>

<div class="row">
    <div class="col-sm-3"></div>

    <div class="col-sm-6">

        <form method="post" action="?c=Preinscripcion&a=validar" role="login">
            <div class="form-group">
                <input type="number" class="form-control form-control-lg" style="font-size: 16pt;" name="cedula" placeholder="N° de cedula a inscribir..." required value="" autocomplete="off" />
                <small id="emailHelp" class="form-text text-muted">Digite su numero de cedula sin puntos ni comas, este sera confrontado en linea con la base de datos municipal del SISBEN, de no enontrar coincidencia en dicha base, ud podra solicitar una inscripcion manual informando algunos datos que le seran solicitados en su debido momento.</small>
            </div>
            <br>
            <button type="submit" class="btn btn-warning btn-lg btn-block" name="go" class="btn btn-lg btn-default btn-block">Continuar con el proceso...</button>
        </form>

        <br><br>

    </div>

    <div class="col-sm-3"></div>
</div>