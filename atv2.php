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

class gerente extends funcionario {

    private $percentualDeBonus;

    public function __construct($nome, $cpf, $salarioBase, $percentualDeBonus){
        $this->percentualDeBonus =  $percentualDeBonus;
        parent::__construct($nome, $cpf, $salarioBase);
    }

    public function getPercentualDeBonus(){
        return $this->percentualDeBonus;
    }
}

class estagiario extends funcionario {

    private $horasEstagio;
    private $valorHora;

   public function __construct($nome, $cpf, $salarioBase, $horasEstagio, $valorHora){
        $this->horasEstagio = $horasEstagio;
        $this->valorHora = $valorHora;
        parent::__construct($nome, $cpf, $salarioBase);
    }

    public function getHorasEstagio(){
        return $this->horasEstagio;
    }
     public function getValorHora(){
        return $this->valorHora;
    }
}



$f1 = new gerente('Thiago', '000.000.000-00', 10000, 20);
echo $f1->exibirDados();
echo ", Percentual de bonus: <br>" . $f1->getPercentualDeBonus();

$f2 = new estagiario('Mateus', '111.111.111-11', 2000, 2, 50);
echo $f2->exibirDados();
echo ", Horas de estagio: " . $f2->getHorasEstagio();
echo ", Valor por hora: " . $f2->getValorHora();

$fc = new funcionario('<br>Martins', '222.222.222-22', 5000);
echo $fc->exibirDados();

?>
