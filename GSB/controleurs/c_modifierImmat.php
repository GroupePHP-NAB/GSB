<?php
include("vues/v_sommaire.php");
include("vues/v_modifier.php");
$action = $_REQUEST['action'];
switch($action){
		case 'valideChangementId':{
			$nom= $_POST['Nom'];
			$prenom=$_POST['Prenom'];
			$immat=$_POST['Immatriculation']
			VerifExistanceVisiteur($nom,$prenom);
			majImmat($idVisiteur,$immat);
		}
}
?>