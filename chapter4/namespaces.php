<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Namespaces</title>
</head>
<body>
<?php

use Database\MySQL\Connection as MySqlConnection;
use Database\PostgreSQL\Connection as PostgreSqlConnection;

require 'Databases/MySQL/Connection.php';
require 'Databases/PostgreSQL/Connection.php';

    $mySqlConnection = new MySqlConnection();
    $postreSqlConnection = new PostgreSqlConnection();

?>

<h1>Database Connections</h1>

<ul>
    <li><?php echo $mySqlConnection->getDatabaseUrl();  ?></li>
    <li><?php echo $postreSqlConnection->getDatabaseUrl(); ?></li>
</ul>
</body>
</html>