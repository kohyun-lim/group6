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
    	
    	.product img {
    		max-width: 100%;
    		margin-bottom: 10px;
    	}
    	
    	.product h3 {
    		margin-top: 0;
    	}
    	
    	.product p {
    		font-size: 14px;
    		line-height: 1.5;
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
      <section>
	   <h2>Meat</h2>
        	<div class="product-grid">
        		<div class="product">
        			<button type="submit"><img src="https://tse2.mm.bing.net/th?id=OIP.kC8rkA6FXIzsN3MO5CZQYwHaFj&pid=Api&P=0" width="200" height="200" alt="Chicken"></button>
        			<h3>Chicken</h3>
        		</div>
        		<div class="product">
        			<button type="submit"><img src="https://tse2.mm.bing.net/th?id=OIP.2HolIpj76Hgn4p_hsCoGQwHaGB&pid=Api&P=0" width="200" height="200" alt="Beef"></button>
        			<h3>Beef</h3>
        		</div>
        		<div class="product">
        			<button type="submit"><img src="https://www.excelagrovc.com/wp-content/uploads/2020/05/pork-meat-500x500-1-1024x682.jpg" width="200" height="200" alt="Pork"></button>
        			<h3>Pork</h3>
        		</div>
        		<div class="product">
        			<button type="submit"><img src="https://tse3.mm.bing.net/th?id=OIP.9iuyZe3JPzhlAlhmCYcgAAHaE8&pid=Api&P=0" width="200" height="200" alt="Turkey"></button>
        			<h3>Turkey</h3>
        		</div>
        		<div class="product">
        			<button type="submit"><img src="https://tse2.mm.bing.net/th?id=OIP.Fu0Jufyc7_8r4TNGlMM0hwHaE7&pid=Api&P=0" width="200" height="200" alt="Bacon"></button>
        			<h3>Bacon</h3>
        		</div>
        	</div>
      </section>
    </main>
    <footer>
      <p>&copy; 2023 My Grocery Website</p>
    </footer>
  </body>
</html>