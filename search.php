<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<style type="text/css">
		#searchBox{
			margin: auto;
			width: 300px;
			clear: both;
		}
		#resultTable{
			border-collapse: collapse;
			width: 1000px;
			margin: 30px auto;
		}
		th, tr, td{
			border: 1px solid;

		}
		.mid{
			text-align: center;
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
 ?><br><br>
 	<fieldset id="searchBox">
		<legend>Search</legend>
			<form action="" method="post">
				<input type="radio" name="tim" value="name" checked>Name <br>
				<input type="radio" name="tim" value="rela">Relationship <br>
				<input type="radio" name="tim" value="bday">Birth <br>
				<input type="radio" name="tim" value="pnum">Phone# <br>
				<input type="radio" name="tim" value="addr">Address <br><br>
				Looking for: <input type="text" name="timkiem" required> <br><br>
				<input style="margin: auto 20px;" type="submit" name="ok" value="Search" size="25" >     
				<input type="reset">
			</form>
	</fieldset>
	<?php 
	
	if(isset($_POST['ok'])&&isset($_POST['tim'])&&!empty($_POST['timkiem'])){
				$colum="";
				$txt=$_POST['timkiem'];
				$value=$_POST['tim'];
				switch ($value) {
					case 'name':
						$colum="name";
						break;
					case 'rela':
						$colum="relationship";
						break;
					case 'bday':
						$colum="Birth";
						break;
					case 'pnum':
						$colum="phone";
						break;
					case 'addr':
						$colum="address";
						break;
					default:
						# code...
						break;
				}
				require 'connect.php';
				$sql='select * from members where '.$colum.' like "%'.$txt.'%"';
				$result=$conn->query($sql);
				if($result->num_rows>0){
					echo "<table id='resultTable'>".
							"<tr>".
								"<th>STT</th>".
								"<th>Relationship</th>".	
								"<th>Name</th>".								
								"<th>Birth</th>".
								"<th>Phone#</th>".
								"<th>Address</th>".
								"<th>Edit</th>".
								"<th>Delete</th>".
							"</tr>;";
					$stt=1;
					while($row=$result->fetch_assoc()){
						echo "<tr>"."<td class='mid'>".$stt."</td>"
									."<td class='mid'>".$row["relationship"]."</td>"
									."<td>".$row["name"]."</td>"
									."<td class='mid'>".$row["Birth"]."</td>"
									."<td class='mid'>".$row["phone"]."</td>"
									."<td>".$row["address"]."</td>"
									."<td class='mid'>"."<a href='update.php?id=$row[id]'>"."edit"."</a>"."</td>"
									."<td class='mid'>"."<a href='delmember.php?id=$row[id]' onclick= 'return show_confirm();'>"."del"."</a>"."</td>"
							."</tr>" ; 
							$stt++;
					}
					echo "</table>";
				}else{
					echo "0 result";
				}
				$conn->close();
	}
 ?>
</body>
</html>