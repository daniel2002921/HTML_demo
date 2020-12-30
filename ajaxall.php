<?php
	
	session_start();?>

<?php
	

	include("./connectsql.php");
	// echo $_POST['check'];
	// if ($_POST['new_account']&&$_POST['new_password']&&$_POST['new_phone']) {
	// 	//echo $_POST['new_account'];

	// 	$sql = "INSERT INTO AOCI_DB.user_table(account, password,phone) VALUES ('".$_POST['new_account']."', '".$_POST['new_password']."','".$_POST['new_phone']."');";

	// 	 $pdo->exec($sql);

	// 	 echo "1";

	// 	// echo($sql);
	// 	// $inserert_2 = $pdo->prepare($sql);
 //  //      	$inserert_2->execute();
	// }


	// else if{
		$sql = "SELECT * FROM AOCI_DB.user_table ";
		

		
		
		$db_result = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

		echo json_encode($db_result);

	// }
	
	
	
 

	
?>

