<!DOCTYPE html>
<header>
       <title>Holiwell Counselling</title>
       <link rel="icon" href="hcts2.jpeg" type="image/jpeg">
      <link rel="stylesheet" href="style3.css">
</header>
<body>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
<form action="formconfig.php" method="POST" >
  <div class ="container" id="fom">
    <h2>Personal information:</h2>
    <div class = "form" id="userform">
      <label for="uname"><b> Name:<b></label>
      <input type="text" name="name">
      <label for="eml"><b> Email:<b></label>
      <input type="text" name="email">
      <label for="phn"><b> Phone Number:<b></label>
      <input type="number" name="phone">
      <label for="dt"><b> Date:<b></label>
      <input type="date" name="date">
      <button type="submit" name="save">Submit</button>
      
    </div>  
</div>
</form>
<a href="htcs.html">Go back to homepage</a>
</body>
</html>