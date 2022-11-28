<html>
  <head>
        <title>Holiwell counselling</title>
        <link rel="icon" href="hcts2.jpeg" type="image/jpeg">
        <link rel="stylesheet" href="style2.css">
   </head>
  <body>
<?php
session_start();
include('config.php');
if(isset($_POST['submit'])){
  $username = $_POST['username'] ?? "";
  $password= $_POST['password'] ?? "";
}
$sql ="SELECT * FROM user_session WHERE Username ='$username' AND Password = '$password'";
//die($sql);
$result = $conn->query($sql);

if($result->num_rows >0){
    $_SESSION['username']= $username;
    header("location:index.php");
    die;
}
else{
echo "<script>
    alert('Incorrect Username or Password');
   </script>";
}
?>

<form method= "POST" id ="login">
    <h2>Holiwell Counsellor Login</h2>
    <input class ="logo" type ="text" name ="username" placeholder ="username">
    <input class ="key" type ="password" name ="password" placeholder ="Password">
    <input type ="submit" name ="submit" value ="Login">
</form>
<a href="htcs.html">Go back to homepage</a>
 </body>
</html>