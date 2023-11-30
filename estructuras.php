<?php
//ESTRUCTURAS REPETITIVAS

// $cursosAlumnos = [
//     "Enologia" => ["Lucas", "Franco", "Emi"],
//     "Programacion" => ["Mateo", "Luis", "Pancracio"],
//     "Tecnologia" => ["Mateo", "Luis", "Pancracio"],
// ];
// var_export($cursosAlumnos);
// $datoIngresado = "Emiliano";

// DESTRUCTURING
// foreach ($cursosAlumnos as $curso => $alumnos) {
//     echo $curso;
//     echo '<br>';
//     echo $alumnos[4];
//     foreach($alumnos as $alumno){
//         echo $alumno;  
//         echo '<br>';
//     }
//     echo '<br>';
// }

// Mientras (la condicion sea verdadera) entonces (hace esto esclavo);
// $contador = 0;
// while($contador < 10){
//     echo $contador;
//     $contador = $contador + 1;
// }

// WHILE --- NO SE USA PERO WE
// $a = 0;
// while($a <= 10){
//     $a = $a + 2;
//     echo "Hizo la primera en el primer while operacion y a = $a <br>";
// }
// echo "---------------SEGUNDO CALCULO-----------------";
// $a = 10;
// do {
//     $a = $a + 20;
//     echo "<br> Sumo a todos $20 pesos el precio no puede valer menos de $80 o $80 <br>
//     Por eso lo aumentamos <br> ";
// } while ($a <= 80);

// echo "Salio del while y el precio es: $a <br>";

// FOR --> EN ESTA RECURSION PODEMOS DAR INICIO Y FIN A UN REPETICION
$alumnos = ["Lucas", "Franco", "Emi"];

for ($i=0; $i < count($alumnos); $i++) { 
   echo $i + 1 . $alumnos[$i] . "<br>";
}

?>