<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
switch($action){
	case'modifierimmat':{
		include("vues/v_choixVisiteur.php");
		break;
	}
	case 'changerImmat':{
		$nom= $_POST['Nom'];
		$prenom=$_POST['Prenom'];			
		$idVisiteur=$pdo->verifExistanceVisiteur($nom,$prenom);			
		if(is_null($idVisiteur)){
			ajouterErreur("Le visiteur n'existe pas");
			include("vues/v_erreurs.php");
			include("vues/v_choixVisiteur.php");
			break;
		}
		else{
			include("vues/v_choixVisiteur.php");
			include("vues/v_changeImmat.php");
			$immat =$_POST['Immat'];
			$action ='changerImmat';
		}			
	}	
}
?>