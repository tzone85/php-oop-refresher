<?php

namespace chapter3;

interface FileReaderInterface
{
    public function readFileAsAssociativeArray(string $filename): array;
}