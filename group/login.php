<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="style-login.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <!--font awesome-->
    <script src="https://kit.fontawesome.com/7cc2b526eb.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
        <nav>
            <a href="register.php">
                <i class="fa-solid fa-ellipsis"></i>
            </a>
        </nav>

    <div class="container mx-auto text-center">
      
            <h3 class="main">Login</h3>
            <p>Sign in to continue</p>
            <p><a href="register.php">Register</a></p>


            <form action="">
                <label for="username">EMAIL</label><br>
                 <input type="text" id="username" name="username" placeholder ="hello@douglas.ca"><br>
             
                <label for="password">PASSWORD</label><br>
                 <input type="password" id="password" name="password" placeholder="******">
                
                <div><input type="submit" value="login"></div>
 
        </form>


    </div>
    
</body>
</html>