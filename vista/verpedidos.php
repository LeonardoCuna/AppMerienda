<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos.css" type="text/css">
    <title>Venta de merienda 2022</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <header>
        <div>
            <h1 class="tituloGral">Venta de merienda 2022</h1>
        </div>
    </header>
    <?php

    ?>
        <div id="banner">
            <img id="imagen" src="../images/logoSecundaria.png">
        </div>
      
        <div class="seccion-pedidover">
            <h1 class="tituloForm">Envíanos tu pedido</h1>
           
            
            <table class='notas'>
            
                <thead>
                        <tr>
                            <th>ID pedido</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Clase</th>
                            <th>Comida</th>
                            
                            <th class="cantidad">Cantidad</th>
                            <th>Precio</th> 
                            </tr>
                            </thead>
                <tbody>
              
                <?php
                        $pedido=new Pedido();
                        $datos=$pedido->verPedidos();
                        foreach($datos as $dato){
                            echo "<tr><td>".$dato['idpedido']."</td><td>".$dato['nombreAlumno']."</td><td>".$dato['apellidoAlumno']."</td><td>".$dato['claseAlumno']."</td><td>".$dato['nombre']."</td><td>".$dato['cantidad']."</td><td>".$dato['total']."</td></tr>";
                        }
                ?>
                            </tbody>
                            </table>
             
            


            
               
                            
                
           
        </div>

            <script>
                function alerta(){
                    alert("Datos guardados con exito!");
                }
            </script>


        </div>
   


       
</body>
</html>