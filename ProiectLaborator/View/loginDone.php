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

    <div class="login">
        <h1 class="login-title">Bine ati venit</h1>
        <form class="login-form" method="POST" action="../Controller/login.php">
            <input type="text" id="email" placeholder="Email" name="email" />
            <input type="password" id="password" placeholder="Password" name="password" />
            <button type="submit">Log in</button>
            <p>Nu ai un cont?</p>
            <a href="signup.php">Creeaza-ti unul acum!</a>
        </form>
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