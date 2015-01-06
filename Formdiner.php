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

    </head>

    <body>
        <?php include_once("includes/header.php"); ?>


        <div class="dejeuner">
            <form method="post" class="createForm" action="actions/createOrUpdate_Bdc.php">

                
                <h1>Information sur le recette de DINER:</h1>
               
                <table>

                    <tr>
                        <td class="label"><label for="client_login">Nom de la recette:</label></td><td class="input">
                            <input class="textfield" type="text" name="client_login" />
                        </td>
                    </tr>
                    
                     <tr>
                        <td class="label"><label for="pseudo">Pseudo:</label></td><td class="input">
                            <input class="textfield" type="text" name="pseudo" />
                        </td>
                    </tr>

                    <tr>
                        <td class="label"><label for="commentaire">Commentaire</label></td>
                        <td class="input"><textarea name="commentaire"></textarea></td>
                    </tr>
                    <script>
                        $(function () {
                            $("#datepicker").datepicker();
                        });
                    </script>
                    <tr>
                        <td class="label"><label for="montant">Date:</label></td>
                        <td class="input">
                            <input class="textfield"type="text" id="datepicker">
                        </td>
                    </tr>

                    <tr>
                        <td class="label"><label for="delais">Charger une image</label></td>
                        <td class="input">
                            <input class="textfield" type="file" name="Parcourir" value="" width="40" />
                        </td>
                    </tr>       
                </table>


                <p>
                    <input type="submit" value="Envoyer" />
                    <input type="reset" value="Annuler"/>
                </p>
            </form>
        </div>

        <?php include_once("includes/footer.php"); ?>
    </body>
</html>


