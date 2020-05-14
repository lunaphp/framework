<?php
namespace System\Core
{
    class Controller
    {
        public function __construct()
        {
            $this->_view = new View;
        }

        public function loadModel($name)
        {
            $formatPath = '../app/models/%sModel.php';
            $path = sprintf($formatPath,  $name);

            if (file_exists($path)) {
                $formatModal = '\App\Models\%sModel';
                $modelName = sprintf($formatModal,  $name);
                $model = new $modelName;
                $this->_model = $model;
            }
        }
    }
}


