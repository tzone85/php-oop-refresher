<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encapsulation</title>
</head>
<body>
<?php
    require 'Bid.php';

    $bid = new Bid();
    $bid->setBidAmount(1);
?>

<p><?php echo 'The bid amount is: '.$bid->getBidAmount() ?></p>
</body>
</html>