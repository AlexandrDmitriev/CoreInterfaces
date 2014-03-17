<?php

namespace CoreInterfaces;

interface IRouter
{
    public function run(callable $patternConstructorDelegate);
    public function getUrl($controller, $action);
}
