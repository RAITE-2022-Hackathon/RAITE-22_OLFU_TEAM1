<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<title></title>
</head>
<body>
<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Hackathon</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cryotocurrencies
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="coin.php">Market </a>
          <a class="dropdown-item" href="#">Watchlist</a>
        </div>
      </li>
    </ul>
        <p>&nbsp;&nbsp;</p>
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#exampleModal2">Log In!</button>

     <p>&nbsp;&nbsp;</p>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#exampleModal">Sign Up!</button>
      </div>
</nav>


<!-- Modal -->
<form  method="POST" action="<?=$_SERVER['PHP_SELF']?>">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register New User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <label>First Name:</label>
        <input type="Text" class="form-control" name="firstname" required>

        <label>Last Name:</label>
        <input type="Text" class="form-control" name="lastname" required>

        <label>Address:</label>
        <input type="Text" class="form-control" name="address" required>

        <label>Username:</label>
        <input type="Text" class="form-control" name="username" required>

        <label>Password:</label>
        <input type="Password" class="form-control" name="password" required>

        <label>Confirm Password:</label>
        <input type="Password" class="form-control" name="cp" required>

        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="btnadd" value="submit">Register!!</button>
      </div>
    </div>
  </div>
</div>
</form>


<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="btnread" value="submit">Log In</button>
      </div>
    </div>
  </div>
</div>


<?php 
include "db_con.php";
if (isset($_POST['btnadd']))
{
       $ln = $_POST['lastname'];
     $fn = $_POST['firstname'];
     $ad = $_POST['address'];
     $un = $_POST['username'];
       $pass = $_POST['password'];
       $cp = $_POST['cp'];


       if ($_POST["password"] == $_POST["cp"]) {

    $pass = md5($pass);
       $sql = "INSERT INTO users(fn,ln,ad,un,pw) VALUES('$fn','$ln','$ad','$un','$pass')";
        $result = mysqli_query($conn, $sql);
        if($result == True)
          {?>
      <script>
         alert("Succesfully Added")
         header("location:javascript://history.go(-1)");
      </script>
      <?php
      }
      else{
      echo $conn->error;
      }
      $conn->close();
}
else {
  ?> <script>
    alert("Password Did Not Match!!!")
    header("location:javascript://history.go(-1)");
  </script><?php
}
 

}
 
?>
<?php

$sn ="localhost";
$un ="root";
$pw = "";
$dbn="hackathon";

$conn = mysqli_connect($sn,$un,$pw,$dbn);
if(!$conn){
    echo "failed";
}
?>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<!-- Always remember to call the above files first before calling the bootstrap.min.js file -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" ></script>

</body>
