<?php

class User {
    // create properties
    public $name;
    public $username;
    public $followerCount;
}

$thandoObject = new User();

$thandoObject->name = 'Thando Mini';
$thandoObject->username = 'thando.mini@mytech';
$thandoObject->followerCount = 60;

print_r($thandoObject);