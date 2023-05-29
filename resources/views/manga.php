<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <style>
    .fancy-title {
        text-align: center;
    }
    .title-radius{
      border-radius: 20px;
      background-color: purple;
      width: 500px;
      height: 55px;
      margin-left: 420px;
      margin-top: 10px;
      margin-bottom: 10px
    }
    .letter-title{
      color: white;
    }
</style>
</head>
<body>

<div class="title-radius">
  <h1 class="fancy-title letter-title">Página de Anime</h1>
</div>


<style>
  .column-image {
    width: 200px; 
    height: 200px; 
    object-fit: cover; 
  }
</style>

<div class="container text-center">
  <div class="row align-items-start">
    <div class="col border">
      <h3 class="text-primary">Manga</h3>
      <img src="https://i.pinimg.com/736x/f6/ad/7c/f6ad7c004fe049735c9e4c9a09d0ca3a--sketches-manga.jpg" alt="Manga" class="img-fluid column-image">
    </div>
    <div class="col border">
      <h3 class="text-primary">Películas/Series</h3>
      <img src="https://th.bing.com/th/id/R.feab7bd6bb91f85ae98460bcd6ec4d5b?rik=DM2EaLYd3uGswA&riu=http%3a%2f%2fwww.sfondilandia.it%2f1600%2fEvangelion00.jpg&ehk=HL5vE9zf5dK3ZLeUlrfEVuJi9bjPcaX3NNFgBNNezRM%3d&risl=&pid=ImgRaw&r=0" alt="Películas/Series" class="img-fluid column-image">
    </div>
    <div class="col border">
      <h3 class="text-primary">Juegos</h3>
      <img src="https://th.bing.com/th/id/R.761d7edde9159cb9864ee29bfd50887e?rik=7kkzNau9etSYdg&pid=ImgRaw&r=0" alt="Juegos" class="img-fluid column-image">
    </div>
    <div class="col border">
      <h3 class="text-primary">Recomendaciones</h3>
      <img src="https://th.bing.com/th/id/OIP.mRBLVVGb5TGP1-gDJ8e1ggHaF7?pid=ImgDet&rs=1" alt="Recomendaciones" class="img-fluid column-image">
    </div>
  </div>
</div>



<style>
  .table caption{
    text-align: center; 
  }
  
  .table caption {
    color: purple; 
    font-size: 40px; 
  }

  .subtitle-radius{
      border-radius: 20px;
      background-color: purple;
      width: 400px;
      height: 50px;
      margin-left: 470px;
      margin-top: 10px;
      margin-bottom: 10px
    }
    .letter-subtitle{
      color: white;
      padding-top: 4px
    }
</style>

<div class="subtitle-radius">
  <h2 class="fancy-title letter-subtitle">MANGA</h2>
</div>
<table class="table caption-top table-info">
  <thead>
    <tr>
    
      <th scope="col">NOMBRE</th>
      <th scope="col">PRECIO</th>
      <th scope="col">DISPONIBILIDAD</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"> Kimetsu no Yaiba</th>
      <td>$55.000</td>
      <td>SI</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">Black Clover</th>
      <td>70.000</td>
      <td>SI</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">Tokyo Ghoul</th>
      <td>35.000</td>
      <td>NO</td>
      <td></td>
    </tr>
  </tbody>
</table>




<div class="center-div">
  <div class="dropdown" data-bs-theme="light" style="text-align: center;">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButtonLight" data-bs-toggle="dropdown" aria-expanded="false">
      Seleccina para comprar
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLight">
      <li><a class="dropdown-item active" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Separated link</a></li>
    </ul>
  </div>
  
  <div class="center-div">
  <div class="btn-group d-flex justify-content-center" role="group" aria-label="Basic checkbox toggle button group">
    <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
    <label class="btn btn-outline-primary" for="btncheck1">Resumen de tu compra</label>

    <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
    <label class="btn btn-outline-primary" for="btncheck2">Realizar otra compra</label>

    <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
    <label class="btn btn-outline-primary" for="btncheck3">Salir</label>
  </div>
</div>




</html>