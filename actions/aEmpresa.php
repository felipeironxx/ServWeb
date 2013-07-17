<?php
require_once ('model/mEmpresa.php');

class aEmpresa extends mEmpresa {

    protected $sqlInsert = "insert into empresa (nome_empresa, cnpj, ie, aplicativo, serial_ap, rua,
                                                 numero, bairro, cidade, telefone, contador, telefone_contador, email) 
                                          values('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')";
    
    protected $sqlUpdate = "update empresa set nome_empresa='%s', cnpj='%s', ie='%s', aplicativo='%s', serial_ap='%s', 
                                               rua='%s', numero='%s', bairro='%s', cidade='%s',  telefone='%s', contador='%s', 
                                               telefone_contador='%s', email='%s' where id = '%s'";
    
    protected $sqlDelete = "delete from empresa where id = '%s' ";
    
    protected $sqlSelect = "select * from empresa where 1=1 %s %s ";

    public function insert() {
        try {

            $sql = sprintf($this->sqlInsert, $this->getNome(), 
                                             $this->getCnpj(), 
                                             $this->getIe(), 
                                             $this->getAplicativo(),
                                             $this->getSerial_ap(),
                                             $this->getRua(),
                                             $this->getNumero(),
                                             $this->getBairro(),
                                             $this->getCidade(),
                                             $this->getTelefone(),
                                             $this->getContador(),
                                             $this->getTel_contador(),
                                             $this->getEmail());
            return $this->RunQuery($sql);
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }

    public function update() {
        try {
            $sql = sprintf($this->sqlUpdate, $this->getNome(), 
                                             $this->getCnpj(), 
                                             $this->getIe(), 
                                             $this->getAplicativo(),
                                             $this->getSerial_ap(),
                                             $this->getRua(),
                                             $this->getNumero(),
                                             $this->getBairro(),
                                             $this->getCidade(),
                                             $this->getTelefone(),
                                             $this->getContador(),
                                             $this->getTel_contador(),
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
            $this->setNome($rs[0]['nome_empresa']);
            $this->setCnpj($rs[0]['cnpj']);
            $this->setIe($rs[0]['ie']);
            $this->setAplicativo($rs[0]['aplicativo']);
            $this->setSerial_ap($rs[0]['serial_ap']);
            $this->setRua($rs[0]['rua']);
            $this->setNumero($rs[0]['numero']);
            $this->setBairro($rs[0]['bairro']);
            $this->setCidade($rs[0]['cidade']);
            $this->setTelefone($rs[0]['telefone']);
            $this->setContador($rs[0]['contador']);
            $this->setTel_contador($rs[0]['telefone_contador']);
            $this->setEmail($rs[0]['email']);
            
            return $this;
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }
}
?>
