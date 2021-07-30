<?php
	//db시작
	session_start();
	$mysql->set_charset("utf8");
	$con=mysqli_connect("localhost","root","2021","login") or die("MySQL 접속 실패 !!");
	

 	$ret = mysqli_query($con, $sql);
 
    if($ret) {
		echo "userTBL이 데이터가 성공적으로 입력됨.";
    }
   	else {
		echo "userTBL 데이터 입력 실패!!!"."<br>";
		echo "실패 원인 :".mysqli_error($con);
   	}
 
   	mysqli_close($con);
	function access($sql)
	{
		global $mysql;
		return $mysql->query($sql)
	}

?>