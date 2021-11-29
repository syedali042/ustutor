<?php

//fetch.php;

if(isset($_GET["term"]))
{
 $connect = new PDO("mysql:host=localhost; dbname=tutor_finder", "root", "");

 $query = "
 SELECT place_name, place_type FROM places 
 WHERE place_name LIKE '%".$_GET["term"]."%' OR place_type LIKE '%".$_GET["term"]."%'
 ORDER BY place_name ASC
 ";
 $query2 = "
 SELECT city_name FROM cities 
 WHERE city_name LIKE '%".$_GET["term"]."%' ORDER BY city_name ASC";

 $statement = $connect->prepare($query);

 $statement->execute();

 $result = $statement->fetchAll();

 $total_row = count($result);

 $cities = $connect->prepare($query2);

 $cities->execute();

 $city = $cities->fetchAll();

 $output = array();


	 if($total_row > 0){

	  foreach($result as $row){
	   $temp_array = array();
	   $temp_array['value'] = ''.$row['place_name'].'-'.$row['place_type'];
	   $temp_array['label'] = ''.$row['place_name'].'&nbsp;-&nbsp;'.$row['place_type']."<small style='float:right;'>Place</small>";
	   $output[] = $temp_array;
	  }

	  foreach($city as $row){
	   $temp_array = array();
	   $temp_array['value'] = ''.$row['city_name'];
	   $temp_array['label'] = ''.$row['city_name']."<small style='float:right;'>City</small>";
	   $output[] = $temp_array;
	  }

	 }
	 else{

	  $output['value'] = '';
	  $output['label'] = 'No Record Found';

	 }

 echo json_encode($output);
}

?>