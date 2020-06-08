<?php

include_once __DIR__ . '/Dipendente.php';
try {

    $informations = [
        new Dipendente('IBIS', rand(100, 200), 'Carmine' , 'Lentisco', 20, 'Salumificio', 'taglio'),
        new Dipendente('IBIS', rand(100, 200), 'Franco' , 'Cozzo', 18, 'Panificio', 'Forni'),
        new Dipendente('IBIS', rand(100, 200), 'Ettore' , 'Gianfranco', 27, 'Salumificio', 'Culatelli'),
    ];

} catch (Exception $e) {
    header("Location: http://localhost/php-oop-dipendenti/error/error.php");
}


