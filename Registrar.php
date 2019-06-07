<?php
include "Conection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ciclobig</title>
    <link rel="stylesheet" href="css/Registrar.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
           <!--barra de navegacion-->
       <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.html">Ciclobig</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
         data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <!--
              <a class="nav-link" href="About.html">Quienes Somos<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Productos.html">Paseos</a>
            </li>
                -->
            <li class="nav-item">
                <a class="nav-link" href="Login.html">Iniciar Sesion</a>
              </li>
              
           
          </ul>
        
        </div>
      </nav>
<div class="container">
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputNombres">NOMBRES</label>
      <input type="text" class="form-control" id="inputNombres" placeholder="Nombres">
    </div>
    <div class="form-group col-md-6">
      <label for="inputAapellidos">APELLIDOS</label>
      <input type="text" class="form-control" id="inputApellidos" placeholder="Apellidos">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail">GMAIL</label>
      <input type="Email" class="form-control" id="inputEmail" placeholder="Correo Electronico">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>
</html>

