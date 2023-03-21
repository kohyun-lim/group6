<!DOCTYPE html>
<html>
  <head>
    <title>My E-Grocery Website</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
    	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		
		header {
			background-color: #333;
			color: #fff;
			padding: 10px;
		}
		
		h1 {
			margin: 0;
			font-size: 36px;
			text-align: center;
		}
		h2 {
			margin: 0;
			font-size: 36px;
			text-align: center;
		}
		
		nav {
			background-color: #eee;
			padding: 10px;
		}
		
		nav ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
		}
		
		nav li {
			float: right;
		}
		
		nav li a {
			display: block;
			color: #333;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}
		
		nav li a:hover {
			background-color: #ccc;
		}
		
		hr.rounded {
         border-top: 8px solid #bbb;
         border-radius: 5px;
        }
		
		section {
			padding: 20px;
			text-align: center;
		}
		
		div.align{
		    text-align:center;
		}
		
		footer {
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
		}
	</style>
  </head>
  <body>
    <header>
      <h1>Welcome to My Grocery Website</h1>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Products</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </nav>
    </header>
    <main>
            <hr>
            <h2>CONTACT</h2>
            <p><center>We love to hear from you</center></p>
            <h2>GET IN TOUCH</h2>
            <p><center>You have a piece of advice or a suggestion that you would like to share with us? Feel free to contact us.</center></p>
            <center><form method="get"> <!--form to fill the details-->
                <fieldset>
                    <legend><strong>FEEDBACK</strong>-Customer Information</legend>
                    <div class="align">
                        <label>First Name: <input type="text" name="fname" id="fname" required></label><br><br>
                    </div>
                    <div class="align">
                        <label>Last Name: <input type="text" name="lname" id="lname"></label><br><br>
                    </div>
                    <div class="align">
                        <label>E-mail: <input type="email" name="email" id="email" tabindex="1"></label><br><br>
                    </div>
                </fieldset><br>
                <label>Subject: <input type="text" name="sub"></label><br><br>
                <label for="comments">Comments:</label><br>
                <textarea name="comments" rows="4" cols="40"></textarea><br><br>
                <input type="button" value="Submit"> <input type="reset">
            </form></center><br>
    </main>
    <footer>
      <p>&copy; 2023 My Grocery Website</p>
    </footer>
  </body>
</html>