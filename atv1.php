<?php

class Funcionario {
    public $nome;
    public $cpf;
    public $salarioBase;

    public function __construct($nome, $cpf, $salarioBase){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->salarioBase = $salarioBase;
    }

    public function calcularSalario(){
        return $this->salarioBase;
    }

    public function exibirDados(){
        return "Nome: {$this->nome}, CPF: {$this->cpf}";
    }
}


class Gerente extends Funcionario {
    private $percentualDeBonus;

    public function __construct($nome, $cpf, $salarioBase, $percentualDeBonus){
        $this->percentualDeBonus =  $percentualDeBonus;
        parent::__construct($nome, $cpf, $salarioBase);
    }

    public function calcularSalario(){
        return $this->salarioBase + ($this->salarioBase * $this->percentualDeBonus / 100);
    }

    public function exibirDados(){
        return parent::exibirDados() . ", Tipo: Gerente, Salário: " . $this->calcularSalario();
    }
}


class Estagiario extends Funcionario {
    private $horasEstagio;
    private $valorHora;

    public function __construct($nome, $cpf, $salarioBase, $horasEstagio, $valorHora){
        $this->horasEstagio = $horasEstagio;
        $this->valorHora = $valorHora;
        parent::__construct($nome, $cpf, $salarioBase);
    }

    public function calcularSalario(){
        return $this->horasEstagio * $this->valorHora;
    }

    public function exibirDados(){
        return parent::exibirDados() . ", Tipo: Estagiário, Salário: " . $this->calcularSalario();
    }
}


class FuncionarioComum extends Funcionario {

    public function __construct($nome, $cpf, $salarioBase){
        parent::__construct($nome, $cpf, $salarioBase);
    }

    public function calcularSalario(){
        return $this->salarioBase;
    }

    public function exibirDados(){
        return parent::exibirDados() . ", Tipo: Funcionário Comum, Salário: " . $this->calcularSalario();
    }
}


$g1 = new Gerente('Thiago', '000.000.000-00', 10000, 20);
echo $g1->exibirDados();
echo "<br>";

$e1 = new Estagiario('Mateus', '111.111.111-11', 2000, 2, 50);
echo "<br>" . $e1->exibirDados();
echo "<br>";

$f1 = new FuncionarioComum('Martins', '222.222.222-22', 5000);
echo "<br>" . $f1->exibirDados();

?>


