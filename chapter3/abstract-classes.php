<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abstract Classes</title>
</head>
<body>
<?php

use chapter3\Product;
use chapter3\User;

require 'Product.php';
require 'User.php';

    $product = new Product();
    $user = new User();
    $user->save();
    $product->save();
?>
</body>
</html>