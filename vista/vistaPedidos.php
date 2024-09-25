<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css" type="text/css">
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
$producto= new Producto();
$datos=$producto->getProducto();
    ?>
        <div id="banner">
            <img id="imagen" src="images/logoSecundaria.png">
        </div>
      
        <div class="seccion-pedido">
            <h1 class="tituloForm">Envíanos tu pedido</h1>
            <form id="formpedido" class="formpedido" method="POST">
                <div class="comment-form-name">
                    <input id="Nombre" placeholder="Nombre *" name="nombre" type="text" value=""  size="30" maxlength="245" required>
                    <label for="Nombre">Nombre</label>
                </div>
                <div class="comment-form-surname">
                    <input id="Apellido" placeholder="Apellido *" name="apellido" type="text" value="" size="30" maxlength="245" required>
                    <label for="Apellido">Apellido</label>
                </div>
              
                <div class="boton-enviar">
                <select name="clase" class="orientacion">
                    <option>Selecciona clase y orientación</option>
                    <option value="5C">5C</option>
                    <option value="5H">5H</option>
                    <option value="5B">5B</option>
                    <option value="5T">5T</option>
                    <option value="6to Ing">6to Ing</option>
                    <option value="6to Dh">6to Dh</option>
                    <option value="6to Eco">6to Eco </option>
                    <option value="6to Med 1">6to Med 1</option>
                    <option value="6to Med 2">6to Med 2</option>
                    <option value="6to Tec">6to Tec</option>
                </select>

                <h3>Por favor no realizar más de un pedido.</h3>
            </div>

            
            <table class='notas'>
            
                <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th class="cantidad">Cantidad</th> 
                            </tr>
                            </thead>
                            <?php
                            $precio=1;

                                do{ 
                                foreach($datos as $dato){
                                    
                                    
                                    echo "<tr><td>".$dato['nombre']."</td><td>$<input class='precios' name='precio".$precio."' readonly value=".$dato['precio']."></input></td><td><input type='number' min='0'  name=".$dato['idProd']."></td></tr>";
                                    $precio++;
                                }
                                    }while($precio<=10);
                                


                                
                                if(isset($_GET['pedido'])){
                                    echo "<script>
                                            Swal.fire({
                                                icon: 'success',
                                                title: '¡Pedido realizado!',
                                                text: 'Recordá sacar captura a esto: Id: ".$_GET['id']." Total=$".$_GET['total']." ',
                                                
                                                confirmButtonColor: '#008037', 
                                                });
                                                </script>";
                                                        }
                            ?>
                           


                           
                               
                            


                <tbody>
                <tr>
                            
                            </tr>
                            
                            </tbody>
                            </table>
                <div class="boton-enviar">
                    <input name="submit" type="submit" id="submit" class="submit" value="Enviar pedido">
                </div>
            </form>


            
               
                            
                
           
        </div>

            <script>
                function alerta(){
                    alert("Datos guardados con exito!");
                }
            </script>


        </div>
   


       
</body>
</html>