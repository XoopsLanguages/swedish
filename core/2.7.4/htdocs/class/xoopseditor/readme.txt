xoopseditor tillhandahåller ett samling redaktörer för XOOPS

användarguide:

1 kontrollera filerna xoops_version.php under /xoopseditor/ för att se till att de är nyare än dina nuvarande

2 ladda upp /xoopseditor/ till /XOOPS/class/ => /XOOPS/class/xoopseditor/:
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/klass/xoopseditor/fckeditor
  XOOPS/klass/xoopseditor/koivi
  XOOPS/klass/xoopseditor/textområde
  XOOPS/class/xoopseditor/tinymce

3 konfigurera inställningar där tillämpligt
3.1 ./dhtmlext(alla redigerare)/language/: gör din lokala språkfil baserad på engelska.php
3.3 ./dhtmlext(alla redaktörer)/editor_registry.php: ställ in konfigurationer för editorn: order - visa ordning om redigeringsval används, 0 för inaktiverat; nohtml - fungerar för icke-html-syntax
3.3 ./FCKeditor/module/: kopiera filerna till modulmapparna om modulspecifika uppladdningsbehörigheter, lagrings- och redigeringsalternativ krävs
3.3.1 ./FCKeditor/module/fckeditor.config.js: för redigeringsalternativ behöver du vanligtvis inte ändra det
3.3.2 ./FCKeditor/module/fckeditor.connector.php: för att ange mappen för filsökning (och uppladdningslagring) => XOOPS/uploads/XOOPS_FCK_FOLDER/, mappen krävs för att skapa manuellt
3.3.3 ./FCKeditor/module/fckeditor.upload.php: ange uppladdningsbehörighet och uppladdningslagring
3.4 XOOPS/uploads/fckeditor/: för att skapa mappen om FCKeditor är aktiverat, används för uppladdningar där uppladdningsmappen inte är angiven
3.5 ./tinymce/tinymce/jscripts/: ladda ner dina lokala språkfiler från http://tinymce.moxiecode.com/language.php

4 kontrollera filnamn: för skiftlägeskänsliga system för filnamn, se till att du har filnamnen bokstavligen korrekta, dvs. "FCKeditor" är inte identisk med "fckeditor"

5 kolla /xoopseditor/sampleform.inc.php för utvecklingsguide
