<?php
// Importa��o do autoloader do composer
require __DIR__.'/bootstrap.php';
// Retorna o componente que nos auxilia na utiliza��o do Schema tool
// Necess�rio para gerar Tabelas para trabalhar com metadados
return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);