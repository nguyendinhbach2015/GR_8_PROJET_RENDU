<?php
session_start();
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/web.css">
    <script type="text/javascript" src="script.js" async></script>

    <div class="topnav">
        <b></b>
        <a class="logo"></a>
        <c>Groupe 8</c>
        <b></b>
        <a href="home_admin.php">Home</a>
        <a href="recherche_admin.php">Recherche</a>
        <a href="creation_admin.php">Creation</a>
        <a href="visualisation_admin.php">Visualisation</a>
        <a href="suppression_admin.php" class="active">Suppression</a>
        <a href="miseajour_admin.php">Mise a jour</a>
        <a href="gestion_admin.php">Gestion</a>
        <b></b>
        <c>Welcome <?php echo $_SESSION['login'] ?></c>
        <a href="register.html">Deconnexion</a>
    </div>

</head>

<body style="background: url(../pic/background.jpg); background-size:cover">

<div style="padding-left:40%" style="padding-right:20%">
    <br><br><br><br><br><br><br>
    <h2>Suppression de Livre</h2>
    <form action="../php/effacerlivre.php" method="post">
        <table>
            <tr>
                <td>Titre:</td>
                <td><input type="text" name="titre"></td>
            </tr>
            <tr>
                <td>Auteur:</td>
                <td><input type="text" name="auteur"></td>
            </tr>
            <tr>
                <td>Année:</td>
                <td><input type="text" name="annee"></td>
            </tr>
            <tr>
                <td>Editeur:</td>
                <td><input type="text" name="editeur"></td>
            </tr>
            <tr></tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="button3" value="Effacer">
                </td>
            </tr>
        </table>
    </form>
    </div>
  

</body>

</html>