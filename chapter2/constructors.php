<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    require 'Comments.php';

    $comment = new Comments('This is the first comment text', 2112);




?>

<p><?php echo $comment->text ?> <b>by user:</b> <?php $comment->userId ?></p>

</body>
</html>