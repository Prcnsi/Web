<?php
$id = $_POST['id'];
//global $id;
$pw = $_POST['pw'];
$pw=md5($pw);
$select = "select * from member_info where id='$id'";
$result=mysqli_query($con,$select);

echo $row['pw'];
//$row=mysqli_fetch_array($table);
if(mysqli_num_rows($result)==1) 
{

    $row=mysqli_fetch_assoc($result); 
    //echo "id 있음<br>";

    //비밀번호 일치 => main 페이지로 넘김.
    if($row['pw']==$pw)
    {
        session_start();
        $_SESSION['user_name']=$row['name'];
        
        echo "<script>
                alert('로그인 되었습니다.'); //로그인 되었습니다를 띄우고
                location.replace('./main.php'); //main.jsp로 돌아감
            </script>";
    }
    
    //비밀번호가 틀림.	=> 이전 화면으로.
    else {
        echo "<script>
                alert('비밀번호가 일치하지 않습니다.');
                history.back();
            </script>";
    }
}

//일치하는 아이디 없음. => 회원가입 화면으로 넘김.
else {
    echo "<script>
            alert('존재하지 않는 회원입니다. 회원가입 화면으로 넘어갑니다.');
            location.replace('./sign_up.php');
        </script>";
}
?>

