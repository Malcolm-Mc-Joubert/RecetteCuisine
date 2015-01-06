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
    </head>

    <body>
        <?php include_once("includes/header.php"); ?>


      <h2>Messages</h2>
    
    	<div class="wallPosts">
    		<?php include 'snippets/wallPosts.php'; ?>
    	</div>
        <div class="blog">
            <h2>Poster un message</h2>
            <form action="actions/blogAction.php" method="post" enctype="multipart/form-data" >
                 
                      <label for="pseudo">Pseudo:</label></td><td class="input">
                            <input class="textfield" type="text" name="pseudo" /><br/><br/>
                     
                <label for="message">Votre message :</label>
                <textarea name="message" class="message" rows="8" cols="50"></textarea><br/><br/>
                <input type="submit" name="submit" value="Envoyer !"/>
                <input type="reset" name="reset" value="Annuler" />
            </form>
        </div>

        <?php include_once("includes/footer.php"); ?>
    </body>
</html>


