<?php
session_start();
    include("config.php");
$_SESSION;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


    <title>PaperTown</title>
</head>

<body>
    <nav class="navbar">
        <img src="img" class="logo-class" alt="Logo">
        <div class="brand-title">PaperTown</div>
        <div class="navbar-links" id="navbar-links">
            <ul>
                <?php
          if(!isset($_SESSION['email']))
          {
          //nav bar cu Home, Books, Movies, Albums, Contact us
          // dropdown cu Contul Meu, Cos de cumparaturi, Sign in/out care se schimba cand te loghezi sa fie Hi, <username>          
          ?>
                <li><a href="/ProiectLaborator/View/home.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="/ProiectLaborator/View/books.php"> <i class="fas fa-book"></i>Books</a></li>
                <li><a href="/ProiectLaborator/View/films.php"> <i class="fas fa-film"></i> Movies</a></li>
                <li><a href="/ProiectLaborator/View/music.php"> <i class="fa-sharp fas fa-music"></i> Albums</a></li>
                <li><a href="/ProiectLaborator/View/contact_us.php"> <i class="fas fa-address-card"></i> About us </a></li>
                <!--- intra in dropdown--->
                <li><a href="/ProiectLaborator/View/client.php"> <i class="fas fa-user-circle"></i> Contul tau</a></li>
                
                <?php
          }
          else{
              //     $user_data = check_login($conn);
            ?>
                <li><a href="/ProiectLaborator/View/home.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="/ProiectLaborator/View/books.php"> <i class="fas fa-book"></i>Books</a></li>
                <li><a href="/ProiectLaborator/View/films.php"> <i class="fas fa-film"></i> Movies</a></li>
                <li><a href="/ProiectLaborator/View/music.php"> <i class="fa-sharp fas fa-music"></i> Albums</a></li>
                <li><a href="/ProiectLaborator/View/contact_us.php"> <i class="fas fa-address-card"></i> About us </a></li>
                <li>
                    <a href="account.php"><i class="fas fa-user-circle"></i> <?php echo $user_data['username'];?></a>
                </li>
                <li><a href="logout.php"> <i class="fas fa-sign-out-alt"></i> Log out</a></li>
                <?php
          } 
          ?>
            </ul>
        </div>
    </nav>
    <div class="home-items">
        <h1>Welcome!</h1>
       <!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img2.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img3.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>

        </div>
        <script src="slider.js"></script>

    </div>
    <footer class="footer">
        <div class="footer-links" id="footer-links">
            <ul>
                <li><img src="imgs/logobook.png" alt="Logo" /></li>
                <li><img src="imgs/instagram.png" alt="Instagram" /></li>
                <li><img src="imgs/facebook.png" alt="Facebook" /></li>
                <li><img src="imgs/unitbv.PNG" alt="Unitbv" /></li>
            </ul>
        </div>
    </footer>
</body>

</html>