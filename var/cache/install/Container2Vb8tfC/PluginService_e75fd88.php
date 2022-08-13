<?php

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PluginService.php';
class PluginService_e75fd88 extends \Eccube\Service\PluginService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera0347 = null;
    private $initializer389de = null;
    private static $publicProperties7bf33 = [
        
    ];
    public function install($path, $source = 0)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'install', array('path' => $path, 'source' => $source), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->install($path, $source);
    }
    public function installWithCode($code)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'installWithCode', array('code' => $code), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->installWithCode($code);
    }
    public function preInstall()
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'preInstall', array(), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->preInstall();
    }
    public function postInstall($config, $source)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'postInstall', array('config' => $config, 'source' => $source), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->postInstall($config, $source);
    }
    public function generateProxyAndUpdateSchema(\Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $saveMode = true)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'generateProxyAndUpdateSchema', array('plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'saveMode' => $saveMode), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->generateProxyAndUpdateSchema($plugin, $config, $uninstall, $saveMode);
    }
    public function generateProxyAndCallback(callable $callback, \Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $tmpProxyOutputDir = null)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'generateProxyAndCallback', array('callback' => $callback, 'plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'tmpProxyOutputDir' => $tmpProxyOutputDir), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->generateProxyAndCallback($callback, $plugin, $config, $uninstall, $tmpProxyOutputDir);
    }
    public function createTempDir()
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'createTempDir', array(), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->createTempDir();
    }
    public function deleteDirs($arr)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'deleteDirs', array('arr' => $arr), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->deleteDirs($arr);
    }
    public function unpackPluginArchive($archive, $dir)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'unpackPluginArchive', array('archive' => $archive, 'dir' => $dir), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->unpackPluginArchive($archive, $dir);
    }
    public function checkPluginArchiveContent($dir, array $config_cache = [])
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'checkPluginArchiveContent', array('dir' => $dir, 'config_cache' => $config_cache), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->checkPluginArchiveContent($dir, $config_cache);
    }
    public function readConfig($pluginDir)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'readConfig', array('pluginDir' => $pluginDir), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->readConfig($pluginDir);
    }
    public function checkSymbolName($string)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'checkSymbolName', array('string' => $string), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->checkSymbolName($string);
    }
    public function deleteFile($path)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'deleteFile', array('path' => $path), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->deleteFile($path);
    }
    public function checkSamePlugin($code)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'checkSamePlugin', array('code' => $code), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->checkSamePlugin($code);
    }
    public function calcPluginDir($code)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'calcPluginDir', array('code' => $code), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->calcPluginDir($code);
    }
    public function createPluginDir($d)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'createPluginDir', array('d' => $d), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->createPluginDir($d);
    }
    public function registerPlugin($meta, $source = 0)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'registerPlugin', array('meta' => $meta, 'source' => $source), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->registerPlugin($meta, $source);
    }
    public function callPluginManagerMethod($meta, $method)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'callPluginManagerMethod', array('meta' => $meta, 'method' => $method), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->callPluginManagerMethod($meta, $method);
    }
    public function uninstall(\Eccube\Entity\Plugin $plugin, $force = true)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'uninstall', array('plugin' => $plugin, 'force' => $force), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->uninstall($plugin, $force);
    }
    public function unregisterPlugin(\Eccube\Entity\Plugin $p)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'unregisterPlugin', array('p' => $p), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->unregisterPlugin($p);
    }
    public function disable(\Eccube\Entity\Plugin $plugin)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'disable', array('plugin' => $plugin), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->disable($plugin);
    }
    public function enable(\Eccube\Entity\Plugin $plugin, $enable = true)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'enable', array('plugin' => $plugin, 'enable' => $enable), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->enable($plugin, $enable);
    }
    public function update(\Eccube\Entity\Plugin $plugin, $path)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'update', array('plugin' => $plugin, 'path' => $path), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->update($plugin, $path);
    }
    public function updatePlugin(\Eccube\Entity\Plugin $plugin, $meta)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'updatePlugin', array('plugin' => $plugin, 'meta' => $meta), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->updatePlugin($plugin, $meta);
    }
    public function getPluginRequired($plugin)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'getPluginRequired', array('plugin' => $plugin), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->getPluginRequired($plugin);
    }
    public function findDependentPluginNeedDisable($pluginCode)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'findDependentPluginNeedDisable', array('pluginCode' => $pluginCode), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->findDependentPluginNeedDisable($pluginCode);
    }
    public function findDependentPlugin($pluginCode, $enableOnly = false)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'findDependentPlugin', array('pluginCode' => $pluginCode, 'enableOnly' => $enableOnly), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->findDependentPlugin($pluginCode, $enableOnly);
    }
    public function getDependentByCode($pluginCode, $libraryType = null)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'getDependentByCode', array('pluginCode' => $pluginCode, 'libraryType' => $libraryType), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->getDependentByCode($pluginCode, $libraryType);
    }
    public function parseToComposerCommand(array $packages, $getVersion = true)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'parseToComposerCommand', array('packages' => $packages, 'getVersion' => $getVersion), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->parseToComposerCommand($packages, $getVersion);
    }
    public function copyAssets($pluginCode)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'copyAssets', array('pluginCode' => $pluginCode), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->copyAssets($pluginCode);
    }
    public function removeAssets($pluginCode)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'removeAssets', array('pluginCode' => $pluginCode), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->removeAssets($pluginCode);
    }
    public function checkPluginExist($plugins, $pluginCode)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'checkPluginExist', array('plugins' => $plugins, 'pluginCode' => $pluginCode), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->checkPluginExist($plugins, $pluginCode);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig, $instance->entityManager, $instance->pluginRepository, $instance->entityProxyService, $instance->schemaService, $instance->composerService, $instance->container, $instance->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $instance, 'Eccube\\Service\\PluginService')->__invoke($instance);
        $instance->initializer389de = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Repository\PluginRepository $pluginRepository, \Eccube\Service\EntityProxyService $entityProxyService, \Eccube\Service\SchemaService $schemaService, \Eccube\Common\EccubeConfig $eccubeConfig, \Symfony\Component\DependencyInjection\ContainerInterface $container, \Eccube\Util\CacheUtil $cacheUtil, \Eccube\Service\Composer\ComposerServiceInterface $composerService, \Eccube\Service\PluginApiService $pluginApiService, \Eccube\Service\SystemService $systemService, \Eccube\Service\PluginContext $pluginContext)
    {
        static $reflection;
        if (! $this->valueHoldera0347) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\PluginService');
            $this->valueHoldera0347 = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);
        }
        $this->valueHoldera0347->__construct($entityManager, $pluginRepository, $entityProxyService, $schemaService, $eccubeConfig, $container, $cacheUtil, $composerService, $pluginApiService, $systemService, $pluginContext);
    }
    public function & __get($name)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, '__get', ['name' => $name], $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        if (isset(self::$publicProperties7bf33[$name])) {
            return $this->valueHoldera0347->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);
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
