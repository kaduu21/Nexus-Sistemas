<?php 

class Funcionario extends Usuario {
    private string $matricula;
    private int $idade;
    private string $sexo;
    private string $graduacao;
    // private string $criado_em; 

    /* public function __construct($matricula, $idade, $sexo, $graduacao, $criado_em) {
        $this -> matricula = $matricula;
        $this -> idade = $idade;
        $this -> sexo = $sexo;
        $this -> graduacao = $graduacao;
        $this -> criado_em = $criado_em;
    } */

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }
    public function setGraduacao($graduacao) {
        $this->graduacao = $graduacao;
    }
    /* public function setCriadoEm($criado_em) {
        $this->criado_em = $criado_em;
    } */
    public function getMatricula() {
        return $this->matricula;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getSexo() {
        return $this->sexo;
    }
    public function getGraduacao() {
        return $this->graduacao;
    }
    /* public function getCriadoEm() {
        return $this->criado_em;
    } */
}