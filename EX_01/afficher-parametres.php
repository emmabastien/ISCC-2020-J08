<!DOCTYPE html> 

<html> 
<head> 
<title>afficher parametres</title> 
</head> 
<body> 

<?php

function vendredi (){
    echo "<ul>";
    foreach ($_GET as $cle => $element){
        echo "<li>clé $cle";
        echo ", valeur : $element </li>";
    }
echo "</ul>";
}

vendredi ();

?>
</body>
</html>


