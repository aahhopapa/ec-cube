<?php

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'SystemService.php';
class SystemService_f79b835 extends \Eccube\Service\SystemService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera0347 = null;
    private $initializer389de = null;
    private static $publicProperties7bf33 = [
        
    ];
    public function getDbversion()
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'getDbversion', array(), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->getDbversion();
    }
    public function canSetMemoryLimit($memory)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'canSetMemoryLimit', array('memory' => $memory), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->canSetMemoryLimit($memory);
    }
    public function getMemoryLimit()
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'getMemoryLimit', array(), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->getMemoryLimit();
    }
    public function switchMaintenance($isEnable = false, $mode = 'auto_maintenance')
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'switchMaintenance', array('isEnable' => $isEnable, 'mode' => $mode), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->switchMaintenance($isEnable, $mode);
    }
    public function disableMaintenanceEvent(\Symfony\Component\HttpKernel\Event\PostResponseEvent $event)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'disableMaintenanceEvent', array('event' => $event), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->disableMaintenanceEvent($event);
    }
    public function disableMaintenance($mode = 'auto_maintenance')
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'disableMaintenance', array('mode' => $mode), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->disableMaintenance($mode);
    }
    public function isMaintenanceMode()
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'isMaintenanceMode', array(), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->isMaintenanceMode();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->entityManager, $instance->container);
        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $instance, 'Eccube\\Service\\SystemService')->__invoke($instance);
        $instance->initializer389de = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
        static $reflection;
        if (! $this->valueHoldera0347) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\SystemService');
            $this->valueHoldera0347 = $reflection->newInstanceWithoutConstructor();
        unset($this->entityManager, $this->container);
        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $this, 'Eccube\\Service\\SystemService')->__invoke($this);
        }
        $this->valueHoldera0347->__construct($entityManager, $container);
    }
    public function & __get($name)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, '__get', ['name' => $name], $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        if (isset(self::$publicProperties7bf33[$name])) {
            return $this->valueHoldera0347->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera0347;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera0347;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera0347;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera0347;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, '__isset', array('name' => $name), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera0347;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldera0347;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, '__unset', array('name' => $name), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera0347;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera0347;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, '__clone', array(), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        $this->valueHoldera0347 = clone $this->valueHoldera0347;
    }
    public function __sleep()
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, '__sleep', array(), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return array('valueHoldera0347');
    }
    public function __wakeup()
    {
        unset($this->entityManager, $this->container);
        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $this, 'Eccube\\Service\\SystemService')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer389de = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer389de;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'initializeProxy', array(), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera0347;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera0347;
    }
}
