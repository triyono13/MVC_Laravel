<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign up</title>
</head>
<body>

	<h1>Buat Account Baru!</h1>
	<h3>Sign Up Form</h3>

	<form action="{{route('auth')}}" method="POST">
		@csrf
		<p>First name:</p>
		<input type="text" name="fname">
		<p>Last name:</p>
		<input type="text" name="lname">
	  
		<p>Gender:</p>
		<input type="radio" name="gender" value="male">
		<label for="male">Male</label><br>
		<input type="radio" name="gender" value="female">
		<label for="female">Female</label><br>
		<input type="radio" name="gender" value="other">
		<label for="other">Other</label>
	  
		<p>Nationally:</p>
		<select name="nationality">
			<option value="indonesian">Indonesian</option>
			<option value="singaporean">Singaporean</option>
			<option value="malaysian">Malaysian</option>
			<option value="australian">Australian</option>
		</select>

		<p>Lenguage Spoken:</p>
		<input type="checkbox" value="Bahasa Indonesia">
		<label for="vehicle1"> Bahasa Indonesia</label><br>
		<input type="checkbox" value="English">
		<label for="vehicle2"> English</label><br>
		<input type="checkbox" value="Other">
		<label for="vehicle3"> Other</label>

		<p>Bio:</p>
		<textarea rows="9" cols="50"></textarea><br>
		<input type="submit" value="Sign Up">
	  
	</form> 
</body>
</html>
