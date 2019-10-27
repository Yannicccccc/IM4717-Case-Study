<!DOCTYPE html>
<html lang="en">
<head>
<title>JavaJam Coffee House - Menu</title>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">   
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
		<h2>Purchase Result:</h2>

        <?php
            $today = date('Y-m-d');

            $qty1 = $_POST['order0'];
            if (isset($_POST['single1'])) $qty2 = $_POST['order1'];
            else $qty3 = $_POST[order1];
            if (isset($_POST['single2'])) $qty4 = $_POST['order2'];
            else $qty5 = $_POST['order2'];
            if(!$qty1) $qty1 = 0;
			if(!$qty2) $qty2 = 0;
			if(!$qty3) $qty3 = 0;
			if(!$qty4) $qty4 = 0;
			if(!$qty5) $qty5 = 0;

            $earn1 = $_POST['total0'];
            $earn1 = doubleval($earn1);
            if (isset($_POST['single1'])){
                $earn2 = $_POST['total1'];
                $earn2 = doubleval($earn2);
            } 
            else{
                $earn3 = $_POST['total1'];
                $earn3 = doubleval($earn3);
            } 
            if (isset($_POST['single2'])){
                $earn4 = $_POST['total2'];
                $earn4 = doubleval($earn4);
            }
            else {
                $earn5 = $_POST['total2'];
                $earn5 = doubleval($earn5);
            }    

            @ $db = new mysqli('localhost', 'f38ee', 'f38ee', 'f38ee');
            if (mysqli_connect_errno()){
            echo 'Error: Could not connect to database.  Please try again later.';
            exit;
            }
            
            $query = "SELECT * FROM order_table WHERE id='".$today."';";
            $result = $db->query($query);
            $data = $result -> fetch_assoc();
            
            $earn1 = $data["earn1"] + $earn1;
            $earn2 = $data["earn2"] + $earn2;
            $earn3 = $data["earn3"] + $earn3;
            $earn4 = $data["earn4"] + $earn4;
            $earn5 = $data["earn5"] + $earn5;

            $qty1 = $data["qty1"] + $qty1;
            $qty2 = $data["qty2"] + $qty2;
            $qty3 = $data["qty3"] + $qty3;
            $qty4 = $data["qty4"] + $qty4;
            $qty5 = $data["qty5"] + $qty5;

            $query = "UPDATE order_table SET qty1=".$qty1.", qty2=".$qty2.", qty3=".$qty3.", qty4=".$qty4.", qty5=".$qty5.", earn1=".$earn1.", earn2=".$earn2.", earn3=".$earn3.", earn4=".$earn4.", earn5=".$earn5."WHERE id='".$today."';";
            $result = $db->query($query);
            
            if (!$result) {
                echo "An error has occurred.";
                echo "<br> Error query is:" .$query;
            }
            else {
                echo "Purchase Comfirmed.";
            }
            $result->free();
            $db->close();
        ?> 
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


