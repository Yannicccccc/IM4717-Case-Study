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
    $result->free();

    $query = "SELECT SUM(earn1) AS tot FROM order_table WHERE id = '" .$today. "';";
    $result = $db->query($query);
    $tot1 = $result -> fetch_assoc();
    $result->free();

    $query = "SELECT SUM(earn2) + SUM(earn3) AS tot FROM order_table WHERE id = '" .$today. "';";
    $result = $db->query($query);
    $tot2 = $result -> fetch_assoc();
    $result->free();

    $query = "SELECT SUM(earn4) + SUM(earn5) AS tot FROM order_table WHERE id = '" .$today. "';";
    $result = $db->query($query);
    $tot3 = $result -> fetch_assoc();
    $result->free();

    $db->close();
?>
</head>

<body>
<div id="wrapper">
	<header>
		<img src="header.PNG" class="center"/>
		<script type = "text/javascript" src = "priceUpdate.js"></script>
  	</header>
  
	<div id="leftcolumn">
  	</div>
  
  	<div id="rightcolumn">
		<div class="content">
		<h2>Coffee at JavaJam</h2>

		<table class="sales">
            <tbody>
            <tr class="sales">
                <td class="sales" style="text-align: center;"><strong>Coffee</strong></td>
                <td class="sales" style="text-align: center;"><strong>Single</strong></td>
                <td class="sales" style="text-align: center;"><strong>Double</strong></td>
                <td class="sales" style="text-align: center;"><strong>Total sales up to date</strong></td>
            </tr>    
			<tr class="sales">
				<td class="sales" style="text-align: center;"><strong>Just Java</strong></td>
                <td class="sales">$<?php echo $data["earn1"];?></td>
                <td class="sales">N.A.</td>
                <td class="sales">$<?php echo $tot1["tot"];?></td>
			</tr>
			<tr class="sales">
                <td class="sales" style="text-align: center;"><strong>Cafe au Lait</strong></td>
                <td class="sales">$<?php echo $data["earn2"];?></td>
                <td class="sales">$<?php echo $data["earn3"];?></td>
                <td class="sales">$<?php echo $tot2["tot"];?></td>
			</tr>
			<tr class="sales">
                <td class="sales" style="text-align: center;"><strong>Iced Cappuccino</strong></td>
                <td class="sales">$<?php echo $data["earn4"];?></td>
                <td class="sales">$<?php echo $data["earn5"];?></td>
                <td class="sales">$<?php echo $tot3["tot"];?></td>
            </tr>
			</tbody>
        </table>
        
		<form action="menu.php">
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


