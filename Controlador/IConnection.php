<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IConnection
 *
 * @author Nicolás
 */
interface IConnection { //para el CRUD (Create, Read, Update, Delete)
    function insertar($obj);
    function actualizar($id, $obj); //busc el objeto del id, y le pone los datos del obj
    function eliminar($id);
    function consultar($id);
    function consultarTodos();
}
