<?php 

class Aluno extends Usuario {
    private string $matricula;
    private int $idade;
    private string $sexo;
    private string $turma;
    private string $curso;
    private string $criado_em; 

    /* public function __construct($matricula, $idade, $sexo, $turma, $curso, $criado_em) {
        $this -> matricula = $matricula;
        $this -> idade = $idade;
        $this -> sexo = $sexo;
        $this -> turma = $turma;
        $this -> curso = $curso;
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
    public function setTurma($turma) {
        $this->turma = $turma;
    }
    public function setCurso($curso) {
        $this->curso = $curso;
    }
    public function setCriadoEm($criado_em) {
        $this->criado_em = $criado_em;
    }
    public function getMatricula() {
        return $this->matricula;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getSexo() {
        return $this->sexo;
    }
    public function getTurma() {
        return $this->turma;
    }
    public function getCurso() {
        return $this->curso;
    }
    public function getCriadoEm() {
        return $this->criado_em;
    }
}