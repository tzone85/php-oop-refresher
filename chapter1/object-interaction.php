<?php

class Song {
    public $songId;
    public $title;

}

$octopusGarden = new Song();
$phuzeKhemesi = new Song();

$octopusGarden->title = 'Sawbona Emakhaya';
$octopusGarden->songId = 17;

$phuzeKhemesi->songId = 101;
$phuzeKhemesi->title = "Ihashe elimhlophe";

//var_dump($octopusGarden).PHP_EOL.PHP_EOL;
//print_r($octopusGarden);


class Playlist
{
    public $name;
    public $songs = [];

    public function addSongs($song) {
        $this->songs[] = $song;
    }
}

$playlist = new Playlist();
$playlist->name = 'Mbaqanga';
$playlist->addSongs($octopusGarden );
$playlist->addSongs($phuzeKhemesi);

var_dump($playlist->songs);