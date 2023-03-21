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
		.product-grid {
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
	    }
	
    	.product {
    		flex-basis: calc(20% - 20px);
    		margin-bottom: 20px;
    		padding: 10px;
    		background-color: #f5f5f5;
    		text-align: center;
    	}
    	
    	
        .footer{
            float: left;
            width: 33.33%;
            
          }
        .row:after{
          content: "";
          display: table;
          clear: both;
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
      <section>
        <h2>Find all your grocery needs for your restaurant in one place!</h2>
        <p>Our grocery platform provides you with a wide range of fresh and high-quality products to choose from, with easy ordering. Browse our wide selection of fresh produce, meats, seafoods, dairy, and vegetables, and place your order online for pickup.</p>
        <button type="submit">Order</button>
        
      </section>
      <hr class="rounded">
            <div class="row">
            <div class="footer">
                <h2 class="footHead">ADDRESS</h2>
                <center>
                <p>1234 vancouver</p>
                <a href="mailto:grocerywebsite@gmail.com">Click to mail Our grocery store</a><br>
                <a href="https://www.google.com/maps/place/Douglas+College+New+Westminster+Campus/@49.2036866,-122.9149726,17z/data=!3m1!4b1!4m5!3m4!1s0x5485d871f5ee4dc9:0xf3a710065f3a2f3f!8m2!3d49.2036831!4d-122.9127839" target="_blank">Google map</a>
                </center>
            </div>
            <div class="footer">
            
                <h2 class="footHead">ORDER</h2>
                <center>
                <p>Phone:778 881 0909</p>
                <a href="tel:+17788810909">Click to Call</a>
                </center>
            </div>
            <div class="footer">
                <h2 class="footHead">OPEN HOURS</h2>
                <center>
                <p>Open 7 days a Week</p>
                <p>11 AM to 3 AM</p>
                </center>

            </div>
            </div>
    </main>
    <footer>
      <p>&copy; 2023 My Grocery Website</p>
    </footer>
  </body>
</html>