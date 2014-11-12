<?php
	$mypage = 'livejs';

	$REX['ADDON']['rxid'][$mypage] = '123456789987654321159753951753';
	$REX['ADDON']['page'][$mypage] = $mypage; 
	$REX['ADDON']['name'][$mypage] = 'Livejs';
	$REX['ADDON']['perm'][$mypage] = 'livejs[]';
	$REX['PERM'][] = 'livejs[]';
	$REX['ADDON']['version'][$mypage] = '1.0';
	$REX['ADDON']['author'][$mypage] = 'Tobias Jörg';

	require $REX['INCLUDE_PATH'].'/addons/'.$mypage.'/functions/function_getlivejs.inc.php';