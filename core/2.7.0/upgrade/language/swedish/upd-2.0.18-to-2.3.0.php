<?php
// _LANGCODE: sv
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'XOOPS fysiska stig');
define('LEGEND_DATABASE', 'Databas skrifttyp');

define('XOOPS_LIB_PATH_LABEL', 'XOOPS bibliotek');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS datafilskatalog');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS datafiles (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');

define('DB_COLLATION_LABEL', 'Databasteckenuppsättning och sortering');
define('DB_COLLATION_HELP', "MySQL version 4.12 stöttar egna skrifttyper och bearbetningar. Utan den är mycket komplexitet, så låt bli med att ändra något, medmindre du är säker på ditt val");
define('DB_COLLATION_NOCHANGE', 'Ingen ändringar');

define('XOOPS_PATH_FOUND', 'Stig funnit.');
define('ERR_COULD_NOT_ACCESS', 'Kunde inte få tillgångar till den angivne mappen. Kontroller att den finns och är läsbar på servaren.');
define('CHECKING_PERMISSIONS', 'Kontrollerar fil och mapp behörigheter....');
define('ERR_NEED_WRITE_ACCESS', 'Servern måste ges skrivåtkomst till följande filer och mapp<br>(dvs <em>chmod 777 directory_name</em> på en UNIX/LINUX-server)');
define('IS_NOT_WRITABLE', '%s är inte skrivbar.');
define('IS_WRITABLE', '%s är skrivbar.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'Fel vid skrivning av innehåll till mainfile.php, skriv innehållet in i mainfile.php manuellt.');
