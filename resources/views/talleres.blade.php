@extends('plantilla')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12 text-center mb-4">
            <h1 class="display-4">🎨 Talleres</h1>
            <p class="lead">Conocé nuestros talleres artísticos</p>
        </div>
    </div>

    <div class="row">
        <!-- Taller 1: Teatro de Titeres -->
        <div class="col-md-4 mb-4">
            <div class="card shadow h-100 d-flex flex-column">
                <img src="{{ asset('img/4.jpeg') }}" class="card-img-top" alt="Taller de Títeres" style="width: 100%; height: 250px; object-fit: cover; object-position: top;">
                <div class="card-body">
                    <h5>Taller de Títeres</h5>
                    <p>Construcción y manipulación de títeres. Técnicas de guante, bocón y retablo. Dictado por Karen De Micheli.</p>
                    <p class="text-purple fw-bold">📅 Inicio: 6 de junio | lunes 14:30 hs a 16:30 hs</p>
                    <button class="btn btn-purple w-100" onclick="alert('✅ Gracias por tu interés en el Taller de Títeres. Pronto nos comunicaremos contigo.')">Inscribirse</button>
                </div>
            </div>
        </div>

        <!-- Taller 2: Ballet -->
        <div class="col-md-4 mb-4">
            <div class="card shadow h-100 d-flex flex-column">
                <img src="{{ asset('img/8.jpeg') }}" class="card-img-top" alt="Taller de Ballet" style="width: 100%; height: 250px; object-fit: cover; object-position: center;">
                <div class="card-body">
                    <h5>Taller de Ballet (Intermedio y Avanzado)</h5>
                    <p>Ballet intermedio y avanzado. Técnica, postura y expresión corporal. Dictado por Ricardo Mazzarelli.</p>
                    <p class="text-purple fw-bold">📅 Martes y jueves 15 hs a 17 hs</p>
                    <button class="btn btn-purple w-100" onclick="alert('✅ Gracias por tu interés en el Taller de Ballet. Pronto nos comunicaremos contigo.')">Inscribirse</button>
                </div>
            </div>
        </div>

        <!-- Taller 3: Mini Audiovisuales -->
        <div class="col-md-4 mb-4">
            <div class="card shadow h-100 d-flex flex-column">
                <img src="{{ asset('img/9.jpeg') }}" class="card-img-top" alt="Taller de Mini Audiovisuales" style="width: 100%; height: 250px; object-fit: cover; object-position: center;">
                <div class="card-body">
                    <h5>Taller de Mini Audiovisuales</h5>
                    <p>Introducción al audiovisual. Producción, edición y narrativa visual. Dictado por Ignacio Melzner.</p>
                    <p class="text-purple fw-bold">📅 Lunes 17 hs a 18:30 hs</p>
                    <button class="btn btn-purple w-100" onclick="alert('✅ Gracias por tu interés en el Taller de Mini Audiovisuales. Pronto nos comunicaremos contigo.')">Inscribirse</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Fila 2: Más talleres -->
    <div class="row mt-4">
        <!-- Taller 4: Danza Contemporánea -->
        <div class="col-md-4 mb-4">
            <div class="card shadow h-100 d-flex flex-column">
                <img src="{{ asset('img/5.jpeg') }}" class="card-img-top" alt="Danza Contemporánea" style="width: 100%; height: 250px; object-fit: cover; object-position: center;">
                <div class="card-body">
                    <h5>Taller de Danza Contemporánea (Adultos)</h5>
                    <p>Danza contemporánea para adultos. Expresión corporal y creatividad. Principiantes y regulares.</p>
                    <p class="text-purple fw-bold">📅 Martes y jueves de 10 hs a 12 hs</p>
                    <button class="btn btn-purple w-100" onclick="alert('✅ Gracias por tu interés en Danza Contemporánea. Pronto nos comunicaremos contigo.')">Inscribirse</button>
                </div>
            </div>
        </div>

        <!-- Taller 5: Danza Clásica -->
        <div class="col-md-4 mb-4">
            <div class="card shadow h-100 d-flex flex-column">
                <img src="{{ asset('img/6.jpeg') }}" class="card-img-top" alt="Danza Clásica" style="width: 100%; height: 250px; object-fit: cover; object-position: center;">
                <div class="card-body">
                    <h5>Danza Clásica (Adultos)</h5>
                    <p>Danza clásica para adultos. Técnica, postura y elegancia. Principiantes y regulares.</p>
                    <p class="text-purple fw-bold">📅 Viernes de 14 hs a 18 hs</p>
                    <button class="btn btn-purple w-100" onclick="alert('✅ Gracias por tu interés en Danza Clásica. Pronto nos comunicaremos contigo.')">Inscribirse</button>
                </div>
            </div>
        </div>

        <!-- Taller 6: Aromito -->
        <div class="col-md-4 mb-4">
            <div class="card shadow h-100 d-flex flex-column">
                <img src="{{ asset('img/7.jpeg') }}" class="card-img-top" alt="Taller de Aromito" style="width: 100%; height: 250px; object-fit: cover; object-position: center;">
                <div class="card-body">
                    <h5>Taller de Aromito (Jóvenes y Adultos)</h5>
                    <p>Expresión artística para jóvenes y adultos. Espacio de creación y encuentro.</p>
                    <p class="text-purple fw-bold">📅 Martes y jueves 21:30 hs a 23 hs</p>
                    <button class="btn btn-purple w-100" onclick="alert('✅ Gracias por tu interés en el Taller de Aromito. Pronto nos comunicaremos contigo.')">Inscribirse</button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .bg-purple { background-color: purple; }
    .text-purple { color: purple; }
    .btn-purple { background-color: purple; color: white; border: none; padding: 8px 0; border-radius: 5px; }
    .btn-purple:hover { background-color: darkmagenta; }
    .card { transition: transform 0.3s; }
    .card:hover { transform: scale(1.02); }
    .card-img-top {
        width: 100%;
        height: 250px;
        object-fit: cover;
        object-position: center;
        border-radius: 10px 10px 0 0;
    }
</style>
@endsection