<?php

namespace Src;

use Contracts\ConfigurationInterface;


class Configuration implements ConfigurationInterface
{
    public function toArray($nodeName = null)
    {
        $arr = require __DIR__ . '/../app/config.php';
        $result = $nodeName ? $arr[$nodeName]  : $arr;

        return $result;

    }
}