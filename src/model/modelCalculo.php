<?php
include_once __ROOT__ . "\params\paramsconsts.php";
include_once __ROOT__."\model\modelCalculoInterfaces.php";

class modelCalculo implements I_modelCalculo {
    protected $params;

    public function realizarCalculoSubtracao(): int {
      return ($this->params->getValorA() - $this->params->getValorB());
    }
    public function realizarCalculoMultiplicacao(): int {
        return ($this->params->getValorA() * $this->params->getValorB());
      }
    public function realizarCalculoDivisao(): float {    
      if ($this->params->getValorB() == 0) {
        echo "Não é possível dividir por zero!\n";
        return 0;
      }
        return round(($this->params->getValorA() / $this->params->getValorB()), 0);
    }

    public function realizarCalculoSoma(): int {
       return ($this->params->getValorA() + $this->params->getValorB());
    }
    public function setParams(ParamsConts $params) {
        $this->params = $params;
    }
}