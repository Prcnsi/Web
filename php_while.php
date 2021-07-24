<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>php_while</title>
    </head>
    <body>
    <h1><a>WEB</a></h1>
    <h2> 
        <?php 
            $list=scandir('C:\Users\J-365\Desktop\bitnami\apache2\htdocs/');
            $i=0;
            while($i< count($list)){
                if($list[$i]!='.'){
                    if($list[$i]!='..'){
                        echo "<li><a href=\"number.php?id=$list[$i]\">$list[$i]</li>\n";
                    }
                }
                $i=$i+1;
            }
            echo "<br><br>";
            if(isset($_GET['id'])){
                echo file_get_contents("C:\Users\J-365\Desktop\bitnami\apache2\htdocs/".$_GET['id']);
            }
        ?>
    </h2>
    </body>
</html>