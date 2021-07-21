<!-- Vista para pantalla de login -->
<div class="row">
    <div class="col-sm-12">
        <h2 align="Center">Presupuesto participativo Dosquebradas 2021</h2>
        <h3 align="Center">Votacion</h3>
        <br><br>
    </div>
</div>

<div class="row">
    <div class="col-sm-2"></div>

    <div class="col-sm-8">

        <?php

        //Valida y almacena el tarjeton con el voto respectivo
        if (isset($documento)) {

            if(($voto_registrado == TRUE) && ($pin_consumido == TRUE)){
                echo "<div class='alert alert-success' role='alert' align='Center'><h4 align='Center'>Su voto a sido registrado exitosamente</h4></div>";
                echo "<center><small id='emailHelp' class='form-text text-muted'>Gracias por participar y cumplir con su deber civico en este proceso de Presupuesto Paticipativo 2021, una vez cerrada la jornada, le invitamos a consultar los resultados en el sitio web <a href='https://presupuestoparticipativo.dosquebradas.gov.co'>presupuestoparticipativo.dosquebradas.gov.co</a> opcion N° 5 Resultados</small></center>";
                echo "<br><hr><a href='?c=Votacion&a=Index&token=" . @$_GET['token'] . "'><button type='submit' name='go' class='btn btn-lg btn-info btn-block'>Regresar al menu principal</button></a><hr>";
            }

        }

        ?>


    </div>

    <div class="col-sm-2"></div>
</div>
