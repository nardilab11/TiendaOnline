<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Connection
 *
 * @author Nicolás
 */
include_once 'IConnection.php';

abstract class Connection implements IConnection{
    protected $con;
    
    function __construct() {
        $this->con = new mysqli("localhost", "root", "SStt2020", "tienda_db"); //modo prueba, en vida real poner pass
    }
}
