<!DOCTYPE html> 

<html> 
<head> 
<title>index</title> 
</head> 
<body> 

<?php
include 'header.php';
include 'footer.php';

?>

<nav>
    <ul>
        <li><a href="index.php?page=accueil">Accueil</a></li>
        <li><a href="index.php?page=programme">Programme</a></li>
        <li><a href="index.php?page=contacts">Contacts</a></li>
        <li><a href="index.php?page=contact-form">Contact-form</a></li>
    </ul>
</nav> 

<?php
function routing (){
if ($_GET ['page'] == "accueil" ){
   
    echo include 'vitrine-accueil.php';
}


else if ($_GET ['page'] == "programme" ){

    echo include 'vitrine-programme.php';
}

else if ($_GET ['page'] == "contacts" ){
   
    echo include 'vitrine-contacts.php';
}

else if ($_GET ['page'] == "contact-form" ){
   
    echo include 'contact-form.php';
}


else  {
    include '404.php';
}

}
routing ();

?>

</body>
</html>
