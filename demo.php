<?php
$name = "Idequel";
$lastName = "Bernabel";
$isDev = true;
$age = 35;

$output = "Hola $name, tienes ya $age años!";

define('LOGO_PHP_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg');

var_dump($name);
echo '<br>';
var_dump($lastName);
echo '<br>';
var_dump($isDev);
echo '<br>';
var_dump($age);
echo '<br>';
echo '<br>';

echo gettype($name);
echo '<br>';
echo gettype($lastName);
echo '<br>';
echo gettype($isDev);
echo '<br>';
echo gettype($age);
echo '<br>';
echo '<br>';

echo is_string($name);
echo '<br>';
echo is_bool($isDev);
echo '<br>';
echo is_int($age);
echo '<br>';

?>
<header>
  <img src="<?= LOGO_PHP_URL ?>" alt="Logo PHP" width="100">
  <h1>
    <?= 'Mi Primera App'?>
  </h1>
</header>

<h2>
  <?=
  "Hola "
  . $name
  . ", con una edad de \n"
  . $age
  . ". 😝"
  ?>
</h2>

<h2>
  <?= $output ?>
</h2>

<style>
  :root {
    color-scheme: ligth dark;
  }

  body {
    display: grid;
    place-content: center;
  }

  header {
    display: flex;
    justify-content: space-around;
  }
</style>
