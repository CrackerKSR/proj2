<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/uploader.css">
	<link rel="stylesheet" type="text/css" href="style/forall.css">
</head>
<body>
<?php echo file_get_contents('html/header.html') ?>


<form method="post">
	<input placeholder="mod_name" type="text" name="mod_name" required> <br>
	<input placeholder="modder_name" type="text" name="modder_name"><br>
	<input placeholder="your_name" type="text" name="your_name"><br>
	<fieldset>
		<legend>Type</legend>
		<input type="checkbox" name="team">
		<label for="team"> TEAM </label>
		<input type="checkbox" name="ffa">
		<label for="ffa"> FFA </label>
		<input type="checkbox" name="cop">
		<label for="cop"> COP </label>
	</fieldset><br>
	<label for="mod_file">Choose py Mod File</label>
	<input type="file" name="mod_file" accept=".py"> <br>
	<label for="mod_ss">Choose Screenshot</label>
	<input type="file" name="mod_ss" accept="image/*"> <br>

	<input type="submit">
</form>
<?php
$form = $_POST; 
foreach ($form as $key => $value) {
	print_r($key);
	echo "  = ";
	print_r($value);
	echo "<br>";
}
if(isset($_POST)){
	echo "<h3> Done! Mod is uploaded. Soon it will be added in mod page  </h3>";
	// echo $form['mod_file'];
}
 ?>

</body>
</html>