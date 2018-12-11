<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assetss/css/admin.css">
    <link rel="icon" type="image/png" href="../assetss/img/favicon.png" />
    <title>Clean Care</title>
</head>
<body>
    <header>
        <div class="container-header">
            <div class="logo">
                <img src="../assetss/img/logo2-2.png" alt="logo">
                <h4 class="nombre_empresa">Clean Clare</h4>
            </div>
            <div class="sesion">
                <h5> Administrador </h5>
                <p> <a href="../Controller/logout.php" style="color: red;">Cerrar sesión</a> </p>
            </div>
        </div>
    </header>
    <div class="nav-bar">
        <ul class="nav">
            <li><a href="admin.php">Inicio</a></li>
            <li><a href="productos.php">Productos</a></li>
            <li><a href="#">Sucursales</a></li>
            <li><a href="#">Perfil</a></li>
        </ul>
    </div>
    <!-- Slideshow container -->
    <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="../assetss/img/1.jpeg" style="width:100%">
        </div>
      
        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="../assetss/img/2.jpg" style="width:100%">
        </div>
      
        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="../assetss/img/3.jpeg" style="width:100%">
        </div>
      
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>
      <!-- The dots/circles -->
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
      </div>
      <!-- Productos container -->
      <div class="row" id="productos">
            <div class="column" id="P1">
                    <center>
                     <img src="../assetss/img/p1.jpg" alt"">
                    </center>
                    <h1>Producto 1</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                </div>
                     <div class="column" id="P2">
                    <center>
                    <img src="../assetss/img/p2.jpg" alt"">
                    </center>
                    <h1>Producto 2</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                </div>
                    <div class="column" id="P3">
                    <center>
                    <img src="../assetss/img/p3.jpg">
                    </center>
                    <h1>Producto 3</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur.</p>     
                </div>
      </div>
      <footer>
            <p>(c) 2018 Todos los Derechos Reservados. Christopher Chirino.</p>
            
          </footer>
      <script>
            var slideIndex = 0;
            showSlides();
            
            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                   slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
            </script>
</body>
</html>