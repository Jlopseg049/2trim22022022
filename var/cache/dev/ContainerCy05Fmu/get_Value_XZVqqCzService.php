<?php

namespace ContainerCy05Fmu;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Value_XZVqqCzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.value.xZVqqCz' shared service.
     *
     * @return \mixed
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.value.xZVqqCz'] = \current([0 => (\dirname(__DIR__, 4).'/public/img/profiler')]);
    }
}
