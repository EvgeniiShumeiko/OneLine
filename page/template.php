<?php include "./page/".$_GET["page"] ?> 
<!DOCTYPE html> 
<html>
    <head>
	<meta charset=utf8>
        <title><?php $title = $title ? $title : 'OneLine'; echo $title; ?> </title>
    </head>
    <body>
        <?php $content = $content ? $content : 'Please create Content'; echo $content; ?>
    </body>
</html>