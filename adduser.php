<?php

include("./connectsql.php");
if ($_POST['new_account']&&$_POST['new_password']&&$_POST['new_phone']) {
		//echo $_POST['new_account'];

		$sql = "INSERT INTO AOCI_DB.user_table(account, password,phone) VALUES ('".$_POST['new_account']."', '".$_POST['new_password']."','".$_POST['new_phone']."');";

		 $pdo->exec($sql);

		 echo "1";
	}





?>