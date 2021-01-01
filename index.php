<?php 

$cursos = [
  'frontend' => 'javascript',
  'framework' => 'laravel',
  'backend' => 'php'
];


array_walk($cursos,function($curso,$llave){
echo strtoupper($curso) . ": $llave <br>";
});

if(array_key_exists('frontend',$cursos)){
  echo "la llave frontend existe en el array";
} else{
  echo "la lave frontend no existe en el array";
};


if(in_array('javascript',$cursos)){
  echo "el valor javascript existe en el array";
} else {
  echo "el valor javascript no existe en el array";
}
echo "<h2>llaves</h2>";
echo "<pre>";
var_dump(array_keys($cursos));
echo "</pre>";

echo "<h2>valores</h2>";
echo "<pre>";
var_dump(array_values($cursos));
echo "</pre>";

