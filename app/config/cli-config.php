<?php
// Importaчуo do autoloader do composer
require __DIR__.'/bootstrap.php';
// Retorna o componente que nos auxilia na utilizaчуo do Schema tool
// Necessсrio para gerar Tabelas para trabalhar com metadados
return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);