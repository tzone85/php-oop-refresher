<?php

class Comments
{
    public $text;
    public $userId;

    public function __construct($text, $userId)
    {
        $this->text = $text;
        $this->userId = $userId;
    }
}