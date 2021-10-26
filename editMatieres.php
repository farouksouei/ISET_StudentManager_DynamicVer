<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modifier Les Notes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<header>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#FFDF00">
    <div class="container-fluid">
      <a class="navbar-brand">Modifications des Notes</a>
     </div>
  </nav>
</header>
<body>
<?php require_once 'process.php';?>
<?php
$mysqli = new mysqli('localhost','root','','isetstudentmanager') or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM noteMatieres") or die($mysqli->error)
?>

<div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom">Les informations de tout les etudiants</h2>
    <table class="table table-hover list" id="studentList">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">id Etudiant</th>
          <th scope="col">id matiere</th>
          <th scope="col">note matiere</th>
        </tr>
      </thead>
      <?php
        while ($row = $result->fetch_assoc()):
      ?>
        <tr>
        <td><?php echo $row['id'] ?></td>
          <td><?php echo $row['idMatiere'] ?></td>
          <td><?php echo $row['idStudent'] ?></td>
          <td><?php echo $row['noteMatiere'] ?></td>
          <td><?php echo $row['email'] ?></td>
        </tr>
<?php endwhile;  ?>
    </table>
   
      
    </div>
  
</body>
</html>