<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style>
        </style>
    </head>
    <body>

        <?php 
        /*
        터미널로 DB제어는 그냥 mysql -u root -p d인데 에디터에서 DB제어는 
        mysqli API로 함
        */
        $conn=mysqli_connect("localhost","root",111111);
        mysqli_select_db("$conn","music");
        $result=mysqli_query($conn,"SELECT*FROM topic");
        $row=mysqli_fetch_assoc($result);
        echo $row['id'];
        echo $row['title'];
        
        echo "<br>";

        $row=mysqli_fetch_assoc($result);
        echo $row['id'];
        echo $row['title'];
        ?>
    </body>
</html>