<?php
	
	session_start();?>

<?php
	$id = $_POST['account'];
	$pw = $_POST['password'];
	// $checkbox = $_POST['interest'];
	$radio = $_POST['sex'];
	// include("./connectsql.php");
	// $sql = "SELECT * FROM AOCI_DB.user_table where account ='".$id."'";
	

	// // echo $sql;
	
	// $db_result = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
	
	// print_r($db_result);


	echo "<h1>後端接收資料</h1>";
	echo "輸入內容：";
	echo "<br>";
	echo "帳號：".$id;
	echo "<br>";
	echo "密碼：".$pw;
	echo "<br>";
	echo "性別：".$radio;
	


	//echo $rows;
	// echo '<br>';
	// echo "id=".$id;
	// echo '<br>'; 
	// 	echo "pw=";
	//  echo $pw;
	// echo '<br>'; 

	// echo $_SESSION['account'];


	// $status = array();
	// $status['code'] = 0;


	// if($db_result == null)
	// {
	//         //echo "<script>alert('您尚未註冊。')</script>";     
	//         // header("Location: indexx.html");  
	// 		$status['text'] = '帳號不存在，您尚未註冊。';

	// } 



	// else if($pw == $db_result['0']['password'])
	// {
	//         //將帳號寫入session，方便驗證使用者身份
	//         $_SESSION['account'] = $id;
	// 		$_SESSION['password'] = $pw;

			
	//         // echo "<script>alert('歡迎".$id."使用系統!')</script>";
	//         // echo '<meta http-equiv=REFRESH CONTENT=1;url=userpage.php>';
	//         // header("Location: index.php");
	      
	// 	   	$status['text'] = "'歡迎".$id."使用系統!'";
	// 	   	$status['code'] = 1;
		   
		
	// }
	// else if($id == null && $pw == null)
	// {
	// 	//echo "<script>alert('請輸入帳號、密碼。')</script>";
	// 	// header("Location: indexx.html");

	// 		$status['text'] = '請輸入帳號、密碼。';
	// }

	// else if($pw !=$db_result['0']['password'] ){

	// 	//echo "<script>alert('密碼輸入錯誤。')</script>";
	// 	// header("Location: indexx.html");
	// 	$status['text'] = '密碼輸入錯誤。';
	// }

	
	// echo json_encode($status);  
	
 

	
?>

