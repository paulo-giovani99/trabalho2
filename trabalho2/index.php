<?php
require_once "Pessoa.php";
require_once "Vendedor.php";

//associação
$pessoa = New Pessoa("Paulo", "14783738378", "masculino", "21/08/2006");

$pessoa->imprimir("Paulo",   "187662323", "","masculino", "21/08/2006") ; 


$vendedor = New Vendedor("João","14783738354", "masculino", "21/08/2005", "1500", "5%");

$vendedor->imprimi("Joao", "1344343","masculino", "21/08/2005", "1500", "5%");



