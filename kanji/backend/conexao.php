<?php
    define('CHARSET','utf8');
    class DB{
        private $host = 'localhost';
        private $user = 'root';
        private $senha = 's13r37/*d513';
        private $erro = false;
        private $base = null;
        private $con = null;
        private $sim = null;
        private $tabela = null;
        private $param = null;
        private $cols = "*";

        public function __construct($base = null,$tabela = null){
            $this->base = $base;
            $this->tabela = $tabela;
        }

        public function __destruct(){
            
        }

        private function conexao(){
            $this->con = mysqli_connect($this->host,$this->user,$this->senha,$this->base);
            if(!$this->con)
                return mysqli_error();
            else
                mysqli_set_charset($this->con,CHARSET);
            return 1;
        }

        private function fecha_conexao(){
            @mysqli_close($this->con) or die(mysqli_error());
            $this->con = null;
        }

        public function query_insercao(){
            $sql = sprintf("insert into %s (id,ideograma,definitivo) values (NULL,'%s',1)",$this->tabela,$this->sim);
            return $this->executa($sql);
        }

        public function query_selecao(){
            $sql = sprintf("select %s from %s %s",$this->cols,$this->tabela,$this->param);
            $res = $this->executa($sql);
            if(!mysqli_num_rows($res))
                return false;
            else{
                while($resp = mysqli_fetch_assoc($res))
                    $dados[] = $resp;
                return $dados;
            }
        }

        private function executa($query){
            $this->conexao();
            $res = @mysqli_query($this->con,$query);
            if(mysqli_error($this->con)){
                $this->erro = true;
                die(mysqli_error($this->con));
            }
            $this->fecha_conexao();
            return $res;
        }

        public function getSim(){
            return $this->sim;
        }

        public function setSim($sim){
            $this->sim = $sim;
        }

        public function setBase($nome){
            $this->base = $nome;
        }

        public function getBase(){
            return $this->base;
        }

        public function setTabela($tabela){
            $this->tabela = $tabela;
        }

        public function getTabela(){
            return $this->tabela;
        }

        public function setParam($param){
            $this->param = $param;
        }

        public function getParam(){
            return $this->param;
        }

        public function setCols($cols){
            $this->cols = $cols;
        }

        public function getErro(){
            return $this->erro;
        }

        public function getCols(){
            return $this->cols;
        }
    }
    
?>