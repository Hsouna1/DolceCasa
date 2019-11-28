<?PHP
include "../entities/client.php";
include "../config.php";
class clientC {
function afficherClient ($client){
		echo "Email: ".$client->getEmail()."<br>";
		echo "Password: ".$client->getPassword()."<br>";
		echo "FirstName: ".$client->getFirstName()."<br>";
		echo "LastName: ".$client->getLastName()."<br>";
	}
	function ajouterclient($client){
		$sql="insert into client (Email,Password,FirstName,LastName) values (:Email,:Password, :FirstName,:LastName,)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Email=$client->getEmail();
        $Password=$client->getPassword();
        $FirstName=$client->getFirstName();
        $LastName=$client->getLastName();
        $req->bindValue(':Email',$Email);
		$req->bindValue(':Password',$Password);
		$req->bindValue(':FirstName',$FirstName);
		$req->bindValue(':LastName',$LastName);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherclients(){
		//$sql="SElECT * From client e inner join formationphp.client a on e.Email= a.Email";
		$sql="SElECT * From client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerclient($Email){
		$sql="DELETE FROM client where Email= :Email";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Email',$Email);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierclient($client,$Email){
		$sql="UPDATE client SET Email=:Email, Password=:FirstName,LastName=:LastName";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$Email=$client->getEmail();
        $Password=$client->getPassword();
        $FirstName=$client->getFirstName();
        $LastName=$client->getLastName();
		$datas = array(':Email'=>$Email, ':Password'=>$Password, ':FirstName'=>$FirstName,':LastName'=>$LastName);
		$req->bindValue(':Email',$Email);
		$req->bindValue(':Email',$Email);
		$req->bindValue(':FirstName',$FirstName);
		$req->bindValue(':LastName',$LastName);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererclient($Email){
		$sql="SELECT * from client where Email=$Email";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeclients($tarif){
		$sql="SELECT * from client where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>