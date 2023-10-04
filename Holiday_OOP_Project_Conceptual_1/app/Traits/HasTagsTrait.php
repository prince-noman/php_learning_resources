<?php
namespace app\Traits;

trait HasTagsTrait
{
    protected $tags = [];

    public function addTag( $tag )
    {
        $this->tags[] = $tag;
    }

    public function getTags()
    {
        return $this->tags;
    }

}
