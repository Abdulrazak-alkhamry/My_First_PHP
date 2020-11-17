<!DOCTYPE html>
<html>
<head>
   	<title></title>
   	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
	<?php $name = "Abod";?>
	<p>Hi! My name is <?php echo "$name"?></p>
   
    <?php$age = 29;?>
	<p>I am <?php echo "$age"?> years old.</p>

    <?php$eyes = "brown";?>
	<p>My eyes are <?php echo "$eyes"?></p>

    <?php$nameFamilly = array("Me", "MrB", "MrC","MrD");?>
	<p>The first person in my family is <?php echo "$nameFamilly[0]"?></p>

    <?php$hungry = true;?>
	<p> Am i Hungry ? <?php
							if ($hungry == true) {
								echo "Oui";
							}
							else {
								echo "Non";
							}
	 					?>
	 	
	 </p>

</body>
</html>