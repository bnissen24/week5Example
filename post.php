<?php
	// POST Values from Form 
	$firstName = filter_input(INPUT_POST, 'firstName');
	$lastName = filter_input(INPUT_POST, 'lastName');
	$password = filter_input(INPUT_POST, 'password');
	$cardType = filter_input(INPUT_POST, 'card_type');
	$toppings = filter_input(INPUT_POST, 'topping', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);

	// Set Defaults 
	$firstName = (isset($firstName)) ? $firstName : '';
	$lastName = (isset($lastName)) ? $lastName : '';
	$password = (isset($password)) ? $password : '';
	$cardType = (isset($cardType)) ? $cardType : '';
	$toppings = (isset($toppings)) ? $toppings : array();
?>

<form method="post" action="post.php">
	<!-- First Name -->
	<label for="firstName">First Name</label>
	<input type="text" name="firstName" value="<?php echo $firstName; ?>">
	<br>

	<!-- Last Name -->
	<label for="lastName">Last Name</label>
	<input type="text" name="lastName" value="<?php echo $lastName; ?>">
	<br>

	<!-- Password -->
	<label for="password">Password</label>
	<input type="password" name="password" value="<?php echo $password; ?>">
	<br>

	<!-- Card Type -->
	<br>
	<input type="radio" name="card_type" value="visa" <?php if ($cardType === 'visa') echo 'checked'; ?>>
	Visa <br>
	<input type="radio" name="card_type" value="masterCard" <?php if ($cardType === 'masterCard') echo 'checked'; ?>>
	MasterCard <br>
	<input type="radio" name="card_type" value="discover" <?php if ($cardType === 'discover') echo 'checked'; ?>>
	Discover <br><br>

	<!-- Check Boxes -->
	<br>
	<input type="checkbox" name="topping[]" value="pepperoni" <?php foreach ($toppings as $top) { if ($top === 'pepperoni') echo 'checked'; } ?>>
	Pepperoni<br>
	<input type="checkbox" name="topping[]" value="mushrooms" <?php foreach ($toppings as $top) { if ($top === 'mushrooms') echo 'checked'; } ?>>
	Mushrooms<br>
	<input type="checkbox" name="topping[]" value="olives" <?php foreach ($toppings as $top) { if ($top === 'olives') echo 'checked'; } ?>>
	Olives<br>

	<!-- Submit Button -->
	<input type="submit" value="Send Post Request">
</form>	

<div>
	<h3>Form Values</h3>
	<div>
		First Name: <?php echo $firstName; ?>
	</div>	
	<div>
		Last Name: <?php echo $lastName; ?>
	</div>	
	<div>
		Password: <?php echo $password; ?>
	</div>	
	<div>
		Card Type: <?php echo $cardType; ?>
	</div>	
	<div>
		Toppings: <?php foreach ($toppings as $top) { echo '<br> -'.$top; } ?>
	</div>		
</div>	