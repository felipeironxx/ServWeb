<?php

require_once ('model/mFuncEmpr.php');

class aFuncEmpr extends mFuncEmpr {

    protected $sqlInsert = "insert into func_empr (nome_func_empr, id_empresa) values('%s', '%s')";
    
    protected $sqlUpdate = "update func_empr set nome_func_empr='%s', id_empresa='%s' where id = '%s'";
    
    protected $sqlDelete = "delete from func_empr where id = '%s'";
    
    protected $sqlSelect = "select * from func_empr where 1=1 %s %s ";
    
    protected $sqlSelectInner = "select func_empr.*, empresa.nome_empresa from func_empr 
                                 inner join empresa on (empresa.id = func_empr.id_empresa) 
                                 where 1=1 %s %s";

    public function insert() {
        try {

            $sql = sprintf($this->sqlInsert, $this->getNome(), $this->getId_empresa());
            return $this->RunQuery($sql);
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }

    public function update() {
        try {
            $sql = sprintf($this->sqlUpdate, $this->getNome(), $this->getId_empresa(), $this->getId());
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

    public function selectInner($where = '', $order = '', $rquery = false) {
        try {
            $sql = sprintf($this->sqlSelectInner, $where, $order);
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
            $this->setNome($rs[0]['nome_func_empr']);
            $this->setId_empresa($rs[0]['id_empresa']);

            return $this;
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }

}

?>
