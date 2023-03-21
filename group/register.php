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
        <a href="#">
            <i class="fa-solid fa-ellipsis"></i>
        </a>
    </nav>

    <div class="container mx-auto text-center">
        <h3>Create new account</h3>
        <p>Already registered? <a class ="link" href="login.php">Login</a></p>

        <form action="">
            <label for="name" class="text-left">NAME</label><br>
            <input type="text" id="name" name="name" placeholder ="CSIS3280"><br>
            <label for="email">EMAIL</label><br>
            <input type="text" id="email" name="email" placeholder ="hello@douglas.ca"><br>
            <label for="password">PASSWORD</label><br>
            <input type="password" id="password" name="password" placeholder="******"><br><br>
            <input type="submit" value="sign up">
        </form>
    </div>
    
    
</body>
</html>