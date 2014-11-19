<?php
	$error = '';

	if ($error != '') {
	    $REX['ADDON']['installmsg']['livejs'] = $error;
	    $REX['ADDON']['install']['livejs'] = false;
	    echo '(Report.Nr: #002)';
	} else {
		echo '(Report.Nr: #001)';
	    $REX['ADDON']['install']['livejs'] = true;
	}
	
