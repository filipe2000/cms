<?php
/* 05/09/18	18h
 parei na aula 4 de CMS
 gerava erro ao abrir view home, informando que não tem variável 'depoimentos',
 o homeController chama o home pelo loadTemplate, que pode não estar certo da forma da aula, mesmo que deu certo na exibição do video, quero saber qual o relacionamento das classes
 e de onde pode ser chamado o view home.
*/
session_start();
require 'config.php';

spl_autoload_register(function ($class){
    if(file_exists('controllers/'.$class.'.php')) {
            require_once 'controllers/'.$class.'.php';
    } elseif(file_exists('models/'.$class.'.php')) {
            require_once 'models/'.$class.'.php';
    } elseif(file_exists('core/'.$class.'.php')) {
            require_once 'core/'.$class.'.php';
    }
});

$core = new Core();
$core->run();
?>