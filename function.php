<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>simple_function</title>
    </head>
    <body>
    <h1><a>WEB</a></h1>
    <h2> 
        <?php 
            function sum($first,$second){
                return $first+$second;
            }
            echo sum(2,4);
            function Year_of_birth($Year){
                $age=2022-$Year;
                return $age;
            }
            //echo Year_of_birth(2001);
            ?>
            <br>
            2001년에 태어난 사람의 나이는 <?php echo Year_of_birth(2001);?>
    </h2>
    </body>
</html>