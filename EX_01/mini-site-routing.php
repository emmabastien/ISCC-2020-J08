<!DOCTYPE html> 

<html> 
<head> 
<title>mini-site-routing</title> 
</head> 


<nav>
    <ul>
        <li><a href="mini-site-routing.php?page=1">Acceuil</a></li>
        <li><a href="mini-site-routing.php?page=2">Page 2</a></li>
        <li><a href="mini-site-routing.php?page=3">Page 3</a></li>
    </ul>
</nav> 

<?php

function routing (){
if ($_GET ['page'] == 1 ){
    echo "<h1> Acceuil</h1>";}

if ($_GET ['page'] == 2 ){
    echo "<h1> Page 2</h1>";}

if ($_GET ['page'] == 3 ){
    echo "<h1> Page 3</h1>";}

}
routing ();

?>

</body>
</html>