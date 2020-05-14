<?php
namespace App\Entities
{
    /**
     * @Entity
     * @Table(name="cliente")
     */
    class Cliente
    {
        /**
         * @Id @Column(type="integer") @GeneratedValue
         */
        protected $id_cliente;

        /**
         * @Column(type="string")
         */
        protected $nome;

        /**
         * @Column(type="string")
         */
        protected $telefone;

        /**
         * @Column(type="string")
         */
        protected $email;

        /**
         * @Column(type="string")
         */
        protected $cpf;

        /**
         * @Column(type="integer")
         */
        protected $saldo;

        /**
         * @Column(type="string")
         */
        protected $genero;

        /**
         * @Column(type="date")
         */
        protected $data_nascimento;

        /**
         * @Column(type="string")
         */
        protected $senha;

        /**
         * @Column(type="string")
         */
        protected $token;

        /**
         * @Column(type="boolean")
         */
        protected $status;

        /**
         * @Column(type="datetime")
         */
        protected $data_criacao;

        /**
         * @Column(type="datetime")
         */
        protected $data_alteracao;

        public function getId()
        {
            return $this->id_cliente;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function getTelefone()
        {
            return $this->telefone;
        }

        public function setTelefone($telefone)
        {
            $this->telefone = $telefone;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function getCpf()
        {
            return $this->cpf;
        }

        public function setCpf($cpf)
        {
            $this->cpf = $cpf;
        }

        public function getSaldo()
        {
            return $this->saldo;
        }

        public function setSaldo($saldo)
        {
            $this->saldo = $saldo;
        }

        public function getGenero()
        {
            return $this->genero;
        }

        public function setGenero($genero)
        {
            $this->genero = $genero;
        }

        public function getData_nascimento()
        {
            return $this->data_nascimento;
        }

        public function setData_nascimento(Date $data_nascimento)
        {
            $this->data_nascimento = $data_nascimento;
        }

        public function getSenha()
        {
            return $this->senha;
        }

        public function setSenha($senha)
        {
            $this->senha = $senha;
        }

        public function getToken()
        {
            return $this->token;
        }

        public function setToken($token)
        {
            $this->token = $token;
        }

        public function getStatus()
        {
            return $this->status;
        }

        public function setStatus($status)
        {
            $this->status = $status;
        }

        public function getData_criacao()
        {
            return $this->data_criacao;
        }

        public function setData_criacao(DateTime $data_criacao)
        {
            $this->data_criacao = $data_criacao;
        }

        public function getData_alteracao()
        {
            return $this->data_alteracao;
        }

        public function setData_alteracao(DateTime $data_alteracao)
        {
            $this->data_alteracao = $data_alteracao;
        }

    }
}
