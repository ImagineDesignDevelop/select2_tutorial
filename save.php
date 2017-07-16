<?php 

	if(isset($_POST)){
		print_r($_POST);

		// get the users favorite cities save them to db
		$cities = implode(',', $_POST['selections']);
		echo $cities;

	}else{
		echo "You have no post data";
	}


 ?>