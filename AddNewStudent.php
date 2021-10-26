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
                  <a class="nav-link active" aria-current="page" href="AddNewStudent.html"><i class="bi bi-person-plus"></i>  Add New Student</a>
             </li>
              <li class="nav-item">  
                <a class="nav-link" href="AccessAllStudentInformation.php"><i class="bi bi-person-lines-fill"></i>Access All student Information</a>
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
  <?php require_once 'process.php';?>
  <div class="row justify-content-center container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom">L'ajout d'un nouveau etudiant</h2>
    <form action="process.php" method="POST">
      <div class="form-group pb-2">
        <label>Nom</label>
        <input value="<?php echo $nom; ?>" name="nom" type="text" class="form-control" placeholder="Entrez votre nom">
      </div>
      <div class="form-group pb-2">
        <label>Prenom</label>
        <input value="<?php echo $prenom; ?>" name="prenom" type="text" class="form-control" placeholder="Entrez votre prenom">
      </div>
      <div class="form-group pb-2">
        <label>Classe</label>
        <input value="<?php echo $classe; ?>" name="classe" type="text" class="form-control" placeholder="entrez votre classe">
      </div>
      <div class="form-group pb-2">
        <label>Email address</label>
        <input value="<?php echo $email; ?>" name="email" type="email" class="form-control" placeholder="Enter email">
      </div>
      <div class="form-group">
      <button name="save" type="submit" class=" btn btn pb-2 " style="margin-top: 20px; background-color:#FFDF00">Submit</button>
      <div>
    </form>
   
      
    </div>
  </div>

  <div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom">L'ajout d'une nouvelle matiere</h2>
    <form action="process.php" method="POST">
      <div class="form-group pb-2">
        <label for="name">Le nom de la matiere</label>
        <input name="matiere" type="text" class="form-control" placeholder="Entrez votre nom">
      </div>
      <div class="form-group pb-2">
        <label for="lastName">La coefficient</label>
        <input name="coef" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Entrez votre prenom">
      </div>
      <class classe="form-group">
      <button name="save1" type="submit" onclick="onformsubmit();" class=" btn btn pb-2 " style="margin-top: 20px; background-color:#FFDF00">Submit</button>
      </class>
    </form>
   
      
    </div>
  </div>

</body>
<footer>

</footer>
  
</html>