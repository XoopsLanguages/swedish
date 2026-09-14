<?php
/**
 * Second-factor challenge strings.
 *
 * A file of their own, apart from user.php: xoops_loadLanguage() falls back
 * to English for a missing file but never fills gaps in a present one, so
 * a language pack that predates the challenge renders it in English rather
 * than failing on an undefined constant.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             core
 * @since               2.7.4
 */

// XOOPS 2.7.4: two-factor challenge
define('_US_2FA_TITLE', 'Andra steget');
define('_US_2FA_PROMPT', 'Ange koden från din autentiseringsapp');
define('_US_2FA_CODE', 'Autentiseringskod');
define('_US_2FA_PROMPT_EMAIL', 'Vi har skickat en sexsiffrig kod till %s. Ange den nedan.');
define('_US_2FA_CODE_EMAIL', 'Kod från din e-post');
define('_US_2FA_SEND', 'Skicka en ny kod');
define('_US_2FA_SENT', 'En ny kod har skickats till %s. Den är giltig i tio minuter.');
define('_US_2FA_SEND_WAIT', 'En kod skickades för mindre än en minut sedan. Kontrollera din inkorg och skräppostmapp innan du begär en ny.');
define('_US_2FA_SEND_FAILED', 'Koden kunde inte skickas just nu. Försök igen om en stund, eller använd en återställningskod.');
define('_US_2FA_EMAIL_SUBJECT', '%s: din inloggningskod');
define('_US_2FA_EMAIL_BODY', 'Din inloggningskod för %s är:

%s

Den är giltig i %d minuter och fungerar en gång. Om du inte begärde detta, ignorera det här meddelandet och överväg att byta lösenord.');
define('_US_2FA_RECOVERY', 'Använd en återställningskod istället');
define('_US_2FA_RECOVERY_HINT', 'Varje återställningskod fungerar en gång. Om du använder en skickas ett e-postmeddelande till dig.');
define('_US_2FA_SUBMIT', 'Fortsätt');
define('_US_2FA_STARTAGAIN', 'Den här inloggningen har upphört eller avbrutits. Börja om igen.');
define('_US_2FA_BACKTOLOGIN', 'Tillbaka till inloggningsformuläret');
define('_US_2FA_BADCODE', 'Den koden godkändes inte.');
define('_US_2FA_LOCKED', 'För många försök. Andra steget är låst i femton minuter; en återställningskod fungerar fortfarande.');
define('_US_2FA_UNAVAILABLE', 'Andra steget är inte tillgängligt just nu. En återställningskod fungerar fortfarande, eller kontakta webbplatsens administratör.');
define('_US_2FA_REQUIRED', 'Det här kontot har tvåfaktorsautentisering aktiverat. Logga in via webbplatsens inloggningssida.');
define('_US_2FA_HTTP_LOGIN', 'Den här popup-rutan kan inte slutföra en tvåfaktorsinloggning via HTTP eftersom ditt lösenord skulle skickas okrypterat. Använd webbplatsens inloggning istället, eller be administratören aktivera HTTPS för webbplatsen.');
define('_US_2FA_LOCKED_MAIL_SUBJECT', '%s: andra steget låst');
define('_US_2FA_LOCKED_MAIL_BODY', 'Fem felaktiga koder för andra steget angavs för ditt konto på %s från %s. Andra steget är låst i femton minuter. Om det inte var du, byt lösenord.');
define('_US_2FA_RECOVERY_MAIL_SUBJECT', '%s: en återställningskod användes');
define('_US_2FA_RECOVERY_MAIL_BODY', 'En återställningskod användes för att logga in på ditt konto på %s från %s. Den koden fungerar inte längre. Om det inte var du, byt lösenord och återställ dina återställningskoder.');
