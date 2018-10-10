<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Order A Pizza - Pizza Time Pizza</title>
	</head>
	<body>
		<header>
			<h1>Pizza Time Pizza</h1>
		</header>
		<main>
			<form>
				<!-- Fieldset for personal information -->
				<fieldset>
					<legend>Personal Information</legend>
					<!-- Asking to input first name -->
					<div>
						<label for="fname">First Name</label>
						<input type="text" names="fname" id="fname" size="25" placeholder="type first name here" />
					</div>
					<!-- Asking to input Last name -->
					<div>
						<label for="lname">Last Name</label>
						<input type="text" names="lname" id="lname" size="25" placeholder="type last name here" />
					</div>
					<!-- Asking to input phone number -->
					<div>
						<label for="phone">Phone</label>
						<input type="tel" name="phone" id="phone" size="25" placeholder="000-000-0000" />
					</div>
					<!-- Asking to input email -->
					<div>
						<label for="email">Email</label>
						<input type="email" name="email" id="email" size="25" placeholder="name@domain.com" />
					</div>
					<div>
						<div>
							<label for="address">Address</label>
							<input type="address" name="address" id="address" size="25" placeholder="10 Address Street" />
					</div>
				</fieldset>
				<!-- Fieldset for the pizza -->
				<fieldset>
					<legend>Pizza Preferences</legend>
					<!-- Asking for the number of pizzas -->
					<div>
						<label for="quantity">Number of Pizzas</label>
						<input type="number" name="quantity" id="quantity" />
					</div>
					<!-- Asking for the pizza size -->
					<div>
						<label for "size">Size</label>
						<select name="size" id="size">
							<option value=null>-------</option>
							<option value="small">Small</option>
							<option value="medium">Medium</option>
							<option value="large">Large</option>
						</select>
					</div>

					<div>
						<legend>Meat Toppings</legend>
						<!-- Select any 3 different meats -->
						<input type="checkbox" name="topping1" id="meat1" value="pepperoni" />
						<label for="meat1">Pepperoni</label>

						<input type="checkbox" name="topping2" id="meat2" value="beef" />
						<label for="meat2">Beef</label>

						<input type="checkbox" name="topping3" id="meat3" value="bacon" />
						<label for="meat3">Bacon</label>
					</div>

					<div>
						<legend>Veggie Toppings</legend>
						<!-- Select any 3 different meats -->
						<input type="checkbox" name="topping4" id="veg1" value="pepper" />
						<label for="veg1">Pepper</label>

						<input type="checkbox" name="topping5" id="veg2" value="mushroom" />
						<label for="veg2">Mushroom</label>

						<input type="checkbox" name="topping6" id="veg3" value="olive" />
						<label for="veg3">Olive</label>
					</div>

					<div>
						<legend>Cheese</legend>
						<!-- Select between 3 different cheese types -->
						<input type="radio" name="regCheese" id="regCheese" value="Regular Cheese" />
						<label for="regCheese">Regular Cheese</label>

						<input type="radio" name="dubCheese" id="dubCheese" value="Double Cheese" />
						<label for="dubCheese">Double Cheese</label>

						<input type="radio" name="tripCheese" id="tripCheese" value="Triple Cheese" />
						<label for="tripCheese">Triple Cheese</label>
					</div>

					<div>
						<legend>Crust Type</legend>
						<!-- Select between 3 different crust types -->
						<input type="radio" name="regCrust" id="regCrust" value="Regular Cheese" />
						<label for="regCrust">Regular Crust</label>

						<input type="radio" name="stfCrust" id="stfCrust" value="Stuffed Crust" />
						<label for="stfCrust">Stuffed Crust</label>

						<input type="radio" name="thnCrust" id="thnCrust" value="Thin Crust" />
						<label for="thnCrust">Thin Crust</label>
					</div>
				</fieldset>
				<!-- Fieldset for inputting credit card info -->
				<fieldset>
					<legend>Credit Card Details</legend>
					<!-- Asking to input preferred credit card -->
					<div>
						<input type="radio" name="ccType" id="amex" value="American Express" />
						<label for="amex">American Express</label>

						<input type="radio" name="ccType" id="mc" value="MasterCard" />
						<label for="mc">MasterCard</label>

						<input type="radio" name="ccType" id="visa" value="VISA" />
						<label for="visa">VISA</label>
					</div>
					<!-- Asking to input credit card number -->
					<div>
						<label for="ccNumber">Credit Card Number</label>
						<input id="ccNumber" type="text" name="ccNumber" placeholder="0000-0000-0000-0000" />
					</div>
					<!-- Asking to input credit card expiration year -->
					<div>
						<label for="ccYear">Expiration Year</label>
						<select name="ccYear" id="ccYear">
							<option value=null>Expriation Date</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
							<option value="2020">2020</option>
							<option value="2021">2021</option>
							<option value="2022">2022</option>
						</select>
					</div>
					<!-- Asking to input credit card expiration month -->
					<div>
						<label for="ccMonth">Expiration Month</label>
						<select name="ccMonth" id="ccMonth">
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>
					</div>
				</fieldset>
				<!-- Fieldset for feedback -->
				<fieldset>
					<div>
					<legend>Feedback</legend>
						<label for="comments">Comments</label>
						<textarea type="comments" name="comments" id="comments" />Type comments here.</textarea>
					</div>
				</fieldset>

				<section>
					<!-- Pizza Picture -->
					<div>
					<img src="images/pizza.png" alt="Pizza in a box" height="250" width="350" />
					<p><small>"KK Pizza" by Nickelodeon, [Public Domain], <a href="https://vignette.wikia.nocookie.net/spongebob/images/1/1e/Vlcsnap-2016-04-29-23h33m54s020.png/revision/latest/scale-to-width-down/350?cb=20160430033640">via Wikipedia</a></small></p>
					</div>
					<!-- Complete the order Button -->
					<div>
					<button type="submit">Finish Order</button>
					</div>
					<!-- Reset Button -->
					<div>
					<button type="reset">Reset Order</button>
					</div>
				</section>
			</form>
		</main>
		<footer>
			<p><small>PizzaTimePizza Inc. All rights reserved</small></p>
		</footer>
	</body>
</html>
