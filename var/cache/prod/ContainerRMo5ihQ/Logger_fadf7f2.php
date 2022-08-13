<?php

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'log'.\DIRECTORY_SEPARATOR.'Psr'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'AbstractLogger.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Log'.\DIRECTORY_SEPARATOR.'Logger.php';
class Logger_fadf7f2 extends \Eccube\Log\Logger implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera0347 = null;
    private $initializer389de = null;
    private static $publicProperties7bf33 = [
        
    ];
    public function log($level, $message, array $context = [])
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'log', array('level' => $level, 'message' => $message, 'context' => $context), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->log($level, $message, $context);
    }
    public function emergency($message, array $context = [])
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'emergency', array('message' => $message, 'context' => $context), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->emergency($message, $context);
    }
    public function alert($message, array $context = [])
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'alert', array('message' => $message, 'context' => $context), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->alert($message, $context);
    }
    public function critical($message, array $context = [])
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'critical', array('message' => $message, 'context' => $context), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->critical($message, $context);
    }
    public function error($message, array $context = [])
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'error', array('message' => $message, 'context' => $context), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->error($message, $context);
    }
    public function warning($message, array $context = [])
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'warning', array('message' => $message, 'context' => $context), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->warning($message, $context);
    }
    public function notice($message, array $context = [])
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'notice', array('message' => $message, 'context' => $context), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->notice($message, $context);
    }
    public function info($message, array $context = [])
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'info', array('message' => $message, 'context' => $context), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->info($message, $context);
    }
    public function debug($message, array $context = [])
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'debug', array('message' => $message, 'context' => $context), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->debug($message, $context);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->context, $instance->logger, $instance->frontLogger, $instance->adminLogger);
        $instance->initializer389de = $initializer;
        return $instance;
    }
    public function __construct(\Eccube\Request\Context $context, \Psr\Log\LoggerInterface $logger, \Psr\Log\LoggerInterface $frontLogger, \Psr\Log\LoggerInterface $adminLogger)
    {
        static $reflection;
        if (! $this->valueHoldera0347) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Log\\Logger');
            $this->valueHoldera0347 = $reflection->newInstanceWithoutConstructor();
        unset($this->context, $this->logger, $this->frontLogger, $this->adminLogger);
        }
        $this->valueHoldera0347->__construct($context, $logger, $frontLogger, $adminLogger);
    }
    public function & __get($name)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, '__get', ['name' => $name], $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        if (isset(self::$publicProperties7bf33[$name])) {
            return $this->valueHoldera0347->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');
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
        unset($this->context, $this->logger, $this->frontLogger, $this->adminLogger);
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
