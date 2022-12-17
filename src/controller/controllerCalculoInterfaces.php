<?php
require_once(__ROOT__. "/params/paramsconsts.php");
interface I_controllerCalculo {
    public function realizarCalculoSoma(): int;
    public function realizarCalculoSubtracao(): int;
    public function realizarCalculoMultiplicacao(): int;
    public function realizarCalculoDivisao(): float;

    public function setParams(ParamsConts $params);

}