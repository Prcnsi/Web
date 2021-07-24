
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>file_gets_contents</title>
    </head>
    <body>
    <h1><a>WEB</a></h1>
    <ol>
        <li><a href="number.php?id=HTML">HTML</li>
        <li><a href="number.php?id=CSS">CSS</li>
        <li><a href="number.php?id=JavaScript">JavaScript</li>
        <h2> 
            <?php 
            echo $_GET['id'];
            ?>
        </h2>
        <?php
            echo file_get_contents("C:\Users\J-365\Desktop\bitnami\apache2\htdocs/".$_GET['id']);
        ?>
    </body>
</html>