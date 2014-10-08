<?php

/*----------*/



require_once("../models/config.php");



set_error_handler('logAllErrors');



// User must be logged in

if (!isUserLoggedIn()){

  addAlert("danger", "You must be logged in to access this resource.");

  echo json_encode(array("errors" => 1, "successes" => 0));

  exit();

}



// Create a new group with the specified name and home page id

// POST: group_name, home_page_id

$validator = new Validator();

$group_name = $validator->requiredPostVar('group_name');

$home_page_id = $validator->requiredPostVar('home_page_id');



// Add alerts for any failed input validation

foreach ($validator->errors as $error){

  addAlert("danger", $error);

}



//Forms posted

if($group_name) {

	if (!createGroup($group_name, $home_page_id)){

	  echo json_encode(array("errors" => 1, "successes" => 0));

	  exit();

	}

} else {

	addAlert("danger", lang("PERMISSION_CHAR_LIMIT", array(1, 50)));

	echo json_encode(array("errors" => 1, "successes" => 0));

	exit();

}



restore_error_handler();



if (isset($_POST['ajaxMode']) and $_POST['ajaxMode'] == "true" ){

  echo json_encode(array(

	"errors" => 0,

	"successes" => 1));

} else {

  header('Location: ' . getReferralPage());

  exit();

}

?>

