<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Behörigheter');
define('_MD_A_MYMENU_MYPREFERENCES','Inställningar');
// index.php
define('_AM_TH_DATETIME', 'Tid');
define('_AM_TH_USER', 'Använder');
define('_AM_TH_IP', 'IP');
define('_AM_TH_agent', 'AGENT');
define('_AM_TH_TYPE', 'typ');
define('_AM_TH_DESCRIPTION', 'Beskrivning');
define('_AM_TH_BADIPS','Dåliga IP-adresser<br><br><span style="font-weight:normal;">Skriv varje IP en rad<br>tomt betyder att alla IP-adresser är tillåtna</span>');
define('_AM_TH_GROUP1IPS','Tillåtna IP-adresser för grupp=1<br><br><span style="font-weight:normal;">Skriv varje IP en rad.<br>192.168. betyder 192.168.*<br>blank betyder att alla IP-adresser är tillåtna</span>');
define('_AM_LABEL_COMPACTLOG', 'Kompakt logg');
define('_AM_BUTTON_COMPACTLOG', 'Gör den kompakt!');
define('_AM_JS_COMPACTLOGCONFIRM', 'Duplicerade (IP-adresser, typ) kommer att bli utesluten');
define('_AM_LABEL_REMOVEALL', 'Ta bort alla poster');
define('_AM_BUTTON_REMOVEALL', 'Ta bort alla!');
define('_AM_JS_REMOVEALLCONFIRM', 'Alla loggar är borttagit absolut. Är du verkligen SÄKKER?');
define('_AM_LABEL_REMOVE', 'Ta bort alla markerade uppgifter:');
define('_AM_BUTTON_REMOVE', 'Ta bort!');
define('_AM_JS_REMOVECONFIRM', 'Ta bort OKEJ?');
define('_AM_MSG_IPFILESUPDATED', 'Filer till IP-adresser har blivit uppdaterad');
define('_AM_MSG_BADIPSCANTOPEN', 'Filen för dålig IP kan inte öppnas');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'Den fil, som innehåller tillåtna IP-adresser för grupp=1 kan inte öppnas');
define('_AM_MSG_REMOVED', 'Uppgifter är borttagit');
define('_AM_MSG_DELFAILED', 'Det gick inte att radera poster');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Gör configs-mappen skrivbar: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Prefix Hanterare');
define('_AM_MSG_DBUPDATED', 'Databasen uppdaterad utan fel!');
define('_AM_CONFIRM_DELETE', 'Alla data kommer att bli raderat. OK?');
define('_AM_TXT_HOWTOCHANGEDB',"Om du vill ändra prefix,<br> redigera %s/data/secure.php manuellt.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'Inte säker');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Om du kan se en bild -NG- eller länken returnerar normal sida, är din XOOPS_TRUST_PATH inte korrekt placerad. Den bästa platsen för XOOPS_TRUST_PATH är utanför DocumentRoot. Om du inte kan göra det måste du sätta .htaccess (NEKAR ALLA) strax under XOOPS_TRUST_PATH som det näst bästa sättet.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'Kontrollera att PHP-filer i TRUST_PATH är inställda på skrivskyddad (det måste vara 404,403 eller 500-fel)');
define('_AM_ADV_REGISTERGLOBALS',"Om 'PÅ' inbjuder den här inställningen till en mängd olika injicerande attacker. Om du kan, ställ in 'register_globals av' i php.ini, eller om det inte är möjligt, skapa eller redigera .htaccess i din XOOPS-katalog:");
define('_AM_ADV_ALLOWURLFOPEN',"Om \"PÅ\" tillåter denna inställning angripare att exekvera godtyckliga skript på fjärrservrar.<br>Endast administratören kan ändra detta alternativ.<br>Om du är administratör, redigera php.ini eller httpd.conf.<br><b>Exempel på httpd.conf:<br>&nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; av</b><br>Annars gör du anspråk på det till dina administratörer.");
define('_AM_ADV_USETRANSSID',"Om 'PÅ' kommer ditt sessions-ID att visas i ankartaggar etc.<br>För att förhindra kapning av sessioner, lägg till en rad i .htaccess i XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"Den här inställningen bjuder in 'SQL-injektioner'.<br>Glöm inte att slå PÅ 'Force sanitizing *' i denna moduls inställningar.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Prefix Hanterare');
define('_AM_ADV_MAINUNPATCHED', 'Du skall redigera din mainfile, som beskrivit i README. Om du er i tvivel, så sök hjälp på www.xoopsnordic.org');
define('_AM_ADV_DBFACTORYPATCHED', 'Din databasfabrik är redo för DBLayer Trapping anti-SQL-injektion');
define('_AM_ADV_DBFACTORYUNPATCHED', 'Din databasfabrik är inte redo för DBLayer Trapping anti-SQL-injektion. Vissa patchar krävs.');
define('_AM_ADV_SUBTITLECHECK', 'Check om Protector fungerar korrekt');
define('_AM_ADV_CHECKCONTAMI', 'Kontaminering');
define('_AM_ADV_CHECKISOCOM', 'Isolerat kommentarer');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'och placera raden nedan i den:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Prefix');
define('_AM_PROTECTOR_TABLES', 'Tabeller');
define('_AM_PROTECTOR_UPDATED', 'Uppdaterad');
define('_AM_PROTECTOR_COPY', 'Kopiera');
define('_AM_PROTECTOR_ACTIONS', 'Åtgärder');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'Förbjud IP-adresser på kontrollerade poster:');
define('_AM_BUTTON_BAN_BY_IP', 'IP Förbud!');
define('_AM_JS_BANCONFIRM', 'IP Förbud OK?');
define('_AM_MSG_BANNEDIP', 'IP:ar är förbjudna');
define('_AM_ADMINSTATS_TITLE', 'Protector loggsammanfattning');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'Förra månaden');
define('_AM_ADMINSTATS_LAST_WEEK', 'Förra veckan');
define('_AM_ADMINSTATS_LAST_DAY', 'Sista dagen');
define('_AM_ADMINSTATS_LAST_HOUR', 'Senaste timmen');
