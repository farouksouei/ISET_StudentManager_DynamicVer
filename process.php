<?php

session_start();

$nom = 'nom';
$prenom = 'prenom';
$classe = 'classe';
$email = 'email@email.com';


//insertion d'etudiants dans la table students
$mysqli = new mysqli('localhost','root','','isetstudentmanager') or die(mysqli_error($mysqli));
if(isset($_POST['save'])){
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $classe = $_POST['classe'];
  $email = $_POST['email'];
$mysqli->query("INSERT INTO students (nom, prenom, classe, email) VALUES('$nom','$prenom','$classe','$email')") or
   die($mysqli->error);
   $mysqli->query("INSERT INTO notematiere (idStudent) VALUES('$id')") or
   die($mysqli->error);   
   
   $_SESSION['message']="Student have been added";
   $_SESSION['msg_type']="success";
  
   header("location: AccessAllStudentInformation.php");
  } 


  //suppression des etudiants de la table students
if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  $mysqli->query("DELETE FROM students WHERE id=$id") or die($mysqli->error());
  $mysqli->query("DELETE FROM notematiere WHERE idStudent=$id") or die($mysqli->error());
  
  $_SESSION['message']="Student have been deleted";
  $_SESSION['msg_type']="danger";
  
  header("location: AccessAllStudentInformation.php");
}


//edition des etudiants de la table students
if(isset($_GET['edit'])){
  $id = $_GET['edit'];
  $result = $mysqli->query("SELECT * FROM students WHERE id=$id") or die($mysqli->error());
  if (count($result)==1){
    $row = $result->fetch_array();
    $nom = $row['nom'];
    $prenom = $row['prenom'];
    $classe = $row['classe'];
    $email = $row['email'];

    
    
  }
  header("location: AddNewStudent.php");
}


//ajouter des matieres de la table matieres
if(isset($_POST['save1'])){
  $matiere = $_POST['matiere'];
  $coef = $_POST['coef'];
$mysqli->query("INSERT INTO matieres (matiere, coef) VALUES('$matiere','$coef')") or
   die($mysqli->error);
$mysqli->query("INSERT INTO notematiere (idmatiere) VALUES('$id')") or
   die($mysqli->error);   
   
   $_SESSION['message']="matiere have been added";
   $_SESSION['msg_type']="success";
  
   header("location: Analytics.php");
  } 

  //suppression des matieres de la table matieres
if(isset($_GET['delete1'])){
  $id = $_GET['delete1'];
  $mysqli->query("DELETE FROM matieres WHERE id=$id") or die($mysqli->error());
  
  $_SESSION['message']="Matiere have been deleted";
  $_SESSION['msg_type']="danger";
  
  header("location: Analytics.php");
}


  //edition des matieres de la table matieres
if(isset($_GET['edit1'])){
  $id = $_GET['edit1'];
  $result = $mysqli->query("SELECT * FROM matieres WHERE id=$id") or die($mysqli->error());
  if (count($result)==1){
    $row = $result->fetch_array();
    $matiere = $row['matiere'];
    $coef = $row['coef'];
    
  }
  header("location: AddNewStudent.php");
}

//ajouter des notes de matieres pour chaque etudiants de la table notes matieres