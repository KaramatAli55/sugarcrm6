<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

	

$mod_strings = array (
  'ERR_IMPORT_SYSTEM_ADMININSTRATOR' => 'Du kan inte importera en system administratörs användare',
  'ERR_MISSING_MAP_NAME' => 'Saknar custom mappningsnamn',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Saknar obligatoriska fälten:',
  'ERR_MULTIPLE' => 'Flera kolumner har definierats till samma fältnamn.',
  'ERR_MULTIPLE_PARENTS' => 'Du kan endast ha ett Föräldra ID definierat',
  'ERR_SELECT_FILE' => 'Välj en fil att ladda upp.',
  'ERR_SELECT_FULL_NAME' => 'Du kan inte välja Fullständigt namn när Förnamn och Efternamn är valt.',
  'LBL_' => '',
  'LBL_ACCOUNTS_NOTE_1' => 'Organisationsnamn måste mappas.',
  'LBL_ACT' => 'Act!',
  'LBL_ACT_NUM_1' => 'Starta <b>ACT!</b>',
  'LBL_ACT_NUM_10' => 'Markera <b>Alla poster</b> och klicka sedan <b>Klar</b>',
  'LBL_ACT_NUM_2' => 'Välj <b>File</b> menyn, <b>Data Exchange</b> menyvalet, och sedan <b>Export...</b> menyvalet',
  'LBL_ACT_NUM_3' => 'Välj filtypen <b>Text-Delimited</b>',
  'LBL_ACT_NUM_4' => 'Välj ett filnamn och en plats för det exporterade datat att sparas på och klicka <b>Nästa</b>',
  'LBL_ACT_NUM_5' => 'Markera <b>Endast kontakter</b>',
  'LBL_ACT_NUM_6' => 'Klicka på <b>Options...</b> knappen',
  'LBL_ACT_NUM_7' => 'Välj <b>Comma</b> som fältsepareringstecken',
  'LBL_ACT_NUM_8' => 'Kontrollera <b>Ja, exportera fältnamn</b> checkbox och klicka <b>OK</b>',
  'LBL_ACT_NUM_9' => 'Klicka <b>Nästa</b>',
  'LBL_ADD_FIELD_HELP' => 'Använd det här alternativet för att lägga till ett värde till ett fält i alla protokoll skapade och/eller uppdaterade. Välj fältet och fyll i eller välj ett värde för det fältet i Standard Värde kolumnen',
  'LBL_ADD_ROW' => 'Lägg till fält',
  'LBL_ARE_YOU_SURE' => 'Är du säker? Detta kommer att ta bort all data i denna modul.',
  'LBL_ASSIGNED_USER' => 'On användaren inte finns använd den nuvarande användaren',
  'LBL_AUTO_DETECT_ERROR' => 'Fältavgränsaren och qualifier i den importerade filen kunde inte hittar. Vänligen bekräfta inställningarna i Importera Fil Egenskaper.',
  'LBL_BACK' => '< Tillbaka',
  'LBL_CANCEL' => 'Avbryt',
  'LBL_CANNOT_OPEN' => 'Kan inte öppna importfilen för läsning',
  'LBL_CHARSET' => 'Filencodning',
  'LBL_CONFIRM_EXT_TITLE' => 'Steg {0}: Bekräfta Extern Källa Egenskaper',
  'LBL_CONFIRM_IMPORT' => 'Du har nu valt att uppdatera protokoll under importeringsprocessen. Uppdateringar  gjorde av existerande protokoll kan inte bli ogjorda. Protokoll skapade under importprocessen kan bli ogjorde (raderade), om så önskas. Klicka Cancel för att endast skapa nya protokoll, eller klicka OK för att fortsätta.',
  'LBL_CONFIRM_MAP_OVERRIDE' => 'Varning: Du har redan valt att en anpassad mappning för den här importeringen, vill du fortsätta?',
  'LBL_CONFIRM_TITLE' => 'Steg {0}: Bekräfta Importera Fil Egenskaper',
  'LBL_CONTACTS_NOTE_1' => 'Efternamn eller Fullständigt namn måste mappas.',
  'LBL_CONTACTS_NOTE_2' => 'Om Fullständigt namn är mappat kommer förnamn och efternamn ignoreras.',
  'LBL_CONTACTS_NOTE_3' => 'Om Fullständigt namn är mappat kommer datan i Fullständigt namn delas upp i förnamn och efternamn när det förs in i databasen.',
  'LBL_CONTACTS_NOTE_4' => 'Fält som slutar i Adress gata 2 och Adress gata 3 är sammanlänkade med varandra till Adress gata fältet när de är insatta i databasen.',
  'LBL_CREATED_TAB' => 'Skapa Protokoll',
  'LBL_CREATE_BUTTON_HELP' => 'Använd den här funktionen för att skapa nya protokoll. Notera: Rader i den importerade filen som innehåller värden som matchar ID med existerande protokoll kommer inte importeras om värderna är kopplade till IDfältet.',
  'LBL_CSV' => 'Kommaseparerad fil',
  'LBL_CURRENCY' => 'Valuta',
  'LBL_CURRENCY_SIG_DIGITS' => 'Valutadecimaler',
  'LBL_CUSTOM' => 'Anpassad',
  'LBL_CUSTOM_CSV' => 'Anpassad kommaseparerad fil',
  'LBL_CUSTOM_DELIMITED' => 'Custom begränsad fil',
  'LBL_CUSTOM_DELIMITER' => 'Fält begränsad av:',
  'LBL_CUSTOM_ENCLOSURE' => 'Fält förtydligade av:',
  'LBL_CUSTOM_NUM_1' => 'Starta applikationen och öppna datafilen',
  'LBL_CUSTOM_NUM_2' => 'Välj <b>Spara som...</b> eller <b>Exportera...</b> menyalternativ',
  'LBL_CUSTOM_NUM_3' => 'Spara filen i <b>CSV</b> eller <b>Kommaseparerat</b> format',
  'LBL_CUSTOM_TAB' => 'Anpassad tabbseparerad fil',
  'LBL_DATABASE_FIELD' => 'Databasfält',
  'LBL_DATABASE_FIELD_HELP' => 'Väl ett fält från listan över alla existerande fält i databasen för denna modul.',
  'LBL_DATE_FORMAT' => 'Datumformat:',
  'LBL_DEBUG_MODE' => 'Aktivera debugg-mode',
  'LBL_DECIMAL_SEP' => 'Decimalsymbol',
  'LBL_DEFAULT_VALUE' => 'Standardvärde',
  'LBL_DEFAULT_VALUE_HELP' => 'Ange ett värde att använda för detta fält för skapade eller uppdaterade poster om importfilen inte innehåller något värde.',
  'LBL_DELETE' => 'radera',
  'LBL_DELETE_MAP_CONFIRMATION' => 'Är du säker på att du vill radera de här sparade alternativ för importinställningar?',
  'LBL_DELIMITER_COMMA_HELP' => 'Välj detta om fältsepareraren i importfilen är ett <b>komma</b> eller om filändelsen är .csv',
  'LBL_DELIMITER_CUSTOM_HELP' => 'Välj detta om tecknet som separerar fälten i importfilen varken är komma eller TAB och skriv in tecknet i det intilliggande fältet.',
  'LBL_DELIMITER_TAB_HELP' => 'Välj detta om tecknet som separerar fälten vid import är <b>TAB</b> pcj filändelsen är .txt.',
  'LBL_DESELECT' => 'avmarkera',
  'LBL_DONT_MAP' => '-- Mappa inte detta fält --',
  'LBL_DUPLICATES' => 'Kopia hittad',
  'LBL_DUPLICATE_TAB' => 'Dubbelposter',
  'LBL_DUP_HELP' => 'Här är de rader i den importerade filen som inte kunde importeras eftersom de innehåller data som matchar de existerande protokollen baserat på dubbelpostkontrollen. Datan som matchar är markerad. För att importera raderna igen, ladda ner listan, gör ändringar och klicka  <b>Importera Igen</b>.',
  'LBL_ENCLOSURE_HELP' => '<p><b>Inhängnings tecknet</b> används för att hålla ihop data i filen, som inkluderar vilket tecken som helst som används som avgräsare.<br><br>Exempel: Om avgräsaren är komma (,) och inhängare är citationstecken (\\"),<br><b>"Cupertino, California"</b> blir importerar till ett fält i applikationen och visas som <b>Cupertino, California</b>.<br>Om det inte finns några inhängningstecken eller om det är ett annat tecken så importeras <br><b>"Cupertino, California"</b> till två fält som <b>"Cupertino</b> och <b>Texas"</b>.<br><br>Anteckning: Importfilen behlver inte innehålla inhängningstecken.<br>Standardtecknet för komma- och tab- separerade filer skapade i Excel är citationstecken.</p>',
  'LBL_ERROR' => 'Fel:',
  'LBL_ERROR_DELETING_RECORD' => 'Error radera poster:',
  'LBL_ERROR_HELP' => 'Här är de rader i den importerade filen som inte kunde importeras på grund av fel.För att importera raderna igen, ladda ner listan, gör ändringar och klicka  <b>Importera Igen</b>.',
  'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Importer är inte uppsatta för denna modultyp',
  'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'Importerings cache katalogen är inte skrivbar.',
  'LBL_ERROR_INVALID_ACCOUNT' => 'Ogiltigt organisationsnamn eller ID',
  'LBL_ERROR_INVALID_BOOL' => 'Ogiltigt värde (skall vara 1 eller 0)',
  'LBL_ERROR_INVALID_CURRENCY' => 'Ogiltigt valuta-värde',
  'LBL_ERROR_INVALID_DATE' => 'Ogiltig datumsträng',
  'LBL_ERROR_INVALID_DATETIME' => 'Ogiltig datetime',
  'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Ogiltigt datum och tid',
  'LBL_ERROR_INVALID_EMAIL' => 'Ogiltig Email-adress',
  'LBL_ERROR_INVALID_FLOAT' => 'Ogiltigt floating point-nummer',
  'LBL_ERROR_INVALID_ID' => 'ID är för långt för att rymmas i fältet (maxlängd är 36 tecken)',
  'LBL_ERROR_INVALID_INT' => 'Ogiltigt integer-värde',
  'LBL_ERROR_INVALID_NAME' => 'Sträng för lång för att rymmas i fältet',
  'LBL_ERROR_INVALID_NUM' => 'Ogiltig numeriskt värde',
  'LBL_ERROR_INVALID_PHONE' => 'Ogiltigt telefonnummer',
  'LBL_ERROR_INVALID_RELATE' => 'Ogiltigt relationsfält',
  'LBL_ERROR_INVALID_TEAM' => 'Ogiltigt teamnamn eller ID',
  'LBL_ERROR_INVALID_TIME' => 'Ogiltig time',
  'LBL_ERROR_INVALID_USER' => 'Ogiltigt användarnamn eller ID',
  'LBL_ERROR_INVALID_VARCHAR' => 'Sträng för lång för att rymmas i fältet',
  'LBL_ERROR_NOT_IN_ENUM' => 'Värde i dropdown-lista. Tillåtna värden är:',
  'LBL_ERROR_SELECTING_RECORD' => 'Error markera poster:',
  'LBL_ERROR_SYNC_USERS' => 'Ogiltigt värde att synka till Outlook:',
  'LBL_ERROR_TAB' => 'Fel',
  'LBL_ERROR_UNABLE_TO_PUBLISH' => 'Kunde inte publicera. Det finns en annan publicerad import med samma namn.',
  'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Kunde inte opublicera en karta ägd av en annan användare. Du äger en import-karta med samma namn.',
  'LBL_EXAMPLE_FILE' => 'Ladda Ner Importera Fil Mall',
  'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'För att tilldela nya protokoll till en annan användare än dig själv, använd Standard Värde kolumnen för att välja en annan användare.',
  'LBL_EXTERNAL_DEFAULT_TOOPLTIP' => 'Indikerar ett värde som ska användas i skapade protokoll om fälten i den externa källan inte innehåll data.',
  'LBL_EXTERNAL_ERROR_FEED_CORRUPTED' => 'Kunde inte hämta externt feed, vänligen försök igen senare.',
  'LBL_EXTERNAL_ERROR_NO_SOURCE' => 'Kunde inte hämta source adapter, vänligen försök igen senare.',
  'LBL_EXTERNAL_FIELD' => 'Externt Fält',
  'LBL_EXTERNAL_FIELD_TOOLTIP' => 'Den här kolumnen visar fält externa källan som innehåller data som kan användas för att skapa nya protokoll.',
  'LBL_EXTERNAL_MAP_HELP' => 'Tabellen nedanför innehåller fälten i den externa källan och modulens fält för vilka de är mappade. Kolla mappningen för att vara säker på att de är vad du förväntar dig, och gör ändringar om det behövs. VAr säker på att mappa alla obligatoriska fält (markerade med stjärna).',
  'LBL_EXTERNAL_MAP_NOTE' => 'Importeringen kommer försökas för kontakterna i alla Google Contacts grupper.',
  'LBL_EXTERNAL_MAP_NOTE_SUB' => 'Användarnamnet för den nyligen skapade användaren kommer att vara Hela Namnen i Google Contact som standard. Användarnamnen kan ändras efter det att användarprotokollen skapats.',
  'LBL_EXTERNAL_MAP_SUB_HELP' => 'Klicka <b>Importera Nu</b> för att starta importen. Protokoll kommer endast skapas för de poster som innehåller efternamn. Protokoll kommer inte skapas för data som identifieras som dubbelposter baserat på namn och/eller epostadresser som matchar redan existerande protokoll.',
  'LBL_EXTERNAL_SOURCE' => 'se extern applikation eller service',
  'LBL_EXTERNAL_SOURCE_HELP' => 'Använd det här alternativet för att importera data direkt från en extern applikation eller service, såsom Gmail.',
  'LBL_EXTERNAL_TEAM_TOOLTIP' => 'För att tilldela nya protokoll till andra grupper än ditt standard team(s), använd Standard Värde kolumnen för att välja ett annat team.',
  'LBL_EXT_SOURCE_SIGN_IN' => 'Logga In',
  'LBL_FAIL' => 'Misslyckades:',
  'LBL_FAILURE' => 'Importering misslyckades:',
  'LBL_FIELD_DELIMETED_HELP' => 'Fältavgränsaren specificerar vilket tecken som används för att avskilja fält kolumner.',
  'LBL_FIELD_NAME' => 'Fältnamn',
  'LBL_FILE_ALREADY_BEEN_OR' => 'Importfilen har redan blivit processad eller finns inte',
  'LBL_FILE_OPTIONS' => 'Filoperationer',
  'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Välj en fil som innehåller data som är separerad av en avskiljare, såsom en komma- eller tab- avskild fil. Filer av typen .csv rekommenderas.',
  'LBL_FINISHED' => 'Avsluta',
  'LBL_GOOD_FILE' => 'Importfilen lästes framgångsrikt',
  'LBL_HAS_HEADER' => 'Har rubriker:',
  'LBL_HEADER_ROW' => 'Rubrikrad',
  'LBL_HEADER_ROW_HELP' => 'Det här är fälttitlarna för rubriksraden i importfilen.',
  'LBL_HEADER_ROW_OPTION_HELP' => 'Välj om toppraden på den importerade filen är en HuvudRad som innehåller fältnamn.',
  'LBL_HIDE_ADVANCED_OPTIONS' => 'Göm avancerade inställningar',
  'LBL_HIDE_NOTES' => 'Göm Anteckningar',
  'LBL_HIDE_PREVIEW_COLUMNS' => 'Göm tidigare columner',
  'LBL_IDS_EXISTED_OR_LONGER' => 'Poster hoppades över på grund av att id:t antingen existerade eller var längre än 36 tecken',
  'LBL_ID_EXISTS_ALREADY' => 'ID finns redan i denna annan tabell',
  'LBL_IMPORT_ACT_TITLE' => 'Act! kan exportera data i <b>Comma Separated Values</b> format, som kan användas för att importera data till systemet. För att exportera data frpn Act! följ stegen nedan:',
  'LBL_IMPORT_BUTTON' => 'Skapa poster',
  'LBL_IMPORT_COMPLETE' => 'Importen färdig',
  'LBL_IMPORT_COMPLETED' => 'Importering lyckades',
  'LBL_IMPORT_CUSTOM_TITLE' => 'Många applikationer tillåter att exportera data till en <b>kommaseparerad text fil (.csv)</b>. Dessa steg gäller de flesta applikationer:',
  'LBL_IMPORT_ERROR' => 'Import-error förekom',
  'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'Den importerade filen innehåller {0} rader. Det optimala antalet rader är {1}. Fler rader kan sakta ner importeringsprocessen. Klicka OK för att fortsätta importering. Klicka Avbryt för att se över och ladda upp den importerade filen igen.',
  'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Användarnamn eller ID',
  'LBL_IMPORT_FIELDDEF_BOOL' => '&#39;0&#39; or &#39;1&#39;',
  'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Numeriskt (Decimaler tillåtna)',
  'LBL_IMPORT_FIELDDEF_DATE' => 'Datum',
  'LBL_IMPORT_FIELDDEF_DATETIME' => 'Datetime',
  'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Numeriskt (Inga decimaler)',
  'LBL_IMPORT_FIELDDEF_EMAIL' => 'Epostadress',
  'LBL_IMPORT_FIELDDEF_ENUM' => 'Lista',
  'LBL_IMPORT_FIELDDEF_FLOAT' => 'Numeriskt (Decimaler tillåtna)',
  'LBL_IMPORT_FIELDDEF_ID' => 'Unika ID nummer',
  'LBL_IMPORT_FIELDDEF_INT' => 'Numeriskt (Inga decimaler)',
  'LBL_IMPORT_FIELDDEF_NAME' => 'Valfri text',
  'LBL_IMPORT_FIELDDEF_NUM' => 'Numeriskt (Inga decimaler)',
  'LBL_IMPORT_FIELDDEF_PHONE' => 'Telefonnummer',
  'LBL_IMPORT_FIELDDEF_RELATE' => 'Namn eller ID',
  'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Teamnamn eller ID',
  'LBL_IMPORT_FIELDDEF_TEXT' => 'Valfri text',
  'LBL_IMPORT_FIELDDEF_TIME' => 'Tid',
  'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Valfri text',
  'LBL_IMPORT_FILE_SETTINGS' => 'Import fil inställningar',
  'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Specificera inställningarna i importfilen för att försäkra dig om att datat importeras<br> korrekt. Dessa inställningar kommer inte att överskugga dina preferences. De skapade eller uppdaterade posterna kommer att innehålla inställningarna specificerat i Min Konta-sida.',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'Filen är för stor. Max:',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'Bytes. Ändra $sugar_config[&#39;upload_maxsize&#39;] i config.php',
  'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'Filen laddades ej upp korrekt. Kontrollera filrättigheterna i din Sugar installations cache katalog.',
  'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'Filerna laddades ej upp korrekt. Det kan bero på att inställningarna i &#39;upload_max_filesize&#39; i php.ini filen är satt till ett för lågt värde',
  'LBL_IMPORT_MODULE_MAP_ERROR' => 'Kunde inte publicera. Det finns en annan publicerad import map med samma namn.',
  'LBL_IMPORT_MODULE_MAP_ERROR2' => 'Kunde inte opublicera en map ägd av en annan användare. Du åger en import map med samma namn.',
  'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'Katalogen',
  'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => 'finns inte eller är inte skrivbar',
  'LBL_IMPORT_MODULE_NO_TYPE' => 'Importering är inte satt upp för den här modultypen',
  'LBL_IMPORT_MODULE_NO_USERS' => 'VARNING: Du har inga användare definerade i ditt system. Om du importerar utan att lägga till användare först kommer alla poster att ägas av administratören.',
  'LBL_IMPORT_MORE' => 'Importera mera',
  'LBL_IMPORT_NOW' => 'Importera nu',
  'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98 och 2000 kan exportera data i <b>komma separeradt</b> format vilken kan användas för att importera data till systemet. För att exportera data från Outlook, följ stegen nedan:',
  'LBL_IMPORT_RECORDS' => 'Importerar poster',
  'LBL_IMPORT_RECORDS_OF' => 'av',
  'LBL_IMPORT_RECORDS_TO' => 'till',
  'LBL_IMPORT_SF_TITLE' => 'Salesforce.com kan kan exportera i <b>komma separerat</b> format vilket kan användas för att importera data till systemet. För att exportera data från Salesforce.com, följ stegen nedan:',
  'LBL_IMPORT_STARTED' => 'Import startad:',
  'LBL_IMPORT_TAB_TITLE' => 'Många applikationer tillåter att exportera data till en <b>tabbseparerad text fil (.tsv eller .tab)</b>. Dessa steg gäller de flesta applikationer:',
  'LBL_IMPORT_TYPE' => 'Importer händelse',
  'LBL_INDEX_NOT_USED' => 'Ej använda index',
  'LBL_INDEX_USED' => 'Använda index',
  'LBL_LAST_IMPORTED' => 'Senast importerade',
  'LBL_LAST_IMPORT_UNDONE' => 'Din senaste import är ogjord',
  'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Namnvisningsformat',
  'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Exempel',
  'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>\\"s\\" Titel, \\"f\\" Förnamn, \\"l\\" Efternamn</i>',
  'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
  'LBL_MICROSOFT_OUTLOOK_HELP' => 'Anpassad mappning för Microsoft Outlook hänger på att den importerade filen är komma-avskild (.csv). Om din importerade fil är avskild med tab, kommer mappningen inte bli som tänkt.',
  'LBL_MIME_TYPE_ERROR_1' => 'Den valda filen verkar inte innehålla en avgränsad lista. Vänligen kolla filtypen. Vi rekommenderar komma-avskilda filer (.csv).',
  'LBL_MIME_TYPE_ERROR_2' => 'För att fortsätta med importeringen av den valda filen, klicka OK. För att ladda upp en ny fil, klicka Försök Igen',
  'LBL_MISSING_HEADER_ROW' => 'Ingen Huvudrad Hittades',
  'LBL_MODULE_NAME' => 'Importera',
  'LBL_MY_PUBLISHED_HELP' => 'En sparad mappning specificerar en tidigare använd kombination av en tidigare använd datakälla och en uppsättning databasfält att mappa fälten mot i importfilen.',
  'LBL_MY_SAVED' => 'Mina sparade källor:',
  'LBL_MY_SAVED_ADMIN_HELP' => 'Använd det här alternativet för att använda dina förinställda importinställningar, inklusive import egenskaper, mappning, och dubbelpostkontroll, till den här importeringen.<br><br>Klicka <b>Publicera</b> för att göra mappning möjlig för andra användare.<br>Klicka <b>Avpublicera</b> för att inte göra mappning möjlig för andra användare.<br>Klicka <b>Radera</b> för att radera mappning för andra användare.',
  'LBL_MY_SAVED_HELP' => 'En sparad mappning specificerar en tidigare använd kombination av en tidigare använd datakälla och en uppsättning databasfält att mappa fälten mot i importfilen. <br>Klicka <b>Publicera</b> för att göra mappningen tillgänglig för andra användare. <br>Klicka <b>Opublicera</b> för att göra mappnings otillgänglig för andra användare..',
  'LBL_NEXT' => 'Nästa >',
  'LBL_NOLOCALE_NEEDED' => 'Ingen lokal konvertering behövs',
  'LBL_NONE' => 'Inget',
  'LBL_NOTES' => 'Anteckningar:',
  'LBL_NOT_MULTIENUM' => 'Inte en MultiEnum',
  'LBL_NOT_SAME_NUMBER' => 'Det var inte samma antal fält per rad i din fil',
  'LBL_NOT_SET_UP' => 'Importering är inte satt upp för denna modultyp',
  'LBL_NOT_SET_UP_FOR_IMPORTS' => 'Importering är inte satt upp för denna modultyp',
  'LBL_NOW_CHOOSE' => 'Välj nu importfilen:',
  'LBL_NO_DATECHECK' => 'Skippa datumkontroll (snabbare men kommer att misslyckas om datan är fel)',
  'LBL_NO_EMAILS' => 'Skicka inte ut epost-notifieringar under den här importen',
  'LBL_NO_ID' => 'ID krävs',
  'LBL_NO_IMPORT_TO_UNDO' => 'Det fanns ingen import att göra ogjord',
  'LBL_NO_LINES' => 'Det var inga linjer i din importfil',
  'LBL_NO_PRECHECK' => 'Rent format-sätt',
  'LBL_NO_RECORD' => 'Ingen post med detta ID finns att uppdatera',
  'LBL_NO_WORKFLOW' => 'Kör inte workflows under den här importen',
  'LBL_NUMBER_GROUPING_SEP' => '1000-tals separator',
  'LBL_NUM_1' => '1.',
  'LBL_NUM_10' => '10.',
  'LBL_NUM_11' => '11.',
  'LBL_NUM_12' => '12.',
  'LBL_NUM_2' => '2.',
  'LBL_NUM_3' => '3.',
  'LBL_NUM_4' => '4.',
  'LBL_NUM_5' => '5.',
  'LBL_NUM_6' => '6.',
  'LBL_NUM_7' => '7.',
  'LBL_NUM_8' => '8.',
  'LBL_NUM_9' => '9.',
  'LBL_OK' => 'OK',
  'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Dubbelt citationstecken (")',
  'LBL_OPTION_ENCLOSURE_NONE' => 'Inget',
  'LBL_OPTION_ENCLOSURE_OTHER' => 'Annan:',
  'LBL_OPTION_ENCLOSURE_QUOTE' => 'Enkelt citationstecken (&#39;)',
  'LBL_OUTLOOK_NUM_1' => 'Starta <b>Outlook</b>',
  'LBL_OUTLOOK_NUM_2' => 'Välj <b>Arkiv</b> menyn, sen <b>Importera och Exportera ...</b> menyalternativet',
  'LBL_OUTLOOK_NUM_3' => 'Välj <b>Exportera till fil</b> och välj Nästa',
  'LBL_OUTLOOK_NUM_4' => 'Välj <b>Komma separerad (Windows)</b> och välj <b>Nästa</b>.<br>  Notera: Du kan bli uppmanad att installera exportkomponenten',
  'LBL_OUTLOOK_NUM_5' => 'Välj <b>Kontak</b> katalogen och välj <b>Nästa</b>. Du kan välja flera kontaktkataloger om du har kontakterna sparade i flera kataloger.',
  'LBL_OUTLOOK_NUM_6' => 'Välj ett filnamn och klicka <b>Nästa</b>',
  'LBL_OUTLOOK_NUM_7' => 'Klicka <b>Slutför</b>',
  'LBL_PRE_CHECK_SKIPPED' => 'För-kontroll skippas',
  'LBL_PUBLISH' => 'publicera',
  'LBL_PUBLISHED_SOURCES' => 'Placerade källor:',
  'LBL_RECORDS_SKIPPED' => 'Poster hoppades över på grund av att de saknade ett eller flera obligatoriska fält',
  'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Poster skippade på grund av error',
  'LBL_RECORD_CANNOT_BE_UPDATED' => 'Posten kunde inte uppdateras på grund av åtkomsträttighets problem',
  'LBL_RELATED_ACCOUNTS' => 'Skapa inte relaterade organisationer',
  'LBL_REMOVE_ROW' => 'Ta bort fält',
  'LBL_REQUIRED_NOTE' => 'Nödvändiga fält:',
  'LBL_REQUIRED_VALUE' => 'Nödvändigt värde saknas',
  'LBL_RESULTS' => 'Resultat',
  'LBL_ROW' => 'Rad',
  'LBL_ROW_HELP' => 'Detta är datat för den första icke-rubrikraden av import-filen.',
  'LBL_ROW_NUMBER' => 'Radnummer',
  'LBL_SALESFORCE' => 'Salesforce.com',
  'LBL_SAMPLE_URL_HELP' => 'Ladda ner ett prov importerad fil som innehåller huvudraden av modulfälten. Den här filen kan användas som mall för att skapa en importerad fil innehållande den datan du vill importera.',
  'LBL_SAVE_AS_CUSTOM' => 'Spara anpassad mappning:',
  'LBL_SAVE_AS_CUSTOM_NAME' => 'Custom Mappningsnamn:',
  'LBL_SAVE_MAPPING_AS' => 'Spara mappning som',
  'LBL_SAVE_MAPPING_HELP' => 'Skriv in ett namn för en uppsättning databasfält använd ovan för mappning till fälten i importfilen.<br>Uppsättningen och ordningen av fälten och den valda datakällan i steg 1 kommer att sparas under importförsöket.<br>Den sparade mappningen kan därefter väljas i import steg 1 för någon annan import.',
  'LBL_SELECT_DS_INSTRUCTION' => 'Färdig att starta importeringen? Välj källan från vilken du vill importera data från.',
  'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'För att undvika dubbla protokoll, välj vilken av de mappade fälten du önska utföra en dubbelpostkontroll på medan datan importeras. Värdena som finns i existerande protokoll i de valda fälten kommer kollas mot data i den importerade filen. Om matchande data hittas, kommer raderna i den importerade filen som innehåller den datan visas samtidigt som det importerade resultatet (nästa sida). Du kommer sedan ha möjlighet att välja vilka av dessa rader som ska fortsätta importeringen.',
  'LBL_SELECT_FIELDS_TO_MAP' => 'Välj, i listan nedan, de fält i din importfil som ska importeras mot vilket fält i systemet. När du är klar, klicka <b>Importera nu</b>:',
  'LBL_SELECT_FILE' => 'Välj fil:',
  'LBL_SELECT_MAPPING_INSTRUCTION' => 'Tabellen nedanför innehåller alla fält i vilka modulen kan mappa data i den importerade filen. Om filen innehåller en huvudrad, har kolumnerna i filen blivit mappadetill matchande fält. Kolla mappningen för att säkerställa att de är som du vill, och gör ändringar om det behövs. För att hjälpa dig kolla mappningen, Rad 1 visar datan i filen. säkerställ att mappa till alla obligatoriska fält (markerade med stjärna).',
  'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Här är hur de första raderna i den importerade filen ser ut med upptäckta fil egenskaper. Om en huvudrad hittades, kommer den visas i den översta raden av tabellen. Visa den importerade filens egenskaper för att ändra upptäckta egenskaper och lägga till andra egenskaper. Uppdatera inställningarna kommer uppdatera hur datan visas i tabellen.',
  'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Välj en fil från din dator som innehåller den data som du vill importera, eller ladda ner mallen för att få ett försprång att skapa den importerade filen.',
  'LBL_SF_NUM_1' => 'Öppna din webbläsare, gå till http://www.salesforce.com, och logga in med din epostadress och lösenord',
  'LBL_SF_NUM_10' => 'På <b>Exporterar rapport:</b> för <b>Export filformat:</b> välj <b>Kommaseparerad .csv</b>. Klicka <b>Exportera</b>.',
  'LBL_SF_NUM_11' => 'Ett dialogfönster kommer öppnas så du kan spara exportfilen till din dator.',
  'LBL_SF_NUM_2' => 'Klicka på <b>Rapport</b> fliken i den översta menyn',
  'LBL_SF_NUM_3' => '<b>För att exportera organisationer:</b> Klicka på <b>aktiva organisationer</b> länken<br><b>För att exportera kontakter:</b> Klicka på <b>Epostlistan</b> länken',
  'LBL_SF_NUM_4' => 'På <b>Steg 1: Välj rapporttyp</b>, välj <b>Tabular Rapport</b>klicka <b>Nästa</b>',
  'LBL_SF_NUM_5' => 'På <b>Steg 2: Välj rapportkolumner</b>, välj kolumnerna du vill exportera och klicka <b>Nästa</b>',
  'LBL_SF_NUM_6' => 'På <b>Steg 3: Välj information att summera</b>, klicka sedan <b>Nästa</b>',
  'LBL_SF_NUM_7' => 'På <b>Steg 4: Ordna rapportkolumnerna</b>, klicka sedan <b>Nästa</b>',
  'LBL_SF_NUM_8' => 'På <b>Steg 5: Välj ditt rapporteringskriterium</b>, under <b>Start Datum</b>, välj ett datum tillräckligt långt tillbaka så att alla dina organisationer följer med. Du kan även exportera en delmängd av organisationerna genom mer avancerat kriterium. När du är klar, klicka <b>Starta raport</b>',
  'LBL_SF_NUM_9' => 'En rapport kommer genereras och sidan kommer visa <b>Rapport generator status: Färdig.</b> Klicka nu <b>Exportera till Excel</b>',
  'LBL_SHOW_ADVANCED_OPTIONS' => 'Visa avancerade inställningar',
  'LBL_SHOW_HIDDEN' => 'Visa fält som inte normalt är importeringsbara',
  'LBL_SHOW_NOTES' => 'Visa Anteckningar',
  'LBL_SHOW_PREVIEW_COLUMNS' => 'Visa tidigare columner',
  'LBL_SIGN_IN_HELP' => 'För att aktivera den här servicen, vänligen logga in under Externa Konton fliken på din användarinställning sida.',
  'LBL_START_OVER' => 'Börja Om',
  'LBL_STEP_1_TITLE' => 'Steg 1: Välj källan',
  'LBL_STEP_2_TITLE' => 'Steg 2: Ladda upp exportfil',
  'LBL_STEP_3_TITLE' => 'Steg 3: Bekräfta fält och importera',
  'LBL_STEP_4_TITLE' => 'Steg 4: Importfil',
  'LBL_STEP_5_TITLE' => 'Steg 5: Visa resultat',
  'LBL_STEP_DUP_TITLE' => 'Steg {0}: Kolla efter Möjliga Dubbelposter',
  'LBL_STEP_MODULE' => 'Vilken modul vill du importera data till?',
  'LBL_STRICT_CHECKS' => 'Använd strikta regler (Kontrollera epostadresser och telefonnummer också)',
  'LBL_SUCCESS' => 'Genomfört:',
  'LBL_SUCCESSFULLY' => 'Importen genomförd',
  'LBL_SUCCESSFULLY_IMPORTED' => 'Poster skapade framgångsrikt',
  'LBL_SUMMARY' => 'Sammanfattning',
  'LBL_TAB' => 'Tabbseparerad fil',
  'LBL_TAB_NUM_1' => 'Starta applikationen och öppna datafilen',
  'LBL_TAB_NUM_2' => 'Välj <b>Spara som...</b> eller <b>Exportera...</b> menyalternativ',
  'LBL_TAB_NUM_3' => 'Spara filen i <b>TSV</b> eller <b>Tabbseparerat</b> format',
  'LBL_TEST' => 'Testa import (varken sparar eller ändrar data)',
  'LBL_THIRD_PARTY_CSV_SOURCES' => 'Om den importerade fildatan var exporterade från någon av följande källa, välj vilken.',
  'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Välj källa för vilken automatiskt använda anpassad mappning för att förenkla mappningsprocessen (nästa steg).',
  'LBL_TIMEZONE' => 'Tidzon:',
  'LBL_TIME_FORMAT' => 'Tidsformat:',
  'LBL_TRUNCATE_TABLE' => 'Töm tabell innan import (tar bort alla poster)',
  'LBL_TRY_AGAIN' => 'Försök igen',
  'LBL_UNDO_LAST_IMPORT' => 'Ångra senaste importen',
  'LBL_UNIQUE_INDEX' => 'Välj index för att jämföra kopior',
  'LBL_UNPUBLISH' => 'Ångra publicering',
  'LBL_UPDATE_BUTTON' => 'Skapa och uppdatera poster',
  'LBL_UPDATE_BUTTON_HELP' => 'Använd den här funktionen för att uppdatera existerande protokoll. Datan i den importerade filen ska matcha redan existerande protokoll baserade på protokoll ID i den importerade filen.',
  'LBL_UPDATE_RECORDS' => 'Uppdatera befintliga poster istället för importera dom (Ingen ångra)',
  'LBL_UPDATE_SUCCESSFULLY' => 'Poster skapade eller uppdaterade framgångsrikt',
  'LBL_VALUE' => 'Värde',
  'LBL_VERIFY_DUPLCATES_HELP' => 'Väl fälten i importfilen som skall användas för dublettkontroll.<br>Om datat i det markerade fältet överensstämmer med data i fält i befintliga poster kommer inte nya poster att skapas.<br>Dubletterna kommer att identifieras i importresultatet.',
  'LBL_VERIFY_DUPS' => 'Verifiera kopior av poster mot valda index',
  'LBL_WHAT_IS' => 'Vad är det för datakälla?',
  'LNK_DUPLICATE_LIST' => 'Ladda ner en lista över kopior',
  'LNK_ERROR_LIST' => 'Ladda ner en lista över error',
  'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Ladda ner poster som inte kunde importeras.',
);

