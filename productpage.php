<?php

session_start();

require_once ("php/CreateDb.php");

$db = new CreateDb("nealj_Team15", "art_db");

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>window.location = 'index.php'</script>";
            // maybe add a message about being able to buy only one piece at a time due to supply
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}

?>

<!DOCTYPE html>

<html>

	<head>
		 <meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    	<title>Shopping Cart</title>

    	<!-- Font Awesome -->
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    	<!-- Bootstrap CDN -->
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    	<link rel="stylesheet" href="style.css">
	</head>

	<body>

		<?php 

			require_once ("php/header.php"); 

			$result = $db->getData();

			while ($row = mysqli_fetch_assoc($result)){

				if($row['img_id'] == $_GET['id']){

					$picname = $row['pic_name'];
					$img = $row['file_location'];
					$fname = $row['artist_fname'];
					$lname = $row['artist_lname'];
					$price = $row['pic_price'];
					$date = $row['year_made'];
					$desc = $row['pic_descrip'];
					$imgid = $row['img_id'];

					$outp = "

					<div class=\"container text-center\">

						<h1 class = \"display-1\">$picname</h1>
						<form action=\"index.php\" method=\"post\">
						<input type='hidden' name='product_id' value='$imgid'>
						<button type=\"submit\" class=\"btn btn-secondary my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
						<br>
						<h3> $$price</h3>
						<br>
						<img src=\"$img\" alt=\"img/default\" class=\"img-fluid\">
						<br>
						<h3>$lname, $fname (circa. $date)</h3>
						<br>
						<h4 style=\"color:#4d4d4d\">$desc<h4>

					</div>	

					";

					echo $outp;
				}
			}
		?>

	</body>
</html>