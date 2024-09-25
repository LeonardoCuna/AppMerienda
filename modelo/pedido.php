<?php
Class Pedido{
    private $Pedido; //Para array
    private $db; //Para conexion



    
    public function __construct(){
			
        //Asignamos al atributo db el valor del metodo conexion() de la clase Conectar
        //Conectar es la clase y conexion es el metodo
        $this->db = Conectar::conexion();
        //Determinamos que el atributo personas será un array
        $this->Producto = array();
        
    }


    
  


    public function RegistrarPedido($nombre,$apellido,$clase){
        
        $sql = "INSERT INTO pedido VALUES (NULL,'$nombre','$apellido','$clase', NULL)";
        
   
        if($this->db->query($sql)){
            return true;
            
        }else{
            return false;
        }
    }

    public function RegistrarTotal($idPed, $total){
        
        $sql = "UPDATE pedido SET total='$total' WHERE idpedido=$idPed";
        
   
        if($this->db->query($sql)){
            return true;
            
        }else{
            return false;
        }
    }




    
    public function getPedido(){
			
        $sql="SELECT * FROM pedido ORDER BY idpedido DESC LIMIT 1";
        $consulta = $this->db->query($sql);
        
        
        $ret = mysqli_fetch_array($consulta);  
        $segm = $ret['idpedido'];  
        mysqli_free_result($consulta);  
        return $segm; 
        
    }

    public function asignarProductos($idPed, $idProd, $cant ){
        $sql = "INSERT INTO realiza VALUES ('$idPed','$idProd','$cant')";
       
        if($this->db->query($sql)){
            return true;
            
        }else{
            return false;
        }
        

        
        
    }

  

    public function verPedidos(){
        $sql="SELECT pedido.*, producto.nombre , realiza.*
        FROM ((realiza
        INNER JOIN pedido ON realiza.idpedido = pedido.idpedido)
        INNER JOIN producto ON realiza.idProd = producto.idProd) ORDER BY pedido.idpedido";
        $consulta = $this->db->query($sql);
        
        while($filas=$consulta->fetch_assoc()){
            $this->Pedido[]=$filas;
        }
        return $this->Pedido;
    }

    
 }



/*
if(isset($_POST['1'])){

        $pedido->asignarProductos( $ped['idpedido'], 1, $_POST['1'] );
        
    }else if(isset($_POST['2'])){
        
        $pedidoo->asignarProductos( $ped['idpedido'], 2, $_POST['2'] );
        
    }else if(isset($_POST['3'])){

        $pedido->asignarProductos( $ped['idpedido'], 3, $_POST['3'] );

    }else if(isset($_POST['4'])){

        $pedido->asignarProductos( $ped['idpedido'], 4, $_POST['4'] );

    }elseif(isset($_POST['5'])){

        $pedido->asignarProductos( $ped['idpedido'], 5, $_POST['5'] );

    }elseif(isset($_POST['6'])){

        $pedido->asignarProductos( $ped['idpedido'], 6, $_POST['6'] );

    }elseif(isset($_POST['7'])){

        $pedido->asignarProductos( $ped['idpedido'], 7, $_POST['7'] );

    }elseif(isset($_POST['8'])){

        $pedido->asignarProductos( $ped['idpedido'], 8, $_POST['8'] );

    }elseif(isset($_POST['9'])){

        $pedido->asignarProductos( $ped['idpedido'], 9, $_POST['9'] );

    }elseif(isset($_POST['10'])){

        $pedido->asignarProductos( $ped['idpedido'], 10, $_POST['10'] );

    }
*/
?>