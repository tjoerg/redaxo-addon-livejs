<?php

function getLivejs(){
	if (isset($_SESSION)){
		if($_SESSION != null){
			if(isset($_SESSION['rex20141022131144']['UID']) || isset(array_values($_SESSION)[0]['UID'])){
				if($_SESSION['rex20141022131144']['UID'] != null){
					//Live Reload -- Autor: Alex Dahlem --
					date_default_timezone_set('UTC');
					$length = ob_get_length();
					$last_modified = date ('F d Y H:i:s', getlastmod());
					header('Content-Length: $length');
					header('Last-Modified: $last_modified GMT time');
			
					echo '<script type="text/javascript">';
					include('livejs.js');
					echo "</script>";
				}
				elseif(array_values($_SESSION)[0]['UID'] != null){
					//Live Reload -- Autor: Alex Dahlem --
					date_default_timezone_set('UTC');
					$length = ob_get_length();
					$last_modified = date ('F d Y H:i:s', getlastmod());
					header('Content-Length: $length');
					header('Last-Modified: $last_modified GMT time');
			
					echo '<script type="text/javascript">';
					include('livejs.js');
					echo "</script>";
				}
			}
		}
	}		
}

?>
