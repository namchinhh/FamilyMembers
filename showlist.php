</html>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
	<title>Show</title>
	<style type="text/css">
		tr, th, td{
			line-height: 25px;
			border: 1px solid;
			
		}
		table{
			border-collapse: collapse;
			width: 65%;
			margin: 30px auto;
			
		}
		fieldset{
			width:20%;
			margin: 30px auto;
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
	<script type="text/javascript">
			function show_confirm(){
				if (confirm("Do you really want to del this member?")){
					return true;
				}
				return false;
			}
			
	</script>
</head>
<body>
	<?php 
		require 'header.php';
	 ?><br><br>
		<table >
			<tr>
				<th>STT</th>
				<th>Relationship</th>
				<th>Name</th>			
				<th>Birth</th>
				<th>Phone#</th>
				<th>Address</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php 
				require 'connect.php';
				$sql="select * from members";
				$result=$conn->query($sql);
				if($result->num_rows>0){
					$stt=1;
					while($row=$result->fetch_assoc()){
						echo "<div > <tr>"."<td class='mid'>".$stt."</td>"
									."<td class='mid'>".$row["relationship"]."</td>"
									."<td>".$row["name"]."</td>"
									."<td class='mid'>".$row["Birth"]."</td>"
									."<td class='mid'>".$row["phone"]."</td>"
									."<td>".$row["address"]."</td>"
									."<td class='mid'>"."<a href='update.php?id=$row[id]'>"."edit"."</a>"."</td>"
									."<td class='mid'>"."<a href='delmember.php?id=$row[id]' onclick= 'return show_confirm();'>"."del"."</a>"."</td>"
							."</tr> </div>" ; 
							$stt++;
					}
				}else{
					echo "0 result;";
				}
				$conn->close();
			 ?>
			
		</table>
		
		
	</body>

