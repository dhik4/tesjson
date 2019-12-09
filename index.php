<?php

$host ='localhost';
$user ='root';
$pwd ='andhika99';
$db='cars';
$kon= mysqli_connect($host,$user,$pwd,$db);

if (!$kon) {
	
	die ("ERROR in conection :" . mysqli_connect_error());
	
}
$response = array();

$query="SELECT * FROM id";
$result=mysqli_query($kon,$query);

if (mysqli_num_rows($result)> 0){
	$response['success'] = 1;
	$cars = array();
	while ($row= mysqli_fetch_assoc($result)){
	
		array_push($cars,$row);
	}	
		$response['cars'] = $cars;
}
else{
	$response['success'] =0;
	$response['message'] ='no data';
}
echo json_encode($response);
mysqli_close($kon);
?> 
	
