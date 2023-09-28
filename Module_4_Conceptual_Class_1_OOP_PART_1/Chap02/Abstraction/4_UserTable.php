<?php
require 'Chap02/Abstraction/2_DataModel.php';
class UserTable extends DataModel
{
    protected string $tableName = 'user-table';

}

// $user = new UserTable();
// $user->save();
