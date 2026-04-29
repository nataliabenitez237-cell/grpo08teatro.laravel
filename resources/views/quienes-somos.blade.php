@extends('plantilla')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12 text-center mb-4">
            <h1 class="display-4">🎭 Quiénes Somos</h1>
            <p class="lead">Conocé la historia del Teatro de la Ciudad</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card shadow h-100">
                <div class="card-body">
                    <h3>📖 Nuestra Historia</h3>
                    <p>El Grupo de Teatro La Trastienda nació el 2 de mayo de 1995 por iniciativa de Adriana Covalova, Ada Teresa Amil de Asuad, Victoria Beatriz Mecca y Oscar Cáceres.</p>
                    <p>En el año 2006, la Municipalidad de Corrientes le otorgó en comodato por 20 años la sala "Teatro de la Ciudad", ubicada en Pasaje Villanueva 1470. Hoy es un espacio multidisciplinario referente de la cultura correntina.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow h-100">
                <div class="card-body">
                    <h3>🎯 Nuestra Misión</h3>
                    <p>Promover la actividad teatral y artística mediante la producción de obras locales, el apoyo a grupos independientes y la formación de nuevas audiencias.</p>
                    <p>Buscamos democratizar el acceso a la cultura y generar espacios de expresión para todos.</p>
                    <h3 class="mt-4">👁️ Nuestra Visión</h3>
                    <p>Ser un centro cultural sostenible, reconocido a nivel regional por la calidad de su programación, su compromiso con la formación artística y su capacidad de articular con otros espacios culturales.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <h3 class="text-center mb-4">🌟 Nuestro Equipo</h3>
        </div>
        <div class="col-md-4 text-center mb-3">
            <div class="card shadow">
                <div class="card-body">
                    <h5>Nanci Garcia</h5>
                    <p class="text-muted">Directora Artística</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center mb-3">
            <div class="card shadow">
                <div class="card-body">
                    <h5>Alexis Gaston</h5>
                    <p class="text-muted">Jefe Tecnico</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center mb-3">
            <div class="card shadow">
                <div class="card-body">
                    <h5>Agus Viana</h5>
                    <p class="text-muted">Coordinadora de Eventos</p>
                </div>
            </div>
        </div>
    </div>

        <!-- Punto 4: Valores / Principios -->
    <div class="row mt-5">
        <div class="col-12">
            <h3 class="text-center mb-4">💜 Nuestros Valores</h3>
            <div class="row text-center">
                <div class="col-md-3 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5>🎭 Independencia</h5>
                            <p class="small">Cultural y artística</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5>📚 Formación</h5>
                            <p class="small">Capacitación constante</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5>🤝 Inclusión</h5>
                            <p class="small">Acceso a la cultura</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5>🌐 Redes</h5>
                            <p class="small">Trabajo con otros espacios</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Punto 5: Logros destacados (más detalle) -->
    <div class="row mt-5">
        <div class="col-12">
            <h3 class="text-center mb-4">🏆 Logros Destacados 2024</h3>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <ul>
                                <li>✅ Más de <strong>100 funciones</strong> durante el año</li>
                                <li>✅ <strong>59 obras de teatro</strong> para distintos públicos</li>
                                <li>✅ <strong>30 espectáculos de danza</strong></li>
                                <li>✅ <strong>15 shows de música</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <ul>
                                <li>✅ <strong>13° Festival "Mandarinas al Sol"</strong></li>
                                <li>✅ <strong>38° Fiesta Provincial del Teatro</strong></li>
                                <li>✅ Más de <strong>500 alumnos</strong> en talleres</li>
                                <li>✅ Biblioteca Teatral "Dante Cena"</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Punto 6: Más información del equipo -->
    <div class="row mt-5">
        <div class="col-12">
            <h3 class="text-center mb-4">👥 Más sobre nuestro equipo</h3>
            <div class="card shadow">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-md-4">
                            <h5>20</h5>
                            <p>Docentes profesionales</p>
                        </div>
                        <div class="col-md-4">
                            <h5>236</h5>
                            <p>Talleristas 2025</p>
                        </div>
                        <div class="col-md-4">
                            <h5>15</h5>
                            <p>Personas en equipo operativo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Punto 7: Contacto extendido -->
    <div class="row mt-5">
        <div class="col-12 text-center">
            <h3>📞 Contacto</h3>
            <p><strong>📱 Instagram / Facebook:</strong> @teatrodelaciudadctes</p>
            <p><strong>📍 Dirección:</strong> Pasaje Villanueva 1470, Corrientes</p>
            <p><strong>📞 Teléfono:</strong> 3794 75-4083</p>
            <p><strong>✉️ Correo:</strong> teatrodelaciudadctes@gmail.com (no está en el PDF pero podés agregarlo)</p>
        </div>
    </div>
</div>
@endsection