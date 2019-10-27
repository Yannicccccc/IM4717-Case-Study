<!DOCTYPE html>
<html lang="en">
<head>
<title>JavaJam Coffee House - Menu</title>
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
		<script type = "text/javascript" src = "menuCalculation.js"></script>
  	</header>
  
	<div id="leftcolumn">
  	<nav>
    	<ul>
      		<li><a href="index.html">Home</a></li>
      		<li><a href="menu.php">Menu</a></li>
      		<li><a href="music.html">Music</a></li>
			<li><a href="jobs.html">Jobs</a></li>
			<li><a href="javascript:admin();">Admin</a></li>
		</ul>
  	</nav>	
  	</div>
  
  	<div id="rightcolumn">
		<div class="content">
		<h2>Coffee at JavaJam</h2>

		<form type="POST" action="purchase.php" id="menuForm">
		<table class="menu">
			<tbody>
			<tr class="menu">
				<td class="menu" style="text-align: center;"><strong>Just Java</strong></td>
				<td class="menu">Regular house blend, decaffeinated coffee, or flavor of the day.<br>
					<input type="radio" name="single0" id="single0" value="<?php echo $data_table[0]["price_s"];?>" checked> 
					Endless Cup $<?php echo $data_table[0]["price_s"];?>
				</td>
				<td class="menu">Qtn: <input type="number" name="order0" id="order0" size="4" onkeyup="return updateSingle(0)"></td>
				<td class="menu">$<input type="text" name="total0" id="total0" size="4" value="0.00" readonly></td>
			</tr>
			<tr class="menu">
				<td class="menu" style="text-align: center;"><strong>Cafe au Lait</strong></td>
				<td class="menu">House blended coffee infused into a smooth, steamed milk.<br>
					<input type="radio" name="single1" id="single1" value="<?php echo $data_table[1]["price_s"];?>" onclick="return btnUpdate(1)" checked> 
					Single $<?php echo $data_table[1]["price_s"];?>
					<input type="radio" name="double1" id="double1" value="<?php echo $data_table[1]["price_d"];?>" onclick="return btnUpdate(1)"> 
					Double $<?php echo $data_table[1]["price_d"];?>
				</td>
				<td class="menu">Qtn: <input type="number" name="order1" id="order1" size="4" onkeyup="return updateSingle(1)"></td>
				<td class="menu">$<input type="text" name="total1" id="total1" size="4" value="0.00" readonly></td>
			</tr>
			<tr class="menu">
				<td class="menu" style="text-align: center;"><strong>Iced Cappuccino</strong></td>
				<td class="menu">Sweet espresso blended with icy-cold milk and served in a chilled glass.<br>
					<input type="radio" name="single2" id="single2" value="<?php echo $data_table[2]["price_s"];?>" onclick="return btnUpdate(2)" checked> 
					Single $<?php echo $data_table[2]["price_s"];?>
					<input type="radio" name="double2" id="double2" value="<?php echo $data_table[2]["price_d"];?>" onclick="return btnUpdate(2)"> 
					Double $<?php echo $data_table[2]["price_d"];?>
				</td>
				<td class="menu">Qtn: <input type="number" name="order2" id="order2" size="4" onkeyup="return updateSingle(2)"></td>
				<td class="menu">$<input type="text" name="total2" id="total2" size="4" value="0.00" readonly></td>
			</tr>	
			</tbody>
			<tfoot class="menu">
			<tr>
				<td colspan="4">Total: $<input type="text" name="total" id="total" value="0.00" size="8" readonly></td>
			</tr>
			<tr>
				<td colspan="4"><input type="submit" value="comfirm"></td>
			</tr>		
			</tfoot>
		</table>
		</form>
		<script type = "text/javascript" src = "menuCalculation.js"></script>
		</div>
	</div>
	  
	<div class="form_popup" id="adminForm">
		<form method="POST" action="show_post.php" class="form_container">
			<h2>Update Price</h2>  
			<label for="username"><b>Username</b></label>
			<input type="text" placeholder="Enter username" name="username" id="acc" required>
			<label for="password"><b>Password</b></label>
			<input type="password" placeholder="Enter password" name="password" id="psw" required> 
			<input type="button" value="submit" class="btn" onclick="validateUser()">
			<input type="button" value="cancel" class="btn" onclick="closeForm()">
		</form>
	</div>
  
  	<footer>
    	<small><i>Copyright &copy; 2019 JavaJam Coffee House</i></small>
		<br>
		<small><i><a href="Jingying@Luo.com">Jingying@Luo.com</a></i></small>
  	</footer>	
  
</div>
<script type = "text/javascript" src = "menuCalculation.js"></script>
</body>
</html>


