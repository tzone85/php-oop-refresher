<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Traits</title>
</head>
<body>
<?php

use App\Logging\Logger;
use App\Users\Customer;

require_once 'autoload.php';

    $logger = new Logger();
    $customer = new Customer();

    $customer->setLogger($logger);
?>

<p><?php $customer->getLogger()->log(); ?></p>
</body>
</html>