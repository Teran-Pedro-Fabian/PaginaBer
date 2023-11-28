<?php
class Viewbasic{
    
    function __construct()
    {
        
    }

    function home(){
        include_once "index.phtml";
    }

    function informacion(){
        include_once "templates/muestrainfo.phtml";
    }
}