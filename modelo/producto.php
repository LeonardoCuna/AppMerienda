<?php
Class Producto{
    private $Producto; //Para array
    private $db; //Para conexion



    
    public function __construct(){
			
        //Asignamos al atributo db el valor del metodo conexion() de la clase Conectar
        //Conectar es la clase y conexion es el metodo
        $this->db = Conectar::conexion();
        //Determinamos que el atributo personas será un array
        $this->Producto = array();
        
    }


    
    public function getProducto(){
			
        $sql = "SELECT * FROM producto";
        $consulta = $this->db->query($sql);
        
        while($filas=$consulta->fetch_assoc()){
            $this->Producto[]=$filas;
        }
        return $this->Producto;
        
    }


   





    
    

 }

?>