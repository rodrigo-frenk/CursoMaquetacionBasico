<?php

// Introducción a PHP

// PHP: Hypertext Pre-processor

// Comentarios

# Otro símbolo para Comentarios

/*
Comentarios
multilínea
*/

?>

<!-- html>(head>title{Ejemplo PHP})+body -->
<html>
<head>
   <title>Ejemplo PHP</title>
</head>
<body>

<?php

// mostrar algo en la pantalla:

echo 123;

echo '<br>';

echo 'Hola';

echo '<br>';


// se puede escribir html sin salir de PHP

echo '<a href="http://google.com">';
echo 123;
echo '</a>';

echo '<br>';


// operador de concatenación de textos: '.'

echo '<a href="http://google.com">' . 123 . '</a>';


?>

<!-- Podemos interacalar PHP con HTML: -->

<h1>
   <?php echo 'Basicos del lenguaje'; ?>
</h1>




<!-- section#basicos -->
<section id="basicos">
   <?php

   // variables:

   $variable = 123;

   echo $variable;

   $variable = "Un texto";

   echo $variable;


   $variable1 = 7;
   $variable2 = 6;

   $variable3 = $variable1 + $variable2;

   echo $variable3;


   echo '<br>';

   // concatenando texto en una variable para mostrarlo después.

   $html = '';

   $html .= '<div>';
      $html .= '<h3>';
         $html .= 'Acumulando texto...';
      $html .= '</h3>';
   $html .= '</div>';

   echo $html;


   ?>
</section>




<!-- section#funciones>h3{Funciones en PHP} -->
<section id="funciones">
   <h3>Funciones en PHP</h3>

   <?php

   // declarar una función: (un conjunto de instrucciones reutilizable)
   function sumar( $a, $b ) {
      $resultado = $a + $b;
      return $resultado;
   }



   function mostrarNumeros( $a, $b ) {

      echo '<br>';
      echo 'El primer numero es: ' . $a;

      echo '<br>';
      echo 'El segundo numero es: ' . $b;

      echo '<br>';
      echo '<b>';
         echo 'El resultado es: ';
         echo sumar( $a, $b );
      echo '</b>';


   }

   mostrarNumeros( 100, 239 );


   ?>

</section>







</body>
</html>
