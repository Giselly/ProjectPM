<?php

/** Arquivo de configuração do sistema */
include_once('Classes/Config.inc.php');

/** @var array parametros passados via URL */
$url = Url::getParametros();

/** */
var_dump($url);

/** */
echo "Teste GIT";