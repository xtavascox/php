<?php
# EXPRESIONES REGULARES

/*
/:  CONTENEDOR
^: INICIO
$: FINAL
-: RANGO
[]: PATRÓN 
{}: CONDICIÓN
*/

$password='1234567890';
var_dump((bool)preg_match('/^[0-9]{6,9}$/',$password));
