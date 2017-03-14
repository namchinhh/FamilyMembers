<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
	<title>Add</title>
	<style type="text/css">
		fieldset{
			width: 30%;
			margin: 100px auto;
		}
		.error{
			color: red;
		}
		.show tr th td{
			border: 1px solid;
			width: 50%;
			margin: auto;
		}
		#link{
			margin-left: 25%;
		}
		li{
			width: 20%;
			float: left;
		}
	</style>
</head>
<body>
<?php 

	require 'header.php';
	$loi=array();
	$name=$rela=$bday=$pnum=$addr=NULL;
	$loi['rela']=$loi['name']=$loi['success']=NULL;
	if(isset($_POST['ok'])){
		if (empty($_POST['rela'])) {
			$loi['rela']="Relationship is required!";
		}else{
			$rela=$_POST['rela'];
		}
		if (empty($_POST['name'])) {
			$loi['name']="Name is required!";
		}else{
			$name=$_POST['name'];
		}
		$bday=$_POST['bday'];
		$pnum=$_POST['pnum'];
		$addr=$_POST['addr'];
		if($name&&$rela){
			require 'connect.php';
			$sql="INSERT INTO members (relationship, name, Birth,phone,address)
					VALUES ('$rela', '$name', '$bday','$pnum','$addr')";
			if($conn->query($sql)===TRUE){
				$loi['success']="Register Success.";
			}else{
				$loi['success']="Error: ".$sql."<br>".$conn->error;
			}
			$conn->close();
		}
	}
 ?>
	<fieldset>
		<legend >Add Member:</legend>
		<form action="dangki.php" method="post">
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" size="25" required>
					<span class="error">*
						<?php 
							echo $loi['name']; 
						?>	
					</span>
					</td>
				</tr>
				<tr>
					<td>Relationship:</td>
					<td><input type="text" name="rela" size="25" required>
					<span class="error">*
						<?php 
							echo $loi['rela']; 
						?>	
					</span>
					</td>
				</tr>
				<tr>
					<td>Birth:</td>
					<td><input type="date" name="bday" ></td>
				</tr>
				<tr>
					<td>Phone#:</td>
					<td><input type="text" name="pnum" size="15"></td>
				</tr>
				<tr>
					<td>Address:</td>
					<td><input type="text" name="addr" size="25"></td>
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
	<div style="margin: auto; text-align: center;color: red;">
			<?php echo $loi['success']; ?>
	</div>
</body>
</html>