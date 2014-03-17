<?php
namespace CoreInterfaces;

use ServiceLocator\Exceptions\ServiceLocatorException;
use ServiceLocator\AbstractFactory;

/**
 * Class ServiceLocator
 * Component require some auto loader
 *
 * @package ServiceLocator
 * @property array           $registered
 * @property AbstractFactory $abstractFactory
 */
interface IServiceLocator
{
    /**
     * @param $className
     *
     * @throws \Exception
     * @return Object
     */
    public function locate($className);

    /**
     * @param $className
     *
     * @throws ServiceLocatorException
     * @return Object
     */
    public function createNewInstance($className);

    /**
     * @param array $config
     */
    public function __construct(array $config);

    public function addAdditionalParam($alias, $value, $behavior);
}
