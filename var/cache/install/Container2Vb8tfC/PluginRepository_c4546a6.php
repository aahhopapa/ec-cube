<?php

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'PluginRepository.php';
class PluginRepository_c4546a6 extends \Eccube\Repository\PluginRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera0347 = null;
    private $initializer389de = null;
    private static $publicProperties7bf33 = [
        
    ];
    public function findAllEnabled()
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'findAllEnabled', array(), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->findAllEnabled();
    }
    public function findByCode($code)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'findByCode', array('code' => $code), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->findByCode($code);
    }
    public function delete($entity)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'delete', array('entity' => $entity), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->delete($entity);
    }
    public function save($entity)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'save', array('entity' => $entity), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->save($entity);
    }
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->createQueryBuilder($alias, $indexBy);
    }
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->createResultSetMappingBuilder($alias);
    }
    public function createNamedQuery($queryName)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->createNamedQuery($queryName);
    }
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->createNativeNamedQuery($queryName);
    }
    public function clear()
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'clear', array(), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->clear();
    }
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->find($id, $lockMode, $lockVersion);
    }
    public function findAll()
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'findAll', array(), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->findAll();
    }
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->findBy($criteria, $orderBy, $limit, $offset);
    }
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->findOneBy($criteria, $orderBy);
    }
    public function count(array $criteria)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'count', array('criteria' => $criteria), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->count($criteria);
    }
    public function __call($method, $arguments)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->__call($method, $arguments);
    }
    public function getClassName()
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'getClassName', array(), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->getClassName();
    }
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, 'matching', array('criteria' => $criteria), $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        return $this->valueHoldera0347->matching($criteria);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig, $instance->_entityName, $instance->_em, $instance->_class);
        $instance->initializer389de = $initializer;
        return $instance;
    }
    public function __construct(\Symfony\Bridge\Doctrine\RegistryInterface $registry)
    {
        static $reflection;
        if (! $this->valueHoldera0347) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Repository\\PluginRepository');
            $this->valueHoldera0347 = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);
        }
        $this->valueHoldera0347->__construct($registry);
    }
    public function & __get($name)
    {
        $this->initializer389de && ($this->initializer389de->__invoke($valueHoldera0347, $this, '__get', ['name' => $name], $this->initializer389de) || 1) && $this->valueHoldera0347 = $valueHoldera0347;
        if (isset(self::$publicProperties7bf33[$name])) {
            return $this->valueHoldera0347->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');
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
        unset($this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);
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
