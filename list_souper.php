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
        include_once ("includes/header.php");
        ?>

        <h1>Liste des diners</h1>



       				<table class="sql_table">
		<tr><th>login</th><th>nom</th><th>commentaire</th><th>date</th><th>icon</th></tr>
		<?php
try{
			$souperSt = $bdd->prepare('SELECT * FROM souper');

		$souperSt->execute();
                //$din = $dinerSt->fetchAll();
//print_r($din);


}catch(Exception $e){
    die($e->getMessage());
}

		//while ($diner = $dinerSt->fetch()){
                while ($sou = $souperSt->fetchAll()){                    
                    
			
                    ?>
			<tr>
				<td><?php echo $sou['login']?></td>
				<td><?php echo $sou['nom']?></td>
				<td><?php echo $sou['commentaire']?></td>
                                <td><?php echo $sou['date']?></td>
                                <td><?php echo $sou['icon']?></td>
				<td>
					<img class="icon" src="<?php if($sou['icon'] != NULL && file_exists('uploads/'.$sou['icon'])) { echo 'uploads/'.$sou['icon'] ; } else { echo 'uploads/default.jpg' ;} ?>" />
				</td>
			</tr>
			<?php
                        $souperSt->nextRowset();
			}

			$souperSt->closeCursor();
        ?>
    </table>
        <?php
        include_once ("includes/footer.php");
        ?>

    </body>
</html>


