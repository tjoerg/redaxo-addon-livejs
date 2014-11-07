REDAXO-AddOn: livejs
=======================

Version 1.0

Dieses AddOn ermöglicht ein automatisiertes Reloaden von Webseiten nach Speicherung der Quelldateien.


Installation
------------

1. Zip-Datei im AddOn-Ordner entpacken, der Ordner muss livejs heißen
2. AddOn installieren und aktivieren
3. Folgenden Code in den Header des "default"Templates einfügen: <?php if (function_exists('getLivejs')) getLivejs() ?>

Benutzung
---------

* Bei geöffnetem Browserfenster die Quelldatei ändern und abspeichern. Danach wird mit einem automatischem Reload die Website neu geladen.

Autor
------------

**Tobias Jörg** GitHu: [tjoerg](https://github.com/tjoerg "GitHub tjoerg")

Zusätzlich
------------

[Livejs](http://www.livejs.com/ "Live.js") Copyright (C) 2011 by Martin Kool and Q42
