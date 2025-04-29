<?php
namespace App;

class TagParser
{
    protected $tags = [];

    public function parse($string)
    {
        $this->tags = array_map('trim', explode(',', $string));
    }

    public function getTags()
    {
        return $this->tags;
    }
}
