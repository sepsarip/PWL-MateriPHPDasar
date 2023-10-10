<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title><?php echo "About Me" ?></title>  
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
      <div class="section-1">
        <div class="img-profil">
          <img class="sep" src="sep.jpg" alt="gambar sep" />
        </div>
        <div class="data-profil">
          <?php
            echo "<h1>About Me</h1>";
            echo "<p>Berikut ini adalah sedikit mengenai informasi tentang diri saya.</p>";
          ?>
          <table>
            <tr>
              <td>Nama</td>
              <td>:</td>
              <td>Sep Sarip Hidayattuloh</td>
            </tr>
            <tr>
              <td>Kelas</td>
              <td>:</td>
              <td>3A</td>
            </tr>
            <tr>
              <td>NIM</td>
              <td>:</td>
              <td>2207411011</td>
            </tr>
            <tr>
              <td>Jurusan</td>
              <td>:</td>
              <td>Teknik Informatika dan Komputer</td>
            </tr>
            <tr>
              <td>Prodi</td>
              <td>:</td>
              <td>Teknik Informatika</td>
            </tr>
            <tr>
              <td>Kontak</td>
              <td>:</td>
              <td>sepsarip1811@gmail.com</td>
            </tr>
          </table>
        </div>
      </div>
      
      <div class="section-2">
        <hr/>
        <h1 class="geng">Me and The Boys</h1>
        <div class="img-gallery">
          <img class="size-img-galery" src="makan1.jpg" alt="makan1">
          <img class="size-img-galery" src="makan2.jpg" alt="makan2">
        </div>
      </div>

    </div>
    <div class="footer">
      <?php echo "<p>Copyright &copy; 2023 - All Right Reserved by Sep Sarip Hidayattoloh | Designed By Sarip</p>" ?>
    </div>
  </body>
</html>
