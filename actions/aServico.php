<?php

require_once ('model/mServico.php');

class aServico extends mServico {

    protected $sqlInsert = "insert into servico (id_func_anotou, id_cliente, id_empresa,
                                                 id_func_empr, serv_solicitado, dt_solicitacao) 
                                   values(%s, %s, %s, %s, '%s', '%s')";
    
    protected $sqlUpdate = "update servico set id_func_anotou = %s, id_empresa = %s, 
                                               id_func_empr= %s , id_cliente = %s , serv_solicitado= '%s', 
                                               id_func_realizou=%s, serv_realizado='%s', 
                                               dt_solicitacao = '%s', dt_hr_comeco = '%s', dt_hr_realizacao = '%s', concluido = '%s'
                            where id = '%s'";
    
    protected $sqlDelete = "delete from servico where id = '%s'";
    
    protected $sqlSelect = "select *, date_format(dt_solicitacao, '%s') as dt_solicitacao,
                                      date_format(dt_hr_comeco, '%s') as dt_hr_comeco,
                                      date_format(dt_hr_realizacao, '%s') as dt_hr_realizacao
                                      from servico where 1=1 %s %s";
    
    protected $sqlSelectInner = "select servico.*, date_format(dt_solicitacao, '%s') as dt_solicitacao,
                                        date_format(dt_hr_comeco, '%s') as dt_hr_comeco,
                                        date_format(dt_hr_realizacao, '%s') as dt_hr_realizacao, 
                                        funcionario.nome_funcionario, empresa.nome_empresa, 
                                        func_empr.nome_func_empr, servico.id_cliente as nome_cliente from servico 
                                        inner join funcionario on (funcionario.id = servico.id_func_anotou)
                                        inner join empresa on (empresa.id = servico.id_empresa) 
                                        inner join func_empr on (func_empr.id = servico.id_func_empr) 
                                 where 1=1 %s
                                 union all 
                                 select servico.*, date_format(dt_solicitacao, '%s') as dt_solicitacao,
                                        date_format(dt_hr_comeco, '%s') as dt_hr_comeco,
                                        date_format(dt_hr_realizacao, '%s') as dt_hr_realizacao, 
                                        funcionario.nome_funcionario, servico.id_empresa, servico.id_func_empr, cliente.nome_cliente 
                                        from servico 
                                        inner join funcionario on (funcionario.id = servico.id_func_anotou)
                                        inner join cliente on (cliente.id = servico.id_cliente) 
                                 where 1=1 %s order by id";

    public function insert() {
        try {

            $sql = sprintf($this->sqlInsert, $this->getId_func_anotou(),
                                             $this->getId_cliente(),
                                             $this->getId_empresa(), 
                                             $this->getId_func_empr(), 
                                             $this->getServ_solicitado(),
                                             $this->getDt_solicitacao(true));
            return $this->RunQuery($sql);
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }

    public function update() {
        try {
            $sql = sprintf($this->sqlUpdate, $this->getId_func_anotou(),
                                             $this->getId_empresa(), 
                                             $this->getId_func_empr(),
                                             $this->getId_cliente(),
                                             $this->getServ_solicitado(),
                                             $this->getId_func_realizou(),
                                             $this->getServ_realizado(),
                                             $this->getDt_solicitacao(true),
                                             $this->getDtHr_comeco(true),
                                             $this->getDtHr_realizacao(true),
                                             $this->getConluido(),
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
            $sql = sprintf($this->sqlSelect, '%d/%m/%Y', '%d/%m/%Y %H:%i:%s', '%d/%m/%Y %H:%i:%s', $where, $order);
            if ($rquery)
                return $sql;
            else
                return $this->RunSelect($sql);
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }

    public function selectInner($where = '', $where2 = '', $rquery = false) {
        try {
            $sql = sprintf($this->sqlSelectInner, '%d/%m/%Y', '%d/%m/%Y %H:%i:%s', '%d/%m/%Y %H:%i:%s', $where, 
                                                  '%d/%m/%Y', '%d/%m/%Y %H:%i:%s', '%d/%m/%Y %H:%i:%s', $where2);
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
            $this->setId_func_anotou($rs[0]['id_func_anotou']);
            $this->setId_cliente($rs[0]['id_cliente']);
            $this->setId_empresa($rs[0]['id_empresa']);
            $this->setId_func_empr($rs[0]['id_func_empr']);
            $this->setServ_solicitado($rs[0]['serv_solicitado']);
            $this->setId_func_realizou($rs[0]['id_func_realizou']);
            $this->setServ_realizado($rs[0]['serv_realizado']);
            $this->setDt_solicitacao($rs[0]['dt_solicitacao']);
            $this->setDtHr_comeco($rs[0]['dt_hr_comeco']);
            $this->setDtHr_realizacao($rs[0]['dt_hr_realizacao']);
            $this->setConluido($rs[0]['concluido']);

            return $this;
        } catch (Exception $e) {
            echo "Caught exception:", $e->getMessage(), "\n";
        }
    }
}
?>