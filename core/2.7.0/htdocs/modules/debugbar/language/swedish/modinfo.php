<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: sv

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'Felrapportering och prestandaanalys med PHP DebugBar');

define('_MI_DEBUGBAR_ENABLE', 'Visa DebugBar');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'Aktivera Smarty Debug');
define('_MI_DEBUGBAR_FILESDEBUG', 'Aktivera fliken Inkluderade filer');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', 'Visa alla PHP-filer som laddades under begäran');
define('_MI_DEBUGBAR_SLOWQUERY', 'Tröskelvärde för långsam fråga (sekunder)');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', 'Frågor långsammare än detta markeras med rött (t.ex. 0.05 = 50ms)');

define('_MI_DEBUGBAR_QUERYMODE',      'Frågloggning');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  'Alla frågor eller bara långsamma och fel');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  'Alla frågor');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', 'Bara långsamma och fel');

define('_MI_DEBUGBAR_RAY_ENABLE', 'Aktivera Ray-integration');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'Skicka felsökningsdata till Ray-appen');

define('_MI_DEBUGBAR_ADMENU1', 'Hem');
define('_MI_DEBUGBAR_MENU_ABOUT', 'Om');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', 'Tillbaka till administration av ');
\define('_MI_DEBUGBAR_OVERVIEW', 'Översikt');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', 'Friskrivning');
\define('_MI_DEBUGBAR_LICENSE', 'Licens');
\define('_MI_DEBUGBAR_SUPPORT', 'Stöd');
