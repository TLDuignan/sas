<!DOCTYPE html>
<!--Author:
	Date:
	File:	  orders.php
	Purpose:
	
-->

<html>
<head>
	<title>BLUEBERRY ORDERS</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php
  	$orders = array(2, 17, 4, 6, 1, 3, 1, 15, 1, 6);

    $quantity = 0;
    $orderNum = 0;
		
		print ("<h1>BLUEBERRY ORDERS</h1>");
		print ("<table border = \"1\">");
		print ("<tr><th>Order #</th><th>Quantity</th></tr>");
    for($i = 0; $i < sizeof($orders); $i = $i + 1)
		{
      $orderNum = $i + 1;
			print ("<tr><td>Order $orderNum</td><td>$orders[$i]</td></tr>");
      
      $quantity = $quantity + $orders[$i];
    }
		print ("</table>");
    $totalBushes = 0;
    $multBrushes = 0;

    for($i = 0; $i < sizeof($orders); $i = $i + 1)
    {
     $totalBushes = $totalBushes + $orders[$i];
  
      if ($orders[$i] > 1)
       $multBrushes = $multBrushes + 1;

    }


    

		print ("<p>TOTAL NUMBER OF BUSHES ORDERED: $totalBushes.</p>");
		print ("<p>TOTAL NUMBER OF ORDERS: ".sizeof($orders).".</p>");		
    print ("<p>TOTAL NUMBER OF ORDERS FOR MULTIPLE BRUSHES: $multBrushes.</p>");
	?>
</body>
</html>
