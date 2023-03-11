<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Polymorphism</title>
</head>
<body>
<?php

use chapter3\CsvFileReader as CsvFileReaderAlias;
use chapter3\JsonFileReader;
use chapter3\StockManager;

require_once 'StockManager.php';
require_once 'JsonFileReader.php';
require_once 'CsvFileReader.php';

    $stockManager = new StockManager();
    $csvFileReader = new CsvFileReaderAlias();
    $jsonFileReader = new JsonFileReader();

    $stockManager->updateStockFromFile('inventory.csv', $csvFileReader);

    $jsonFileReader = new JsonFileReader();

    $stockManager->updateStockFromFile('inventory.json', $jsonFileReader);
?>
</body>
</html>