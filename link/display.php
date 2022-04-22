<?php
include 'framework/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste</title>
    <link rel="stylesheet" href="framework/css/bootstrap.css">
    <script src="framework/js/bootstrap.js" defer></script>
    <script src="framework/jquery.js"defer></script>
</head>
<body>
    <div class="container-fluid">
        <button class="btn btn-primary my-5"><a href="ajouter.php" class="text-light">ajouter</a></button>
        <table class="table">
  <thead class="table-dark">
  <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Etablissement</th>
      <th scope="col">Niveau</th>
      <th scope="col">Sexe</th>
      <th scope="col">Adresse</th>
      <th scope="col">Contact</th>
      <th scope="col">Date</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $sql = " SELECT * FROM `liste` ORDER BY ID DESC";
        $result = mysqli_query($conne,$sql);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $nom = $row['nom'];
                $prenom = $row['prenom'];
                $etab = $row['etablissement'];
                $niveau = $row['niveau'];
                $adresse = $row['adresse'];
                $contact = $row['contact'];
                $date = date('d/m/y  h:i:s');
                $sexe=$row['sexe'];
                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$nom.'</td>
                <td>'.$prenom.'</td>
                <td>'.$etab.'</td>
                <td>'.$niveau.'</td>
                <td>'.$sexe.'</td>
                <td>'.$adresse.'</td>
                <td>'.$contact.'</td>
                <td>'.$date.'</td>
                <td>
                    <button class="btn btn-info"><a href="update.php?updateid='.$id.'"class="text-light">à jour</a></button>
                    <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'"class="text-light">Suppr</a></button>
                </td>
              </tr>';
            }
        }
    ?>
    
  </tbody>
</table>

    </div>
</body>
</html>