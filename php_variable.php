<!DOCTYPE html>
<html>
    <head>
        <title>예제 페이지</title>
    </head>
    <body>
        <?php 
        $jiseon=21;
        $minsu=23;
        if($jiseon!=$minsu)
        {
            if($jiseon>$minsu)
            {
                echo "Jiseon is older than minsu";
            }
            else{
                echo "Minsu is older than jiseon";
            }
        }
        else
        {
            echo "Minsu and Jiseon is same age";
        }
        ?>
    </body>
</html>