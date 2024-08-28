<?php
class Pessoa {
    private string $nome;
    private string $cpf;
    private string $sexo;
    private $dataNascimento;

    public function __construct($nome, $cpf, $sexo, $dataNascimento)
    {
        $this->nome = $nome;
        $this->cpf =$cpf;
        $this->sexo =$sexo;
        $this->dataNascimento =$dataNascimento;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getSexo()
    {
        return $this->sexo;
    }
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }
     function imprimir($nome, $cpf, $sexo, $dataNascimento) {
        echo $nome, $cpf, $sexo, $dataNascimento;
    }
   
}
