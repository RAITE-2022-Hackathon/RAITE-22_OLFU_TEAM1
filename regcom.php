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

