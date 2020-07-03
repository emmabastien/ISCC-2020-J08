<!DOCTYPE html> 

<html> 
<head> 
<title>mini-site-routing</title> 
</head> 


<body>

<form action = "index.php" method = "post">

<p>
    <input type="text" name="Nom et prénom"/>
    <input type="text" mail="E-mail"/>
    <input type="text" msg="Message"/>
    <input type="submit" value="Valider"/>
</p>
</form>


<?php
if (empty($_POST["name"]))
echo "Aucune donnée reçue";
    else
    echo ("<p>".$_POST['name']."</p>");

if (empty($_POST["mail"]))
echo "Aucune donnée reçue";
    else
        echo ("<p>".$_POST['mail']."</p>");

if (empty($_POST["msg"]))
echo "Aucune donnée reçue";
    else
    echo ("<p>".$_POST['msg']."</p>");

?>
</body>

</html>

