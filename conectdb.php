<?php
header('Content-type: text/html; charset=utf-8');
function obtenerResultado($qwery){
    $mysqli=new mysqli("localhost", "root", "", database: "web");
    if($mysqli->connect_errno){
        printf("No me puedo conectar");
    }
    if($mysqli->multi_query($qwery)){
        return $mysqli->store_result();
    }
    $mysqli->close();
}
?>