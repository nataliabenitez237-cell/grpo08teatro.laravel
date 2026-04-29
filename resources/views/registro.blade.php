@extends('plantilla')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-purple text-white text-center">
                    <h3>📝 Registro de Usuario</h3>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nombre completo</label>
                            <input type="text" class="form-control" placeholder="Tu nombre">
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
                            <label class="form-label">Contraseña</label>
                            <input type="password" class="form-control" placeholder="******">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirmar contraseña</label>
                            <input type="password" class="form-control" placeholder="******">
                        </div>
                        <button type="submit" class="btn btn-purple w-100" onclick="alert('✅ Registro exitoso. Bienvenido/a.')">Registrarse</button>
                        <!--<button type="submit" class="btn btn-purple w-100">Registrarse</button>-->
                    </form>
                </div>
                <div class="card-footer text-center">
                    <small>¿Ya tenés cuenta? <a href="#">Iniciar sesión</a></small>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .bg-purple { background-color: purple; }
    .btn-purple { background-color: purple; color: white; }
    .btn-purple:hover { background-color: darkmagenta; color: white; }
</style>
@endsection