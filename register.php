<?php include "db_connect.php"; ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Register</title>
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
		}

		.parent_class {
			width: 100%;
		}

		.sub_class {
			width: 50%;
			margin: 0 auto;
		}

		.formdiv {
			margin-top: 30px;
			padding: 20px;
			background-color: #ccc;
		}
	</style>
</head>

<body>
	<?php
	if (isset($_POST['submit'])) {
		if (isset($_POST['username']) && isset($_POST['password'])) {
			$password = $_POST['password'];
			$hash = password_hash($password, PASSWORD_DEFAULT);
			$query = "insert into user(username,email,password,gender,birthdate) values('{$_POST['username']}' ,'{$_POST['email']}', '$hash', '{$_POST['gender']}', '{$_POST['birthdate']}') ";
			$result = mysqli_query($connect, $query);
		}
		if ($result) {
			echo "<h3 style='text-align:center'>You are registered successfully.</h3>";
		}
	}
	?>
	<section class="parent_class">
		<div class="sub_class">
			<div class="formdiv">
				<h2 align="center" style="margin-bottom: 10px;color: #fff;background-color: green;padding: 15px;">Registration</h2>
				<div style="width: 70%;margin: 0 auto;font-size: 30px;">
					<form action="" onsubmit="return validationFrom()" method="post">
						<table cellspacing="6">
							<tr>
								<td><label for="Name">Name :</label></td>
								<td><input type="text" name="name" id="name" placeholder="Enter Your Name" style="width: 260px;height: 40px;font-size: 17px;padding: 5px;"></td>
							</tr>
							<tr>
								<td><label for="Username">Username :</label></td>
								<td><input type="text" name="username" id="username" placeholder="Enter Your Username" style="width: 260px;height: 40px;font-size: 17px;padding: 5px;"></td>
							</tr>
							<tr>
								<td><label for="Email">Email :</label></td>
								<td><input type="email" name="email" id="email" placeholder="Enter Your email" style="width: 260px;height: 40px;font-size: 17px;padding: 5px;"></td>
							</tr>
							<tr>
								<td><label for="gender">Gender:</label></td>
								<td>
									<select name="gender" id="gender">
										<option value="">Select Gender</option>
										<option value="male">Male</option>
										<option value="female">Female</option>
										<option value="other">Other</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><label for="date_of_birth">Date of Birth:</label></td>
								<td>
									<input type="date" name="birthdate" id="birthdate" placeholder="Enter Your Date of Birth" style="width: 260px;height: 40px;font-size: 17px;padding: 5px;">
								</td>
							</tr>
							<tr>
								<td><label for="password">Password:</label></td>
								<td><input type="password" name="password" id="password" placeholder="Enter Your Password" style="width: 260px;height: 40px;font-size: 17px;padding: 5px;"></td>
							</tr>
							<tr>
								<td><label for="password">Re-type Password:</label></td>
								<td><input type="password" name="rpassword" id="rpassword" placeholder="Confirm Your Password" style="width: 260px;height: 40px;font-size: 17px;padding: 5px;"></td>
							</tr>
							<tr>
								<td><label for="contact">Contact No:</label></td>
								<td><input type="text" name="contact" id="contact" placeholder="Enter Your Contact" style="width: 260px;height: 40px;font-size: 17px;padding: 5px;"></td>
							</tr>
							<tr>
								<td></td>
								<td><input style="padding: 15px;font-size: 19px;cursor: pointer;background-color: yellowgreen;border-radius: 20px;color: #fff;" type="submit" name="submit" value="submit" autocomplete="off"></td>
							</tr>
						</table>
					</form>
				</div>

			</div>
		</div>
	</section>

	<script type="text/javascript">
		function validationFrom() {

			var namevalue = document.getElementById('name').value;
			var usernamevalue = document.getElementById('username').value;
			var emailvalue = document.getElementById('email').value;
			var passwordvalue = document.getElementById('password').value;
			var rpasswordvalue = document.getElementById('rpassword').value;
			var contactvalue = document.getElementById('contact').value;

			if (namevalue == "") {
				alert("Name cannot be empty ");
				return false;
			} else if (usernamevalue == "") {
				alert("Username cannot be empty ");
				return false;
			} else if (emailvalue == "") {
				alert("Email cannot be empty ");
				return false;
			} else if ((passwordvalue.length <= 8) || (passwordvalue.length > 32)) {
				alert("Password length is between 8-32 chars");
				return false;
			} else if (rpasswordvalue != passwordvalue) {
				alert("Password is not match");
				return false;
			} else if (contactvalue == "") {
				alert("Contact cannot be empty ");
				return false;
			} else {
				return true;
			}
		}
	</script>

</body>

</html>