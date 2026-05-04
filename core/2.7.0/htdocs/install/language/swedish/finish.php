<?php
//
// _LANGCODE: sv
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .= "<h3>Din webbplats</h3>
<p>Du kan nu komma åt <a href='../index.php'>hemsidan på din webbplats</a>.</p>
<h3>Stöd</h3>
<p>Besök <a href='https://xoops.org/' rel='external'>XOOPS-projektet</a></p>
<p><strong>OBSERVERA:</strong> Din webbplats innehåller för närvarande den minsta funktionaliteten. 
Besök gärna <a href='https://xoops.org/' rel='external' title='XOOPS Web Application System'>xoops.org</a> 
för att lära dig mer om hur du utökar XOOPS till att presentera textsidor, fotogallerier, forum och mer, 
med <em>moduler</em> samt anpassa utseendet på din XOOPS med <em>teman</em>.</p>
";

$content .= "<h3>Säkerhetskonfiguration</h3>
<p>Installationsprogrammet kommer att försöka konfigurera din webbplats av säkerhetsskäl. Vänligen dubbelkolla för att säkerställa att:
<div class='confirmMsg'>
De <em>mainfile.php</em> är skrivskyddad.<br>
Ta bort mappen <em>{$installer_modified}</em> (eller <em>install</em> om det inte döptes om automatiskt av installationsprogrammet) från din server.
</div>
</p>
";
