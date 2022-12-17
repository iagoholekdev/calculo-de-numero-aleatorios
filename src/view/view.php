<?php
define('__ROOT__', dirname(dirname(__FILE__)));

require_once(__ROOT__ . "\params\paramsconsts.php");
require_once(__ROOT__ . "\controller\controllerCalculo.php");
function printInfo(controllerCalculo $controller) {
       print("divisão: "       . $controller->realizarCalculoDivisao()       . "\n" .
             "multiplicação: " . $controller->realizarCalculoMultiplicacao() . "\n" .
             "soma: "          . $controller->realizarCalculoSoma()          . "\n" .
             "subtração: "     . $controller->realizarCalculoSubtracao()     . "\n");
}
$valorA = rand(0,100);
$valorB = rand(0,100);

print("O valor A é: " .$valorA . "\n");
print("O valor B é: " .$valorB . "\n");
print("---------------------------------------". "\n");
print("---------------------------------------". "\n");
print("---------------------------------------". "\n");
print("---------------------------------------". "\n");
$params = new ParamsConts(
       $valorA,
       $valorB
);

$controller = new controllerCalculo();
$controller->setParams($params);


printInfo($controller);





