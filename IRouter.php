<?php

namespace CoreInterfaces;

interface IRouter
{
    /**
     * @param callable $patternConstructorDelegate
     */
    public function run(callable $patternConstructorDelegate);

    /**
     * @param string $controller
     * @param string $action
     *
     * @return string
     */
    public function getUrl($controller, $action);

    /**
     * @return array Array with three keys controller, action, params required
     */
    public function getRouteParams();
}
