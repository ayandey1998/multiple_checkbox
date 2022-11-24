
<?php
include("db_test.php");

if(isset($_POST["submit"]) ) {
	if(isset($_POST["2nd_table_fields"]) && isset($_POST["1st_table_fields"])) {
		$all_fields = array_merge($_POST["1st_table_fields"], $_POST["2nd_table_fields"]);
		if(count($all_fields) == 1) {
			print("Select atleast one "); 
			exit();
		}
		$all_fields_str = implode(", ", $all_fields);
	} else {
		print("Select atleast one"); 
		exit();
	}

	$sql = "SELECT user.id, address.user_id, " . $all_fields_str . "
		FROM user
		INNER JOIN address
		ON user.id = address.user_id;
	";
	$queryResult = $conn->query($sql);

}
?>
<!DOCTYPE html>
<html>

<head>
  	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
  	<h2></h2>
  	<table border='10'>
		<tr>
			<th>Id</th>
			<?php foreach ($all_fields as $key => $item) { ?>
				<th><?php print($item); ?></th>
			<?php } ?>
		</tr>

		<?php while($query_item = mysqli_fetch_array($queryResult)) { ?>
			<tr>
				<td>
					<?php echo $query_item["id"]; ?>
				</td>
				<?php foreach ($all_fields as $key => $item) { ?>
					<td>
						<?php echo $query_item[$item]; ?>
					</td>
				<?php } ?>
			</tr>
		<?php } ?>
	</table>
</body>
</html>

<?php
	//$sql="SELECT CONCAT($arr1) FROM user";
	//$sql_2="SELECT CONCAT($arr2) FROM address";

	//echo "<br>".$sql."<br>".$sql_2."<br>"; //exit;

	//$result3 = mysqli_query($conn,$sql);
	//$result4 = mysqli_query($conn,$sql_2);

	//<?php while($row3 = mysqli_fetch_array($result3)) {?>
	

