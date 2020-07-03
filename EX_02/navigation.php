<html> 
<head> 
<title>navigation</title> 
</head> 
<body> 


<ul id="navigation">

<li>
 <?php if ($_GET ['page']== 'accueil'): ?>
 <strong><a href="vitrine-accueil.php" style="color: #17c1ff">Accueil</a></strong>
 <?php else: ?>
 <a href="vitrine-accueil.php">Accueil</a>
 <?php endif; ?>
 </li>
 

 <li>
 <?php if ($_GET ['page'] == 'programme'): ?>
 <strong><a href="vitrine-programme.php" style="color: #17c1ff">Programme</a></strong>
 <?php else: ?>
 <a href="vitrine-programme.php">Programme</a>
 <?php endif; ?>
 </li>
 

 <li>
 <?php if ($_GET ['page'] == 'contacts'): ?>
 <strong><a href="vitrine-contacts.php" style="color: #17c1ff">Contacts</a></strong>
 <?php else: ?>
 <a href="vitrine-contacts.php">Contacts</a>
 <?php endif; ?>
 </li>
 

</ul>


</body> 
</html>