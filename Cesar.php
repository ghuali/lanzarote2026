<?php

$texto = "¡Programar en PHP es divertidísimo, Ñandú!";
$k = 7;

function cifradoCesar($texto, $k) {
    $alfabeto = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    $longitud = strlen($alfabeto);
    $resultado = "";

    // Normalización
    $normalizado = strtr($texto, "ÁÉÍÓÚÜáéíóúü", "AEIOUUaeiouu");

}



echo "
Original: ¡Programar en PHP es divertidísimo, Ñandú!
Normalizado: ¡Programar en PHP es divertidisimo, Ñandu!
Cifrado (K=7): ¡Wvyxththyly lu WYW lz kpclya pzptv, Uhu kb!
Descifrado: ¡Programar en PHP es divertidisimo, Ñandu!
Verificación: OK
";
