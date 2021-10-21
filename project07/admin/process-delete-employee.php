<?php
$conn=mysqli_connect('localhost','root','','project03');
	if(!$conn){
		die("Không thể kết nối");
	}
	$sql="DELETE FROM db_employees WHERE emp_id =$id";
	$result = $conn->query($sql);
	if($result){
	header("location:index.php");
	}
	else{
		echo "Lỗi";
	}
    ?>