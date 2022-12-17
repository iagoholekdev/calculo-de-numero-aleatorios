<?php 
require_once(__ROOT__ . "\controller\controllerCalculoInterfaces.php");
require_once(__ROOT__ . "\model\modelCalculo.php");
class controllerCalculo implements I_controllerCalculo {

    protected $params;
    protected $model;

    public function __construct() {
        $this->model = new modelCalculo();
    }
    public function realizarCalculoSubtracao(): int {
        return $this->model->realizarCalculoSubtracao();
    }
    public function realizarCalculoDivisao(): float {
        return $this->model->realizarCalculoDivisao();
    }
    public function realizarCalculoMultiplicacao(): int {
        return $this->model->realizarCalculoMultiplicacao();
    }

    public function realizarCalculoSoma() : int {
        return $this->model->realizarCalculoSoma();

    }
    public function setParams(ParamsConts $params) {
        $this->model->setParams($params);
    }
}
