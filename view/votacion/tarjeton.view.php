<!-- Vista para pantalla de login -->
<div class="row">
    <div class="col-sm-12">
        <h2 align="Center">Presupuesto participativo Dosquebradas 2021</h2>
        <h3 align="Center">Votacion - Proyectos de la comuna N° <b><?php if (isset($_REQUEST['comuna'])) echo $_REQUEST['comuna']; ?></b></h3>
        <br><br>
    </div>
</div>

<div class="row">
    <div class="col-sm-2"></div>

    <div class="col-sm-8">

        <?php

        //Valida que se este enviando un objeto proyecto_comuna señal que se valido un usuario para votar
        if (isset($proyectos_comuna)) {

            // Valida que existan proyectos inscritos en la comuna
            if (!empty($proyectos_comuna)) {
                echo "<table class='table'>";

                    //Titutlos del tarjeton
                    echo "<tr>";
                        echo "<td style='width: 15%;'></td>";
                        echo "<td style='width: 65%;'><b>Descripcion del proyecto</b></td>";
                        echo "<td style='width: 20%;'><b>Accion</b></td>";
                    echo "</tr>";

                    //Contenido del tarjeton ( Icono - Proyecto - Boton votar )
                    foreach($proyectos_comuna as $proyecto):
                        //Datos del proyecto
                        echo "<tr>";
                            echo "<td>";
                                echo "<img src='assets/img/iconos_proyectos/" . $proyecto->id . ".jpg' width='100%'>";
                            echo "</td>";

                            echo "<td>";
                                echo "<h4>$proyecto->proyecto</h4>";
                            echo "</td>";

                            echo "<td>";
                                echo "<form method='post' action='?c=Votacion&a=registrarVoto'>";
                                echo "<input id='proyecto_id' name='proyecto_id' type='hidden' value='$proyecto->id'>";
                                echo "<input id='comuna' name='comuna' type='hidden' value='$comuna'>";
                                echo "<input id='documento' name='documento' type='hidden' value='$documento'>";
                                echo "<button type='submit' class='btn btn-success btn-lg btn-block' name='go' class='btn btn-lg btn-default btn-block'>Votar</button><br><br>";
                                echo "</form>";        
                            echo "</td>";
                        echo "</tr>";
                    endforeach;

                    //Separador para siguiente proyecto
                    //echo "<tr>";
                    //    echo "<td colspan ='3'><hr></td>";
                    //echo "</tr>";


                echo "</table>";

                echo "<small id='emailHelp' class='form-text text-muted'><center>Estos son los proyectos inscritos por tu comuna, por favor selecciona el proyecto que deseas apoyar y da clic en el boton verde para hacer efectivo tu voto, recuerda que una vez realices tu eleccion esta NO podra ser modificada y tu participacion en esta jornada civico electoral se dara por realizada.<br></center></small>";
            }
            else {
                echo "<div class='alert alert-danger' role='alert' align='Center'><h4 align='Center'>Esta comuna no tiene proyectos inscritos</h4></div>";
                echo "<br><hr><a href='?c=Votacion&a=Index&token=" . @$_GET['token'] . "'><button type='submit' name='go' class='btn btn-lg btn-info btn-block'>Regresar al menu principal</button></a><hr>";
            }

        }

        ?>


    </div>

    <div class="col-sm-2"></div>
</div>
