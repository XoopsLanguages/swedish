<?php

// _LANGCODE: sv
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'XOOPS Smarty4 Migration');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'Skannerresultat');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'Kör skanning');
define('_XOOPS_SMARTY4_SCANNER_END', 'Avsluta skanner');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'Regel');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'Match');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'Fil');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'Fixa räkning');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'Manuell granskning krävs');
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', 'Kan korrigeras automatiskt: för varje objektvariabel kommer att bytas om genom att lägga till "_item" (t.ex. "foo" blir "foo_item").');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'Ej skrivbar');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'Omsökningsalternativ');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'Klicka på kryssrutan "Ja" nedan och klicka sedan på knappen Kör skanning för att automatiskt försöka åtgärda eventuella problem.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'Markera färdig');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'Mallkatalog (valfritt)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'Malltillägg (valfritt)');


define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.7.0 introducerar en betydande förändring: Smarty 4</h3>

<p>Tyvärr kan denna förändring potentiellt störa vissa äldre teman. Därför, innan du fortsätter med uppgraderingen, se till att du följer dessa steg:

<li>Kör preflight.php för att leta efter föråldrade teman eller modulmallar.</li>
<li>Om några problem upptäcks, läs detta dokument för att förstå de nödvändiga ändringarna innan du fortsätter med uppgraderingen.</li>
<li>Efter att ha gjort de nödvändiga ändringarna, kör preflight.php igen.</li>
<li>Om det inte finns fler problem kan du påbörja uppgraderingsprocessen.</li>
</p>
EOT,
);
