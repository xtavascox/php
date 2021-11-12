<?php

//Alterar

$text="PHP es un LENGUAJE , año 2020, programaciòn";

// echo strtolower($text);
// echo strtoupper($text);
// echo ucfirst($text);
// echo lcfirst($text);

$slug=str_replace('PHP','javascript',$text);
// echo strtolower($slug);


$code=39;
// echo str_pad($code,8,'#',STR_PAD_BOTH);
// echo strip_tags($text);

echo mb_strtoupper($text);

