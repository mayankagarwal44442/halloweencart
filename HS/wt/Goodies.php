<?php
extract($_POST);
$amount_per_item = [4,7,2,5,8,9,3,1];
$amount = 0;

if (isset($obj1))  $amount+=$amount_per_item[0];
if (isset($obj2))  $amount+=$amount_per_item[1];
if (isset($obj3))  $amount+=$amount_per_item[2];
if (isset($obj4))  $amount+=$amount_per_item[3];
if (isset($obj5))  $amount+=$amount_per_item[4];
if (isset($obj6))  $amount+=$amount_per_item[5];
if (isset($obj7))  $amount+=$amount_per_item[6];
if (isset($obj8))  $amount+=$amount_per_item[7];
if (isset($obj9))  $amount+=$amount_per_item[8];





?>

<html>
	<body>
		<form action="final_buy.php" method="post">
			<label>Address</label><br>
  			<textarea name="address" rows="10" cols="30"></textarea><br>

			Amount:
			<span><?php echo $amount;?></span><br>

			<input type="hidden" name="amount" value=<?php echo $amount;?>>

			<input type="Submit" value="Buy">
		</form>
	</body>
</html>