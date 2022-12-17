<?php
require_once(__ROOT__ ."\params\paramsconsts.php");
interface I_modelCalculo {
    public function realizarCalculoDivisao(): float;
    public function realizarCalculoMultiplicacao(): int;
    public function realizarCalculoSoma(): int;
    public function realizarCalculoSubtracao(): int;
    public function setParams(ParamsConts $params);
}