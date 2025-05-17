<?php

/**
 * Script para la tarea online 5 de Despliegue de Aplicaciones Web:
 * generación de documentación con phpDocumentor.
 * 
 * @author    Guillermo Ogallar Miranda
 * @version   1.0.0
 * @internal  Esta anotación solo aparece en la documentación para desarrolladores.
 */

/**
 * Calcula el área de un rectángulo.
 * 
 * @param float $base   Longitud de la base del rectángulo (unidades: cm).
 * @param float $altura Altura del rectángulo (unidades: cm).
 * 
 * @return float Área calculada (unidades: cm²).
 */
function calcularAreaTriangulo(float $base, float $altura): float
{
    return ($base * $altura) / 2;
}

/**
 * Convierte una temperatura de Celsius a Fahrenheit.
 * 
 * @param float $celsius Temperatura en grados Celsius.
 * 
 * @return float Temperatura en grados Fahrenheit.
 */
function celsiusAFahrenheit(float $celsius): float
{
    return ($celsius * 9/5) + 32;
}