<!DOCTYPE html>
<head>
       <title>Holiwell Counselling</title>
       <link rel="icon" href="hcts2.jpeg" type="image/jpeg">
      <link rel="stylesheet" href="style3.css">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body style="background: #DBE9E0;">
<form action="/datainsert" method="POST" >
  <div class ="container" id="fom">
    <h2>Personal information:</h2>
    <?php echo $__env->make('flash_message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class = "form" id="userform">
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
      <label for="uname"><b> Name:<b></label></br>
      <input type="text" name="name"></br>
      <label for="eml"><b> Email:<b></label></br>
      <input type="text" name="email"></br>
      <label for="phn"><b> Phone Number:<b></label></br>
      <input type="number" name="phone"></br>
      <label for="dt"><b> Date:<b></label></br>
      <input type="date" name="date"></br>
      <button id="save" type="submit" name="save">Submit</button></br>
    </div></br>
    <a href="/">Go back to homepage</a>
</div>
</form>
</body>
</html><?php /**PATH F:\Laravel\htcs\resources\views/form.blade.php ENDPATH**/ ?>