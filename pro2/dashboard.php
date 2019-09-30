<?php
session_start();
$email=$_SESSION['email'];

 error_reporting(0);
include ("connection.php");
if($email )
{
	echo "     Welcome ".$email;
}  
else
{
	header('location :mainpage.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="cssworking.css">
</head>
<body><div class="titlebar">
		<a href="mainpage.php">Home</a>
		<a href="login.php">Login</a>
		<a href="Registeration.php">Register</a>
		<a href="resetpasswd.php">Reset Password</a>

		<a href="dashboard.php">Dashboard</a>
	</div>
	<br>
<hr>

<div class="box">
	<?php
	$query2="SELECT username, score  FROM user JOIN leader_board ON user.UID=leader_board.UID WHERE email='$email'";
	$data2=mysqli_query($conn,$query2);
	$total2=mysqli_num_rows($data2);
	
 	if($result2=mysqli_fetch_assoc($data2))
 	{
				echo "Hi.. ".$result2['username']." <br><br>";
				echo "YOUR SCORE IS :  ".$result2['score']." <br><br>";
					
	}
	else
	{
		echo "Unable to fetch your data.";
	}

	?>
</div>
<div class="box" >
	
		/*<?php
		$query="SELECT username,score,LID,rank FROM user JOIN leader_board ON user.UID=leader_board.UID ORDER BY score DESC LIMIT 10";	
		 $data=mysqli_query($conn,$query);
		 $total=mysqli_num_rows($data);
		 

		 ?><h1><u>Rank Board</u></h1>
	<table>
			<tr><td><strong>USER NAME</strong></td>
				<td><strong>SCORE</strong></td>
				<td><strong>LEVELS COMPLETED</strong></td>
				<td><strong>RANK</strong></td>
			</tr>
			<?php
			if($total!=0)
			{
					while($result=mysqli_fetch_assoc($data))
					{
						echo "
						      <tr><td>".$result['username']."</td>
						      		<td>".$result['score']."</td>
									<td>".$result['LID']."</td>

									<td>".$result['rank']."</td>
								</tr><br>
								";
						
					}
			}
			else
			{
				echo "No result found.";
			}
			?>
			
	</table>*/
</div>


	

</body>
</html>

