<?php

namespace ContainerNg1xJRW;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera73c2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerca0e4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf5078 = [
        
    ];

    public function getConnection()
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'getConnection', array(), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'getMetadataFactory', array(), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'getExpressionBuilder', array(), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'beginTransaction', array(), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'getCache', array(), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->getCache();
    }

    public function transactional($func)
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'transactional', array('func' => $func), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'wrapInTransaction', array('func' => $func), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'commit', array(), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->commit();
    }

    public function rollback()
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'rollback', array(), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'getClassMetadata', array('className' => $className), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'createQuery', array('dql' => $dql), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'createNamedQuery', array('name' => $name), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'createQueryBuilder', array(), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'flush', array('entity' => $entity), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'clear', array('entityName' => $entityName), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->clear($entityName);
    }

    public function close()
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'close', array(), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->close();
    }

    public function persist($entity)
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'persist', array('entity' => $entity), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'remove', array('entity' => $entity), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'refresh', array('entity' => $entity), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'detach', array('entity' => $entity), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'merge', array('entity' => $entity), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'getRepository', array('entityName' => $entityName), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'contains', array('entity' => $entity), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'getEventManager', array(), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'getConfiguration', array(), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'isOpen', array(), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'getUnitOfWork', array(), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'getProxyFactory', array(), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'initializeObject', array('obj' => $obj), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'getFilters', array(), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'isFiltersStateClean', array(), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'hasFilters', array(), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return $this->valueHoldera73c2->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerca0e4 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldera73c2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera73c2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera73c2->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, '__get', ['name' => $name], $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        if (isset(self::$publicPropertiesf5078[$name])) {
            return $this->valueHoldera73c2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera73c2;

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

        $targetObject = $this->valueHoldera73c2;
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
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera73c2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera73c2;
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
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, '__isset', array('name' => $name), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera73c2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera73c2;
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
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, '__unset', array('name' => $name), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera73c2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera73c2;
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
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, '__clone', array(), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        $this->valueHoldera73c2 = clone $this->valueHoldera73c2;
    }

    public function __sleep()
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, '__sleep', array(), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        return array('valueHoldera73c2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerca0e4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerca0e4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'initializeProxy', array(), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera73c2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera73c2;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
