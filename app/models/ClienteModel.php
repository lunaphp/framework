<?php
namespace App\Models
{
    use System\Core\Model;
    class ClienteModel extends Model
    {
        public function __construct()
        {
            parent::__construct();
        }

        public static function listCliente()
        {
            require __DIR__.'/../config/bootstrap.php';
            if(isset($entityManager)){
                $clienteRepository = $entityManager->getRepository('\App\Entities\Cliente');
                $cliente = $clienteRepository->findAll();
                return $cliente;
            }else{
                return null;
            }
        }

        public static function insertCliente()
        {
            require __DIR__.'/../config/bootstrap.php';
        }

        public static function updateCliente()
        {
            require __DIR__.'/../config/bootstrap.php';
        }

        public static function deleteCliente()
        {
            require __DIR__.'/../config/bootstrap.php';
        }
    }
}
