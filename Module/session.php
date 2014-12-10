<?php
	session_start();
	
	function message(){
		if(isset($_SESSION["message"])){
					$output = "<div id=\"message\">";
					$output .= htmlentities($_SESSION["message"]);
					$output .= "</div>";
					
					// Clear message after use
					$_SESSION["message"] = null;
					return $output;
				}
	}
?>