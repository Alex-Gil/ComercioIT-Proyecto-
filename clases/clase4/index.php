<?php

$paramsPag = 'pag';

switch($_GET[$paramsPag]){
    case 'home':
        require_once 'cabecera.php';
        require_once 'home.php';
        require_once 'pie.pag';
    break;
}