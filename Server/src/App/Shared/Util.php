<?php
namespace App\Shared;

class Util {

	function stripslashes_deep($value){
	    $value = is_array($value) ?
	                array_map('stripslashes_deep', $value) :
	                stripslashes($value);

	    return $value;
	}

}

	
?>