<?php
/**
 * OneLine - the most lightweight, simple and fast CMS in the world
 * 
 * @author EvgeniiShumeiko
 * @version 1.0
 */
$_GET["page"] ? file_exists("./page/".$_GET["page"]) ?  require './page/template.php' : require "./page/404.php" : require "./page/main.php"; 
