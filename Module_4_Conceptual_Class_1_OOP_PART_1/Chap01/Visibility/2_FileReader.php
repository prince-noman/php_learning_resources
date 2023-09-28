<?php
class FileReader
{
    public $data = 'Reading public Data' . PHP_EOL;
    // protected $data2 = 'Reading Protected Data2';

    //We cannot access it directly
    // protected $data = 'Reading protected Data';

    // private $data = 'Reading private Data';

    //So we can access it by getter (We use this for Protected and Private Properties)
    public function getData()
    {
        return $this->data;
    }

}
$fileReader = new FileReader();
// echo $fileReader->data = "Modified Data";
// echo $fileReader->data = "Modified Data";
// echo $fileReader->data;
// echo $fileReader->data2;
echo $fileReader->getData();
