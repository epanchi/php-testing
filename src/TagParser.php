<?php

namespace App;

class TagParser
{
    protected $tags = [];

    public function parse($tags): array
    {
        // return [$tags];
        //return explode(', ', $tags);
        //return preg_split('/[,|] ?/', $tags);
        $tags = preg_split('/[,|] ?/', $tags);

        //    return array_map(function ($tag) {
        //        return trim($tag);
        //    }, $tags);

        // Short version
        return array_map(fn($tag) => trim($tag), $tags);
    }
}
