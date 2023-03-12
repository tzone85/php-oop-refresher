<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Magic Methods</title>
</head>
<body>
<?php

use chapter3\Connection;

require 'Connection.php';

    // constructor called behind the scenes
    $connection = new Connection();

    $connection->setConnectionId('127.0.0.1');
    print $connection;

?>

<p><?php echo 'The number of connections is: '. $connection->getCount(); ?></p>
<p><?php echo 'The conference ID is: '. $connection->conferenceId; ?></p>
<p><?php echo 'The connection ID is: '. $connection->connectionId; ?></p>
</body>
</html>