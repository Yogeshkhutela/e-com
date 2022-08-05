<?php
$connect = mysqli_connect("localhost", "root", "", "product");

$query = "SELECT * FROM p_detail ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				$row = mysqli_num_rows($result);?>
				<img src="<?php echo $row["image"]; ?>" />

				
?>