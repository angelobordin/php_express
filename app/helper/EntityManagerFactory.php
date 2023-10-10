<?php
namespace App\helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

class EntityManagerFactory
{
    public function getEntityManager(): EntityManagerInterface
    {
        $rootDir = __DIR__ . '/../..';
        $config = Setup::createAnnotationMetadataConfiguration(
            [
                $rootDir . '/app'
            ],
            true
        );
        $connection = [
            'driver' => 'pdo_mysql',
            'path' => $rootDir . '/db/banco.mysql'
        ];

        return EntityManager::create($connection, $config);
    }
}