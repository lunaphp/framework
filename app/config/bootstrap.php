<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$isDevMode = getenv('DB_DEV_MODE');
$configuration = Setup::createAnnotationMetadataConfiguration(
    [__DIR__.'/../entities'],
    $isDevMode
);

$connection = [
    'driver' => getenv('DB_DRIVER'),
    'host' => getenv('DB_HOST'),
    'port' => getenv('DB_PORT'),
    'user' => getenv('DB_USER'),
    'password' => getenv('DB_PASS'),
    'dbname' => getenv('DB_NAME'),
    'charset'  => getenv('DB_CHARSET'),
    'driverOptions' => array(
        1002 => 'SET NAMES '.getenv('DB_CHARSET')
    )
];

$entityManager = EntityManager::create($connection, $configuration);