<?php

class funcionario  {
    public $nome;
    public $cpf;
    public $salarioBase;


 public function __construct($nome, $cpf, $salarioBase){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->salarioBase = $salarioBase;
    }

    public function exibirDados(){
        return "Nome: {$this->nome}, CPF: {$this->cpf}, Salario Base: {$this->salarioBase}";
    }
}

class gerente extends funcionarios {

    private $quantidadeDePortas;

    public function __construct($marca, $modelo, $ano, $cor, $quantidadeDePortas){
        $this->quantidadeDePortas = $quantidadeDePortas;
        parent::__construct($marca, $modelo, $ano, $cor);
    }

    public function getQuantidadeDePortas(){
        return $this->quantidadeDePortas;
    }
}






    public function calcularSalario(){
    return "Salário Base: {$this->salarioBase}";
    }
    public function exibirDados(){
    return "Nome: {$this->nome}, CPF: {$this->cpf}";
}

class gerente extends funcionario {
    public percentualDeBonus ();
    public function calcularSalario($valor);
     $this->salarioBase += $percentualDeBonus;
}

class estagiario {
    public percentualDeBonus ();
    public function calcularSalario($valor);
     $this->salarioBase=+ 
    
}

class funcionarioComum {
    public function calcularSalario();
    public percentualDeBonus ();
}

class dados  {
    public $nome;
    public $tipo;
    public $salarioCalculado;
}

echo exibirInformacoes() . "<br>";
}
?>
