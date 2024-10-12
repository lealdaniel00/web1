<?php
    include('conectdb.php');
    if($result=obtenerResultado("SELECT * FROM `animal`")){
        while($fila=$result->fetch_array(MYSQLI_NUM)){
            echo json_encode($fila);
        }




        
    }
?>
