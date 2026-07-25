<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: sv

define('_MD_DEBUGBAR_DEBUG', 'Felsökning');
define('_MD_DEBUGBAR_INCLUDED_FILES', 'Inkluderade filer');
define('_MD_DEBUGBAR_PHP_VERSION', 'PHP-version');
define('_MD_DEBUGBAR_NONE', 'Ingen');
define('_MD_DEBUGBAR_ERRORS', 'Fel');
define('_MD_DEBUGBAR_DEPRECATED', 'Föråldrat');
define('_MD_DEBUGBAR_QUERIES', 'Frågor');
define('_MD_DEBUGBAR_BLOCKS', 'Block');
define('_MD_DEBUGBAR_EXTRA', 'Extra');
define('_MD_DEBUGBAR_TIMERS', 'Tidtagare');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s tog %s sekunder att ladda.');
define('_MD_DEBUGBAR_TOTAL', 'Totalt');
define('_MD_DEBUGBAR_NOT_CACHED', 'Inte cachad');
define('_MD_DEBUGBAR_CACHED', 'Cachad (regenereras var %s:e sekund)');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(tom sträng)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'bool SANT');
define('_MD_DEBUGBAR_BOOL_FALSE', 'bool FALSK');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', 'Databasfrågor');
define('_MD_DEBUGBAR_MEMORY_USAGE', 'Minnesanvändning');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d frågor');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d dubbletter)');
define('_MD_DEBUGBAR_BYTES', '%s byte');
define('_MD_DEBUGBAR_DB_VERSION', '%s version');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- Felnummer: %s Felmeddelande: %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- Fel #%s: %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', 'Undantag');
define('_MD_DEBUGBAR_RAY_QUERY', 'Fråga #%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', 'LÅNGSAM');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', 'Blockera (cachelagrade %ds)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', 'Blockera (ej cachad)');
define('_MD_DEBUGBAR_RAY_DUMP', 'Dumpa');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', 'Mallkontext');
define('_MD_DEBUGBAR_RAY_NO_VARS', '(inga mallvariabler)');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d vars)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', 'Katalogen "modules/debugbar/%s" skapades inte');
define('_MD_DEBUGBAR_ERR_DIR_COPY', 'Det gick inte att skapa katalogen "%s" under tillgångskopieringen');
