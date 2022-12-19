<html>
  <head>
        <title>Holiwell counselling</title>
        <link rel="icon" href="hcts2.jpeg" type="image/jpeg">
        <link rel="stylesheet" href="style2.css">
   </head>
  <body>
<?php

@include('app/views/config');
//return View::make('config', array('id' => $id));
if(isset($_POST['submit'])){

  session_start();

      $username = $request->input('username');
      $password = $request->input('password');
}
//$sql = htcs::table('user_session')->where(['username'=>$username, 'password'=>$password])->get();
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
<a href="/">Go back to homepage</a>
 </body>
</html><?php /**PATH F:\Laravel\htcs\resources\views/session.blade.php ENDPATH**/ ?>