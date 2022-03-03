<?php

namespace ContainerTfTAZZ0;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb44be = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer251e9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd3f24 = [
        
    ];

    public function getConnection()
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'getConnection', array(), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'getMetadataFactory', array(), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'getExpressionBuilder', array(), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'beginTransaction', array(), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'getCache', array(), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->getCache();
    }

    public function transactional($func)
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'transactional', array('func' => $func), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'wrapInTransaction', array('func' => $func), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'commit', array(), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->commit();
    }

    public function rollback()
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'rollback', array(), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'getClassMetadata', array('className' => $className), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'createQuery', array('dql' => $dql), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'createNamedQuery', array('name' => $name), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'createQueryBuilder', array(), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'flush', array('entity' => $entity), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'clear', array('entityName' => $entityName), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->clear($entityName);
    }

    public function close()
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'close', array(), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->close();
    }

    public function persist($entity)
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'persist', array('entity' => $entity), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'remove', array('entity' => $entity), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'refresh', array('entity' => $entity), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'detach', array('entity' => $entity), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'merge', array('entity' => $entity), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'getRepository', array('entityName' => $entityName), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'contains', array('entity' => $entity), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'getEventManager', array(), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'getConfiguration', array(), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'isOpen', array(), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'getUnitOfWork', array(), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'getProxyFactory', array(), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'initializeObject', array('obj' => $obj), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'getFilters', array(), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'isFiltersStateClean', array(), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'hasFilters', array(), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return $this->valueHolderb44be->hasFilters();
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

        $instance->initializer251e9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb44be) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb44be = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb44be->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, '__get', ['name' => $name], $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        if (isset(self::$publicPropertiesd3f24[$name])) {
            return $this->valueHolderb44be->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb44be;

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

        $targetObject = $this->valueHolderb44be;
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
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb44be;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb44be;
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
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, '__isset', array('name' => $name), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb44be;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb44be;
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
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, '__unset', array('name' => $name), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb44be;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb44be;
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
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, '__clone', array(), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        $this->valueHolderb44be = clone $this->valueHolderb44be;
    }

    public function __sleep()
    {
        $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, '__sleep', array(), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;

        return array('valueHolderb44be');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer251e9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer251e9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer251e9 && ($this->initializer251e9->__invoke($valueHolderb44be, $this, 'initializeProxy', array(), $this->initializer251e9) || 1) && $this->valueHolderb44be = $valueHolderb44be;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb44be;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb44be;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
