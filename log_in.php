<!DOCTYPE html>
<html>
    <head>
        <title>isset함수: 값 확인</title>
        <style>
        </style>
    </head>
    <body>
        <fieldset>
          <form>
            <label>ID<input type="text"></label><br>
            <label>Password<input type="password"></label><br>
            <input type="submit">
            <input type="reset"><br>
          </form>
        </fieldset>
        <?php 
        if(isset($_GET['id']))
        {
            if($_GET['id']=="admin")
            {
                if($_GET['password']=="1234")
                {
                    echo "Log in Success";
                }
                else{
                    echo "Password is Wrong";
                }
            }
        }else{
            echo "Log in First";
        }
        ?>
    </body>
</html>