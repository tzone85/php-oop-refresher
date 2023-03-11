<?php

namespace chapter3;
require_once 'CsvFileReader.php';
class StockManager
{
    public function updateStockFromFile(string $fileName, CsvFileReader $csvFileReader)
    {
        $stockItems = $csvFileReader->readFileAsAssociativeArray($fileName);

        foreach ($stockItems as $stockItem) {
            print 'Updating the database with items: '.$stockItem['name'].'<br/>';
        }
    }
}