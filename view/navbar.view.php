<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="?c=Portada&token=<?php echo @$_GET['token']; ?>">Presupuesto Participativo</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

      <li><a href="https://presupuestoparticipativo.dosquebradas.gov.co">Sitio web | </a></li>
        <li><a href="?c=Preinscripcion&a=Index&token=<?php echo @$_GET['token']; ?>">Preinscripciones | </a></li>
        <li><a href="?c=Votacion&a=Index&token=<?php echo @$_GET['token']; ?>">Votacion | </a></li>
        <li><a href="?c=Resultados&a=Index&token=<?php echo @$_GET['token']; ?>">Resultados</a></li>

      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>