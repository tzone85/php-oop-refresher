<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abstract Methods</title>
</head>
<body>
<?php

use chapter3\Cylinder;
use chapter3\Sphere;

require 'Cylinder.php';
require 'Sphere.php';

    $cylinder = new Cylinder(['radius' => 5, 'height' => 10]);
    $sphere = new Sphere(['radius' => 5]);

    $cylinderVolume = $cylinder->volume();
    $sphereVolume = $sphere->volume();

    print_r($sphereVolume);
    print_r($cylinderVolume);
?>
</body>
</html>