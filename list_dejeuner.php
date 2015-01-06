<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>joubert</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/form.css" />
        <link href="css/he.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css">
        <link href="css/blog.css" rel="stylesheet" type="text/css"/>
          <link rel="stylesheet" href="css/table.css">
    </head>

    <body>

      <?php
      try {
    $bdd = new PDO('mysql:host=localhost;dbname=joubert', 'joubert', 'php');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
	include_once ("includes/header.php");?>
        
        <h1>Liste des dejeuners</h1>


        <?php


		//$login = getLogin();
			?>
				<table class="sql_table">
		<tr><th>login</th><th>nom</th><th>commentaire</th><th>date</th><th>icon</th></tr>
		<?php

               
	
    $dejeunerSt = $bdd->prepare('SELECT * FROM dejeuner');

		$dejeunerSt->execute();
                $dej = $dejeunerSt->fetchAll();
//print_r($dej);


		while ($dejeuner = $dejeunerSt->fetch()){
			
                    ?>
			<tr>
				<td><?php echo $dejeuner['login']?></td>
				<td><?php echo $dejeuner['nom']?></td>
				<td><?php echo $dejeuner['commentaire']?></td>
                                <td><?php echo $dejeuner['date']?></td>
                                <td><?php echo $dejeuner['icon']?></td>
				
			</tr>
			<?php
                        $dejeunerSt->nextRowset();
			}

			$dejeunerSt->closeCursor();
        ?>
    </table>

    <?php include_once ("includes/footer.php");?>
    
    </body>
</html>


