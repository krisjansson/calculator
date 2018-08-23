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
	h1 {
		text-align: center;
		color: red;
		font-size: 50px;
	}
	
	</style>
<body>
	
	<?php

if( isset( $_GET['calculate'] ))

{
$operator=$_GET['operator'];

		if($operator=="+")
		{
		$add1 = $_GET['fvalue'];
		$add2 = $_GET['lvalue'];
		$res= $add1 + $add2;
		}
		elseif($operator=="-")
		{
		$add1 = $_GET['fvalue'];
		$add2 = $_GET['lvalue'];
		$res= $add1 - $add2;
		}
	
		elseif($operator=="*")
		{
		$add1 = $_GET['fvalue'];
		$add2 = $_GET['lvalue'];
		$res =$add1 * $add2;

		}

		elseif($operator=="/")
		{
		$add1 = $_GET['fvalue'];
		$add2 = $_GET['lvalue'];
		$res= $add1 / $add2;

		}

	}

?>

<form>

<table>
	<td>CALCULATOR 2000</td>
           <tr>
               <td>
                    <input name="fvalue" type="text" placeholder="Any number"/>
				</td>
            <tr>
	<td>
            <select name="operator">
				
				<option>options</option>
				<option>+</option>
				<option>-</option>
				<option>*</option>
				<option>/</option>
						
			</select>
	</td>
               </tr>
            <tr>
 
                <td>
                    <input name="lvalue" type="text" placeholder="Any number"/></td>
            </tr>
            <tr>

                <td><input type="submit" name="calculate" value="Calculate" /></td>
            </tr>
            <tr>
                <td ><?php echo $add1." ".$operator." ".$add1." = ".$res;?></td>
            </tr>
       </table>

 </form>
	<?php if($_GET['fvalue']==NULL || $_GET['lvalue']==NULL)
		{
	echo "<h1>Enter Something in both boxes</h1>";
	}
	
?>

<?php
	
	if($operator=="options" && $_GET['lvalue' . 'fvalue']!=NULL)
		{
		echo "<h1>Remeber to select a option</h1>";
	}
	

	
	
?>
</body>
</html>
