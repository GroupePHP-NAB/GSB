<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
switch($action){
	case'modifierimmat':{
		include("vues/v_choixVisiteur.php");
		break;
	}
	case 'changerImmat':{
		$_SESSION['CNom']= $_POST['Nom'];
		$_SESSION['CPrenom']=$_POST['Prenom'];
		$idVisiteur=$pdo->verifExistanceVisiteur($_SESSION['CNom'],$_SESSION['CPrenom']);			
		if(is_null($idVisiteur)){
			ajouterErreur("Le visiteur n'existe pas");
			include("vues/v_erreurs.php");
			include("vues/v_choixVisiteur.php");
			break;
		}
		else{

			$tabImmat= $pdo->recupererImmat($idVisiteur);
			include("vues/v_choixVisiteur.php");
			include("vues/v_changeImmat.php");						
		}
		break;
	}
	case 'nouvelleImmat':{
		$nom= $_SESSION['CNom'];
		$prenom=$_SESSION['CPrenom'];
		$idVisiteur=$pdo->verifExistanceVisiteur($_SESSION['CNom'],$_SESSION['CPrenom']);
		if(is_null($idVisiteur)){
			echo "L'id n'es pas trouvé";
		}
		$immat=$_POST['Immat'];
		$pdo->majImmat($idVisiteur,$immat);
		header("Refresh:3;URL='index.php?uc=modifierImmat&action=modifierimmat'");

	}					
}
?>