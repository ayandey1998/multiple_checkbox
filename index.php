<!DOCTYPE html>
<html>

<head>
  	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
  	<h2>Form from table1</h2>	
  	<form action="action_page.php" method="post">
  		<label><input type="checkbox" name= "1st_table_fields[]" value= "name" /> Name</label>
  		<label><input type="checkbox" name= "1st_table_fields[]" value= "email" /> Email</label>  	
  		<label><input type="checkbox" name= "1st_table_fields[]" value= "department" /> Department </label>
 		<hr> 
 		<h2>Form from table2</h2>	
  		<label><input type="checkbox" name= "2nd_table_fields[]" value= "pin_no" /> PIN no</label>
  		<label><input type="checkbox" name= "2nd_table_fields[]" value= "address1" /> Address 1</label>
  		<label><input type="checkbox" name= "2nd_table_fields[]" value= "address2" /> Address 2</label>
  		<br>
  		<br>
  		<input type="submit" name="submit" value="Submit"/>
  	</form>		
	</table>
</body>

</html>
