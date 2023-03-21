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
        <input type="submit" name="order" /input> 
        
      </section>
      <hr class="rounded">
      <section>
        <h2>Featured Products</h2>
        <ul>
          <li>
            <h3>Organic Eggs (30-cell 2 egg crates)</h3>
            <button type="submit"><img src="https://sc04.alicdn.com/kf/UTB8I2FcOxHEXKJk43Jeq6yeeXXaE.jpg"  width="100" height="100" alt="Eggs"></button>
            <p>Price: $39.99/bunch</p>
          </li>
          <li>
            <h3>Kirkland Signature Solid Light Tuna in Water, 8 x 184 g</h3>
						<button type="submit"><img src="https://images.costco-static.com/ImageDelivery/imageService?profileId=12026539&itemId=820272-894&recipeName=680" width="100" height="100" alt="Canned tuna"></button>
            <p>Price: $18.99/bunch</p>
          </li>
          <li>
            <h3>Kirkland Signature 2% Organic Milk 4 L, 1 x 10</h3>
            <button type="submit"><img src="https://images.costcobusinessdelivery.com/ImageDelivery/imageService?profileId=12027981&itemId=363083&recipeName=680"  width="100" height="100" alt="Milk"></button>
            <p>Price: $20.99/bunch</p>
          </li>
        </ul>
      </section>
      <hr class="rounded">
      <section>
	   <h2>Our Products</h2>
        	<div class="product-grid">
        		<div class="product">
        			<button type="submit"><img src="https://img.freepik.com/premium-vector/seafood-cartoon-set_10498-130.jpg?w=2000" width="200" height="200" alt="Sea Food"></button>
        			<h3>Sea Food</h3>
        		</div>
        		<div class="product">
        			<button type="submit"><img src="https://t4.ftcdn.net/jpg/02/26/22/61/360_F_226226109_hg2jc6yILoyBmKCMljLvubgjoiGRSfy0.jpg" width="200" height="200" alt="Meat"></button>
        			<h3>Meat</h3>
        		</div>
        		<div class="product">
        			<button type="submit"><img src="https://img.myloview.com/stickers/set-of-different-cereal-grains-in-bags-isolated-on-a-white-background-vector-illustration-of-wheat-millet-oats-rice-buckwheat-and-corn-in-cartoon-flat-style-400-211732261.jpg" width="200" height="200" alt="whole grains"></button>
        			<h3>whole grains</h3>
        		</div>
        		<div class="product">
        			<button type="submit"><img src="https://img.freepik.com/free-vector/set-different-vegetables-cartoon_1308-104800.jpg" width="200" height="200" alt="vegetables"></button>
        			<h3>Vegetables</h3>
        		</div>
        		<div class="product">
        			<button type="submit"><img src="https://urbanimpact.com/themes/custom/urbanimpact/assets/images/beverage_container/why_beverage.png" width="200" height="200" alt="beverages"></button>
        			<h3>Beverage</h3>
        		</div>
        	</div>
      </section>
    </main>
    <footer>
      <p>&copy; 2023 My Grocery Website</p>
    </footer>
  </body>
</html>