<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Calculator</title>
</head>
<style>
	table {
		border: 5px groove #075BCD;
		background: grey;
		margin: 0 auto;
		font-size: 24px;
		font-weight: 600;
	}

	</style>
<body>
	
<h1>Calculator 2000</h1>
	
	<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
		<input type="text" name="val1">
		
		<br>
		
		<button type="radio" name="operator" value="+">+</button>
		<button type="radio" name="operator" value="-">-</button>
		<button type="radio" name="operator" value="*">*</button>
		<button type="radio" name="operator" value="/">/</button>
		
		<br>
		
		<input type="text" name="val2">
		

	</form>
	
	<?php 
		//$v1 = $_GET['val1'];
		//$v2 = $_GET['val2'];
		$v1 = filter_input(INPUT_GET, 'val1', FILTER_VALIDATE_INT) or die ('Put in a NUMBER god damit!');
		$v2 = filter_input(INPUT_GET, 'val1', FILTER_VALIDATE_INT) or die ('Put in a NUMBER god damit!');
		$op = $_GET['operator'];

		
		switch($op){
				case '+': $res = $v1 + $v2;	break;
				case '-': $res = $v1 - $v2;	break;
				case '*': $res = $v1 * $v2;	break;
				case '/': $res = $v1 / $v2;	break;
				
			default:
				$res = 'Unknown operator'.$op;

		}
	
		  echo $v1.' '.$op. ' '.$v2. ' = ' .$res;
	
	?>

</body>
</html>
