<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'Connection.php';
include_once 'Modelo/Cliente.php';

class CCliente extends Connection{
    
    function __construct() {
        parent::__construct();
    }

    public function actualizar($id, $cliente) {
        
    }

    public function consultar($id) {
        
    }

    public function consultarTodos() {
        
    }

    public function eliminar($id) {
        
    }

    public function insertar($cliente) {
        //Preparar query
        $smt = $this->con->prepare("INSERT INTO Cliente(phone, nombre, pass) VALUES(?, ?, ?);"); //Un signo de interrog. por cada argumento
        //el prepare ya valida si existe o no, no crea uno con id ya existente
        //Varibles asignadas
        $phone = $cliente->getPhone();
        $nombre = $cliente->getName();
        $pass = sha1($cliente->getPass());
        
        //linkeo o bind a los parametros usando las variables
        $smt->bind_param("iss", $phone, $nombre, $pass); //i(nt)s(tring)s(tring)
        $smt->execute(); //2. Ejecutar
        $smt->close();
        
        
    }

}