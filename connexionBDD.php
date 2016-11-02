<?php
try
{	
	/* 	BDD_Sylvain : " $bdd = new PDO('mysql:host=localhost;dbname=sylvain;charset=utf8', 'root', '');"
		BDD_Eric et Amine : 
	*/
	$bdd = new PDO('mysql:host=localhost;dbname=sylvain;charset=utf8', 'root', '');
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
?>
