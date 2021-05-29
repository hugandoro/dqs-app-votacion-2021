<!-- Vista para pantalla de login -->
<div class="row">
    <div class="col-sm-12">
        <h1 align="Center">Presupuesto Participativo | Dosquebradas | 2021</h1>
        <h3 align="Center">Preinscripcion de cedulas</h3>
        <br><br>
    </div>
</div>

<div class="row">
    <div class="col-sm-2"></div>

    <div class="col-sm-8">

        <?php

        //Valida que se tenga una ficha de ciudadano con datos para mostrar
        if (isset($ficha_ciudadano)) {

            // VALIDACION UNO - Tiene PIN
            if (!empty($ficha_ciudadano)) {
                echo "<h1 align='Center'><B>CC $ficha_ciudadano->documento</B></h1>";
                echo "<h1 align='Center'>" . $ficha_ciudadano->primer_nombre . " " . $ficha_ciudadano->segundo_nombre . " " . $ficha_ciudadano->primer_apellido . " " . $ficha_ciudadano->segundo_apellido . "</h1>";
                echo "<div class='alert alert-info' role='alert' align='Center'>Ya existe un PIN asignado a este documento</div>";
            }

            // VALIDACION DOS - NO tiene PIN
            if (empty($ficha_ciudadano)) {
                // Primera validacion - Que este en la BD Sisben
                if (!empty($ficha_sisben)) {
                    echo "<h1 align='Center'>Documento N° <B>$ficha_sisben->documento</B></h1>";
                    echo "<h1 align='Center'>" . $ficha_sisben->nombre_1 . " " . $ficha_sisben->nombre_2 . " " . $ficha_sisben->apellido_1 . " " . $ficha_sisben->apellido_2 . "</h1>";
                    echo "<h3 align='Center'>Ud podra participar por la <B>Comuna N° $ficha_sisben->comuna</B></h3>";
                    echo "<h4 align='Center'>Barrio $ficha_sisben->barrio</h4><br><br>";

                    // Segunda validacion - Que no pertenesca a una comuna sin ejercicio participativo para esta vigencia
                    if (($ficha_sisben->comuna != 1) and ($ficha_sisben->comuna != 2) and ($ficha_sisben->comuna != 8) and ($ficha_sisben->comuna != 10) and ($ficha_sisben->comuna != 11))
                        echo "<div class='alert alert-info' role='alert' align='Center'>Estimado ciudadano, por temas normativos su comuna no tendra ejercicio de presupuesto participativo para la vigencia 2021, en el caso de pertenecer a uno de los dos corregimientos (Marcadas - Alto El Nudo), le recordamos que en estos se realizara la votacion de forma presencial (Fisica)</div>";

                    else {
                        echo "<form method='post' action='?c=Preinscripcion&a=generarPin'>";

                        echo "<input id='documento' name='documento' type='hidden' value='$ficha_sisben->documento'>";
                        echo "<input id='documento' name='primer_nombre' type='hidden' value='$ficha_sisben->nombre_1'>";
                        echo "<input id='documento' name='segundo_nombre' type='hidden' value='$ficha_sisben->nombre_2'>";
                        echo "<input id='documento' name='primer_apellido' type='hidden' value='$ficha_sisben->apellido_1'>";
                        echo "<input id='documento' name='segundo_apellido' type='hidden' value='$ficha_sisben->apellido_2'>";
                        echo "<input id='documento' name='comuna' type='hidden' value='$ficha_sisben->comuna'>";

                        echo "<button type='submit' class='btn btn-success btn-lg btn-block' name='go' class='btn btn-lg btn-default btn-block'>Crear PIN de votacion</button><br><br>";
                        echo "</form>";
                    }
                } else {
                    echo "<div class='alert alert-info' role='alert' align='Center'>N° de documento NO encontrado en la base de datos sisben municipal</div>";
                }

                // Determina el boton de tipo solicitud a radicar acorde a si esta o no en la BD SISBEN
                if (!empty($ficha_sisben))
                    echo "<a href='https://forms.gle/1V7zcR5rqP5F1rPH7'><button type='submit' class='btn btn-warning btn-lg btn-block' name='go'>Radicar solicitud por cambio de comuna</button></a>";
                else
                    echo "<a href='https://forms.gle/1V7zcR5rqP5F1rPH7'><button type='submit' class='btn btn-warning btn-lg btn-block' name='go'>Radicar solicitud para inscripcion manual</button></a><br><br>";
            }

        }

        ?>


    </div>

    <div class="col-sm-2"></div>
</div>


<div class="row">
    <div class="col-sm-2"></div>

    <div class="col-sm-8">

        <!--<h3 align="Center"><br>Recuerde guardar cuidadosamente el pin de votacion que acaba de ser generado, el dia de votacion con su numero de cedula y con este pin podra ingresar a registrar el voto por alguno de los proyectos de su comuna.</h3>-->

    </div>

    <div class="col-sm-2"></div>
</div>