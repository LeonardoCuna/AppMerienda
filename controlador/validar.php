<?php 
require_once("conexion.php");
require_once("modelo/pedido.php");
require_once("modelo/producto.php");
require_once("vista/vistaPedidos.php");

$producto= new Producto();
$datos=$producto->getProducto();

$pedido=new Pedido();
if(isset($_POST['submit'])){


    
    


    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $clase=$_POST['clase'];
    $pedido->RegistrarPedido($nombre,$apellido,$clase);

    $cant1=$_POST['1'];
    $cant2=$_POST['2'];
    $cant3=$_POST['3'];
    $cant4=$_POST['4'];
    $cant5=$_POST['5'];
    $cant6=$_POST['6'];
    $cant7=$_POST['7'];
    $cant8=$_POST['8'];
    $cant9=$_POST['9'];
    $cant10=$_POST['10'];


    $idPed=$pedido->getPedido();
   $total=0;
    if($cant1!="" && $cant1!=0){ 

        $pedido->asignarProductos($idPed, 1, $cant1);

        $pre1=$_POST['precio1']*$cant1;
        $total=$total+$pre1;

    }
    if($cant2!="" && $cant2!=0){ 

        $pedido->asignarProductos($idPed, 2, $cant2);
        $pre2=$_POST['precio2']*$cant2;
        $total=$total+$pre2;
    }
    if($cant3!="" && $cant3!=0){ 

        $pedido->asignarProductos($idPed, 3, $cant3);
        $pre3=$_POST['precio3']*$cant3;
        $total=$total+$pre3;
    }
    if($cant4!="" && $cant4!=0){

        $pedido->asignarProductos($idPed, 4, $cant4);
        $pre4=$_POST['precio4']*$cant4;
        $total=$total+$pre4;
    }
    if($cant5!="" && $cant5!=0){  

        $pedido->asignarProductos($idPed, 5, $cant5);
        $pre5=$_POST['precio5']*$cant5;
        $total=$total+$pre5;
    }
    if($cant6!="" && $cant6!=0){ 

        $pedido->asignarProductos($idPed, 6, $cant6);
        $pre6=$_POST['precio6']*$cant6;
        $total=$total+$pre6;
    }
    if($cant7!="" && $cant7!=0){ 

        $pedido->asignarProductos($idPed, 7, $cant7);
        $pre7=$_POST['precio7']*$cant7;
        $total=$total+$pre7;
    }
    if($cant8!="" && $cant8!=0){ 

        $pedido->asignarProductos($idPed, 8, $cant8);
        $pre8=$_POST['precio8']*$cant8;
        $total=$total+$pre8;
    }
    if($cant9!="" && $cant9!=0){ 

        $pedido->asignarProductos($idPed, 9, $cant9);
        $pre9=$_POST['precio9']*$cant9;
        $total=$total+$pre9;
    }
    if($cant10!="" && $cant10!=0){ 

        $pedido->asignarProductos($idPed, 10, $cant10);
        $pre10=$_POST['precio10']*$cant10;
        $total=$total+$pre10;
    }



    $pedido->RegistrarTotal($idPed, $total );
    
    echo $total;

    echo "<script>window.location='index.php?pedido&id=".$idPed."&total=".$total."'</script>";
  

    
}

?>