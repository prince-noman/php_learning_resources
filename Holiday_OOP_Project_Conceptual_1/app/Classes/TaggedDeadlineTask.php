<?php
namespace app\Classes;

use app\Classes\DeadlineTask;
use app\Traits\HasAssigneeTrait;
use app\Traits\HasTagsTrait;

class TaggedDeadlineTask extends DeadlineTask
{

    use HasTagsTrait, HasAssigneeTrait;
}