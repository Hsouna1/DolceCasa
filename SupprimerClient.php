<?PHP
include "../Core/ClientC.php";
$ClientC=new ClientC();
if (isset($_POST["id"])){
	$ClientC->supprimerClient($_POST["id"]);
	header('Location: AfficherClient.php');
}

?>