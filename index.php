<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo X__</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.html">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href=basicoPhp7.php>Básico Php7</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
  <h2>Problema: Potencia Util</h2>
  <p>Descripción:</p>
    <p>
        Calcula la potencia util aprovechada por la hélice de un aereogenerador de 20m de diametro
        cuando el viento sopla a 15 m/s si su rendimiento es de 0.35.
    </p>

</section>
<section class="formulas">
<h2>Fórmulas</h2>
    <p>Q = K·t·S·r en Kcal<br>Convertir a Kwh (base 1h)</p>
</section>
<section class="datos">
<h2>Datos:</h2>
    <p>Q = Energia generada<br>K = Coeficiente de radiación<br>t = Tiempo en minutos<br>S = Area en cm²<br>r = Rendimiento</p>
</section>
    <section class="calculos">
        <h2>Solución</h2>
        <p>
            La superficie creada por las aspas es una circunferencia<br>
            S = &#928; · r² = &#928; · 10² = 314.16m²<br>
            <br>Pt = Pv = 0.37 · S · v³ = 0.37 · 314.16 · 15³ = 392306W<br>
            0.35 = Pu/392306W<br>
            Pu = 137307W
        </p>

    </section>

    <?php
    function calcular()
    {
// Datos iniciales
        $s = pi() * pow(10,2);//superficie
        $v = pow(15,3);
        $pt = 0.37 * $s * $v;
        $pu = 0.35 * $pt;

// Resultados

        $resultado = "La potencia util es de: $pu W<br>";

        return $resultado;
    }
    ?>

<section class="resultado">
<h2>Resultado:<br></h2>
<div id="resultadoA">
<?php
  print "<p>".calcular(). "</p>";
?>
</div>
</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2033
    </footer>
   </section>
</body>
</html>
