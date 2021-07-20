<!DOCTYPE html>
<html>
    <head>
        <title>for문</title>
    </head>
    <body>
        <?php 
        $arr=Array('apple','mango','apple','banana','orange','lemon');
        for($i=0,$length=sizeof($arr);$i<$length;$i++)
        {
            echo $arr[$i];
            echo "<br>";
        }
        ?>
    </body>
</html>