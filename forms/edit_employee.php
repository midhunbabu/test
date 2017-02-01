<!DOCTYPE html>
<html>
	<head>
		<title>Edit Employee</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="../style/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<form method="POST" action="edit_employee.php">
			<div class="container-fluid">
				<div class="row add col-md-4 col-md-offset-4">
					<div>
						<h3>Edit Emloyee</h3><br>
						<label>Name </label><div class="same"><input type="text" name="name" placeholder="Name"></div><br>
						<label>Phone </label><div class="same"><input type="text" name="phone" placeholder="Phone Number"></div><br>
						<label>Email </label><div class="same"><input type="text" name="email" placeholder="Email"></div><br>
						<label>Gender</label><div class="same"><input type="radio" name="male">Male<input type="radio" name="female">Female</div><br>
						<label>Hobbies</label><div class="same"><input type="checkbox" name="music">Listening to Music<br>
											  <input type="checkbox" name="read">Reading<br>
											  <input type="checkbox" name="browse">Browsing<br>
											  <input type="checkbox" name="play">Playing</div><br>
						<label>Profile Pic</label><div class="same"><input type="text" name="pic" ><input type="file" name="image" value="Browse"></div><br>
						<label>Country</label><div class="same"><select>
														<option value="AF">Afghanistan</option>
														<option value="AL">Albania</option>
														<option value="DZ">Algeria</option>
														<option value="AR">Argentina</option>
														<option value="AM">Armenia</option>
														<option value="AW">Aruba</option>
														<option value="AU">Australia</option>
														<option value="AT">Austria</option>
														<option value="BR">Brazil</option>
														<option value="BN">Brunei Darussalam</option>
														<option value="BG">Bulgaria</option>
														<option value="BF">Burkina Faso</option>
														<option value="BI">Burundi</option>
														<option value="TD">Chad</option>
														<option value="CL">Chile</option>
														<option value="CN">China</option>
														<option value="CX">Christmas Island</option>
														<option value="HU">Hungary</option>
														<option value="IS">Iceland</option>
														<option value="IN">India</option>
														<option value="ID">Indonesia</option>
														<option value="IR">Iran, Islamic Republic of</option>
														<option value="IQ">Iraq</option>
														<option value="IE">Ireland</option>
														<option value="IM">Isle of Man</option>
														<option value="IL">Israel</option>
														<option value="LI">Liechtenstein</option>
														<option value="LT">Lithuania</option>
														<option value="LU">Luxembourg</option>
														<option value="MO">Macao</option>
														<option value="AE">United Arab Emirates</option>
														<option value="GB">United Kingdom</option>
														<option value="US">United States</option>
														<option value="UM">United States Minor Outlying Islands</option>
														<option value="UY">Uruguay</option>
														<option value="UZ">Uzbekistan</option>
														<option value="VU">Vanuatu</option>
														<option value="VE">Venezuela, Bolivarian Republic of</option>
														<option value="VN">Viet Nam</option>
														<option value="VG">Virgin Islands, British</option>
														<option value="VI">Virgin Islands, U.S.</option>
														<option value="WF">Wallis and Futuna</option>
														<option value="EH">Western Sahara</option>
														<option value="YE">Yemen</option>
											  </select></div><br>
						<center><input type="submit" name="submit" id="submit" value="Update"></center>
					</div>
				</div>
			</div>
		</form>
	</body>
</html>