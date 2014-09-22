<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>
	harjtus-5
	</title>
</head>

<body>

	<h2>booleans</h2>

	<?php 
		$result1 = True;
		
	 ?>	
	 <?php $result2 = False; ?>

	 	<?php echo $result1?><br>
		<?php echo $result2?><br>

		<?php echo "Result1: {$result1}"?><br>
		<?php echo "Result2: {$result2}"?><br>

		<?php echo "Kas result1 on boolean? " .  is_bool($result1)?><br>
		<?php echo "Kas result2 on boolean? " .  is_bool($result2)?><br>

	

	<h2>Andmetüüpide</h2>
	<h3>NULL</h3>

	<?php $var1 = null ?>
	<?php $var2 = "null" ?>
	<?php $var3 = "" ?>
	<?php $var4 =  0 ?>

	<?php echo "var1 on null?" . is_null($var1) ?><br>	
	<?php echo "var2 on null?" . is_null($var2) ?> <br>
	<?php echo "var3 on null?" . is_null($var3) ?><br> 
	<?php echo "var4 on null?" . is_null($var4) ?> <br>


	<h3>set</h3>
	<?php echo "kas var1 on v22rtustatud?" . isset($var1) ?><br>
	<?php echo "kas var2 on v22rtustatud?" . isset($var2) ?><br>
	<?php echo "kas var3 on v22rtustatud?" . isset($var3) ?><br>
	<?php echo "kas var4 on v22rtustatud?" . isset($var4) ?><br>

		<h2>empty</h2>

			<?php $var1=""?><br>
			<?php $var2="0"?><br>
			<?php $var3 = 0 ?><br>
			<?php $var4 = 0.0 ?><br>
			<?php $var5= array() ?><br>
			<?php $var6 = null?><br>
			<?php $var7 = $result2?><br>
			<?php echo "var1 on empty?". empty($var1)?><br>
			<?php echo "var2 on empty?". empty($var2)?><br>
			<?php echo "var3 on empty?". empty($var3)?><br>
			<?php echo "var4 on empty?". empty($var4)?><br>
			<?php echo "var5 on empty?". empty($var5)?><br>
			<?php echo "var6 on empty?". empty($var6)?><br>
			<?php echo "var7 on empty?". empty($var7)?><br>


		<h2>andmetüübiteisendamine</h2>

		<?php $count = 2 ?><br>
		<?php echo $count ?><br>
		<?php echo gettype($count) ?><br>

		<?php settype($count, "string"); ?><br>
		<?php echo gettype($count);?><br>
		<?php echo $count ;?><br>

		<?php settype($count, "float"); ?>
		<?php echo gettype($count);?><br>
		<?php echo $count ;?><br>

		<?php settype($count, "array"); ?>
		<?php echo gettype($count);?><br>
		<?php print_r(array($count)) ;?><br>

		<?php settype($count, "bool"); ?>
		<?php echo gettype($count);?><br>
		<?php echo $count ;?><br>

		<h2>Konstandid</h2>


		<?php define("MAX_WIDTH", 980); ?>

		<?php echo MAX_WIDTH; ?><br>

		<?php define("MAX_WIDTH", 701); ?>

		<?php echo MAX_WIDTH; ?><br>

		<?php // MAX_WIDTH = MAX_WIDTH + 5;  ?>







</body>

</html>