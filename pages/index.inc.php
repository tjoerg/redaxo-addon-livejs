<?php 
	require $REX['INCLUDE_PATH'] . '/layout/top.php';
	rex_title('Livejs');

	$mdl_help = '<?php if (function_exists(\'getLivejs\')) getLivejs() ?>';
	$mdl_help2 = '<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>DemoSeite</title>
		<link rel="stylesheet" type="text/css" href="files/style.css" media="screen"/>
		<?php if (function_exists(\'getLivejs\')) getLivejs() ?>
    </head>
    <body>
        <div class="page">
            <div class="navi" id="nav">
                REX_TEMPLATE[2]
            </div>
            <div class="content" id="content">
                REX_ARTICLE[]
            </div>
        </div>
    </body>
</html>';
?>

<div class="rex-addon-output">
    <h2 class="rex-hl2">Code für den Header des Templates</h2>

    <div class="rex-addon-content">
        <p class="rex-tx1">Um dieses AddOn nutzen zu können, muss man folgenden Code im Header des "default" Templates einsetzen:</p>
        <?php rex_highlight_string($mdl_help); ?>
    </div>
</div>

<div class="rex-addon-output">
    <h2 class="rex-hl2">Beispiel</h2>

    <div class="rex-addon-content">
        <p class="rex-tx1">Um zu verdeutlichen, an welcher Stelle die oben genannte Codezeile stehen soll, kann man folgendes Beispiel-Template betrachten:</p>
    	<?php rex_highlight_string($mdl_help2); ?>
    	<p class="rex-tx1">Dabei ist lediglich zu beachten, dass die Codezeile im Header definiert werden muss. An welcher Stelle spielt eine geringere Rolle.</p>
    </div>
</div>

<?php
require $REX['INCLUDE_PATH'] . '/layout/bottom.php';
