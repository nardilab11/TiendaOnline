<?php
session_start();
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tienda Online</title>
    </head>
    <body>
        <h1>Mi sitio web E-Commerce</h1>
        <?php
        include_once 'Controlador/CCliente.php';
        include_once 'Modelo/Cliente.php';
        
        $ccliente = new CCliente();
        
        $cliente = new Cliente();
        $cliente->setPhone(9210349);
        $cliente->setName("CualquierNombre");
        $cliente->setPass("holamundo");
        
        $ccliente->insertar($cliente);
        ?>
    </body>
</html>
