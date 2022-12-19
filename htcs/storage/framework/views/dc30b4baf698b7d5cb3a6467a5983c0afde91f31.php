
<!DOCTYPE html>
<head>
        <title>Holiwell counselling and training services</title>
        <link rel="icon" href="hcts2.jpeg" type="image/jpeg">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="app1.css">
</head>
<body>
    <div class = "sidebar">
        <h2>Welcome<h2>
    <div class = "navigation">
        <ul>
            <li>
                <a href = "#section1">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <span>Appointments</span>
                </a>
            </li>
            <li>
                <a href = "#section2">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span>Profile</span>
                </a>
            </li>
            <li>
                <a href = "#">
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
    </div>
    <div class="main-content">
        <section id ="section1">
           
            <div class="container">
                 <?php echo $__env->yieldContent('content'); ?>
            </div>

        </section>
        <section id ="section2">

        <span>Appointments</span>

        </section>
          
    </div>
</body>
</html><?php /**PATH F:\Laravel\htcs\resources\views/clients/admin.blade.php ENDPATH**/ ?>