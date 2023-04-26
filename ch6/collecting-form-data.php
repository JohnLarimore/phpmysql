<form action="collecting-form-data.php" method="post">
	<p>Name:      <input type="text" name="name"></p>
	<p>Age:       <input type="text" name="age"></p>
	<p>Email:     <input type="text" name="email"></p>
	<p>Password:  <input type="password" name="pwd"></p>
	<p>Bio:       <textarea name="bio"></textarea></p>
	<p>
		<select name="preferences">
			<option value="email">Email</option>
			<option value="phone">Phone</option>
		</select>
	</p>
	<p>Rating:
		1 <input type="radio" name="rating" value="1">&nbsp;
		2 <input type="radio" name="rating" value="2">&nbsp;
		3 <input type="radio" name="rating" value="3"></p>
		<p><input type="checkbox" name="terms" value="true">
			I agree to terms and conditions</p>
		<p><input type="submit" value="Save"</p>	
</form>
<pre><?php var_dump($_POST); ?></pre>
