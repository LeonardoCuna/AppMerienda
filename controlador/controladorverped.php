<?php 
require_once("../conexion.php");
require_once("../modelo/pedido.php");

require_once("../vista/verpedidos.php");



$pedido=new Pedido();
$datos=$pedido->verPedidos();



?>