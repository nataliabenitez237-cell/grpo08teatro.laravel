<?php

namespace App\Http\Controllers;

class eventocontroller extends Controller
{
    public function index()
    {
        $eventos = [
            ['nombre' => 'El Duende Sombrerudo', 'fecha' => '15 de mayo - 22:00 hs', 'precio' => 25000, 'imagen' => 'evento1.png'],
            ['nombre' => 'Esperando al Señor Washer', 'fecha' => '20 de mayo - 21:30 hs', 'precio' => 30000, 'imagen' => 'evento2.png'],
            ['nombre' => 'EMBOPA!', 'fecha' => '25 de mayo - 19:00 hs', 'precio' => 20000, 'imagen' => 'evento3.png'],
            ['nombre' => 'El falso Inca', 'fecha' => '1 de junio - 21:00 hs', 'precio' => 35000, 'imagen' => 'evento4.png'],
            ['nombre' => 'Despertares', 'fecha' => '25 de mayo - 23:00 hs', 'precio' => 20000, 'imagen' => 'evento5.png'],
            ['nombre' => 'Guerreras del Yverá', 'fecha' => '5 de junio - 21:00 hs', 'precio' => 20000, 'imagen' => 'evento6.png']
        ];
        
        return view('principal', compact('eventos'));
    }

    public function eventos()
    {
        $eventos = [
            ['nombre' => 'El Duende Sombrerudo', 'fecha' => '15 de mayo - 22:00 hs', 'precio' => 25000, 'imagen' => 'evento1.png'],
            ['nombre' => 'Esperando al Señor Washer', 'fecha' => '20 de mayo - 21:30 hs', 'precio' => 30000, 'imagen' => 'evento2.png'],
            ['nombre' => 'EMBOPA!', 'fecha' => '25 de mayo - 19:00 hs', 'precio' => 20000, 'imagen' => 'evento3.png'],
            ['nombre' => 'El Falso Inca', 'fecha' => '1 de junio - 21:00 hs', 'precio' => 35000, 'imagen' => 'evento4.png'],
            ['nombre' => 'Despertares', 'fecha' => '25 de mayo - 23:00 hs', 'precio' => 20000, 'imagen' => 'evento5.png'],
            ['nombre' => 'Guerreras del Yverá', 'fecha' => '5 de junio - 21:00 hs', 'precio' => 20000, 'imagen' => 'evento6.png']
        ];
        
        return view('eventos', compact('eventos'));
    }
}