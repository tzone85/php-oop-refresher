<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSV File Reader</title>
</head>
<body>
<?php

use chapter3\CsvFileReader as CsvFileReaderAlias;

require 'CsvFileReader.php';

    $fileReader = new CsvFileReaderAlias();
    $items[] = $fileReader->readFileAsAssociativeArray('inventory.csv');
?>

<p><?php print_r($items); ?></p>
</body>
</html>