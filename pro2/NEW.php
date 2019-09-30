
<?php

 	function scores($level,$stage){
 		include('connection.php');
 		global $email;
 		$Level="Level_".$level;
 		echo $Level;
 		$q1="SELECT UID FROM user WHERE email='$email'";
 		$data=mysqli_query($conn,$q1);
 		$result1=mysqli_fetch_assoc($data);
 		$uid=$result1['UID'];
 		$q2="SELECT `$Level`,score FROM leader_board WHERE UID='$uid'";

 		$data_new=mysqli_query($conn,$q2);
 		$result=mysqli_fetch_assoc($data_new);
 		$level_new=$result[$Level];
 		$score_new=$result['score'];
 		
 		
 		if($level_new[$stage]=="0")
 		{   
 			$level_new[$stage]="1";
 			
 			$score_new+=100;
 			if($stage==4 && $level_new=="111110")
 			{
 					$score_new+=200;
 			}
 		}
 		$q3="UPDATE leader_board SET `$Level`='$level_new', score='$score_new' WHERE UID='$uid'";
 		$data3=mysqli_query($conn,$q3);
 		
 	}
 	
     $conn->close();
 ?>
