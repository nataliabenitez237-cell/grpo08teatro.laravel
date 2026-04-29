@extends('plantilla')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12 text-center mb-4">
            <h1 class="display-4">📜 Términos y Usos</h1>
            <p class="lead">Condiciones generales de uso del sitio web</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <!-- 1. Aceptación -->
            <div class="card shadow">
                <div class="card-header bg-purple text-white">
                    <h4 class="mb-0">1. Aceptación de los términos</h4>
                </div>
                <div class="card-body">
                    <p>Al acceder y utilizar este sitio web, aceptás cumplir con estos términos y condiciones. Si no estás de acuerdo, por favor no utilices nuestro sitio.</p>
                </div>
            </div>

            <!-- 2. Privacidad -->
            <div class="card shadow mt-3">
                <div class="card-header bg-purple text-white">
                    <h4 class="mb-0">2. Privacidad</h4>
                </div>
                <div class="card-body">
                    <p>Tus datos personales serán tratados de acuerdo con nuestra política de privacidad. No compartimos tu información con terceros sin tu consentimiento.</p>
                </div>
            </div>

            <!-- 3. Compra de entradas -->
            <div class="card shadow mt-3">
                <div class="card-header bg-purple text-white">
                    <h4 class="mb-0">3. Compra de entradas</h4>
                </div>
                <div class="card-body">
                    <p>Las entradas adquiridas son personales e intransferibles. El cliente es responsable de verificar los datos al momento de la compra.</p>
                </div>
            </div>

            <!-- 4. Devoluciones y cambios -->
            <div class="card shadow mt-3">
                <div class="card-header bg-purple text-white">
                    <h4 class="mb-0">4. Devoluciones y cambios</h4>
                </div>
                <div class="card-body">
                    <p>No se realizan devoluciones de dinero. Los cambios de fecha están sujetos a disponibilidad y deben solicitarse con al menos 48 horas de anticipación.</p>
                </div>
            </div>

            <!-- 5. Modificaciones -->
            <div class="card shadow mt-3">
                <div class="card-header bg-purple text-white">
                    <h4 class="mb-0">5. Modificaciones</h4>
                </div>
                <div class="card-body">
                    <p>Nos reservamos el derecho de modificar estos términos en cualquier momento. Los cambios serán publicados en esta página.</p>
                </div>
            </div>

            <!-- 6. Propiedad intelectual (nuevo) -->
            <div class="card shadow mt-3">
                <div class="card-header bg-purple text-white">
                    <h4 class="mb-0">6. Propiedad intelectual</h4>
                </div>
                <div class="card-body">
                    <p>Todo el contenido de este sitio web (textos, imágenes, logotipos) es propiedad del Teatro de la Ciudad o de sus respectivos autores. Queda prohibida su reproducción sin autorización.</p>
                </div>
            </div>

            <!-- 7. Ley aplicable (nuevo) -->
            <div class="card shadow mt-3">
                <div class="card-header bg-purple text-white">
                    <h4 class="mb-0">7. Ley aplicable</h4>
                </div>
                <div class="card-body">
                    <p>Estos términos se rigen por las leyes de la República Argentina. Cualquier controversia será resuelta ante los tribunales competentes de la Ciudad de Corrientes.</p>
                </div>
            </div>

            <!-- 8. Contacto (nuevo) -->
            <div class="card shadow mt-3">
                <div class="card-header bg-purple text-white">
                    <h4 class="mb-0">8. Contacto</h4>
                </div>
                <div class="card-body">
                    <p>Si tenés preguntas sobre estos términos, podés contactarnos a través de nuestro <a href="/contacto">formulario de contacto</a> o por email a <strong>info@teatrodelaciudad.com</strong>.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .bg-purple {
        background-color: purple;
    }
</style>
@endsection