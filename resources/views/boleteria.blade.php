@extends('plantilla')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12 text-center mb-4">
            <h1 class="display-4">🎟️ Boletería</h1>
            <p class="lead">Conocé nuestras formas de entrega, envíos y medios de pago</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card shadow h-100">
                <div class="card-header bg-purple text-white">
                    <h4 class="mb-0">📧 Tipos de Entrega</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="mb-3">📧 <strong>Entrada digital:</strong> Recibí tu entrada por correo electrónico inmediatamente después de la compra.</li>
                        <li class="mb-3">🎟️ <strong>Sticker digital:</strong> Descargá tu sticker digital con código QR para ingresar al evento.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card shadow h-100">
                <div class="card-header bg-purple text-white">
                    <h4 class="mb-0">💳 Medios de Pago</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="mb-2">💳 Tarjetas de crédito (Visa, Mastercard, American Express)</li>
                        <li class="mb-2">💳 Tarjetas de débito</li>
                        <li class="mb-2">📱 Mercado Pago</li>
                        <li class="mb-2">📲 QR (Mercado Pago, MODO, Cuenta DNI)</li>
                        <li class="mb-2">💰 Efectivo (en boletería)</li>
                        <li class="mb-2">📲 Transferencia bancaria</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-purple text-white">
                    <h4 class="mb-0">⏰ Tiempos de Entrega</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="mb-2">📧 <strong>Entrada digital:</strong> Inmediata después de la compra (recibís un email con tu entrada).</li>
                        <li class="mb-2">🎫 <strong>Sticker digital:</strong> Disponible para descargar inmediatamente desde tu cuenta.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="alert alert-info text-center">
                <strong>📢 Importante:</strong> Los precios de las entradas incluyen el costo de servicio. Consultá por promociones bancarias. Podés pagar con QR desde tu billetera virtual.
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