<?php
  require 'insert.php';
  $table = $instanciaDB->selectInformation();



?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <script src="js/main.js"></script>
    <title>Información Hibernadero</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <a class="navbar-brand">Rover Agricultor</a>
      <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="my-nav" class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#" >Cerrar Sesión</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid" style="margin-top:90px;">
      <div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ml-1 mt-5">
        <div class="card col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
          <img src="https://placehold.it/318x180/" class="card-img-top" alt="Card image" />
          <div class="card-block">
            <h4 class="card-title">Humedad</h4>
            <p class="card-text">Each merged squad salts the wild porter. Should the charmed church dodge a camera? The gown litters the rhyme. Another discrete elevator defects over the target.</p>
            <!-- <a href="http://sonarsystems.co.uk" class="btn btn-success">Button</a> -->
          </div>
        </div>

        <div class="card col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
          <img src="https://placehold.it/318x180/" class="card-img-top" alt="Card image" />
          <div class="card-block">
            <h4 class="card-title">Temperatura</h4>
            <p class="card-text">Each merged squad salts the wild porter. Should the charmed church dodge a camera? The gown litters the rhyme. Another discrete elevator defects over the target.</p>
            <!-- <a href="http://sonarsystems.co.uk" class="btn btn-success">Button</a> -->
          </div>
        </div>

        <div class="card col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 .img-fluid">
          <img src="https://placehold.it/318x180/" class="card-img-top" alt="Card image" />
          <div class="card-block">
            <h4 class="card-title">Otra variable</h4>
            <p class="card-text">Each merged squad salts the wild porter. Should the charmed church dodge a camera? The gown litters the rhyme. Another discrete elevator defects over the target.</p>
            <!-- <a href="http://sonarsystems.co.uk" class="btn btn-success">Button</a> -->
          </div>
        </div>
      </div>
    </div>
  <br>
  <br>
  <br>
  
  <!-- Boton para ejecutar modal -->
  <button type="button" class="btn btn-success float-right mb-2 mr-1" data-toggle="modal" data-target="#staticBackdrop">
   Click Para Agregar Nuevos Cultivos
  </button>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Agregar Cultivos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="infohiber.php" method="POST">
            <div class="form-group">
              <label for="cropName">Nombre del Cultivo</label>
              <input id="cropName" class="form-control" type="text" name="cropName" placeholder="Gardenias Rojas">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <input type="submit" class="btn btn-success" value="Agregar">
          </form>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="form-group col-md-5">
    <label for="invernadero">Seleccione Ivernadero</label>
    <select id="invernadero" class="form-control" name="invernadero">
      <option>Invernadero USBBOG</option>
    </select>
  </div>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </div>
  </body>
</html>