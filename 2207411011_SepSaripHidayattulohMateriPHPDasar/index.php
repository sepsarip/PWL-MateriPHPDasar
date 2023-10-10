<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title><?php echo "Home" ?></title>
</head>
<body>
    <div class="header">
        <img class="brand-logo" src="logo.jpeg" alt="logo" />
        <ul class="nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="#">Resume</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Projects</a></li>
          <li><a href="#">My Blog</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="content">
           <?php echo "<h1 id='welcome-text'>Halo Selamat Datang</h1>"; ?>
        </div>
    </div>
    <script src="script.js"></script>    
</body>
</html>