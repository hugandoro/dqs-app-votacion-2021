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
                echo "<h1 align='Center'>Documento N° <B>$ficha_ciudadano->documento</B></h1>";
                echo "<h3 align='Center'>" . $ficha_ciudadano->primer_nombre . " " . $ficha_ciudadano->segundo_nombre . " " . $ficha_ciudadano->primer_apellido . " " . $ficha_ciudadano->segundo_apellido . "</h3>";
                echo "<h1 align='Center'>PIN DE VOTACION N° <B>$ficha_ciudadano->pin</B></h1>";
                echo "<h3 align='Center'>Inscrito para votar por proyectos de la Comuna N° <B>$ficha_ciudadano->comuna</B></h3>";
                echo "<div class='alert alert-info' role='alert' align='Center'>Recuerde anotar su N° PIN en un lugar seguro, toda vez que el dia de votacion con su N° de identificacion y este PIN podra ejercer su voto por los proyectos inscritos en la comuna</div>";
                echo "<div align='Center'><input type='button' value='Imprimir o guardar en PDF' onClick='window.print()'></div>";
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