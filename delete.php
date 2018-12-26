<?php
   $db = new PDO("mysql:host=localhost;dbname=contact_db","root","");
   if(!isset($_GET["id"])) die("Parametr berilmadi");
   $id = intval($_GET["id"]);
   $res = $db->exec("DELETE FROM contact WHERE id=$id");
   if($res !== false){
   	header("Location:index.php");
   }
   else{
   	var_export($db->errorInfo());
   }




   
   	
?>

<html>
<head>
	<title>Cantact qo'shish</title>
</head>
<body>	
	<h1>Cantact qo'shish</h1>
	<form method="post">
		<table border="2px;" width="20%;" collapse>
			<tr>
				<td>FIO</td>
				<td><input type="text" name="full_name" placeholder="FIO" value="<?=$contact["full_name"]?>"></td>
			</tr>
			<tr>
				<td>Phone number</td>
				<td><input type="text" name="phone" placeholder="phone number" value="<?=$contact["phone"]?>"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Saqlash">
				</td>
			<tr>

		</table> 
	</form>

</body>
</html>


    



                                                                                  