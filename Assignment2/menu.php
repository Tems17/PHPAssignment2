<main>
<?php if($success) : ?>
    <div class="success">
    <p>Your order has been placed </p>
    </div>
    <?php endif; ?>

    <?php if(!empty($error)) : ?>
        <div class="error">
            <?= htmlspecialchars($error)?>
        </div>
    <?php endif; ?>

<form method="post">
<div>
    <label for="customer_name">Name</label>
    <input type="text" name="customer_name" id="customer_name" required>
</div>

<div>
    <label for="customer_address">Address</label>
    <select name="customer_address" id="customer_address" required>
        <option value="" disabled selected hidden>Select address type</option>
        <option value="home">Home</option>
        <option value="business">Business</option>
        <option value="campus">Campus</option>
        <option value="hotel">Hotel</option>
        <option value="other">Other</option>
    </select>
</div>

<div>
    <label for="postalcode">Postal Code</label>
    <input type="text" name="postalcode" id="postalcode" maxlength="7" required>
</div>

<div>
    <label for="phone">Phone Number</label>
    <input type="tel" name="phone" id="phone" required>
</div>

<div>
    <label for="number_pizza">Number of Pizza </label>
    <input type="number" name="number_pizza" id="number_pizza" min="1" max="20">
</div>

<div>
    <h2>Pizza Size</h2>
        <div>
        <label for="small">Small(10")</label>
        <input type="radio" id="small" name="pizza_size" value="small">
        </div>

        <div>
        <label for="medium">Medium(12")</label>
        <input type="radio" id="medium" name="pizza_size" value="medium">
        </div>

        <div>
        <label for="large">Large(14")</label>
        <input type="radio" id="large" name="pizza_size" value="large">
        </div>
</div>


<section>
        <h2>Pizza Toppings</h2>
        <div><input type="checkbox" name="toppings[]" value="pepperoni">Pepperoni</div>
        <div><input type="checkbox" name="toppings[]" value="bacon">Bacon</div>
        <div><input type="checkbox" name="toppings[]" value="peppers">Peppers</div>
        <div><input type="checkbox" name="toppings[]" value="barbecue chicken">Barbecue Chicken</div>
        <div><input type="checkbox" name="toppings[]" value="pineapple">Pineapple</div>
        <div><input type="checkbox" name="toppings[]" value="cheese">Cheese</div>
        <div><input type="checkbox" name="toppings[]" value="sausage">Sausage</div>
        <div><input type="checkbox" name="toppings[]" value="tomatoes">Tomatoes</div>
        <div><input type="checkbox" name="toppings[]" value="mushroom">Mushroom</div>
        <div><input type="checkbox" name="toppings[]" value="onion">Onion</div>
</section>

<section>
        <h2>Sauces</h2>
        <div><input type="radio" name="sauces" value="bbq sauce">BBQ Sauce</div>
        <div><input type="radio" name="sauces" value="garlic parmesan sauce">Garlic Parmesan Sauce</div>
        <div><input type="radio" name="sauces" value="tomato sauce">Tomato Sauce</div>
        <div><input type="radio" name="sauces" value="alfredo sauce">Alfredo Sauce</div>
</section>


<section>
        <h2>Beverages</h2>
        <div><input type="radio" name="beverages" value="diet pepsi">Diet Pepsi</div>
        <div><input type="radio" name="beverages" value="dr. pepper">Dr. Pepper</div>
        <div><input type="radio" name="beverages" value="mountain dew">Mountain Dew</div>
        <div><input type="radio" name="beverages" value="aquafina">Aquafina</div>
        <div><input type="radio" name="beverages" value="cocacola">CocaCola</div>
    </section>


    <div>
        <label for="special_instructions">Additional Instructions</label>
        <textarea id="special_instructions" name="special_instructions" rows="5" cols="20" placeholder="E.g Please leave at front desk"></textarea>
    </div>

<div>
    <label for="pickuptime">Pickup Time </label>
    <input type="time" name="pickuptime" id="pickuptime" required>
</div>

<section>
        <h3>Delivery Method</h3>
        <div><input type="radio" name="deliverymethod" value="Pickup" required>Pickup</div>
        <div><input type="radio" name="deliverymethod" value="Delivery" required>Delivery</div>
</section>

<div>
  <button type="submit">Place Order</button>
</div>
</form>
</main>









