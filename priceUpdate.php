<!DOCTYPE html>
<html lang="en">
<head>
    <title>JavaJam Update Results</title>
</head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
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
        <small><p>Go back to <a href="price.php">Admin Space</a></p></small>
        <h2>Update Result:</h2>  
        <?php
            $p_endless = $_POST['endless'];
            $p_endless = doubleval($p_endless);

            $p_single1 = $_POST['single1'];
            $p_single1 = doubleval($p_single1);
            $p_double1 = $_POST['double1'];
            $p_double1 = doubleval($p_double1);

            $p_single2 = $_POST['single2'];
            $p_single2 = doubleval($p_single2);
            $p_double2 = $_POST['double2'];
            $p_double2 = doubleval($p_double2);

            if ($p_endless!=0) {
                $query = "UPDATE coffee_price SET price_s=".$p_endless." WHERE coffeeid=0";
            }
            if ($p_single1!=0 && $p_double1!=0) {
                $choice = 2;
                $query = "UPDATE coffee_price SET price_s=".$p_single1.", price_d='".$p_double1."' WHERE coffeeid=1";
            }
            if ($p_single2!=0 && $p_double2!=0) {
                $query = "UPDATE coffee_price SET price_s=".$p_single2.", price_d='".$p_double2."' WHERE coffeeid=2";
            }

            @ $db = new mysqli('localhost', 'f38ee', 'f38ee', 'f38ee');
            if (mysqli_connect_errno()) {
                echo "Error: Could not connect to database. Please try again later.";
                exit;
            }
    
            $result = $db->query($query);
   
            if (!$result) {
                echo "An error has occurred.";
                echo "<br> Error query is:" .$query;
            }
            else {
                echo "Update completed.";
            }
            $db->close();
            $result->free();
        ?>
        <br><br>
        </div>
    </div>
    </body>

    <footer>
    	<small><i>Copyright &copy; 2019 JavaJam Coffee House</i></small>
		<br>
		<small><i><a href="Jingying@Luo.com">Jingying@Luo.com</a></i></small>
  	</footer>
</div>    
</html>