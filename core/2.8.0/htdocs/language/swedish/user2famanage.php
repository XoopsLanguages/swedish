<?php
/**
 * Two-factor management strings.
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

define('_US_2FAM_TITLE', 'Tvåfaktorsautentisering');
define('_US_2FAM_PASSWORD', 'Ditt nuvarande lösenord');
define('_US_2FAM_ENABLE', 'Konfigurera en autentiseringsapp');
define('_US_2FAM_CONFIRM', 'Bekräfta autentiseringsapp');
define('_US_2FAM_CHOOSE', 'Välj hur du vill ta emot ditt andra steg: en autentiseringsapp eller en kod via e-post.');
define('_US_2FAM_ENABLE_EMAIL', 'Använd e-postkoder');
define('_US_2FAM_EMAIL_HELP', 'E-postkoder: en sexsiffrig kod skickas till %s varje gång du loggar in. Mindre säkert än en autentiseringsapp, eftersom alla som kan läsa din e-post kan klara detta steg.');
define('_US_2FAM_EMAIL_STEP', 'Vi har skickat en sexsiffrig kod till %s. Ange den nedan för att bekräfta. Den är giltig i tio minuter.');
define('_US_2FAM_CONFIRM_EMAIL', 'Bekräfta e-postkoder');
define('_US_2FAM_CODE_HELP_EMAIL', 'Den sexsiffriga koden från e-postmeddelandet vi just skickade dig.');
define('_US_2FAM_ENABLED_EMAIL', 'E-postkoder är aktiverade. För att göra en ändring anger du ditt nuvarande lösenord och koden vi skickar via e-post, eller en återställningskod. Använd knappen nedan för att begära en kod.');
define('_US_2FAM_SEND', 'Skicka en kod till mig');
define('_US_2FAM_MANUAL', 'Manuell installationsnyckel');
define('_US_2FAM_SCAN', 'QR-kod för din autentiseringsapp');
define('_US_2FAM_STEP_APP', 'Du behöver en autentiseringsapp: vilken app eller lösenordshanterare som helst som genererar tidsbaserade engångskoder (TOTP) fungerar, på din telefon eller dator. Om du inte redan har en, installera en efter eget val först (t.ex. Google Authenticator, Microsoft Authenticator, Aegis eller FreeOTP).');
define('_US_2FAM_STEP_ADD', 'Lägg till ett konto i appen: skanna den här QR-koden, eller välj manuell inmatning och skriv installationsnyckeln som visas nedanför.');
define('_US_2FAM_STEP_CODE', 'Appen visar nu en sexsiffrig kod som ändras var 30:e sekund. Ange koden som visas just nu i fältet nedan och bekräfta.');
define('_US_2FAM_CODE_HELP', 'Den sexsiffriga koden som din autentiseringsapp visar just nu.');
define('_US_2FAM_HTTP', 'Den här anslutningen använder vanlig HTTP. Ditt lösenord, session, installationsnyckel och återställningskoder kan avlyssnas. Använd HTTPS när det är möjligt.');
define('_US_2FAM_CODES', 'Spara dessa återställningskoder nu');
define('_US_2FAM_CODES_HELP', 'Varje kod fungerar en gång. Dessa koder visas inte igen. Förvara dem på ett säkert ställe, skilt från detta konto.');
define('_US_2FAM_DISABLE', 'Inaktivera tvåfaktorsautentisering');
define('_US_2FAM_REGENERATE', 'Ersätt återställningskoder');
define('_US_2FAM_ENABLED', 'En autentiseringsapp är konfigurerad. Ange ditt nuvarande lösenord och en autentiserings- eller återställningskod för att göra en ändring.');
define('_US_2FAM_DISABLED', 'Tvåfaktorsautentisering är inaktiverat.');
define('_US_2FAM_PAUSED', 'Webbplatsen har pausat tvåfaktorskontroller. Din faktor behålls, och "kom ihåg mig" förblir otillgängligt för konfigurerade konton.');
define('_US_2FAM_UNAVAILABLE', 'Konfiguration eller hantering av tvåfaktorsautentisering är inte tillgänglig. Kontakta webbplatsens administratör.');
define('_US_2FAM_STARTAGAIN', 'Konfigurationen har upphört eller kontot har ändrats. Ange ditt lösenord för att starta konfigurationen igen.');
define('_US_2FAM_BADPASSWORD', 'Ditt nuvarande lösenord godkändes inte.');
define('_US_2FAM_RESET', 'Återställ den här användarens tvåfaktorsautentisering');
define('_US_2FAM_STATUS_NONE', 'Inte konfigurerad');
define('_US_2FAM_STATUS_TOTP', 'Autentiseringsapp konfigurerad');
define('_US_2FAM_STATUS_EMAIL', 'E-postkoder konfigurerade');
define('_US_2FAM_STATUS_UNAVAILABLE', 'Status inte tillgänglig');
define('_US_2FAM_RESET_HELP', 'Detta inaktiverar användarens andra faktor, oavsett vilken metod de konfigurerat, och återkallar deras återställningskoder och "kom ihåg mig"-cookies. Befintliga inloggade sessioner förblir aktiva. Ange ditt eget administratörslösenord för att bekräfta.');
define('_US_2FAM_RESET_DONE', 'Användarens tvåfaktorsautentisering har återställts.');
define('_US_2FAM_BACK', 'Tillbaka till kontot');
define('_US_2FAM_DONE', 'Tvåfaktorsautentisering är aktiverat.');
define('_US_2FAM_REPLACED', 'Tidigare återställningskoder har återkallats.');
define('_US_2FAM_NOTICE_SUBJECT', '%s: tvåfaktorsautentisering ändrad');
define('_US_2FAM_NOTICE_BODY', 'Tvåfaktorsautentiseringen eller återställningskoderna för ditt konto på %s ändrades från %s. Om det inte var du, kontakta webbplatsens administratör.');
define('_US_2FAM_RESET_SUBJECT', '%s: en administratör återställde din tvåfaktorsautentisering');
define('_US_2FAM_RESET_BODY', 'En administratör inaktiverade din andra faktor och återkallade dess återställningskoder på %s från %s. Befintliga inloggade sessioner förblir aktiva. Logga in och konfigurera tvåfaktorsautentisering igen. Kontakta webbplatsens administratör om detta var oväntat.');
