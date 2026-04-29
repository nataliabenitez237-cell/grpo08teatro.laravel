@extends('plantilla')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12 text-center mb-4">
            <h1 class="display-4">📞 Contacto</h1>
            <p class="lead">Comunicate con nosotros</p>
        </div>
    </div>

    <div class="row">
        <!-- Columna 1: Información de contacto -->
        <div class="col-md-5 mb-4">
            <div class="card shadow h-100">
                <div class="card-header bg-purple text-white">
                    <h4 class="mb-0">📍 Información</h4>
                </div>
                <div class="card-body">
                    <p><strong>Teatro de la Ciudad</strong></p>
                    <p>📌 Pasaje Villanueva 1470</p>
                    <p>📞 Celular: 379-4699617</p>
                    <p>✉️ Email: ctesteatrodelaciudad@gmail.com</p>
                    <hr>
                    <p><strong>Redes sociales:</strong></p>
                    <a href="https://facebook.com" target="_blank" class="btn btn-outline-primary btn-sm">
                        <i class="bi bi-facebook"></i> Facebook
                    </a>
                    <a href="https://www.instagram.com/teatrodelaciudadctes" target="_blank" class="btn btn-outline-danger btn-sm">
                        <i class="bi bi-instagram"></i> Instagram
                    </a>
                </div>
            </div>
        </div>

        <!-- Columna 2: Formulario de contacto -->
        <div class="col-md-7 mb-4">
            <div class="card shadow h-100">
                <div class="card-header bg-purple text-white">
                    <h4 class="mb-0">✉️ Enviar mensaje</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nombre</label>
                                <input type="text" class="form-control" placeholder="Tu nombre">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Apellido</label>
                                <input type="text" class="form-control" placeholder="Tu apellido">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" placeholder="tu@email.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" placeholder="(011) 1234-5678">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mensaje</label>
                            <textarea class="form-control" rows="4" placeholder="Escribí tu mensaje..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-purple w-100" onclick="alert('✅ Mensaje enviado. Gracias por contactarte, te responderemos a la brevedad.')">Enviar mensaje</button>
                        <!--<button type="submit" class="btn btn-purple w-100">Enviar mensaje</button>-->
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- MAPA DE GOOGLE MAPS -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-purple text-white">
                    <h4 class="mb-0">🗺️ Nuestra Ubicación</h4>
                </div>
                <div class="card-body p-0">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3541.178345184932!2d-58.841285!3d-27.470166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456cb3a3c4f8b9%3A0x2b5e6f8c3a9e4c7d!2sPasaje%20Villanueva%201470%2C%20Corrientes!5e0!3m2!1ses!2sar!4v1712345678901!5m2!1ses!2sar" 
                        width="100%" 
                        height="350" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div class="card-body text-center">
                    <p class="mb-0">📍 Pasaje Villanueva 1470, entre Catamarca y San Lorenzo - Corrientes Capital</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .bg-purple {
        background-color: purple;
    }
    .btn-purple {
        background-color: purple;
        color: white;
    }
    .btn-purple:hover {
        background-color: darkmagenta;
        color: white;
    }
</style>
@endsection