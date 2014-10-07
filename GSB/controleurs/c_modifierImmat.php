<?php
include("vues/v_sommaire.php");
include("vues/v_modifier.php");
$action = $_REQUEST['action'];
switch($action){
		case 'validerChangementImmat':{
			$nom= $_POST['Nom'];
			echo $nom;
			$prenom=$_POST['Prenom'];
			echo $prenom;
			$immat=$_POST['Immatriculation'];
			echo $immat;
			$idVisiteur=$pdo->verifExistanceVisiteur($nom,$prenom);
			echo $idVisiteur;
			if(isset($idVisiteur)){
				include("vues/v_erreurs.php");
			}
			else{
				$pdo->majImmat($idVisiteur,$immat);
			}
		}
}
?>