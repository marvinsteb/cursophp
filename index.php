<?php 

$cursos = [
  'frontend' => 'javascript',
  'framework' => 'laravel',
  'backend' => 'php'
];


array_walk($cursos,function($curso,$llave){
echo strtoupper($curso) . ": $llave <br>";
});

