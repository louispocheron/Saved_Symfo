<?php

namespace ContainerKxjN2xI;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderf7d37 = null;
    private $initializer12b01 = null;
    private static $publicProperties701d6 = [
        
    ];
    public function getConnection()
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'getConnection', array(), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'getMetadataFactory', array(), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'getExpressionBuilder', array(), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'beginTransaction', array(), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'getCache', array(), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->getCache();
    }
    public function transactional($func)
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'transactional', array('func' => $func), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'wrapInTransaction', array('func' => $func), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'commit', array(), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->commit();
    }
    public function rollback()
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'rollback', array(), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'getClassMetadata', array('className' => $className), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'createQuery', array('dql' => $dql), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'createNamedQuery', array('name' => $name), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'createQueryBuilder', array(), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'flush', array('entity' => $entity), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'clear', array('entityName' => $entityName), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->clear($entityName);
    }
    public function close()
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'close', array(), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->close();
    }
    public function persist($entity)
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'persist', array('entity' => $entity), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'remove', array('entity' => $entity), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'refresh', array('entity' => $entity), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'detach', array('entity' => $entity), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'merge', array('entity' => $entity), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'getRepository', array('entityName' => $entityName), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'contains', array('entity' => $entity), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'getEventManager', array(), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'getConfiguration', array(), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'isOpen', array(), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'getUnitOfWork', array(), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'getProxyFactory', array(), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'initializeObject', array('obj' => $obj), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'getFilters', array(), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'isFiltersStateClean', array(), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'hasFilters', array(), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return $this->valueHolderf7d37->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer12b01 = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;
        if (! $this->valueHolderf7d37) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf7d37 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderf7d37->__construct($conn, $config);
    }
    public function & __get($name)
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, '__get', ['name' => $name], $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        if (isset(self::$publicProperties701d6[$name])) {
            return $this->valueHolderf7d37->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7d37;
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
        $targetObject = $this->valueHolderf7d37;
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
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7d37;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderf7d37;
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
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, '__isset', array('name' => $name), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7d37;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderf7d37;
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
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, '__unset', array('name' => $name), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf7d37;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderf7d37;
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
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, '__clone', array(), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        $this->valueHolderf7d37 = clone $this->valueHolderf7d37;
    }
    public function __sleep()
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, '__sleep', array(), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        return array('valueHolderf7d37');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer12b01 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer12b01;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'initializeProxy', array(), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf7d37;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf7d37;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
