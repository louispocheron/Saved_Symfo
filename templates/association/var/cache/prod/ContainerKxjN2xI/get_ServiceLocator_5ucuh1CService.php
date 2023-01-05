<?php

namespace ContainerKxjN2xI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5ucuh1CService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.5ucuh1C' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5ucuh1C'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'assocRepo' => ['privates', 'App\\Repository\\AssociationsRepository', 'getAssociationsRepositoryService', false],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'userRepo' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'assocRepo' => 'App\\Repository\\AssociationsRepository',
            'entityManager' => '?',
            'userRepo' => 'App\\Repository\\UserRepository',
        ]);
    }
}