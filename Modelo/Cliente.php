<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Cliente{
    private $phone;
    private $nombre;
    private $pass;
    
    function __construct() {
        $this->setPhone(-1);
        $this->setName("");
        $this->setPass("");
    }
    
    function getPhone(){
        return $this->phone;
    }
    
    function getName(){
        return $this->nombre;
    }
    
    function getPass(){
        return $this->pass;
    }
    
    function setPhone($phone){
        $this->phone = $phone;
    }
    
    function setName($name){
        $this->name = $name;
    }
    
    function setPass($pass){
        $this->pass = $pass;
    }
}