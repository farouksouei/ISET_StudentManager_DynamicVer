<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=<, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php require_once 'process.php'; ?>
<form action="process.php" method="POST">
<div class="form-group" >
  <label>nom</label>
  <input name="nom"></input>
</div>
<div class="form-group">
  <label>prenom</label>
  <input name="prenom"></input>
</div>
<div class="form-group">
  <label>classe</label>
  <input name="classe"></input>
  </div>  
  <div class="form-group"> 
  <label>email</label>
  <input name="email"></input>
  </div>
  <div class="form-group"> 
    <button type="submit" name="save"></button>
  </div>
</form>
</body>
</html>