<!DOCTYPE html>
<html>
<head>
<title>Weather App</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
<h1>Weather App</h1>
	<form method="post">
		<label for="state">Select a State:</label>
		<select id="state" name="state">
			<option value="">--Select State--</option>
			<option value="Abuja">Abuja</option>
			<option value="Abia">Abia</option>
			<option value="Adamawa">Adamawa</option>
			<option value="Akwa Ibom">Akwa Ibom</option>
			<option value="Anambra">Anambra</option>
			<option value="Bauchi">Bauchi</option>
			<option value="Bayelsa">Bayelsa</option>
			<option value="Benue">Benue</option>
			<option value="Borno">Borno</option>
			<option value="Cross River">Cross River</option>
			<option value="Delta">Delta</option>
			<option value="Ebonyi">Ebonyi</option>
			<option value="Edo">Edo</option>
			<option value="Ekiti">Ekiti</option>
			<option value="Enugu">Enugu</option>
			<option value="Gombe">Gombe</option>
			<option value="Imo">Imo</option>
			<option value="Jigawa">Jigawa</option>
			<option value="Kaduna">Kaduna</option>
			<option value="Kano">Kano</option>
			<option value="Katsina">Katsina</option>
			 <option value="Kebbi">Kebbi</option>
			<option value="Kogi">Kogi</option>
			<option value="Kwara">Kwara</option>
			<option value="Lagos">Lagos</option>
			<option value="Nasarawa">Nasarawa</option>
			<option value="Niger">Niger</option>
			<option value="Ogun">Ogun</option>
			<option value="Ondo">Ondo</option>
			<option value="Osun">Osun</option>
			<option value="Oyo">Oyo</option>
			<option value="Plateau">Plateau</option>
			<option value="Rivers">Rivers</option>
			<option value="Sokoto">Sokoto</option>
			<option value="Taraba">Taraba</option>
			<option value="Yobe">Yobe</option>
			<option value="Zamfara">Zamfara</option>
		</select>
		<button type="submit" name="submit">Get Weather</button>
	</form>
<?php
if(isset($_POST['submit'])){
    $state = $_POST['state'];
    $api_key = "2263c302991103b5b7f82ea80742497d";
    $url = "https://api.openweathermap.org/data/2.5/weather?q=" . $state . ",NG&appid=" . $api_key . "&units=metric";
    $data = file_get_contents($url);
    $weather = json_decode($data);

    $city = $weather->name;
    $temp = $weather->main->temp;
    $desc = $weather->weather[0]->description;
?>


		<div class="result">
			<h2>Current Weather for <?php echo $city; ?></h2>
			<p>Temperature: <?php echo $temp; ?>&deg;C</p>
			<p>Description: <?php echo $desc; ?></p>
		</div>

		<?php
			}
		?>
</div>
</body>
</html>