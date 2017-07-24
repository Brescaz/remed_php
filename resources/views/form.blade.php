@extends('welcome')
@section('form')
	
	<form action="post" method="cible.php">
  		Age: <input type="text" name="age"><br>
  		Nom: <input type="text" name="nom"><br>
  		Prenom: <input type="text" name="prenom"><br>
  		Mail: <input type="text" name="mail"><br>
  		<input type="submit" value="Submit">
	</form>
	
@stop