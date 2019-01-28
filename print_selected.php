<?php 
$select_items = $_GET["select_items"];
$total = 0;
foreach ($select_items as $value) {
	//echo "$value <br>";
	echo "You selected $value <br>";
	if ($value == "Shoe"){
		$total = $total + 1500;
	}elseif ($value == "Jeans"){
		$total = $total + 2000;
	}elseif ($value == "Shirt"){
		$total = $total + 600;
	}elseif ($value == "Watch"){
		$total = $total + 2600;
	}elseif ($value == "Sweater"){
		$total = $total + 1300;
	}else{
		print("No Item Selected");
	}
}
print("The total amount of items you selected is $total")
?>