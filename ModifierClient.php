<HTML>
<head>
</head>
<body>
<?PHP
include "../Entites/Client.php";
include "../Core/ClientC.php";
if (isset($_GET['Email'])){
	$ClientC=new ClientC();
    $result=$ClientC->recupererClient($_GET['Email']);
	foreach($result as $row){
		$Id=$row['Email'];
		$Password=$row['Password'];
		$FirstName=$row['FirstName'];
		$LastName=$row['LastName'];
		
?>
<form method="POST">
<table>
<caption>Modifier Client</caption>
<tr>
<td>Email</td>
<td><input type="text" name="Email" value="<?PHP echo $Email ?>"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="text" name="Password" value="<?PHP echo $Password ?>"></td>
</tr>
<tr>
<td>FirstName</td>
<td><input type="text" name="FirstName" value="<?PHP echo $FirstName ?>"></td>
</tr>

<tr>
<td>LastName</td>
<td><input type="text" name="LastName" value="<?PHP echo $LastName ?>"></td>
</tr>



<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="Email" value="<?PHP echo $_GET['Email'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$Client=new Client($_POST['Email'],$_POST['Password'],$_POST['FirstName'],$_POST['LastName']);
	$ClientC->modifierClient($Client,$_POST['Email']);
	echo $_POST['Email'];
	header('Location: AfficherClient.php');
}
?>
</body>
</HTMl>