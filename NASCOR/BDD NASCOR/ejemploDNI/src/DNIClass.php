<?php

namespace Application;

class DNIClass {
  public function calcularLetra($dni) {
    // Verificar si el DNI tiene un formato válido
    if (!is_numeric($dni) || strlen($dni) !== 8 ) {
      throw new \InvalidArgumentException("El DNI debe ser un número de 8 dígitos");
    }

    // Caso especial: '00000000' retorna false
    if ($dni < 1) {
      return false;
    }

    // Implementar la lógica para calcular la letra del DNI
    $dniNumero = (int) $dni;
    $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
    $letraDNI = $dniNumero % 23;

    return $letras[$letraDNI];
  }
}
