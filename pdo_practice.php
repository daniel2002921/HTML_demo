<?php



		
	$dbms='mysql';     //資料庫類型
	$host='localhost'; //資料庫主機名稱(ip位址)
	$dbName='test';    //使用的資料庫名稱
	$user='root';      //登入帳戶名
	$pass='';          //登入密碼
	$dsn="$dbms:host=$host;dbname=$dbName";


	try {  
	    $dbh = new PDO($dsn, $user, $pass); //初始化
	    echo "連線成功<br/>";
	   
	    
	    
	} catch (PDOException $e) {
	    die ("Error!: " . $e->getMessage() . "<br/>");
	}


	$sql = "SELECT * from AOCI_DB.user_table";


	 $row = $dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);

	// $row = $dbh->query($sql)->fetchall();

	 echo "<pre>";
	 print_r($row);
	 echo "</pre>";

?>
	 





