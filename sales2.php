<!DOCTYPE html>
<html lang="en">
<head>
<title>JavaJam Coffee House - Price Update</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<?php
    @ $db = new mysqli('localhost', 'f38ee', 'f38ee', 'f38ee');
    if (mysqli_connect_errno()){
        echo 'Error: Could not connect to database.  Please try again later.';
        exit;
    }
    
    $today = date('Y-m-d');
    $query = "SELECT * FROM order_table WHERE id = '" .$today. "';";
    $result = $db->query($query);
    $data = $result -> fetch_assoc();

    $max = 0;
    $name = "";
    $earn = array("earn1", "earn2", "earn3", "earn4", "earn5");
    $coffee = array("Just Java", "Cafe au Lait - single shot", "Cafe au Lait - double shot", "Iced Cappucino - single shot", "Iced Cappucino - double shot");
    for ($i=0; $i<5; $i++){
        if ($max < $data[$earn[$i]]) {
            $max = $data[$earn[$i]];
            $name = $coffe[$i];
        }
    }

    $result->free();
    $db->close();
?>
</head>

<body>
<div id="wrapper">
	<header>
		<img src="header.PNG" class="center"/>
  	</header>
  
	<div id="leftcolumn">
  	</div>
  
  	<div id="rightcolumn">
		<div class="content">
		<h2>Sales Report</h2>

		<table class="sales">
            <tbody>
            <tr class="sales">
                <td class="sales" style="text-align: center;"><strong>Coffee</strong></td>
                <td class="sales" style="text-align: center;"><strong>Single</strong></td>
                <td class="sales" style="text-align: center;"><strong>Double</strong></td>
            </tr>    
			<tr class="sales">
				<td class="sales" style="text-align: center;"><strong>Just Java</strong></td>
                <td class="sales"><?php echo $data["qty1"];?></td>
                <td class="sales">N.A.</td>
			</tr>
			<tr class="sales">
                <td class="sales" style="text-align: center;"><strong>Cafe au Lait</strong></td>
                <td class="sales"><?php echo $data["qty2"];?></td>
                <td class="sales"><?php echo $data["qty3"];?></td>
			</tr>
			<tr class="sales">
                <td class="sales" style="text-align: center;"><strong>Iced Cappuccino</strong></td>
                <td class="sales"><?php echo $data["qty4"];?></td>
                <td class="sales"><?php echo $data["qty5"];?></td>
            </tr>
            <tr class="sales">
                <td class="sales" style="text-align: center;" colspan="3"><strong>Best Seller:</strong>$<?php echo $name;?></td>
			</tr>
			</tbody>
		</table>
		
		<form action="report.html">
			<input type="submit" value="back">
		</form>	
		</div>
	</div>  
  
  	<footer>
    	<small><i>Copyright &copy; 2019 JavaJam Coffee House</i></small>
		<br>
		<small><i><a href="Jingying@Luo.com">Jingying@Luo.com</a></i></small>
  	</footer>	
  
</div>
</body>
</html>


