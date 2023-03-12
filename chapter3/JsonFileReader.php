<?php

namespace chapter3;
require_once 'FileReaderInterface.php';
class JsonFileReader implements FileReaderInterface
{

    public function readFileAsAssociativeArray(string $filename): array
    {
        // Get file contents as json string
        $contentString = file_get_contents($filename);

        // Decode into an associative array
        $items = json_decode($contentString, true);

        // return items
        return $items;
    }
}

// works

//$jsonReader = new JsonFileReader();
//$items = $jsonReader->readFileAsAssociativeArray('inventory.json');
//print_r($items);