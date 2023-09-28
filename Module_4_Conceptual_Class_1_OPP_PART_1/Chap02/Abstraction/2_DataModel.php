<?php

// Abstract Class -> You cannot instantiate a object of an abstract class but you can inherit from it
// Any class that contains at least one abstract method must also be declared as an abstract class

abstract class DataModel
{
    protected string $tableName = 'random-table';

    public function save()
    {
        print_r( 'Saving to table ' . $this->tableName );
    }
}

// Cannot instantiate abstract class DataModel
// $dataModel = new DataModel();
// $dataModel->save();
