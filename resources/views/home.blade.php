@extends('plantilla')

@section('content')

<!-- CARRUSEL SIN TEXTOS Y CON FORMATO FIJO -->
<style>
    .carousel-item {
        height: 500px; /* Altura para PC */
        background-color: #000;
    }
    
    .carousel-item img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Esto hace que la imagen cubra el espacio sin deformarse */
        object-position: center;
    }
    
    /* Para celular (pantallas menores a 768px) */
    @media (max-width: 768px) {
        .carousel-item {
            height: 450px; /* Altura para celular (proporción 4:5 aprox) */
        }
    }
</style>

<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://scontent-eze1-1.xx.fbcdn.net/v/t51.75761-15/482593918_18343085794152429_4888835054670268042_n.webp?stp=dst-jpg_tt6&_nc_cat=102&ccb=1-7&_nc_sid=13d280&_nc_ohc=fUIw9MNDFTMQ7kNvwHtmI4c&_nc_oc=AdrX4kunqqndB8iCHyUOxeggkWdW-Gd1Zcwf_OzrTfbDkkil0bzFdmdp26RLMQ-M0g0&_nc_zt=23&_nc_ht=scontent-eze1-1.xx&_nc_gid=2yVa29W3ZsCl7ONHorqQ_w&_nc_ss=7a389&oh=00_Af1BFI259smzU-i9gH44d0-b1APY67RXhYR-kP2fVd1oSg&oe=69DF19E5" class="d-block w-100" alt="Imagen 1">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://www.nortecorrientes.com/content/bucket/6/391436w790h394c.jpg.webp" class="d-block w-100" alt="Imagen 2">
    </div>
    <div class="carousel-item">
      <img src="https://www.diarioepoca.com/content/bucket/8/1355908w790h525c.jpg.webp" class="d-block w-100" alt="Imagen 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- SECCIÓN DE EVENTOS -->
<h2 style="text-align: center; margin: 50px 0 30px 0;">🎭 Próximos Eventos</h2>

<div class="container">
    <div class="row">
        @foreach($eventos as $evento)
        <div class="col-md-4">
            <div style="border: 1px solid #ddd; border-radius: 10px; padding: 20px; margin-bottom: 20px; background-color: #f9f9f9;">
                <h3 style="margin: 0 0 10px 0;">{{ $evento['nombre'] }}</h3>
                <p>📅 {{ $evento['fecha'] }}</p>
                <p style="color: purple; font-weight: bold;">💰 ${{ number_format($evento['precio'], 0, ',', '.') }}</p>
                <button style="background-color: purple; color: white; border: none; padding: 10px 20px; border-radius: 5px;">Comprar Entrada</button>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection