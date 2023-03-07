<?php

class Song {
    public $songId;
    public $title;

}

$octopusGarden = new Song();

$octopusGarden->title = 'Sawbona Emakhaya';
$octopusGarden->songId = 17;

var_dump($octopusGarden).PHP_EOL.PHP_EOL;
print_r($octopusGarden);