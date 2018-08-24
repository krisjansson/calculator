<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Calculator</title>
	<style>
		form{
			margin-top: 10%;
		}

	table {
		border: 5px groove #075BCD;
		background: #212121;
		margin: 0 auto;
		font-size: 24px;
		font-weight: 600;
		color: WHITE;
		text-align: center;
		padding: 15px;
	}
	h1 {
		text-align: center;
		color: red;
		font-size: 50px;
	}
	
	</style>
</head>

<body>
	
<?php
	
		$add1 = $_GET['fvalue'];
		$add2 = $_GET['lvalue'];

	if( isset( $_GET['calculate'] ))

	{
	$operator=$_GET['operator'];

			if($operator=="+")
			{
			$res= $add1 + $add2;
			}

			elseif($operator=="-")
			{
			$res= $add1 - $add2;
			}

			elseif($operator=="*")
			{
			$res =$add1 * $add2;

			}

			elseif($operator=="/")
			{
			$res= $add1 / $add2;

			}
		
			elseif($operator=="%")
			{
			$res= $add1 % $add2;

			}

		}

?>

<form action="<?=$_SERVER['PHP_SELF']?>" method="get">

	<table>
		<tr>
			<td>CASIO</td>
		</tr>
		<tr>
			<td>Calculator</td>
		</tr>
           <tr>
               <td>
                    <input name="fvalue" type="text" placeholder="Any number"/>
				</td>
			</tr>
           <tr>
		<td>
            <select name="operator">
				
				<option>operators</option>
				<option>+</option>
				<option>-</option>
				<option>*</option>
				<option>/</option>
				<option>%</option>
						
			</select>
		</td>
               </tr>
            <tr>
                <td><input name="lvalue" type="text" placeholder="Any number"/></td>
            </tr>
            <tr>
                <td><input type="submit" name="calculate" value="Calculate" /></td>
            </tr>
            <tr>
                <td ><?php echo $add1." ".$operator." ".$add2." = ".$res;?></td>
            </tr>
       </table>

 </form>
	
<?php 
	
	if($_GET['fvalue']==NULL || $_GET['lvalue']==NULL)
		{
		
	echo "<h1>Enter a interger into both fields</h1>";
	}
?>

<?php
	
	if($operator=="operators" && $_GET['lvalue']!=NULL)
		{
		
	echo "<h1>Remeber to select a operator</h1>";
	}
		elseif($operator=="operators" && $_GET['fvalue']!=NULL)
		{
		
	echo "<h1>Remeber to select a operator</h1>";
	}
	
?>
</body>
</html>
