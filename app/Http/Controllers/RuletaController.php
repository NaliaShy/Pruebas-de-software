<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuletaController extends Controller
{
    public function girar(){
    $penitencias = [
        ['id' => 0, 'tarea' => 'Cantar una canción', 'peso' => 100],
        ['id' => 1, 'tarea' => 'Lavar los platos', 'peso' => 80], // <--- EL TRUCO
        ['id' => 2, 'tarea' => 'Bailar sin música', 'peso' => 10],
    ];

    // Lógica de pesos (idéntica al ejemplo anterior)
    $total = array_sum(array_column($penitencias, 'peso'));
    $random = rand(1, $total);
    $acumulado = 0;
    $ganador = $penitencias[0];

    foreach ($penitencias as $p) {
        $acumulado += $p['peso'];
        if ($random <= $acumulado) {
            $ganador = $p;
            break;
        }
    }

    // Calculamos el ángulo: (360 / total de opciones) * id
    $gradosPorOpcion = 360 / count($penitencias);
    $gradosPorOpcion = 360 / count($penitencias);

$anguloFinal =
    (360 * 5) +
    (360 - ($ganador['id'] * $gradosPorOpcion) - ($gradosPorOpcion / 2));

    return response()->json([
        'penitencia' => $ganador['tarea'],
        'angulo' => $anguloFinal
    ]);
}
}
