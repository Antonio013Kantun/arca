<!DOCTYPE html>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <!--<title>Dashboard Sidebar Menu</title>--> 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <!--<img src="logo.png" alt="">-->
                </span>

                <div class="text logo-text">
                    <span class="name">Arca</span>
                    <span class="profession">SM32</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Animales</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Alimentacion</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Clasificacion</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="habitat.php">
                        <i class="fas fa-tree"></i>
                            <span class="text nav-text">Habitat</span>
                        </a>
                    </li>

                 

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">Dashboard Sidebar</div>
    </section>

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})

modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>

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

</body>
</html>

