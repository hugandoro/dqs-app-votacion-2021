<!-- Vista para pantalla de login -->
<div class="row">
    <div class="col-sm-12">
        <h2 align="Center">Presupuesto participativo Dosquebradas 2021</h2>
        <h3 align="Center">Resultados</h3>
        <br><br>
    </div>
</div>

<div class="row">
    <div class="col-sm-1"></div>

    <div class="col-sm-10">

        <?php


            // Valida que la mesa COMUNA 1 este abierta | Si esta abierta NO muestra resultados | 1 ABIERTO | 0 CERRADA
            if ($mesa_comuna_uno->estado == 0) {
                echo "<center><h1>Resultados COMUNA N° 1</h1></center>";
                echo "<table class='table'>";

                    echo "<tr>";
                        echo "<td style='width: 5%;'><b>Comuna</b></td>";
                        echo "<td style='width: 5%;'><b>ID del proyecto</b></td>";
                        echo "<td style='width: 10%;'><b>Icono</b></td>";
                        echo "<td style='width: 70%;'><b>Proyecto</b></td>";
                        echo "<td style='width: 10%;'><b>Votos</b></td>";
                    echo "</tr>";

                    // Resultados ordenados por numerlo de votos
                    foreach($resultados_mesa_comuna_uno as $resultados):
                        //Datos del proyecto
                        echo "<tr>";
                            echo "<td>$resultados->numero_comuna</td>";
                            echo "<td>$resultados->id_proyecto</td>";
                            echo "<td><img src='assets/img/iconos_proyectos/" . $resultados->id_proyecto . ".jpg' width='100%'></td>";
                            echo "<td>$resultados->proyecto</td>";
                            echo "<td><h1>$resultados->conteo_votos</h1></td>";
                        echo "</tr>";
                    endforeach;

                echo "</table>";

            }
            else {
                echo "<div class='alert alert-danger' role='alert' align='Center'><h4 align='Center'>Mesa de la COMUNA N° 1 - ABIERTA - No se pueden mostrar resultados hasta estar CERRADA</h4></div>";
            }
            // Fin MESA 1 ************************************************************************************************

            echo "<br><hr><hr><br>";

            // Valida que la mesa COMUNA 2 este abierta | Si esta abierta NO muestra resultados | 1 ABIERTO | 0 CERRADA
            if ($mesa_comuna_dos->estado == 0) {
                echo "<center><h1>Resultados COMUNA N° 2</h1></center>";
                echo "<table class='table'>";

                    echo "<tr>";
                        echo "<td style='width: 5%;'><b>Comuna</b></td>";
                        echo "<td style='width: 5%;'><b>ID del proyecto</b></td>";
                        echo "<td style='width: 10%;'><b>Icono</b></td>";
                        echo "<td style='width: 70%;'><b>Proyecto</b></td>";
                        echo "<td style='width: 10%;'><b>Votos</b></td>";
                    echo "</tr>";

                    // Resultados ordenados por numerlo de votos
                    foreach($resultados_mesa_comuna_dos as $resultados):
                        //Datos del proyecto
                        echo "<tr>";
                            echo "<td>$resultados->numero_comuna</td>";
                            echo "<td>$resultados->id_proyecto</td>";
                            echo "<td><img src='assets/img/iconos_proyectos/" . $resultados->id_proyecto . ".jpg' width='100%'></td>";
                            echo "<td>$resultados->proyecto</td>";
                            echo "<td><h1>$resultados->conteo_votos</h1></td>";
                        echo "</tr>";
                    endforeach;

                echo "</table>";

            }
            else {
                echo "<div class='alert alert-danger' role='alert' align='Center'><h4 align='Center'>Mesa de la COMUNA N° 2 - ABIERTA - No se pueden mostrar resultados hasta estar CERRADA</h4></div>";
            }
            // Fin MESA 2 ************************************************************************************************

            echo "<br><hr><hr><br>";

            // Valida que la mesa COMUNA 8 este abierta | Si esta abierta NO muestra resultados | 1 ABIERTO | 0 CERRADA
            if ($mesa_comuna_ocho->estado == 0) {
                echo "<center><h1>Resultados COMUNA N° 8</h1></center>";
                echo "<table class='table'>";

                    echo "<tr>";
                        echo "<td style='width: 5%;'><b>Comuna</b></td>";
                        echo "<td style='width: 5%;'><b>ID del proyecto</b></td>";
                        echo "<td style='width: 10%;'><b>Icono</b></td>";
                        echo "<td style='width: 70%;'><b>Proyecto</b></td>";
                        echo "<td style='width: 10%;'><b>Votos</b></td>";
                    echo "</tr>";

                    // Resultados ordenados por numerlo de votos
                    foreach($resultados_mesa_comuna_ocho as $resultados):
                        //Datos del proyecto
                        echo "<tr>";
                            echo "<td>$resultados->numero_comuna</td>";
                            echo "<td>$resultados->id_proyecto</td>";
                            echo "<td><img src='assets/img/iconos_proyectos/" . $resultados->id_proyecto . ".jpg' width='100%'></td>";
                            echo "<td>$resultados->proyecto</td>";
                            echo "<td><h1>$resultados->conteo_votos</h1></td>";
                        echo "</tr>";
                    endforeach;

                echo "</table>";

            }
            else {
                echo "<div class='alert alert-danger' role='alert' align='Center'><h4 align='Center'>Mesa de la COMUNA N° 8 - ABIERTA - No se pueden mostrar resultados hasta estar CERRADA</h4></div>";
            }
            // Fin MESA 8 ************************************************************************************************

            echo "<br><hr><hr><br>";

            // Valida que la mesa COMUNA 10 este abierta | Si esta abierta NO muestra resultados | 1 ABIERTO | 0 CERRADA
            if ($mesa_comuna_diez->estado == 0) {
                echo "<center><h1>Resultados COMUNA N° 10</h1></center>";
                echo "<table class='table'>";

                    echo "<tr>";
                        echo "<td style='width: 5%;'><b>Comuna</b></td>";
                        echo "<td style='width: 5%;'><b>ID del proyecto</b></td>";
                        echo "<td style='width: 10%;'><b>Icono</b></td>";
                        echo "<td style='width: 70%;'><b>Proyecto</b></td>";
                        echo "<td style='width: 10%;'><b>Votos</b></td>";
                    echo "</tr>";

                    // Resultados ordenados por numerlo de votos
                    foreach($resultados_mesa_comuna_diez as $resultados):
                        //Datos del proyecto
                        echo "<tr>";
                            echo "<td>$resultados->numero_comuna</td>";
                            echo "<td>$resultados->id_proyecto</td>";
                            echo "<td><img src='assets/img/iconos_proyectos/" . $resultados->id_proyecto . ".jpg' width='100%'></td>";
                            echo "<td>$resultados->proyecto</td>";
                            echo "<td><h1>$resultados->conteo_votos</h1></td>";
                        echo "</tr>";
                    endforeach;

                echo "</table>";

            }
            else {
                echo "<div class='alert alert-danger' role='alert' align='Center'><h4 align='Center'>Mesa de la COMUNA N° 10 - ABIERTA - No se pueden mostrar resultados hasta estar CERRADA</h4></div>";
            }
            // Fin MESA 10 ************************************************************************************************

            echo "<br><hr><hr><br>";

            // Valida que la mesa COMUNA 11 este abierta | Si esta abierta NO muestra resultados | 1 ABIERTO | 0 CERRADA
            if ($mesa_comuna_once->estado == 0) {
                echo "<center><h1>Resultados COMUNA N° 11</h1></center>";
                echo "<table class='table'>";

                    echo "<tr>";
                        echo "<td style='width: 5%;'><b>Comuna</b></td>";
                        echo "<td style='width: 5%;'><b>ID del proyecto</b></td>";
                        echo "<td style='width: 10%;'><b>Icono</b></td>";
                        echo "<td style='width: 70%;'><b>Proyecto</b></td>";
                        echo "<td style='width: 10%;'><b>Votos</b></td>";
                    echo "</tr>";

                    // Resultados ordenados por numerlo de votos
                    foreach($resultados_mesa_comuna_once as $resultados):
                        //Datos del proyecto
                        echo "<tr>";
                            echo "<td>$resultados->numero_comuna</td>";
                            echo "<td>$resultados->id_proyecto</td>";
                            echo "<td><img src='assets/img/iconos_proyectos/" . $resultados->id_proyecto . ".jpg' width='100%'></td>";
                            echo "<td>$resultados->proyecto</td>";
                            echo "<td><h1>$resultados->conteo_votos</h1></td>";
                        echo "</tr>";
                    endforeach;

                echo "</table>";

            }
            else {
                echo "<div class='alert alert-danger' role='alert' align='Center'><h4 align='Center'>Mesa de la COMUNA N° 11 - ABIERTA - No se pueden mostrar resultados hasta estar CERRADA</h4></div>";
            }
            // Fin MESA 11 ************************************************************************************************

            echo "<br><hr><hr><br>";

        ?>


    </div>

    <div class="col-sm-1"></div>
</div>