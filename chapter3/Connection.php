<?php

namespace chapter3;

class Connection
{
    /**
     * @var int counts instances of the class
     */
    private static int $count = 0;
    /**
     * @var string Connection Identifier
     */
    private string $connectionId;

    private int $conferenceId = 1234;

    public function __construct()
    {
        self::$count++;
    }

    public function __destruct()
    {
        self::$count--;
    }

    /**
     * used for reading data from inaccessable (protected or private) properties
     * @return int|null
     */
    public function __get($name)        // $connectionId
    {
        return $this->$name;
    }

    /**
     * The string representation of an object
     *
     * The __toString() method allows a class to decide how it will react when it is treated like a string.
     * e.g. what echo $obj, will print
     * @return void
     */
    public function __toString()
    {
        return "Conference ID: {$this->conferenceId} <br> Connection ID: {$this->connectionId}";
    }

    public function getCount(): ?int
    {
        return self::$count;
    }

    public function setConnectionId($ipAddress)
    {
        if (filter_var($ipAddress, FILTER_VALIDATE_IP)) {
            $this->connectionId = $ipAddress.'_'.self::$count;
            return;
        }
        die('Not a valid IP address');
    }

    // won't be using this, we'll use the Magic Getters instead
//    public function getConnectionId()
//    {
//        return $this->connectionId;
//    }


}