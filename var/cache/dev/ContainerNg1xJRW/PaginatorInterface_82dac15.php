<?php

namespace ContainerNg1xJRW;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        if ($this->valueHoldera73c2 === $returnValue = $this->valueHoldera73c2->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializerca0e4 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldera73c2) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHoldera73c2 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerca0e4 && ($this->initializerca0e4->__invoke($valueHoldera73c2, $this, '__get', ['name' => $name], $this->initializerca0e4) || 1) && $this->valueHoldera73c2 = $valueHoldera73c2;

        if (isset(self::$publicPropertiesf5078[$name])) {
            return $this->valueHoldera73c2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
