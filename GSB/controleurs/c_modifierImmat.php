<?php
include("vues/v_sommaire.php");
include("vues/v_modifier.php");
$action = $_REQUEST['action'];
switch($action){
		case 'validerChangementImmat':{
			$nom= $_POST['Nom'];
			$prenom=$_POST['Prenom'];
			$immat=$_POST['Immatriculation'];			
			$idVisiteur=$pdo->verifExistanceVisiteur($nom,$prenom);			
			if(is_null($idVisiteur)){
				ajouterErreur("Le visiteur n'existe pas");
				include("vues/v_erreurs.php");
			}
			else{
				$pdo->majImmat($idVisiteur,$immat);
			}
		}
}
?>