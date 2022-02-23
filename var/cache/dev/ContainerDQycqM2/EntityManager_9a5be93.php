<?php

namespace ContainerDQycqM2;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0099b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4fdc9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties23d6d = [
        
    ];

    public function getConnection()
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'getConnection', array(), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'getMetadataFactory', array(), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'getExpressionBuilder', array(), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'beginTransaction', array(), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'getCache', array(), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'transactional', array('func' => $func), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'commit', array(), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->commit();
    }

    public function rollback()
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'rollback', array(), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'getClassMetadata', array('className' => $className), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'createQuery', array('dql' => $dql), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'createNamedQuery', array('name' => $name), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'createQueryBuilder', array(), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'flush', array('entity' => $entity), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'clear', array('entityName' => $entityName), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->clear($entityName);
    }

    public function close()
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'close', array(), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->close();
    }

    public function persist($entity)
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'persist', array('entity' => $entity), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'remove', array('entity' => $entity), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'refresh', array('entity' => $entity), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'detach', array('entity' => $entity), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'merge', array('entity' => $entity), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'contains', array('entity' => $entity), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'getEventManager', array(), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'getConfiguration', array(), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'isOpen', array(), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'getUnitOfWork', array(), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'getProxyFactory', array(), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'initializeObject', array('obj' => $obj), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'getFilters', array(), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'isFiltersStateClean', array(), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'hasFilters', array(), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return $this->valueHolder0099b->hasFilters();
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

        $instance->initializer4fdc9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0099b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0099b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0099b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, '__get', ['name' => $name], $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        if (isset(self::$publicProperties23d6d[$name])) {
            return $this->valueHolder0099b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0099b;

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

        $targetObject = $this->valueHolder0099b;
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
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0099b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0099b;
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
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, '__isset', array('name' => $name), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0099b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0099b;
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
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, '__unset', array('name' => $name), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0099b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0099b;
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
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, '__clone', array(), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        $this->valueHolder0099b = clone $this->valueHolder0099b;
    }

    public function __sleep()
    {
        $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, '__sleep', array(), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;

        return array('valueHolder0099b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4fdc9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4fdc9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4fdc9 && ($this->initializer4fdc9->__invoke($valueHolder0099b, $this, 'initializeProxy', array(), $this->initializer4fdc9) || 1) && $this->valueHolder0099b = $valueHolder0099b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0099b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0099b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
