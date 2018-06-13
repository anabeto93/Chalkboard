<?php
/**
* Author: Richard Anabeto Opoku
* Purpose: To create a dropdown with fruits while setting apple as the default 
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Question 3 | CBE test</title>
</head>
<body>
<?php
$fruits = array('orange','apple','banana'); ?>
<select>
<?php
foreach($fruits as $fruit) { ?> 
	<option value="<?php echo $fruit; ?>" <?php if($fruit == 'apple') { echo "selected"; } ?> > <?php echo $fruit; ?></option>
	<?php } ?>
</select>
</body>
</html>
