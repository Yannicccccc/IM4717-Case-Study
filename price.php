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
    $data_col = array("coffeeid", "name", "price_s", "price_d");
    $data_table = array(array());
    $query = "SELECT* FROM coffee_price;";
    $result = $db->query($query);

    for ($i=0; $i<3; $i++) {
        $row = $result -> fetch_assoc();
        $data_table[$i] = $row;
    }

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
	<nav>
    <ul>
      	<li><a href="price.php">Update</a></li>
      	<li><a href="report.html">Report</a></li>
	</ul>
  	</nav>
  	</div>
  
  	<div id="rightcolumn">
		<div class="content">
		<h2>Coffee at JavaJam</h2>

		<form type="post" action="show_post.php" id="menuForm">
		<table class="price">
			<tbody>
			<tr class="price">
				<td class="price"><input type="checkbox" id="update0" onclick="return openForm(1)"></td>
				<td class="price" style="text-align: center;"><strong>Just Java</strong></td>
				<td class="price">Regular house blend, decaffeinated coffee, or flavor of the day.<br>
					Endless Cup $<?php echo $data_table[0]["price_s"];?>
				</td>
			</tr>
			<tr class="price">
				<td class="price"><input type="checkbox" id="update1" onclick="return openForm(2)"></td>
				<td class="price" style="text-align: center;"><strong>Cafe au Lait</strong></td>
				<td class="price">House blended coffee infused into a smooth, steamed milk.<br>
					Single $<?php echo $data_table[1]["price_s"];?> 
					Double $<?php echo $data_table[1]["price_d"];?>
				</td>	
			</tr>
			<tr class="price">
				<td class="price"><input type="checkbox" id="update2" onclick="return openForm(3)"></td>
				<td class="price" style="text-align: center;"><strong>Iced Cappuccino</strong></td>
				<td class="price">Sweet espresso blended with icy-cold milk and served in a chilled glass.<br>
					Single $<?php echo $data_table[2]["price_s"];?> 
					Double $<?php echo $data_table[2]["price_d"];?>
				</td>
			</tr>
			</tbody>
		</table>
		</form>
		<form action="menu.php">
			<input type="submit" value="back">
		</form>	
		<script type = "text/javascript" src = "priceUpdate.js"></script>
		</div>
	</div>  

	<div class="form_popup" id="updateForm1">
		<form method="POST" action="priceUpdate.php" class="form_container">
			<h2>Update Price</h2>  
			<label for="endless"><b>Endless Cup</b></label>
			<input type="text" placeholder="Enter New Price" name="endless" required> 
			<input type="submit" value="Submit" class="btn">
			<input type="button" value="cancel" class="btn" onclick="closeForm()">
		</form>
	</div>

	<div class="form_popup" id="updateForm2">
		<form method="POST" action="priceUpdate.php" class="form_container">
			<h2>Update Price</h2>  
			<label for="single1"><b>Single</b></label>
			<input type="text" placeholder="Enter New Price" name="single1" required> 
			<label for="double1"><b>Double</b></label>
			<input type="text" placeholder="Enter New Price" name="double1" required> 
			<input type="submit" value="Submit" class="btn">
			<input type="button" value="cancel" class="btn" onclick="closeForm()">
		</form>
	</div>

	<div class="form_popup" id="updateForm3">
		<form method="POST" action="priceUpdate.php" class="form_container">
			<h2>Update Price</h2>  
			<label for="single2"><b>Single</b></label>
			<input type="text" placeholder="Enter New Price" name="single2" required> 
			<label for="double2"><b>Double</b></label>
			<input type="text" placeholder="Enter New Price" name="double2" required> 
			<input type="submit" value="Submit" class="btn">
			<input type="button" value="cancel" class="btn" onclick="closeForm()">
		</form>
	</div>
  
  	<footer>
    	<small><i>Copyright &copy; 2019 JavaJam Coffee House</i></small>
		<br>
		<small><i><a href="Jingying@Luo.com">Jingying@Luo.com</a></i></small>
  	</footer>	
  
</div>
<script type = "text/javascript" src = "priceUpdate.js"></script>
</body>
</html>


