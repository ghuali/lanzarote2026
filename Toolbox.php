<?php

function saludar($nombre) {
    return "Hola, $nombre";
}

function sumar($a,$b) {
    return $a + $b;
}

function sumarTodos(...$numeros) {
    if (count($numeros) == 0) {
        return 0;
    }
    
    return array_sum($numeros);

}

function esPrimo($n) {
    if ($n <= 1) {
        return false; // Los números menores o iguales a 1 no son primos
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($numero % $i == 0) {
            return false; // Si es divisible por cualquier número, no es primo
        }
    }
    return true; // Si no encontró divisores, es primo
}

function palabraMasLarga($frase) {
    $palabras = explode(" ", $frase);
    $masLarga = "";
    foreach ($palabras as $palabra) {
        if (strlen($palabra) > strlen($masLarga)) {
            $masLarga = $palabra;
        }
    }
    return $masLarga;
}

function estadisticas(float ...$numeros) {
    if (count($numeros) == 0) {
        return null;
    }
    $min = min($numeros);
    $max = max($numeros);
    $media = array_sum($numeros) / count($numeros);
    return [
        'min' => $min,
        'max' => $max,
        'media' => $media
    ];
}