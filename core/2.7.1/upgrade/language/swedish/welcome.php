<?php

// _LANGCODE: sv
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>XOOPS Uppgradering</h2>

<p>
<em>Uppgradera</em> kommer att undersöka den här XOOPS-installationen och tillämpa alla nödvändiga korrigeringar för att göra den kompatibel 
med den nya koden XOOPS. Patchar kan innehålla databasändringar, lägga till standardinställningar för nya
konfigurationsobjekt, fil- och datauppdateringar och mer.
<p>
Efter varje patch kommer uppgraderaren att rapportera status och vänta på att din input ska fortsätta. Vid
i slutet av uppgraderingen kommer kontrollen att övergå till systemmodulens uppdateringsfunktion.

<div class="alert alert-warning">
När uppgraderingen är klar, glöm inte att:
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> ta bort uppgraderingsmappen</li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> uppdatera alla moduler som har ändrats</li>
</div>

EOT,
);
