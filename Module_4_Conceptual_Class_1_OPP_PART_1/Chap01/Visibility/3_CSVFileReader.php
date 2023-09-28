<?php

require 'Chap01/Visibility/2_FileReader.php';

class CSVFileReader extends FileReader
{
    public function getData()
    {
        // We can access data in subclasses as it is protected
        return $this->data;
    }
}

//Check this when you have a protected $data property in FileReader Class
$csvFileReader = new CSVFileReader();
echo $csvFileReader->getData();
