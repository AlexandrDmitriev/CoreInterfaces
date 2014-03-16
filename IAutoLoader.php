<?php

namespace CoreInterfaces;

interface IAutoLoader
{
    public function __construct(array $projectsNamespaces);
    public function loadClass($className);
    public function addPaths(array $paths);
    public function removePath($path);
    public function addAliases(array $alias);
    public function removeAliases($alias);
}
