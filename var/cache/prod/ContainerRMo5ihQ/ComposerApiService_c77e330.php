<?php

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Composer'.\DIRECTORY_SEPARATOR.'ComposerServiceInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Composer'.\DIRECTORY_SEPARATOR.'ComposerApiService.php';
class ComposerApiService_c77e330 extends \Eccube\Service\Composer\ComposerApiService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera0347 = null;
    private $initializer389de = null;
    private static $publicProperties7bf33 = [
        
    ];
    public function execInfo($pluginName, $version)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'execInfo', array('pluginName' => $pluginName, 'version' => $version), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->execInfo($pluginName, $version);
    }
    public function execRequire($packageName, $output = null)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'execRequire', array('packageName' => $packageName, 'output' => $output), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->execRequire($packageName, $output);
    }
    public function execRemove($packageName, $output = null)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'execRemove', array('packageName' => $packageName, 'output' => $output), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->execRemove($packageName, $output);
    }
    public function execUpdate($dryRun, $output = null)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'execUpdate', array('dryRun' => $dryRun, 'output' => $output), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->execUpdate($dryRun, $output);
    }
    public function execInstall($dryRun, $output = null)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'execInstall', array('dryRun' => $dryRun, 'output' => $output), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->execInstall($dryRun, $output);
    }
    public function foreachRequires($packageName, $version, $callback, $typeFilter = null, $level = 0)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'foreachRequires', array('packageName' => $packageName, 'version' => $version, 'callback' => $callback, 'typeFilter' => $typeFilter, 'level' => $level), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->foreachRequires($packageName, $version, $callback, $typeFilter, $level);
    }
    public function execConfig($key, $value = null)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'execConfig', array('key' => $key, 'value' => $value), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->execConfig($key, $value);
    }
    public function getConfig()
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'getConfig', array(), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->getConfig();
    }
    public function setWorkingDir($workingDir)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'setWorkingDir', array('workingDir' => $workingDir), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->setWorkingDir($workingDir);
    }
    public function runCommand($commands, $output = null, $init = true)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'runCommand', array('commands' => $commands, 'output' => $output, 'init' => $init), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->runCommand($commands, $output, $init);
    }
    public function configureRepository(\Eccube\Entity\BaseInfo $BaseInfo)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'configureRepository', array('BaseInfo' => $BaseInfo), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->configureRepository($BaseInfo);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig);
        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $instance, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($instance);
        $instance->initializer389de = $initializer;
        return $instance;
    }
    public function __construct(\Eccube\Common\EccubeConfig $eccubeConfig, \Eccube\Repository\BaseInfoRepository $baseInfoRepository, \Eccube\Service\SchemaService $schemaService, \Eccube\Service\PluginContext $pluginContext)
    {
        static $reflection;
        if (! $this->valueHoldera0347) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
            $this->valueHoldera0347 = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig);
        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($this);
        }
        $this->valueHoldera0347->__construct($eccubeConfig, $baseInfoRepository, $schemaService, $pluginContext);
    }
    public function & __get($name)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, '__get', ['name' => $name], $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        if (isset(self::$publicProperties7bf33[$name])) {
            return $this->valueHoldera0347->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        unset($this->eccubeConfig);
        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($this);
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
