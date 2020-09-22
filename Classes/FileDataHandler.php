<?php

namespace Classes;

use PDO;

class FileDataHandler
{

    /**
     * @var integer
     */
    private $pathToFile;

    /**
     * @var array
     */
    private $fileRows = [];
    
    public function __construct($pathToFile)
    {
        $this->pathToFile = $pathToFile;
    }

    public function getFileInfo()
    {
        $this->dataExtract();
        
        return $this->fileRows;
    }

    private function dataExtract()
    {
        foreach ($this->readFile() as $row) {
            $this->fileRows[] = $row;
        }
    }

    private function readFile()
    {
        $handle = fopen($this->pathToFile, "r");

        while(!feof($handle)) {
            yield trim(fgets($handle));
        }
    
        fclose($handle);
    }
}