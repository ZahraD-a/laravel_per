<!DOCTYPE html>
<html>
<head>
	<title>chcode_appli</title>
	<meta charset="utf8">
	<link rel="stylesheet" type="text/css" href="csfile.css">
</head>

<body>
	<div align="center">
			<h2>Enregistrement des Clients :</h2>
<form action="{{ url('form/store') }}" method="post">
  <table align="">
    @csrf
     <tr ><td></td><td> </td></tr>
    <tr><td></td><td><strong >Nom: </strong></td></tr>
   <tr><td></td><td>
       <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
           <input type="text" name="nom" size="25"  >
    </div></td></tr>
   <tr><td></td><td><strong>Prenom  :</strong></td></tr>
   <tr><td></td><td><input type="text" name="prenom" class="champ" size="25"></td></tr>
   <tr><td></td><td><strong>email :</strong></td></tr>
   <tr><td></td><td><input type="text" name="email" class="champ"size="25"></td></tr>
   <tr><td></td><td><strong>Tel :</strong></td></tr>
   <tr><td></td><td><input type="text" name="tel" id="tell">

   <tr><td></td><td><strong>p-j:</strong></td></tr>
   <tr><td></td><td><input type="text" name="pj" class="champ"size="25"></td></tr>
      <tr><td></td><td><input href="{{ url('form/new') }}" type="submit" class="btn btn-sm btn-info"
        value="Save"   ></td></tr>
      <tr><td></td><td><input type="submit" name="bouttel" value="telecharger" class="bouton" onclick="window.print();" ></td></tr>
  </table>
   </form>
  <h2>Liste de tous les Clients :</h2>
  <table   style="width:50%" id='myTable'>
                <thead>
                    <tr>

                        <th>id</th>
                        <th> nom</th>
                        <th>prenom</th>
                        <th> email</th>
                        <th> tel</th>
                        <th> pj</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($personne as $per)

                        <tr>
                            <td>{{ $per->id }}</td>
                            <td>{{ $per->nom }}</td>
                            <td>{{ $per->prenom }}</td>
                            <td>{{ $per->email }}</td>
                            <td>{{ $per->tel }}</td>
                            <td>{{ $per->pj }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
	</div>

</body>

</html>
