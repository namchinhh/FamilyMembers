<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<style type="text/css">
		fieldset{
			width: 30%;
			margin: 100px auto;
		}
	</style>
</head>
<body>
	<?php 
		$id=$_GET['id'];
		echo "Update your information";
		
		if(isset($_POST["ok"])){
			$name=$_POST["name"];
			$rela=$_POST["rela"];
			$bday=$_POST["bday"];
			$pnum=$_POST["pnum"];
			$addr=$_POST["addr"];
			require 'connect.php';
			$sql="update members set name='$name', relationship='$rela', Birth='$bday', phone=$pnum, address='$addr' where id=$id";
			$conn->query($sql);
			$conn->close();
			header("location:showlist.php");
		}
		require 'connect.php';

		$sql="select * from members where id=$id";
		$data=$conn->query($sql);
		$result=$data->fetch_assoc();
	?>
	<fieldset>
		<legend >Update Member:</legend>
		<form action="update.php?id=<?php echo $id;?>" method="post">
			<table>
				<tr>
					<td>Name:</td>
					<td>
						<input type="text" name="name" size="25" value="<?php echo $result['name']; ?>" required>
					</td>
				</tr>
				<tr>
					<td>Relationship:</td>
					<td>
						<input type="text" name="rela" size="25" value="<?php echo $result['relationship']; ?>"required>
					</td>
				</tr>
				<tr>
					<td>Birth:</td>
					<td><input type="text" name="bday" value="<?php echo $result['Birth']; ?>"></td>
				</tr>
				<tr>
					<td>Phone#:</td>
					<td><input type="text" name="pnum" size="15" value="<?php echo $result['phone']; ?>"></td>
				</tr>
				<tr>
					<td>Address:</td>
					<td><input type="text" name="addr" size="25" value="<?php echo $result['address']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input id="submit" type="submit" name="ok" >     
					    <input type="reset">
					</td>
				</tr>
			</table>
		</form>
	</fieldset>
	<?php 
		$conn->close();
	 ?>
</body>
</html>