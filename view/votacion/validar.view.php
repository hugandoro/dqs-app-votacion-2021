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

        //Valida que se tenga una ficha de ciudadano con datos para mostrar
        if (isset($ficha_ciudadano)) {

            // VALIDACION UNO - Combinacion VALIDADA - Cedula y PIN
            if (!empty($ficha_ciudadano)) {
                if ($ficha_ciudadano->estado_pin == '0') {
                    echo "<h1 align='Center'><B>Documento N° $ficha_ciudadano->documento</B></h1>";
                    echo "<h2 align='Center'>" . $ficha_ciudadano->primer_nombre . " " . $ficha_ciudadano->segundo_nombre . " " . $ficha_ciudadano->primer_apellido . " " . $ficha_ciudadano->segundo_apellido . "</h2>";
                    echo "<h5 align='Center'>Su PIN de votacion N° " .  $ficha_ciudadano->pin . " disponible para participar en votacion proyectos <b>COMUNA " . $ficha_ciudadano->comuna ."</b></h5>";

                    //echo "<form method='post' action='?c=Votacion&a=cargarTarjeton'>";
                    echo "<form method='post' action='?c=Votacion&a=Index'>";
                        echo "<input id='documento' name='documento' type='hidden' value='$ficha_ciudadano->documento'>";
                        echo "<input id='comuna' name='comuna' type='hidden' value='$ficha_ciudadano->comuna'>";
                        echo "<br><hr><button type='submit' name='go' class='btn btn-success btn-lg btn-block'>Ingresar a votar</button><hr>";
                    echo "</form>";

                }
                else {
                    echo "<div class='alert alert-warning' role='alert' align='Center'><h4 align='Center'>El pin vinculado a este N° de documento ya fue utilizado</h4></div>";
                    echo "<br><hr><a href='?c=Votacion&a=Index&token=" . @$_GET['token'] . "'><button type='submit' name='go' class='btn btn-lg btn-info btn-block'>Regresar al menu principal</button></a><hr>";
                }
            }
            else {
                echo "<div class='alert alert-danger' role='alert' align='Center'><h4 align='Center'>Pin o documento incorrectos</h4></div>";
                echo "<br><hr><a href='?c=Votacion&a=Index&token=" . @$_GET['token'] . "'><button type='submit' name='go' class='btn btn-lg btn-info btn-block'>Regresar al menu principal</button></a><hr>";
            }

        }

        ?>


    </div>

    <div class="col-sm-2"></div>
</div>
