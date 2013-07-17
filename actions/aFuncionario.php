<?php
require_once ('model/mFuncionario.php');

class aFuncionario extends mFuncionario {

    protected $sqlInsert = "insert into funcionario (nome_funcionario, celular, email) values('%s','%s', '%s')";
    protected $sqlUpdate = "update funcionario set nome_funcionario='%s', celular='%s', email='%s' where id = '%s'";
    protected $sqlDelete = "delete from funcionario where id = '%s' ";
    protected $sqlSelect = "select * from funcionario where 1=1 %s %s ";

    public function insert() {
        try {
            $sql = sprintf($this->sqlInsert, $this->getNome(), 
                                             $this->getCelular(),
                                             $this->getEmail());
            return $this->RunQuery($sql);
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }

    public function update() {
        try {
            $sql = sprintf($this->sqlUpdate, $this->getNome(), 
                                             $this->getCelular(),
                                             $this->getEmail(),
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
            $this->setId($rs[0]['id']);
            $this->setNome($rs[0]['nome_funcionario']);
            $this->setCelular($rs[0]['celular']);
            $this->setEmail($rs[0]['email']);

            return $this;
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }
}
?>
