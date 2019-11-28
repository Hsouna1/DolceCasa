<?PHP
include "../entities/client.php" ;
include "../core/ClientC.php" ;
	if (isset($_GET['Email']) and isset ($_Get['Password']) and isset ($_GET['FirstName']) and isset($_GET['LastName']))
{
	$Client=new Client($_GET['Email'],$_GET['Password'],$_GET['FirstName'],$_GET['LastName']);
$ClientC=new ClientC();
$ClientC->ajouterclient($Client);


//$ClientC->AfficherClient($Client);
}
else
	{
		echo "vérifier les champs";	
	}


?>