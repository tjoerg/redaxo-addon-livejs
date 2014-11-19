<?php
	$error = '';

	if ($error != '') {
	    $REX['ADDON']['installmsg']['livejs'] = $error;
	    $REX['ADDON']['install']['livejs'] = false;
	    echo '(#002)';
	} else {
		echo '(#001)';
	    $REX['ADDON']['install']['livejs'] = true;
	}
	
