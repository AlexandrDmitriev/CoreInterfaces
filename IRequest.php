<?php

namespace CoreInterfaces;

interface IRequest
{
    /**
     * @param string $name
     * @param bool   $isStrict
     * @param null   $default
     *
     * @return mixed param from request
     */
    public function get($name, $isStrict = true, $default = null);

    /**
     * @return array array of request params required
     */
    public function getParams();

    /**
     * @return string Request method
     */
    public function getMethod();

    /**
     * @param string $name
     *
     * @return bool
     */
    public function isMethod($name);

    /**
     * @return bool
     */
    public function isAjax();
}
