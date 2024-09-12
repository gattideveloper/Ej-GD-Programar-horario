<!DOCTYPE html>
<html lang="en">    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GD : : Programar Horario</title>

        <!--/ Styles /-->
		<link rel="stylesheet" type="text/css" href="css/styles.css" />

    </head>
    <body>
        <div id='conteiner'>
            <h1>Programar Horario</h1>
            <p>Cambio los Precios a un determinado horario y el cambio se hace automaticamnete.</p>
            
            <div class="boton">
                <a href="scheduleTime.php">Programar Horario</a>
            </div>

            <?php   
                //--> Show Data <---
                $obj_showData = new Run_Model();
                $data_showData = $obj_showData->Run_showData();
                
                while ($get_showData = mysqli_fetch_assoc($data_showData)) { 
                        
                    //--> Variables
                    $single = $get_showData['single'];
                    $superior = $get_showData['superior'];
                    $doble = $get_showData['doble'];
                    $triple = $get_showData['triple'];
                    $cuadruple = $get_showData['cuadruple'];
                    $quintuple = $get_showData['quintuple'];
                    $sextuple = $get_showData['sextuple'];
                    $siesta = $get_showData['siesta'];
                    $mascota = $get_showData['mascota'];
                    $cochera = $get_showData['cochera'];
                
                    echo "Single ==> ".$single;
                    echo "</br>";      
                    echo "Single Superior ==> ".$superior;
                    echo "</br>";
                    echo "Doble ==> ".$doble;
                    echo "</br>";
                    echo "Triple ==> ".$triple;
                    echo "</br>";
                    echo "<hr>";  
                    echo "Cuádruple ==> ".$cuadruple;
                    echo "</br>";                
                    echo "Quíntuple ==> ".$quintuple;
                    echo "</br>";   
                    echo "Séxtuple ==> ".$sextuple;
                    echo "</br>";      
                    echo "Siesta ==> ".$siesta;
                    echo "</br>";
                    echo "<hr>";
                    echo "Mascota ==> ".$mascota;
                    echo "</br>";  
                    echo "Cochera Adicional ==> ".$cochera;
                    echo "<hr>";  
                }
            ?>
        </div>
    </body>
</html>