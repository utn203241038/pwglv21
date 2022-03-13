<!doctype html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>EmpleosApp | Detalles de la Oferta de Trabajo</title>
    <!-- Bootstrap core CSS -->
    <link th:href="@{/bootstrap/css/bootstrap.min.css}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link th:href="@{/bootstrap/css/jumbotron.css}" rel="stylesheet">
    <link th:href="@{/bootstrap/css/sticky-footer-navbar.css}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet">
  </head>

  <body>

    <header th:insert="fragmentos/menu.html::menu-principal">
      
    </header>

    <main role="main">
      <hr>
      <div class="container"> 

        <div class="row">
          <div class="col-md-3">            
            <img class="rounded mx-auto d-block" th:src="@{/logos/{img}(img=${vacante.imagen})}" alt="Generic placeholder image" width="220" height="220">            
          </div>
          <div class="col-md-9">
            <div class="card">
              <h4 class="card-header"><strong>Datos de la vacante</strong></h4>              
              <div class="card-body" th:each= "vacante:${vacante}">
                <h5 class="card-title"><strong>Id de la vacante: </strong><span th:text="${vacante.id}"></span></h5>
                <h6 class="card-title"><strong>Nombre: </strong> <span th:text="${vacante.nombre}"></span></h6>                
                <h7 class="card-title"><strong>Descripcion: </strong><span th:text="${vacante.descripcion}"></span></h7><br>
                <h7 class="card-title"><strong>Categoria: </strong><span th:text="${vacante.categoria.nombre}"></span></h7><br>
                <h8 class="card-title"><strong>Fecha de publicación: </strong><span th:text="${vacante.fecha}"></span></h8><br>
                <h9 class="card-title"><strong>salario: </strong><span th:text="${vacante.salario}"></span></h9><br>
                <h10 class="card-title"><strong>Destacado:</strong><span th:text="${vacante.destacado}"></span></h10><br>
                <h11 class="card-title"><strong>Estatus:</strong><span th:text="${vacante.estatus}"></span></h11><br>

                <div class="card bg-light mb-3" >
                  <div class="card-body">
                    <h5 class="card-title">Detalles:</h5>
                    <p class="card-text" th:utext="${vacante.detalles}"></p>
                  </div>
                </div>   
                <a class="btn btn-primary" href="#" role="button" title="Quiero aplicar para esta oferta de trabajo."><i class="fas fa-file" aria-hidden="true"></i> Aplicar</a>                            
              </div>
            </div>  
          </div>
        </div>

      </div>
    </main>

    <footer class="footer"  th:insert="fragmentos/pie.html::pie-pagina">
      
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="@{/bootstrap/js/bootstrap.min.js}"></script>
  </body>
</html>
