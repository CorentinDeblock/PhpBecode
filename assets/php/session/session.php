<?php 
session_start();

echo "Prenom : ".$_SESSION['nom']." ".$_SESSION['prenom']."<br>"."Age : ".$_SESSION['age'];
?> 