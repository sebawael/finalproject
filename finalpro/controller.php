<?php

require('admin/includes/connect.php');
session_start();
require('fun.php');

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
	add();
    break;

	case 'edit' :
	Edit();
	break;
	
	case 'delete' :
	Delete();
	break;
	}
   
 
	
?>