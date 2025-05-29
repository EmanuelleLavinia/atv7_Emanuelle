<?php

class veiculo  {
    public $marca;
    public $modelo;
    public $ano;
    public $cor;

    public function __construct($marca, $modelo, $ano, $cor){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->cor = $cor;
    }

    public function exibirInformacoes(){
        return "Marca: {$this->marca}, Modelo: {$this->modelo}, Ano: {$this->ano}, Cor: {$this->cor}";
    }
}

class carro extends veiculo {

    private $quantidadeDePortas;

    public function __construct($marca, $modelo, $ano, $cor, $quantidadeDePortas){
        $this->quantidadeDePortas = $quantidadeDePortas;
        parent::__construct($marca, $modelo, $ano, $cor);
    }

    public function getQuantidadeDePortas(){
        return $this->quantidadeDePortas;
    }
}

class moto extends veiculo {

    private $cilindradas;

    public function __construct($marca, $modelo, $ano, $cor, $cilindradas){
        $this->cilindradas = $cilindradas;
        parent::__construct($marca, $modelo, $ano, $cor);
    }

    public function getCilindradas(){
        return $this->cilindradas;
    }
}

class caminhao extends veiculo {

    private $capacidadeDeCarga;

    public function __construct($marca, $modelo, $ano, $cor, $capacidadeDeCarga){
        $this->capacidadeDeCarga = $capacidadeDeCarga;
        parent::__construct($marca, $modelo, $ano, $cor);
    }

    public function getCapacidadeDeCarga(){
        return $this->capacidadeDeCarga;
    }
}

$t1 = new carro('Honda', 'Civic', '2021', 'preta', 4);
echo $t1->exibirInformacoes();

echo "<br>Quantidade de portas: " . $t1->getQuantidadeDePortas();

$t2 = new moto('Yamaha', 'Ninja 300', '2022', 'preta', '400cc');
echo "<br>" . $t2->exibirInformacoes();
echo "<br>Cilindradas: " . $t2->getCilindradas();

$t3 = new caminhao('Mercedes-Benz', 'Atego 1719', '2020', 'branca', '10 toneladas');
echo "<br>" . $t3->exibirInformacoes();
echo "<br>Capacidade de carga: " . $t3->getCapacidadeDeCarga();

?>
