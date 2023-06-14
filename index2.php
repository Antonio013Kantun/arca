<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-dark bg-primary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Arca</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-primary" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="animal.php">Animales</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="alimentacion.php">Alimentacion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="clasificacion.php">Clasificacion</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="habitat.php">Habitat</a>
                  </li>
              <form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </div>
      </nav>
  </header>
  <main>
      <?php
        include('connection/connection.php');

        // Realizar la consulta para obtener la cantidad de animales
        $sql = "SELECT COUNT(*) AS cantidadAnimales FROM animal";
        $resultado = mysqli_query($conn, $sql);

        if ($resultado) {
            // Obtener el resultado de la consulta
            $fila = mysqli_fetch_assoc($resultado);
            $cantidadAnimales = $fila['cantidadAnimales'];
        } else {
            $cantidadAnimales = 0;
        }

        // Cerrar la conexión a la base de datos
        mysqli_close($conn);
      ?>











<h1 class="titulo">Animales</h1>

<div class="container">
  <div class="row">
  <div class="col-md-3">
          <div class="card" onclick="mostrarAnimales()">
                <div class="card-body bg-info">
                    <h5 class="card-title">Total de animales</h5>
                    <p class="card-text" ><?php echo $cantidadAnimales; ?></p>
                </div>
          </div>
          </div>
  </div>
</div>

    <div class="container">
        <div class="row">
          
          <div class="col-md-3">
            <div class="card" onclick="mostrarClasificacion()">
              <div class="card-body">
                <h5 class="card-title">Clasificación</h5>
                <p class="card-text" id="cantidadClasificacion" >0</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card" onclick="mostrarHabitat()">
              <div class="card-body">
                <h5 class="card-title">Habitat</h5>
                <p class="card-text" id="cantidadHabitat">0</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card" onclick="mostrarAlimentacion()">
              <div class="card-body">
                <h5 class="card-title">Alimentación</h5>
                <p class="card-text" id="cantidadAlimentacion">0</p>
              </div>
            </div>
          </div>
        </div>
    </div>
      

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <!-- <script src="js/script.js"></script> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>