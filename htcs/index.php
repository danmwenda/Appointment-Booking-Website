<?php  include('phpcode.php'); ?>



<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM info WHERE id=$id");

		if (count(array($record)) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$email = $n['email'];
			$phone = $n['phone'];
			$date = $n['date'];
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Holiwell Counselling</title>
	<link rel="icon" href="hcts2.jpeg" type="image/jpeg">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>

<?php 
$result = mysqli_query($conn, "SELECT * FROM info"); 
?>

<!-- Info display table-->
<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Email</th>
            <th>Phone</th>
			<th>Date</th>
			<th colspan="4">Action</th>
		</tr>
	</thead>
	
	<?php if ($row = mysqli_fetch_array($result)) { ?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['phone']; ?></td>
			<td><?php echo $row['date']; ?></td>
			<td>
				<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="phpcode.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
     <?php } ?>
</table>

	<form method="post" action="phpcode.php" >

			<input type ="hidden" name="id" value="<?php echo $id; ?>">
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $name; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email; ?>">
		</div>

        <div class="input-group">
			<label>Phone</label>
			<input type="text" name="phone" value="<?php echo $phone; ?>">
		</div>
		<div class="input-group">
			<label>Date</label>
			<input type="text" name="date" value="<?php echo $date; ?>">
		</div>

		<div class="input-group">
			<?php if ($update == true): ?>
				<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
			<?php else: ?>
				<button class="btn" type="submit" name="save" >Save</button>
			<?php endif ?>
		</div>
	</form>
	<a href="session.php">LOG OUT</a>
</body>
</html>