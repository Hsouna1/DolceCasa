<?PHP
include "../Core/ClientC.php";
$Client1C=new ClientC();
$listeClients=$Client1C->AfficherClient() ;
?>
<table border="1">
<tr>
<th>Votre Email</th>
<th>Votre Password</th>
<th>Votre FirstName</th>
<th>Votre LastName</th>
<th>Supprimer</th>
<th>Modifier</th>
</tr>

<?PHP
foreach($listeClients as $row)
{
	?>
	<tr>
	<td><?PHP echo $row['Email']; ?></td>
	<td><?PHP echo $row['Password']; ?></td>
	<td><?PHP echo $row['FirstName']; ?></td>
	<td><?PHP echo $row['LastName']; ?></td>

	<td><form method="POST" action="supprimerClient.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['Email']; ?>" name="Email">
	</form>
	</td>
	<td><a href="modifierClient.php?Email=<?PHP echo $row['Email']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


