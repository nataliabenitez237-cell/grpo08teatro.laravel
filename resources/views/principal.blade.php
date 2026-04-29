@extends('plantilla')

@section('content')

<style>
    .carousel-img {
        height: 400px;
        object-fit: cover;
    }
    
    .eventos-section {
        margin-top: 50px;
        margin-bottom: 50px;
    }
    
    .titulo-eventos {
        margin-bottom: 30px;
        font-size: 2rem;
    }
    
    .evento-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    
    .evento-card {
        border-radius: 10px;
        transition: transform 0.3s;
    }
    
    .evento-card:hover {
        transform: scale(1.02);
    }
    
    .evento-precio {
        font-weight: bold;
        color: purple;
        font-size: 1.2rem;
    }
    
    .btn-purple {
        background-color: purple;
        color: white;
        border: none;
        padding: 8px 0;
        border-radius: 5px;
        width: 100%;
    }
    
    .btn-purple:hover {
        background-color: darkmagenta;
    }
    
    @media (max-width: 768px) {
        .carousel-img {
            height: 250px;
        }
        .evento-img {
            height: 160px;
        }
    }
</style>

<!-- CARRUSEL PRINCIPAL -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/carrusel/carrusel1.jpg') }}" class="d-block w-100 carousel-img" alt="Carrusel 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/carrusel/carrusel2.jpg') }}" class="d-block w-100 carousel-img" alt="Carrusel 2">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/carrusel/carrusel3.jpg') }}" class="d-block w-100 carousel-img" alt="Carrusel 3">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/carrusel/carrusel4.jpg') }}" class="d-block w-100 carousel-img" alt="Carrusel 4">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- SECCIÓN EVENTOS -->
<div class="eventos-section">
    <h2 class="text-center titulo-eventos">🎭 Próximos Eventos</h2>
    
    <div id="eventosCarousel" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner">
            
            <!-- SLIDE 1 -->
            <div class="carousel-item active">
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card evento-card h-100">
                                <img src="{{ asset('img/proxEventos/proxEvento1.jpg') }}" class="evento-img" alt="La Traviata">
                                <div class="card-body text-center d-flex flex-column">
                                    <h5>La Traviata</h5>
                                    <p class="text-muted">15 Mayo 2025</p>
                                    <p class="evento-precio">$25.000</p>
                                    <button class="btn btn-purple mt-auto" onclick="alert('✅ Gracias por tu interés. Pronto nos comunicaremos contigo.')">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card evento-card h-100">
                                <img src="{{ asset('img/proxEventos/proxEvento2.jpg') }}" class="evento-img" alt="Romeo y Julieta">
                                <div class="card-body text-center d-flex flex-column">
                                    <h5>Romeo y Julieta</h5>
                                    <p class="text-muted">20 Mayo 2025</p>
                                    <p class="evento-precio">$30.000</p>
                                    <button class="btn btn-purple mt-auto" onclick="alert('✅ Gracias por tu interés. Pronto nos comunicaremos contigo.')">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card evento-card h-100">
                                <img src="{{ asset('img/proxEventos/proxEvento3.jpg') }}" class="evento-img" alt="Concierto Sinfónico">
                                <div class="card-body text-center d-flex flex-column">
                                    <h5>Concierto Sinfónico</h5>
                                    <p class="text-muted">25 Mayo 2025</p>
                                    <p class="evento-precio">$20.000</p>
                                    <button class="btn btn-purple mt-auto" onclick="alert('✅ Gracias por tu interés. Pronto nos comunicaremos contigo.')">Comprar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- SLIDE 2 -->
            <div class="carousel-item">
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card evento-card h-100">
                                <img src="{{ asset('img/proxEventos/proxEvento4.jpg') }}" class="evento-img" alt="Lago de los Cisnes">
                                <div class="card-body text-center d-flex flex-column">
                                    <h5>Lago de los Cisnes</h5>
                                    <p class="text-muted">30 Mayo 2025</p>
                                    <p class="evento-precio">$28.000</p>
                                    <button class="btn btn-purple mt-auto" onclick="alert('✅ Gracias por tu interés. Pronto nos comunicaremos contigo.')">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card evento-card h-100">
                                <img src="{{ asset('img/proxEventos/proxEvento5.jpg') }}" class="evento-img" alt="Hamlet">
                                <div class="card-body text-center d-flex flex-column">
                                    <h5>Hamlet</h5>
                                    <p class="text-muted">07 Junio 2025</p>
                                    <p class="evento-precio">$32.000</p>
                                    <button class="btn btn-purple mt-auto" onclick="alert('✅ Gracias por tu interés. Pronto nos comunicaremos contigo.')">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card evento-card h-100">
                                <img src="{{ asset('img/proxEventos/proxEvento6.jfif') }}" class="evento-img" alt="La Casa de Bernarda Alba">
                                <div class="card-body text-center d-flex flex-column">
                                    <h5>La Casa de Bernarda Alba</h5>
                                    <p class="text-muted">14 Junio 2025</p>
                                    <p class="evento-precio">$28.000</p>
                                    <button class="btn btn-purple mt-auto" onclick="alert('✅ Gracias por tu interés. Pronto nos comunicaremos contigo.')">Comprar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="text-center mt-3">
           <a href="#eventosCarousel" role="button" data-bs-slide="prev" class="btn btn-secondary">◀ Anterior</a>
           <a href="#eventosCarousel" role="button" data-bs-slide="next" class="btn btn-secondary">Siguiente ▶</a>
        </div>
        
    </div>
</div>

@endsection