<?php
//
// _LANGCODE: sv
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> är en öppen källkod
    Objektorienterat webbpubliceringssystem skrivet i PHP. Det är ett idealiskt verktyg för
    utveckla små till stora dynamiska community-webbplatser, företagsportaler, företagsportaler, webbloggar och mycket mer.
</p>
<p>
    XOOPS släpps under villkoren i
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU General Public License (GPL)</a>
    version 2 eller senare, och är gratis att använda och ändra.
    Det är gratis att omdistribuera så länge du följer distributionsvillkoren för GPL.
</p>
<h3>Krav</h3>
<ul>
    <li>WWW Server (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS, etc)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 8.2 eller högre, 8.4+ rekommenderas</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.7.8 eller högre, 8.4.5+ rekommenderas </li>
</ul>
<h3>Innan du install</h3>
<ol>
    <li>Ställ in WWW-servern, PHP och databasservern korrekt.</li>
    <li>Förbered en databas för din XOOPS-webbplats.</li>
    <li>Förbered användarkonto och ge användaren åtkomst till databasen.</li>
    <li>Gör dessa kataloger och filer skrivbara: %s</li>
    <li>Av säkerhetsskäl rekommenderas du starkt att flytta bort de två katalogerna nedan <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">dokumentrot</a> och ändra mappnamnen: %s</li>
    <li>Skapa (om det inte redan finns) och gör dessa kataloger skrivbara: %s</li>
    <li>Slå på din webbläsares cookie och JavaScript.</li>
</ol>
<h3>Särskilda anmärkningar</h3>
<ol>
    <li>Vissa specifika kombinationer av systemprogramvara kan kräva ytterligare konfigurationer för att fungera
    med XOOPS. Om något av dessa ämnen gäller din miljö, se hela
    <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPS
    installationsmanual</a> för mer information.<br><br>

    <li><strong>SELinux</strong> aktiverade system (t.ex <strong>CentOS</strong>  och <strong>RHEL</strong>) kan kräva ändringar av säkerhetskontexten
    för XOOPS kataloger utöver de normala filbehörigheterna för att göra kataloger skrivbara.
    Rådfråga din systemdokumentation och/eller systemadministratör.
</ol>
';

return $content;

