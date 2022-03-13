<!doctype html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>EmpleosApp | Listado de Vacantes</title>
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

        <div class="card">
          <h4 class="card-header"><strong>Listado de Vacantes</strong></h4>              
          <div class="card-body">
            <a class="btn btn-primary" th:href="@{/vacantes/nueva}" role="button"><i class="fas fa-file" aria-hidden="true"></i> Nueva</a>            
            <hr>
            <div th:if="${msg != null}" class='alert alert-success' th:text="${msg}" role='alert'></div>  
            <table class="table table-hover">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Descripción</th>
                  <th scope="col">Categoria</th>
                  <th scope="col">Fecha</th>
                  <th scope="col">Salario</th>
                  <th scope="col">Destacado</th>
                  <th scope="col">Operaciones</th>

                </tr>
              </thead>
              <tbody>
                <tr th:each="vacante:${vacantes}">
                	<th scope="row" th:text="${vacante.id}"></th>
                	<td th:text="${vacante.nombre}"></td>
                	<td th:text="${vacante.descripcion}"></td>
                	<td th:text="${vacante.categoria.nombre}"></td>
                	<td th:text="${vacante.Fecha}"></td> 
                	<td th:text="${vacante.salario}"></td>
                  <td >
                    <span th:if="${vacante.destacado==1}" class="badge bg-primary">si</span>
                    <span th:unless="${vacante.destacado==1}" class="badge bg-danger">no</span>
                  </td>              
                	<td>
                	
                	<a th:href="@{/vacantes/eliminar/{id}(id=${vacante.id})}" onclick="return confirm('�Estas seguro?')" class="btn btn-success btn-sm" role="button" title="Eliminar"><i class="fas fa-trash" aria-hidden="true"></i></a>
                	<a th:href="@{/vacantes/detalle(id=${vacante.id})}" class="btn btn-success btn-sm" ><i class="fas fa-file" aria-hidden="true"></i></a>
                	<a tybe="button" class="btn btn-success btn-sm" role="button" title="Editar"><i class="fas fa-pencil-alt" aria-hidden="true"></i></a>
                	</td>
                    
                	</tr >
                	
                <tr></tr>
                <tr>
              <td colspan="6">Total registros:  [[${total}]] </td>
                </tr>
               
              </tbody>
            </table>
            
          </div>
        </div>
      </div> <!-- /container -->

    </main>

    <footer class="footer" th:insert="fragmentos/pie.html::pie-pagina">
      
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script th:src="@{/bootstrap/js/jquery-3.6.0.min.js}"></script>
    <script th:src="@{/bootstrap/js/popper.min.js}"></script>
    <script th:src="@{/bootstrap/js/bootstrap.min.js}"></script> 
-  </body>
</html> 
  

  