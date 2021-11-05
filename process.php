<?php

session_start();

$nom = 'nom';
$prenom = 'prenom';
$classe = 'classe';
$email = 'email@email.com';

$result;

$mysqli = new mysqli('localhost','root','','isetstudentmanager') or die(mysqli_error($mysqli));



  //suppression des etudiants de la table students
  if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM students WHERE id=$id") or die($mysqli->error());
    //$mysqli->query("DELETE FROM notesmatieres WHERE idStudent=$id") or die($mysqli->error());
    
    $_SESSION['message']="Student have been deleted";
    $_SESSION['msg_type']="danger";
    
    header("location: AccessAllStudentInformation.php");
  }
  
  
  //edition des etudiants de la table students
  if(isset($_GET['edit'])){
    
    if($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == 'post'){
      $eudId = intval($_GET['edit']);
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
        $classe = $_POST['classe'];
$email = $_POST['email'];



      $update=$mysqli->query("UPDATE students SET nom='$nom' , prenom='$prenom', classe='$classe' , email='$email' where id=$eudId") or die($mysqli->error());
      header("location: AddNewStudent.php");
    }
    //if($_SERVER[''])
  
  
    /*echo $_GET['edit'];
    $update=$mysqli->query("UPDATE students SET nom=$nom") or die($mysqli->error());
    $id = $_GET['edit'];
    $result = $mysqli->query("SELECT * FROM students WHERE id=$id") or die($mysqli->error());
    $row = $result->fetch_array();
    if (mysqli_num_rows($result)){
      $nom = $row['nom'];
      $prenom = $row['prenom'];
      $classe = $row['classe'];
      $email = $row['email'];
    }
    header("location: AddNewStudent.php");*/
  }


//insertion d'etudiants dans la table students
$mysqli = new mysqli('localhost','root','','isetstudentmanager') or die(mysqli_error($mysqli));
if(isset($_POST['save'])){
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $classe = $_POST['classe'];
  $email = $_POST['email'];
$mysqli->query("INSERT INTO students (nom, prenom, classe, email) VALUES('$nom','$prenom','$classe','$email')") or
   die($mysqli->error);
 
   
   $_SESSION['message']="Student have been added";
   $_SESSION['msg_type']="success";
  
   header("location: AccessAllStudentInformation.php");
  } 





//ajouter des matieres de la table matieres
if(isset($_POST['save1'])){
  $matiere = $_POST['matiere'];
  $coef = $_POST['coef'];
$mysqli->query("INSERT INTO matieres (matiere, coef) VALUES('$matiere','$coef')") or
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


