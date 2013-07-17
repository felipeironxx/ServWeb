<?php
require_once ('model/mUsuario.php');


class aUsuario extends mUsuario {

    protected $sqlInsert = "insert into usuario (nome, login, senha) values('%s', '%s', '%s')";
    
    protected $sqlUpdate = "update usuario set nome = '%s', login = '%s', senha = '%s' where id = '%s'";
    
    protected $sqlDelete = "delete from usuario where id = '%s' ";
    
    protected $sqlSelect = "select * from usuario where 1=1 %s %s ";

    public function insert() {
        try {

            $sql = sprintf($this->sqlInsert, $this->getNome(), 
                                             $this->getLogin(),
                                             $this->getSenha());
            return $this->RunQuery($sql);
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }

    public function update() {
        try {
            $sql = sprintf($this->sqlUpdate, $this->getNome(), 
                                             $this->getLogin(), 
                                             $this->getSenha(), 
                                             $this->getId());
            return $this->RunQuery($sql);
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }

    public function delete() {
        try {
            $sql = sprintf($this->sqlDelete, $this->getId());
            return $this->RunQuery($sql);
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }

    public function select($where = '', $order = '', $rquery = false) {
        try {
            $sql = sprintf($this->sqlSelect, $where, $order);
            if ($rquery)
                return $sql;
            else
                return $this->RunSelect($sql);
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }

    public function load() {
        try {
            $rs = $this->select(sprintf("and id='%s'", $this->getId()));
            $this->setNome($rs[0]['nome']);
            $this->setLogin($rs['login']);

            return $this;
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }

}

?>
