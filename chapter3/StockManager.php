<?php

namespace chapter3;
require_once 'CsvFileReader.php';
class StockManager
{
    public function updateStockFromFile(string $fileName, FileReaderInterface $fileReader)
    {
        $stockItems = $fileReader->readFileAsAssociativeArray($fileName);

        foreach ($stockItems as $stockItem) {
            print 'Updating the database with items: '.$stockItem['name'].'<br/>';
        }
    }
}