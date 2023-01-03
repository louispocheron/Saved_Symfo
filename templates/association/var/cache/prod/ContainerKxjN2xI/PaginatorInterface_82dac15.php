<?php

namespace ContainerKxjN2xI;

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    private $valueHolderf7d37 = null;
    private $initializer12b01 = null;
    private static $publicProperties701d6 = [
        
    ];
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        if ($this->valueHolderf7d37 === $returnValue = $this->valueHolderf7d37->paginate($target, $page, $limit, $options)) {
            return $this;
        }
        return $returnValue;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        $instance->initializer12b01 = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolderf7d37) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderf7d37 = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializer12b01 && ($this->initializer12b01->__invoke($valueHolderf7d37, $this, '__get', ['name' => $name], $this->initializer12b01) || 1) && $this->valueHolderf7d37 = $valueHolderf7d37;
        if (isset(self::$publicProperties701d6[$name])) {
            return $this->valueHolderf7d37->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
