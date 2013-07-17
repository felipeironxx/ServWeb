<?php

require_once 'dao/dbConnection.php';

class mServico extends dbConnection {

    private $id;
    private $id_func_anotou;
    private $id_empresa;
    private $id_func_empr;
    private $id_cliente;
    private $serv_solicitado;
    private $id_func_realizou;
    private $serv_realizado;
    private $dt_solicitacao;
    private $dt_hr_comeco;
    private $dt_hr_realizacao;
    private $conluido;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId_func_anotou() {
        return $this->id_func_anotou;
    }

    public function setId_func_anotou($id_func_anotou) {
        $this->id_func_anotou = $id_func_anotou;
    }

    public function getId_empresa() {
        return $this->id_empresa;
    }

    public function setId_empresa($id_empresa) {
        $this->id_empresa = $id_empresa;
    }

    public function getId_func_empr() {
        return $this->id_func_empr;
    }

    public function setId_func_empr($id_func_empr) {
        $this->id_func_empr = $id_func_empr;
    }

    public function getId_cliente() {
        return $this->id_cliente;
    }

    public function setId_cliente($id_cliente) {
        $this->id_cliente = $id_cliente;
    }

    public function getServ_solicitado() {
        return $this->serv_solicitado;
    }

    public function setServ_solicitado($serv_solicitado) {
        $this->serv_solicitado = $serv_solicitado;
    }

    public function getId_func_realizou() {
        return $this->id_func_realizou;
    }

    public function setId_func_realizou($id_func_realizou) {
        $this->id_func_realizou = $id_func_realizou;
    }

    public function getServ_realizado() {
        return $this->serv_realizado;
    }

    public function setServ_realizado($serv_realizado) {
        $this->serv_realizado = $serv_realizado;
    }

    public function getDt_solicitacao($us = FALSE) {
        if ($us) {
            return $this->dt_solicitacao;
        } else {
            return $this->dateToBr($this->dt_solicitacao);
        }
    }

    public function setDt_solicitacao($dataBR) {
        $this->dt_solicitacao = $this->dateToUS($dataBR);
    }

    public function getDtHr_comeco($us = FALSE) {
        if ($us) {
            return $this->dt_hr_comeco;
        } else {
            return $this->dateTimeToBr($this->dt_hr_comeco);
        }
    }

    public function setDtHr_comeco($dataBR_His) {
        $this->dt_hr_comeco = $this->dateTimeToUS($dataBR_His);
    }

    public function getDtHr_realizacao($us = FALSE) {
        if ($us) {
            return $this->dt_hr_realizacao;
        } else {
            return $this->dateTimeToBr($this->dt_hr_realizacao);
        }
    }

    public function setDtHr_realizacao($dataBR_His) {
        $this->dt_hr_realizacao = $this->dateTimeToUS($dataBR_His);
    }

    public function getConluido() {
        return $this->conluido;
    }

    public function setConluido($conluido = 'N') {
        $this->conluido = $conluido;
    }
}

?>
