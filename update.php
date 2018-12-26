<?php
   $db = new PDO("mysql:host=localhost;dbname=contact_db","root","");
   $id = intval($_GET["id"]);  
	$contact = $db->query("SELECT * FROM contact WHERE id=$id")->fetch(PDO::FETCH_ASSOC);
	if($_POST){
		$name = $_POST['full_name'];
		$phone = $_POST['phone'];
		$res = $db->prepare("UPDATE contact SET full_name=:name, phone=:phone WHERE id=:id");
		$res->bindParam(':name', $name);
		$res->bindParam(':phone', $phone);
		$res->bindParam(':id', $id);
		$res->execute();
	if($res !== false){
		header("Location: index.php");
	}
	else{
		var_export($db->errorInfo());
	}
}
	$contactlar = $db->query("SELECT * FROM contact")->fetchAll(PDO::FETCH_ASSOC);

   
   	
?>

<html>
<head>
	<title>Cantact qo'shish</title>
</head>
<body>	
	<h1>Cantact o'zgartirish</h1>
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