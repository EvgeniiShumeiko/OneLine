<?php $_GET["page"] ? file_exists("./page/".$_GET["page"]) ?  require './page/template.php' : require "./page/404.php" : require "./page/main.php"; 
