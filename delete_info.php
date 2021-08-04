<?php
	date_default_timezone_set('Asia/Seoul');
	include "save_write_variables.php";

	$No=$_GET['No'];
	$URL='main.php';
	$con = mysqli_connect("localhost","root","2021","login") or die ("Can't access DB");
	$select = "select * from board where No='$No'";
	$result=mysqli_query($con,$select);

    //total은 열 개수
	if(mysqli_num_rows($result)==1)
	{
		$rows = mysqli_fetch_array($result);
	}

	//$_SESSION['author']=$rows['Name']

	session_start();
	echo $_GET['No'];
?>
	<script>
		let pwd=prompt('게시글의 비밀번호를 입력해 주세요.');	
		if(pwd=='<?php echo $rows['Pw']?>')
		{
		   <?php
			$query = "delete from board where No='$No'";
			$result=mysqli_query($con,$query);
		   ?>
			alert("<?php echo "삭제가 완료되었습니다."?>");
            location.replace("<?php echo $URL?>");
		}
		else
		{
			alert("비밀번호가 틀렸습니다.");
			location.replace("/main.php");
		}
		
	</script>	
