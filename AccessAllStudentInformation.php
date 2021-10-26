<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<header>
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#FFDF00">
        <div class="container-fluid">
          <a class="navbar-brand">ISET Student Manager</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="Index.html"><i class="bi bi-house"></i>Home</a>
              </li>
              <li class="nav-item"> 
                  <a class="nav-link " aria-current="page" href="AddNewStudent.php"><i class="bi bi-person-plus"></i>  Add New Student</a>
             </li>
              <li class="nav-item">  
                <a class="nav-link active" href="AccessAllStudentInformation.php"><i class="bi bi-person-lines-fill"></i>Access All student Information</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="UpdateStudent.php"><i class="bi bi-person-square"></i>Update Student</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="DeleteStudent.php"><i class="bi bi-person-dash"></i>Delete Student</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Analytics.php"><i class="bi bi-pie-chart-fill"></i>Analytics</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>
<body>
  <?php
$mysqli = new mysqli('localhost','root','','isetstudentmanager') or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM students") or die($mysqli->error)
?>

  <div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom">Les informations de tout les etudiants</h2>
    <table class="table table-hover list" id="studentList">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">FirstName</th>
          <th scope="col">LastName</th>
          <th scope="col">Class</th>
          <th scope="col">Email</th>
          <th scope="col">Voir la feuille de note</th>
        </tr>
      </thead>
      <?php
        while ($row = $result->fetch_assoc()):
      ?>
        <tr>
        <td><?php echo $row['id'] ?></td>
          <td><?php echo $row['nom'] ?></td>
          <td><?php echo $row['prenom'] ?></td>
          <td><?php echo $row['classe'] ?></td>
          <td><?php echo $row['email'] ?></td>
          <td><a href="viewNotes.php?view=<?php echo $row['id'];?>" class="btn btn-info">voir le bulletin</a>
          <a href="editMatieres.php?editMatiere=<?php echo $row['id'];?>" class="btn btn-info">modifier les notes</a></td>
        </tr>
<?php endwhile;  ?>
    </table>
   
      
    </div>
  
</body>
<footer>

</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>