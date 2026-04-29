@extends('plantilla')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12 text-center mb-4">
            <h1 class="display-4">❓ Consultas</h1>
            <p class="lead">Dejanos tu consulta y te responderemos a la brevedad</p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-purple text-white">
                    <h4 class="mb-0">📝 Formulario de Consultas</h4>
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
                            <label class="form-label">Tipo de consulta</label>
                            <select class="form-select">
                                <option selected>Seleccioná una opción</option>
                                <option>Entradas y eventos</option>
                                <option>Promociones y descuentos</option>
                                <option>Problemas con mi compra</option>
                                <option>Sugerencias</option>
                                <option>Otros</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Mensaje</label>
                            <textarea class="form-control" rows="5" placeholder="Escribí tu consulta aquí..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-purple w-100" onclick="alert('✅ Consulta enviada. Pronto nos comunicaremos con vos.')">Enviar consulta</button>
                        <!--<button type="submit" class="btn btn-purple w-100">Enviar consulta</button>-->
                    </form>
                </div>
            </div>

            <div class="card shadow mt-4">
                <div class="card-body text-center">
                    <p class="mb-0">📞 También podés llamarnos al <strong>(011) 1234-5678</strong> de lunes a viernes de 9 a 18 hs.</p>
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