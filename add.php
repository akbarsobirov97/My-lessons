<?php
   $db = new PDO("mysql:host=localhost;dbname=contact_db","root","");
   
   if($_POST){

   	 $res =  $db->prepare("INSERT INTO contact(full_name,phone ) VALUES(?,?)")->execute(array($_POST["full_name"],$_POST["phone"]));
   	 if($res){
   	 	 header("Location:index.php");
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
	<h1>Cantact qo'shish</h1>
	<form method="post">
		<table border="2px;" width="20%;" collapse>
			<tr>
				<td>FIO</td>
				<td><input type="text" name="full_name" placeholder="FIO"></td>
			</tr>
			<tr>
				<td>Phone number</td>
				<td><input type="text" name="phone" placeholder="phone number"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Saqlash">
				</td>
			<tr>

		</table>
	</form>

</body>
</html>