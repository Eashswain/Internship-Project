<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM contact_us");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Delete employee data</title>
</head>
<body>
<table>
	<tr>
	<td>Id</td>
	<td>Name</td>
	<td>Email id</td>
	<td>Message</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["id"]; ?></td>
	<td><?php echo $row["name"]; ?></td>
	<td><?php echo $row["email"]; ?></td>
	<td><?php echo $row["message"]; ?></td>

	<td><a href="delete-process.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>