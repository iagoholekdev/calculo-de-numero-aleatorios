<?php

require_once(__ROOT__ . "/params/paramsconstsInterfaces.php");
class ParamsConts implements I_paramsConsts {
    public function __construct(
        public readonly int $valorA,
        public readonly int $valorB,
          ) {
    
    }
    public function getValorA(): int {
       return $this->valorA;
    }
    public function getValorB(): int {
       return $this->valorB;
    }
}

