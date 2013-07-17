<?php

require_once 'dao/dbConnection.php';

class mEmpresa extends dbConnection {

    private $id;
    private $nome;
    private $cnpj;
    private $ie;
    private $aplicativo;
    private $serial_ap;
    private $rua;
    private $numero;
    private $bairro;
    private $cidade;
    private $telefone;
    private $contador;
    private $tel_contador;
    private $email;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    public function getIe() {
        return $this->ie;
    }

    public function setIe($ie) {
        $this->ie = $ie;
    }

    public function getAplicativo() {
        return $this->aplicativo;
    }

    public function setAplicativo($aplicativo) {
        $this->aplicativo = $aplicativo;
    }

    public function getSerial_ap() {
        return $this->serial_ap;
    }

    public function setSerial_ap($serial_ap) {
        $this->serial_ap = $serial_ap;
    }

    public function getRua() {
        return $this->rua;
    }

    public function setRua($rua) {
        $this->rua = $rua;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getContador() {
        return $this->contador;
    }

    public function setContador($contador) {
        $this->contador = $contador;
    }

    public function getTel_contador() {
        return $this->tel_contador;
    }

    public function setTel_contador($tel_contador) {
        $this->tel_contador = $tel_contador;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

}

?>
