<?php
   $db = new PDO("mysql:host=localhost;dbname=contact_db","root","");
   $contactlar = $db->query("SELECT*FROM contact")->fetchAll(PDO::FETCH_ASSOC);
   ?>
 
 <html>
 <head>
 	<title>Contact ro'yhati</title>
 </head>
 <body>
 	<h1>Contact ro'yhati</h1>
 	<a href="add.php">Yangi contact qo'shish</a>
 	<table border="2px;" width="40%;" cellspacing="0";>
 		<tr>
 			<th>ID</th>
 			<th>FIO</th>
 			<th>Phone</th>
 			<th>Amallar</th>
 		</tr>
 		<?php foreach ($contactlar as $contact): ?>
 			<tr>
 				<td><?=$contact["id"];?></td>
 				<td><?=$contact["full_name"];?></td>
 				<td><?=$contact["phone"];?></td>
 				<td>
 					<a href="update.php?id=<?=$contact["id"];?>"><img src="2.jpg" width="70"></a>
 					<a href="delete.php?id=<?=$contact["id"];?>"><img src="1.png" width="70"></a>
 				</td>
 			</tr>
 		<?php endforeach;?>


 	</table>
 
 </body>
 </html>  



