<?php
namespace app\Traits;

trait HasAssigneeTrait
{
    protected $assignees = [];

    public function addAssignee( $assignee )
    {
        $this->assignees[] = $assignee;
    }

    public function getAssignees()
    {
        return $this->assignees;
    }
}
