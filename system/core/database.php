<?php
namespace System\Core
{
    use PDO;
    class Database extends PDO
    {
        public function __construct()
        {
            try {
                parent::__construct(
                    getenv('PDO_DRIVER') .
                    ':host=' .
                    getenv('PDO_HOST') .
                    ';dbname=' .
                    getenv('PDO_NAME').';charset='.getenv('PDO_CHARSET'),
                    getenv('PDO_USER'),
                    getenv('PDO_PASS')
                );
                parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC)
        {
            $query = $this->prepare($sql);
            foreach ($array as $key => $value) {
                $query->bindValue($key, $value);
            }

            $query->execute();
            return $query->fetchAll($fetchMode);
        }
    }
}