<?php
namespace App\Controllers
{
    use App\Models\ClienteModel;
    use System\Core\View;
    use System\Core\Controller;

    class ClienteController extends Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function Index()
        {
            View::render('cliente/index', true, array('cliente' => ClienteModel::listCliente()));
        }

        public function Create()
        {
            View::render('cliente/add', true, array('cliente' => ClienteModel::insertCliente()));
        }

        public function Edit()
        {
            View::render('cliente/edit', true, array('cliente' => ClienteModel::updateCliente()));
        }

        public function Delete()
        {
            View::render('cliente/delete', true, array('cliente' => ClienteModel::deleteCliente()));
        }
    }
}
