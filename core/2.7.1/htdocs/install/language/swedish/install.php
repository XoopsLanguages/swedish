<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: sv
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'Visa/dölj hjälptext');
// License
//define('LICENSE_NOT_WRITEABLE', 'Licensfilen "%s" är INTE skrivbar!');
//define('LICENSE_IS_WRITEABLE', '%s Licensen är skrivbar.');
// Configuration check page
define('SERVER_API', 'Server-API');
define('PHP_EXTENSION', '%s förlängning');
define('CHAR_ENCODING', 'Teckenkodning');
define('XML_PARSING', 'XML-tolkning');
define('REQUIREMENTS', 'Krav');
define('_PHP_VERSION', 'PHP-version');
define('RECOMMENDED_SETTINGS', 'Rekommenderade inställningar');
define('RECOMMENDED_EXTENSIONS', 'Rekommenderade tillägg');
define('SETTING_NAME', 'Inställningsnamn');
define('RECOMMENDED', 'Rekommenderas');
define('CURRENT', 'Nuvarande');
define('RECOMMENDED_EXTENSIONS_MSG', 'Dessa tillägg krävs inte för normal användning, men kan vara nödvändiga för att utforska
 vissa specifika funktioner (som stöd för flera språk eller RSS). Därför rekommenderas att ha dem installerade.');
define('NONE', 'Ingen');
define('SUCCESS', 'Framgång');
define('WARNING', 'Varning');
define('FAILED', 'Misslyckades');
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'XOOPS installationsguide');
define('LANGUAGE_SELECTION', 'Språkval');
define('LANGUAGE_SELECTION_TITLE', 'Välj ditt språk');        // L128
define('INTRODUCTION', 'Introduktion');
define('INTRODUCTION_TITLE', 'Välkommen till XOOPS installationsguiden');        // L0
define('CONFIGURATION_CHECK', 'Konfigurationskontroll');
define('CONFIGURATION_CHECK_TITLE', 'Kontrollerar din serverkonfiguration');
define('PATHS_SETTINGS', 'Sökvägsinställningar');
define('PATHS_SETTINGS_TITLE', 'Sökvägsinställningar');
define('DATABASE_CONNECTION', 'Databasanslutning');
define('DATABASE_CONNECTION_TITLE', 'Databasanslutning');
define('DATABASE_CONFIG', 'Databaskonfiguration');
define('DATABASE_CONFIG_TITLE', 'Databaskonfiguration');
define('CONFIG_SAVE', 'Spara konfiguration');
define('CONFIG_SAVE_TITLE', 'Sparar din systemkonfiguration');
define('TABLES_CREATION', 'Tabellskapande');
define('TABLES_CREATION_TITLE', 'Skapar databastabeller');
define('INITIAL_SETTINGS', 'Initiala inställningar');
define('INITIAL_SETTINGS_TITLE', 'Ange dina initiala inställningar');
define('DATA_INSERTION', 'Datainmatning');
define('DATA_INSERTION_TITLE', 'Sparar dina inställningar i databasen');
define('WELCOME', 'Välkommen');
define('WELCOME_TITLE', 'Välkommen till din XOOPS-webbplats');        // L0
// Settings (labels and help text)
define('XOOPS_PATHS', 'XOOPS fysiska sökvägar');
define('XOOPS_URLS', 'Webbplatser');
define('XOOPS_ROOT_PATH_LABEL', 'XOOPS dokumenterar den fysiska rotvägen');
define('XOOPS_ROOT_PATH_HELP', 'Fysisk sökväg till katalogen XOOPS dokument (serveras) UTAN snedstreck');
define('XOOPS_LIB_PATH_LABEL', 'XOOPS bibliotek');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS datafilkatalog');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS data files (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_URL_LABEL', 'Webbplatsplats (URL)'); // L56
define('XOOPS_URL_HELP', 'Main URL som kommer att användas för att komma åt din XOOPS installation'); // L58
define('LEGEND_CONNECTION', 'Serveranslutning');
define('LEGEND_DATABASE', 'Databas'); // L51
define('DB_HOST_LABEL', 'Serverns värdnamn');    // L27
define('DB_HOST_HELP', 'Värdnamn för databasservern. Om du är osäker fungerar <em>localhost</em> i de flesta fall'); // L67
define('DB_USER_LABEL', 'Användarnamn');    // L28
define('DB_USER_HELP', 'Namnet på användarkontot som kommer att användas för att ansluta till databasservern'); // L65
define('DB_PASS_LABEL', 'Lösenord');    // L52
define('DB_PASS_HELP', 'Lösenordet för ditt databasanvändarkonto'); // L68
define('DB_NAME_LABEL', 'Databasnamn');    // L29
define('DB_NAME_HELP', 'Namnet på databasen på värden. Installationsprogrammet kommer att försöka skapa databasen om den inte finns'); // L64
define('DB_CHARSET_LABEL', 'Databasteckenuppsättning');
define('DB_CHARSET_HELP', 'MySQL inkluderar teckenuppsättningsstöd som gör att du kan lagra data med en mängd olika teckenuppsättningar och utföra jämförelser enligt en mängd olika sorteringar.');
define('DB_COLLATION_LABEL', 'Databassortering');
define('DB_COLLATION_HELP', 'En sortering är en uppsättning regler för att jämföra tecken i en teckenuppsättning.');
define('DB_PREFIX_LABEL', 'Tabellprefix');    // L30
define('DB_PREFIX_HELP', 'Detta prefix kommer att läggas till i alla nya tabeller som skapas för att undvika namnkonflikter i databasen. Om du är osäker, behåll bara standardinställningen'); // L63
define('DB_PCONNECT_LABEL', 'Använd persistent anslutning');    // L54
define('DB_PCONNECT_HELP', "Standard är 'Nej'. Lämna det tomt om du är osäker"); // L69
define('DB_DATABASE_LABEL', 'Databas');
define('LEGEND_ADMIN_ACCOUNT', 'Administratörskonto');
define('ADMIN_LOGIN_LABEL', 'Administratörsinloggning'); // L37
define('ADMIN_EMAIL_LABEL', 'Admin e-post'); // L38
define('ADMIN_PASS_LABEL', 'Administratörslösenord'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'Bekräfta lösenord'); // L74
// Buttons
define('BUTTON_PREVIOUS', 'Föregående'); // L42
define('BUTTON_NEXT', 'Fortsätt'); // L47
// Messages
define('XOOPS_FOUND', '%s hittades');
define('CHECKING_PERMISSIONS', 'Kontrollerar fil och mapp behörigheter....'); // L82
define('IS_NOT_WRITABLE', '%s är inte skrivbar.'); // L83
define('IS_WRITABLE', '%s är skrivbar.'); // L84
define('XOOPS_PATH_FOUND', 'Stig funnit.');
//define('READY_CREATE_TABLES', 'Inga XOOPS-tabeller upptäcktes.<br>Installationsprogrammet är nu redo att skapa systemtabellerna XOOPS.');
define('XOOPS_TABLES_FOUND', 'Systemtabellerna XOOPS finns redan i din databas.'); // L131
define('XOOPS_TABLES_CREATED', 'XOOPS systemtabeller har skapats.');
//define('READY_INSERT_DATA', 'Installationsprogrammet är nu redo att infoga initiala data i din databas.');
//define('READY_SAVE_MAINFILE', 'Installationsprogrammet är nu redo att spara de angivna inställningarna till <em>mainfile.php</em>.');
define('SAVED_MAINFILE', 'Inställningar sparade');
define('SAVED_MAINFILE_MSG', 'Installationsprogrammet har sparat de angivna inställningarna till <em>mainfile.php</em> och <em>secure.php</em>.');
define('DATA_ALREADY_INSERTED', 'XOOPS data hittades i databasen.');
define('DATA_INSERTED', 'Initiala data har infogats i databasen.');
// %s is database name
define('DATABASE_CREATED', 'Databas %s skapad!'); // L43
// %s is table name
define('TABLE_NOT_CREATED', 'Det gick inte att skapa tabell %s'); // L118
define('TABLE_CREATED', 'Tabell %s skapad.'); // L45
define('ROWS_INSERTED', '%d-poster infogade i tabell %s.'); // L119
define('ROWS_FAILED', 'Det gick inte att infoga %d-poster i tabell %s.'); // L120
define('TABLE_ALTERED', 'Tabell %s uppdaterad.'); // L133
define('TABLE_NOT_ALTERED', 'Det gick inte att uppdatera tabellen %s.'); // L134
define('TABLE_DROPPED', 'Tabell %s har tappats.'); // L163
define('TABLE_NOT_DROPPED', 'Det gick inte att ta bort tabellen %s.'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', 'Kunde inte få tillgångar till den angivne mappen. Kontroller att den finns och är läsbar på servaren.');
define('ERR_NO_XOOPS_FOUND', 'Ingen XOOPS-installation kunde hittas i den angivna mappen.');
define('ERR_INVALID_EMAIL', 'Ogiltigt e-post'); // L73
define('ERR_REQUIRED', 'Information krävs.'); // L41
define('ERR_PASSWORD_MATCH', 'De två lösenorden stämmer inte överens');
define('ERR_NEED_WRITE_ACCESS', 'Servern måste ges skrivåtkomst till följande filer och mappar<br>(d.v.s. <em>chmod 775 directory_name</em> på en UNIX/LINUX-server)<br>Om de inte är tillgängliga eller inte skapats korrekt, skapa manuellt och ange lämpliga behörigheter.');
define('ERR_NO_DATABASE', 'Kunde inte skapa databas. Kontakta serveradministratören för mer information.'); // L31
define('ERR_NO_DBCONNECTION', 'Kunde inte ansluta till databasservern.'); // L106
define('ERR_WRITING_CONSTANT', 'Det gick inte att skriva konstant %s.'); // L122
define('ERR_COPY_MAINFILE', 'Kunde inte kopiera distributionsfilen till %s');
define('ERR_WRITE_MAINFILE', 'Kunde inte skriva i %s. Kontrollera filbehörigheten och försök igen.');
define('ERR_READ_MAINFILE', 'Kunde inte öppna %s för läsning');
define('ERR_INVALID_DBCHARSET', "Teckenuppsättningen '%s' stöds inte.");
define('ERR_INVALID_DBCOLLATION', "Sorteringen '%s' stöds inte.");
define('ERR_CHARSET_NOT_SET', 'Standardteckenuppsättningen är inte inställd för databasen XOOPS.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'Stöd');
define('LOGIN', 'Autentisering');
define('LOGIN_TITLE', 'Autentisering');
define('USER_LOGIN', 'Administratörsinloggning');
define('USERNAME', 'Användarnamn:');
define('PASSWORD', 'Lösenord :');
define('ICONV_CONVERSION', 'Teckensättkonvertering');
define('ZLIB_COMPRESSION', 'Zlib-komprimering');
define('IMAGE_FUNCTIONS', 'Bildfunktioner');
define('IMAGE_METAS', 'Bildmetadata (exif)');
define('FILTER_FUNCTIONS', 'Filterfunktioner');
define('ADMIN_EXIST', 'Administratörskontot finns redan.');
define('CONFIG_SITE', 'Platskonfiguration');
define('CONFIG_SITE_TITLE', 'Platskonfiguration');
define('MODULES', 'Modulinstallation');
define('MODULES_TITLE', 'Modulinstallation');
define('THEME', 'Välj tema');
define('THEME_TITLE', 'Välj standardtema');
define('INSTALLED_MODULES', 'Följande moduler har installerats.');
define('NO_MODULES_FOUND', 'Inga moduler hittades.');
define('NO_INSTALLED_MODULES', 'Ingen modul installerad.');
define('THEME_NO_SCREENSHOT', 'Ingen skärmbild hittades');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', 'Lösenordsstyrka');
define('PASSWORD_DESC', 'Lösenord inte angivet');
define('PASSWORD_GENERATOR', 'Lösenordsgenerator');
define('PASSWORD_GENERATE', 'Generera');
define('PASSWORD_COPY', 'Kopiera');
define('PASSWORD_VERY_WEAK', 'Mycket svagt');
define('PASSWORD_WEAK', 'Svagt');
define('PASSWORD_BETTER', 'Bättre');
define('PASSWORD_MEDIUM', 'Medel');
define('PASSWORD_STRONG', 'Starkt');
define('PASSWORD_STRONGEST', 'Starkast');
//2.5.7
define('WRITTEN_LICENSE', 'Skrev XOOPS %s Licensnyckel: <strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'Försök igen');
define('CHMOD_CHGRP_IGNORE', 'Använd ändå');
define('CHMOD_CHGRP_ERROR', 'Installatören kanske inte kan skriva konfigurationsfilen %1$s.<p>PHP skriver filer under användaren %2$s och gruppen %3$s.<p> Katalogen %4$s/ har användaren %5$s och gruppen %6$s');
//2.5.9
define("CURL_HTTP", "Klient URL bibliotek (cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', 'Cookiedomän för webbplatsen');
define('XOOPS_COOKIE_DOMAIN_HELP', 'Domän för att ställa in cookies. Kan vara tom, hela värden från URL (www.example.com) eller den registrerade domänen utan underdomäner (example.com) för att dela mellan underdomäner (www.example.com och blog.example.com.)');
define('INTL_SUPPORT', 'Internationaliseringsfunktioner');
define('XOOPS_SOURCE_CODE', "XOOPS på GitHub");
define('XOOPS_INSTALLING', 'Installerar');
define('XOOPS_ERROR_ENCOUNTERED', 'Fel');
define('XOOPS_ERROR_SEE_BELOW', 'Se nedan för meddelanden.');
define('MODULES_AVAILABLE', 'Tillgängliga moduler');
define('INSTALL_THIS_MODULE', 'Lägg till %s');
//2.5.11
define('ERR_COPY_CONFIG_FILE', 'Kunde inte kopiera konfigurationsfilen %s');
//2.7.0
// website name and slogan
define('_WEBSITE_NAME', 'XOOPS Webbplats');
define('_WEBSITE_SLOGAN', 'Använd det bara!');
define('_WEBSITE_META_KEYWORDS', 'xoops, ramverk för webbapplikationer, cms, innehållshanteringssystem');
define('_WEBSITE_FOOTER', "Drivs av XOOPS © 2001-{X_YEAR} <a href='https://xoops.org' rel='external' title='The XOOPS Project'>The XOOPS Project</a>");
define('_WEBSITE_COPYRIGHT', 'Copyright © 2001-{X_YEAR}');
define('_WEBSITE_DESCRIPTION', 'XOOPS är ett dynamiskt objektorienterat portalskript med öppen källkod skrivet i PHP.');
define('_WEBSITE_CENSOR_REPLACE', 'HOPPSAN');
// 2.7.1
define('MISSING_REQUIRED_EXTENSIONS', 'Required PHP extensions are missing');
define('MISSING_REQUIRED_EXTENSIONS_MSG', 'XOOPS cannot be installed because the following mandatory PHP extension(s) are not available: %s. Enable them in your PHP configuration (php.ini) and restart your web server, then reload this page.');
