<?php
	$error = '';

	if ($error != '') {
	    $REX['ADDON']['installmsg']['livejs'] = $error;
	    $REX['ADDON']['install']['livejs'] = false;
	} else {
	    $REX['ADDON']['install']['livejs'] = true;
	}
	
