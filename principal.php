<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    // No está logueado, redirige a login
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>

<link rel="icon" href="logos/logo1606-Photoroom.png" type="image/jpg">

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Infinity Books</title>
  <link rel="stylesheet" href="principal.css" />
</head>
<body>
  <header class="header">
    <div class="left-header">
      <img src="logos/infinity books.jpg" alt="Logo Infinity Books" class="logo" />
      <div class="dropdown">
        <button class="dropbtn">Categorías</button>
        <div class="dropdown-content">
          <a href="#">Romance</a>
          <a href="#">Ciencia Ficción</a>
          <a href="#">Misterio</a>
        </div>
      </div>
    </div>
    <div class="right-header">
      <div class="search-container">
        <input type="text" id="searchInput" placeholder="Buscar..." />
        <button onclick="buscar()" class="search-btn">🔍</button>
      </div>
    </div>
  </header>

  <!-- Línea blanca -->
  <div class="linea-blanca"></div>

  <!-- Carrusel de baners -->
  <div class="slider-container">
    <div class="slider-track" id="slider">
      <img src="banersprinci/banuno.jpg" alt="Libro 1" />
      <img src="banersprinci/bandos.jpg" alt="Libro 2" />
      <img src="banersprinci/bantres.jpg" alt="Libro 3" />
      <img src="banersprinci/bancuatro.jpg" alt="Libro 4" />
      <img src="banersprinci/bancinco.jpg" alt="Libro 5" />
      <img src="banersprinci/banuno.jpg" alt="Libro 1 Clon" />
    </div>
    <button class="slider-btn left" id="btn-left">&#10094;</button>
    <button class="slider-btn right" id="btn-right">&#10095;</button>
  </div>

 <!-- primera fila de libros  -->
<div class="seccion-libros">
  <h2>Las mejores sugerencias para ti</h2>
  <div class="libros-carrusel">
    <button class="flecha izquierda" id="flecha-izq">&#10094;</button>

    <div class="contenedor-libros" id="contenedor-libros">
      <a href="libro1.html"><div class="libro"> <img src="portadaslibros/dagas.jpg"><p>La Daga sin Nombre</p></div></a>
      <a href="libro2.html"><div class="libro"><img src="portadaslibros/crepusculo.jpg"><p>Crepúsculo</p></div></a>
      <a href="libro3.html"><div class="libro"><img src="portadaslibros/No confíes en nadie.png"><p>No confíes en Nadie</p></div></a>
      <div class="libro"><img src="libros/libro4.jpg"><p>Libro 4</p></div>
      <div class="libro"><img src="libros/libro5.jpg"><p>Libro 5</p></div>
      <div class="libro"><img src="libros/libro6.jpg"><p>Libro 6</p></div>
      <div class="libro"><img src="libros/libro7.jpg"><p>Libro 7</p></div>
      <div class="libro"><img src="libros/libro8.jpg"><p>Libro 8</p></div>
      <div class="libro"><img src="libros/libro9.jpg"><p>Libro 9</p></div>
      <div class="libro"><img src="libros/libro10.jpg"><p>Libro 10</p></div>
      <div class="libro"><img src="libros/libro11.jpg"><p>Libro 11</p></div>
      <div class="libro"><img src="libros/libro12.jpg"><p>Libro 12</p></div>
      <div class="libro"><img src="libros/libro13.jpg"><p>Libro 13</p></div>
      <div class="libro"><img src="libros/libro14.jpg"><p>Libro 14</p></div>
      <div class="libro"><img src="libros/libro15.jpg"><p>Libro 15</p></div>
    </div>

    <button class="flecha derecha" id="flecha-der">&#10095;</button>
  </div>
</div>
<br><br>

 <!-- Segunda fila de libros  -->
<div class="seccion-libros">
  <h2>ROMANCE </h2>
  <div class="libros-carrusel">
    <button class="flecha izquierda" id="flecha-izq">&#10094;</button>

    <div class="contenedor-libros" id="contenedor-libros">
      <div class="libro"><img src="libros/libro1.jpg"><p>Libro 1</p></div>
      <div class="libro"><img src="libros/libro2.jpg"><p>Libro 2</p></div>
      <div class="libro"><img src="libros/libro3.jpg"><p>Libro 3</p></div>
      <div class="libro"><img src="libros/libro4.jpg"><p>Libro 4</p></div>
      <div class="libro"><img src="libros/libro5.jpg"><p>Libro 5</p></div>
      <div class="libro"><img src="libros/libro6.jpg"><p>Libro 6</p></div>
      <div class="libro"><img src="libros/libro7.jpg"><p>Libro 7</p></div>
      <div class="libro"><img src="libros/libro8.jpg"><p>Libro 8</p></div>
      <div class="libro"><img src="libros/libro9.jpg"><p>Libro 9</p></div>
      <div class="libro"><img src="libros/libro10.jpg"><p>Libro 10</p></div>
      <div class="libro"><img src="libros/libro11.jpg"><p>Libro 11</p></div>
      <div class="libro"><img src="libros/libro12.jpg"><p>Libro 12</p></div>
      <div class="libro"><img src="libros/libro13.jpg"><p>Libro 13</p></div>
      <div class="libro"><img src="libros/libro14.jpg"><p>Libro 14</p></div>
      <div class="libro"><img src="libros/libro15.jpg"><p>Libro 15</p></div>
    </div>

    <button class="flecha derecha" id="flecha-der">&#10095;</button>
  </div>
</div>

  <script src="principal.js"></script>
</body>
</html>
