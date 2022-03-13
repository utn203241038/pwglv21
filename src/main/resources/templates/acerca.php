<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>EmpleosApp | Acerca de Empleos App</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="bootstrap/css/jumbotron.css" rel="stylesheet">
    <link href="bootstrap/css/sticky-footer-navbar.css" rel="stylesheet">
  </head>

  <body>

    <header th:insert="fragmentos/menu.html::menu-principal">
     
    </header>

    <main role="main">     
      <hr>
      <div class="container"> 

        <div class="card">
          <h4 class="card-header">Acerca de <strong>Empleos App</strong> </h4>              
          <div class="card-body">
            
				<p>Aplicación para Publicar Ofertas de Trabajo desarrollada con Spring Boot.</p1>

          </div>
        </div>
      </div> <!-- /container -->

    </main>

    <footer class="footer" th:insert="fragmentos/pie.html::pie-pagina">
      
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>     
  </body>
</html>
