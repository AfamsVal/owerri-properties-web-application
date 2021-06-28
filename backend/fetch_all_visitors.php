<?php
include 'functions.php';
$obj = new Functions();


//FETCHING ALL laffout PAGES//////
/////////////////////////////////////////////////

if(isset($_POST['limit_f'],$_POST['start_f'])){
	$start = $obj->sql_clean($_POST['start_f']);
	$limit = $obj->sql_clean($_POST['limit_f']);
	$gets = $obj->fetch_all_pages($start,$limit);
	if($gets[0] > 0){
		while($get = mysqli_fetch_object($gets[1])){
			$multiple = $obj->multiple_ips($get->ip);
			echo' <tr>
					<td><center>'.$get->page.'</center></td>
					<td><center>'.$get->no_of_time.'</center></td>
					<td><center>'.$get->ip.'</center></td>
					<td><center> '.$multiple[0].'</center></td>
					<td><center>'.$get->ip_change_counter.'</center></td>
					<td><center>'.$obj->time_elapsed_string($get->timer).'</center>
					</td>
				</tr>';
	}
	}
	
	
	
	}
	
	
	
	
?>