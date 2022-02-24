<?php

namespace ContainerYSNVjlh;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3f415 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer17f58 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9798e = [
        
    ];

    public function getConnection()
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'getConnection', array(), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'getMetadataFactory', array(), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'getExpressionBuilder', array(), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'beginTransaction', array(), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'getCache', array(), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->getCache();
    }

    public function transactional($func)
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'transactional', array('func' => $func), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'wrapInTransaction', array('func' => $func), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'commit', array(), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->commit();
    }

    public function rollback()
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'rollback', array(), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'getClassMetadata', array('className' => $className), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'createQuery', array('dql' => $dql), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'createNamedQuery', array('name' => $name), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'createQueryBuilder', array(), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'flush', array('entity' => $entity), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'clear', array('entityName' => $entityName), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->clear($entityName);
    }

    public function close()
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'close', array(), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->close();
    }

    public function persist($entity)
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'persist', array('entity' => $entity), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'remove', array('entity' => $entity), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'refresh', array('entity' => $entity), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'detach', array('entity' => $entity), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'merge', array('entity' => $entity), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'getRepository', array('entityName' => $entityName), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'contains', array('entity' => $entity), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'getEventManager', array(), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'getConfiguration', array(), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'isOpen', array(), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'getUnitOfWork', array(), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'getProxyFactory', array(), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'initializeObject', array('obj' => $obj), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'getFilters', array(), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'isFiltersStateClean', array(), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'hasFilters', array(), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return $this->valueHolder3f415->hasFilters();
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

        $instance->initializer17f58 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3f415) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3f415 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3f415->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, '__get', ['name' => $name], $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        if (isset(self::$publicProperties9798e[$name])) {
            return $this->valueHolder3f415->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3f415;

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

        $targetObject = $this->valueHolder3f415;
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
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3f415;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3f415;
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
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, '__isset', array('name' => $name), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3f415;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3f415;
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
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, '__unset', array('name' => $name), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3f415;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3f415;
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
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, '__clone', array(), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        $this->valueHolder3f415 = clone $this->valueHolder3f415;
    }

    public function __sleep()
    {
        $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, '__sleep', array(), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;

        return array('valueHolder3f415');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer17f58 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer17f58;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer17f58 && ($this->initializer17f58->__invoke($valueHolder3f415, $this, 'initializeProxy', array(), $this->initializer17f58) || 1) && $this->valueHolder3f415 = $valueHolder3f415;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3f415;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3f415;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
