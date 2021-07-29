<?php
$ID=$_POST['ID'];
	$PW=$_POST['PW'];
	$Name=$_POST['Name'];
	$email=$_POST['email'];
	$date=date("YmdHis",time());
	$connect=mysqli_connect("localhost","root","2021","login");

	//db접속 확인
	if(!$connect)
	{
		die("데이터베이스 접속에 실패했습니다.".mysql_error());
	} 
	
	//입력 받은 정보 저장
	mysql_select_db("login",$connect);
	mysqli_set_charset($connect,"utf-8");
	$query="
		INSERT INTO member_info (
		ID,
		PW,
		Name,
		email,
		date
	) VALUES (
		'$ID',
		'$PW',
		'$Name',
		'$email',
		'$date'
	)";

	$result=mysqli_query($connect,$query);
	if($result === false)	
	{
 		echo '<script>alert("오류가 발생하였습니다.<br>관리자에게 문의해 주세요.");</script>';
  		error_log(mysqli_error($connect));
	} else {
 		echo '회원가입이 완료되었습니다.<br><a href="index.php">로그인 화면으로</a>';
	}
	mysqli_close;
?>	
