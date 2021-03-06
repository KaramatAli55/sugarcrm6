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
  'ADVANCED' => 'Impostazioni Avanzate',
  'CURRENT_LOGO' => 'Attuale logo in uso',
  'CURRENT_LOGO_HELP' => 'Questo logo appare nell´angolo in alto a sinistra dell´applicazione Sugar.',
  'DEFAULT_CURRENCY' => 'Valuta Predefinita',
  'DEFAULT_CURRENCY_ISO4217' => 'Codice valuta ISO 4217',
  'DEFAULT_CURRENCY_NAME' => 'Nome valuta',
  'DEFAULT_CURRENCY_SYMBOL' => 'Simbolo Valuta',
  'DEFAULT_DATE_FORMAT' => 'Formato data predefinito',
  'DEFAULT_DECIMAL_SEP' => 'Separatore decimali',
  'DEFAULT_LANGUAGE' => 'Lingua predefinita',
  'DEFAULT_NUMBER_GROUPING_SEP' => 'Separatore migliaia',
  'DEFAULT_OC_STATUS' => 'Abilita client offline per default',
  'DEFAULT_SYSTEM_SETTINGS' => 'Interfaccia Utente',
  'DEFAULT_THEME' => 'Tema predefinito',
  'DEFAULT_TIME_FORMAT' => 'Formato ora predefinito',
  'DEVELOPER_MODE' => 'Modalità Sviluppatore',
  'DISPLAY_RESPONSE_TIME' => 'Mostra i tempi di risposta del server',
  'ERR_ALERT_FILE_UPLOAD' => 'Errore durante il caricamento dell´immagine.',
  'ERR_DELETE_CORE_FILE' => 'ERRORE: Non è possibile eliminare un carattere core.',
  'ERR_EZPDF_DISABLE' => 'Avviso : La classe EZPDF è disattivata dalla tabella di configurazione ed è impostata come classe PDF. Si prega di "Salvare" questo form per impostare TCPDF come Classe PDF e ritornare in uno stato stabile.',
  'ERR_FONT_ALREADY_EXIST' => 'ERRORE : Questo carattere esiste già. Torna indietro...',
  'ERR_FONT_EMPTYFILE' => 'ERRORE: Nome file vuoto!',
  'ERR_FONT_FILE_DO_NOT_EXIST' => 'non esiste o non è una directory.',
  'ERR_FONT_MAKEFONT' => 'ERRORE: Errore nel MakeFont',
  'ERR_FONT_NOT_WRITABLE' => 'non è scrivibile.',
  'ERR_FONT_UNKNOW_TYPE' => 'ERRORE: Tipo di carattere sconosciuto:',
  'ERR_LOADFONTFILE' => 'ERRORE: errore nel LoadFontFile!',
  'ERR_MISSING_CIDINFO' => 'Il campo Informazioni CID non può essere vuoto.',
  'ERR_NO_CUSTOM_FONT_PATH' => 'ERRORE: Nessun percorso del font personalizzato disponibile!',
  'ERR_NO_FONT_PATH' => 'ERRORE: Nessun percorso del font disponibile!',
  'ERR_PDF_NO_UPLOAD' => 'Errore durante il caricamento del carattere o del metric file.',
  'HEAD_MAGNIFICATION' => 'Ingrandimento Intestazione',
  'HEAD_MAGNIFICATION_INFO' => 'Fattore ingrandimento per titoli.',
  'IMAGES' => 'Loghi',
  'JS_ALERT_PDF_WRONG_EXTENSION' => 'Questo file non ha un estensione valida.',
  'K_CELL_HEIGHT_RATIO' => 'Rapporto altezza cella',
  'K_CELL_HEIGHT_RATIO_INFO' => 'Se l´altezza di una cella è minore di (Rapporto altezza carattere x altezza cella), allora (Rapporto altezza carattere x altezza cella) è utilizzato come altezza della cella.<br>(Rapporto altezza carattere x altezza cella) è anche utilizzata come altezza della cella quando non viene definita nessuna altezza.',
  'K_SMALL_RATIO' => 'Fattore carattere minuscolo',
  'K_SMALL_RATIO_INFO' => 'Riduzione fattore per carattere minuscolo.',
  'K_TITLE_MAGNIFICATION' => 'Ingrandimento Titolo',
  'K_TITLE_MAGNIFICATION_INFO' => 'L´ingrandimento del Titolo rispetta la dimensione del carattere principale.',
  'LBL_ADDFONTRESULT_TITLE' => 'Risultato del processo di aggiunta del carattere',
  'LBL_ADDFONT_TITLE' => 'Aggiungi un Font PDF',
  'LBL_ADD_FONT' => 'Aggiungi un carattere',
  'LBL_ADD_FONT_BUTTON' => 'Aggiungi',
  'LBL_ADMIN_WIZARD' => 'Guida amministratore',
  'LBL_ALERT_JPG_IMAGE' => 'Il formato del file dell´immagine deve essere JPEG. Carica un nuovo file con estensione .jpg.',
  'LBL_ALERT_SIZE_RATIO' => 'L´immagine deve essere su scala tra 1:1 e 10:1. L´immagine verrà ridimensionata.',
  'LBL_ALERT_SIZE_RATIO_QUOTES' => 'L´immagine deve essere su scala tra 3:1 e 20:1.  Carica un nuovo file con questo rapporto.',
  'LBL_ALERT_TYPE_IMAGE' => 'Il formato del file dell´immagine deve essere JPEG o PNG.  Carica un nuovo file con estensione .jpg. o .png.',
  'LBL_ALL' => 'Tutto',
  'LBL_ALLOW_DEFAULT_SELECTION' => 'Permetti agli utenti di utilizzare questo account per le emails in uscita:',
  'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Selezionando questa opzione, tutti gli utenti potranno inviare emails utilizzando lo stesso account per le email in uscita utilizzato per inviare le notifiche e gli alerts di sistema. Se l´opzione non viene selezionata, gli utenti potranno ancora utilizzare il server di posta in uscita una volta fornite le informazioni relative al proprio account.',
  'LBL_ALLOW_USER_TABS' => 'Permetti algli utenti di nascondere le schede',
  'LBL_BACK' => 'Indietro',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Scegli il provider della tua email:',
  'LBL_CONFIGURE_SETTINGS_TITLE' => 'Impostazioni del Sistema',
  'LBL_CONFIG_AJAX' => 'Configura Interfaccia Utente AJAX',
  'LBL_CONFIG_AJAX_DESC' => 'Abilita o disabilita l´uso di AJAX per moduli specifici.',
  'LBL_DELETE' => 'Cancella',
  'LBL_DISALBE_CONVERT_LEAD' => 'Disabilitare l´azione di conversione lead per i lead convertiti',
  'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Se un lead è già stato convertito, l´attivazione di questa opzione rimuoverà l´azione di conversione lead.',
  'LBL_DISPLAYING_LOG' => 'Displaying Log',
  'LBL_ENABLE_ACTION_MENU' => 'Mostra le azioni all´interno del menù',
  'LBL_ENABLE_ACTION_MENU_DESC' => 'Seleziona per visualizzare la Vista Dettaglio e le azioni sui sottopannelli all´interno di un menù a tendina. Se non selezionato, le azioni saranno visualizzate come pulsanti separati.',
  'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Mostra le emails relazionate ai contatti nel sottopannello Cronologia',
  'LBL_ENABLE_MAILMERGE' => 'Abilitare Stampa Unione?',
  'LBL_EXCHANGE_LOGO' => 'Exchange',
  'LBL_EXCHANGE_SMTPPASS' => 'Cambia Password:',
  'LBL_EXCHANGE_SMTPPORT' => 'Cambia Server Port:',
  'LBL_EXCHANGE_SMTPSERVER' => 'Cambia Server:',
  'LBL_EXCHANGE_SMTPUSER' => 'Cambia Nome Utente:',
  'LBL_FONTMANAGER_BUTTON' => 'Gestore Font PDF',
  'LBL_FONTMANAGER_TITLE' => 'Gestore Font PDF',
  'LBL_FONT_BOLD' => 'Grassetto',
  'LBL_FONT_BOLDITALIC' => 'Grassetto/Corsivo',
  'LBL_FONT_ITALIC' => 'Corsivo',
  'LBL_FONT_LIST_CIDINFO' => 'Informazioni CID',
  'LBL_FONT_LIST_CIDINFO_INFO' => 'Esempi :<ul><li>Chinese Traditional :<br><pre>$enc=\\´UniCNS-UTF16-H\\´;<br>$cidinfo=array(\\´Registry\\´=>\\´Adobe\\´, \\´Ordering\\´=>\\´CNS1\\´,\\´Supplement\\´=>0);<br>include(\\´include/tcpdf/fonts/uni2cid_ac15.php\\´);</pre></li><li>Chinese Simplified :<br><pre>$enc=\\´UniGB-UTF16-H\\´;<br>$cidinfo=array(\\´Registry\\´=>\\´Adobe\\´, \\´Ordering\\´=>\\´GB1\\´,\\´Supplement\\´=>2);<br>include(\\´include/tcpdf/fonts/uni2cid_ag15.php\\´);</pre></li><li>Korean :<br><pre>$enc=\\´UniKS-UTF16-H\\´;<br>$cidinfo=array(\\´Registry\\´=>\\´Adobe\\´, \\´Ordering\\´=>\\´Korea1\\´,\\´Supplement\\´=>0);<br>include(\\´include/tcpdf/fonts/uni2cid_ak12.php\\´);</pre></li><li>Japanese :<br><pre>$enc=\\´UniJIS-UTF16-H\\´;<br>$cidinfo=array(\\´Registry\\´=>\\´Adobe\\´, \\´Ordering\\´=>\\´Japan1\\´,\\´Supplement\\´=>5);<br>include(\\´include/tcpdf/fonts/uni2cid_aj16.php\\´);</pre></li></ul>More help : www.tcpdf.org',
  'LBL_FONT_LIST_EMBEDDED' => 'Incorporato',
  'LBL_FONT_LIST_EMBEDDED_INFO' => 'Controlla di inserire il carattere nel file PDF',
  'LBL_FONT_LIST_ENC' => 'Codifica',
  'LBL_FONT_LIST_FILENAME' => 'Nome File',
  'LBL_FONT_LIST_FILESIZE' => 'Dimensione Font (KB)',
  'LBL_FONT_LIST_NAME' => 'Nome',
  'LBL_FONT_LIST_STYLE' => 'Stile',
  'LBL_FONT_LIST_STYLE_INFO' => 'Stile del carattere',
  'LBL_FONT_LIST_TYPE' => 'Tipo',
  'LBL_FONT_MOVE_DEFFILE' => 'File di definizione carattere spostato a:',
  'LBL_FONT_MOVE_FILE' => 'File carattere spostato a:',
  'LBL_FONT_REGULAR' => 'Regolare',
  'LBL_FONT_TYPE_CID0' => 'CID-0',
  'LBL_FONT_TYPE_CORE' => 'Core',
  'LBL_FONT_TYPE_TRUETYPE' => 'TrueType',
  'LBL_FONT_TYPE_TRUETYPEU' => 'TrueTypeUnicode',
  'LBL_FONT_TYPE_TYPE1' => 'Type1',
  'LBL_GMAIL_LOGO' => 'Logo Gmail',
  'LBL_GMAIL_SMTPPASS' => 'Password di Gmail:',
  'LBL_GMAIL_SMTPUSER' => 'Indirizzo Email di Gmail:',
  'LBL_IGNORE_SELF' => 'Ignore Self:',
  'LBL_IMG_RESIZED' => '(ridimensionato allo schermo)',
  'LBL_IMPORT_MAX_RECORDS' => 'Importazione - Numero Massimo di Righe:',
  'LBL_IMPORT_MAX_RECORDS_HELP' => 'Specificare quante righe sono ammesse all´interno dei file di importazione. Se il numero delle righe nel file di importazione superano questo numero, l´utente verrà avvisato. Se non viene inserito nessun numero significa che sarà ammesso un numero illimitato di righe.',
  'LBL_IT_WILL_BE_IGNORED' => 'Sarà ignorato',
  'LBL_JS_CONFIRM_DELETE_FONT' => 'Sei sicuro di voler eliminare questo carattere?',
  'LBL_LDAP_ADMIN_PASSWORD' => 'Password di Autenticazione',
  'LBL_LDAP_ADMIN_USER' => 'Utente per Autenticazione:',
  'LBL_LDAP_ADMIN_USER_DESC' => 'Utilizzato nella ricerca dell´utente del CRM. [Può avere bisogno di essere completamente qualificato]<br>Se non viene fornito verrà collegato in modo anonimo.',
  'LBL_LDAP_AUTHENTICATION' => 'Autenticazione:',
  'LBL_LDAP_AUTHENTICATION_DESC' => 'Collega al server LDAP usando delle credenziali utente specifiche',
  'LBL_LDAP_AUTO_CREATE_USERS' => 'Crea automaticamente gli Utenti:',
  'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Se un utente identificato non esiste verrà creato nel CRM.',
  'LBL_LDAP_BIND_ATTRIBUTE' => 'Attributo collegato:',
  'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Per collegare LDAP gli esempi utente:[<b>AD:</b> nomePirncipaleutente] [<b>apriLDAP:</b> nomePirncipaleutente] [<b>Mac OS X:</b> uid]',
  'LBL_LDAP_ENABLE' => 'Abilita LDAP',
  'LBL_LDAP_ENC_KEY' => 'Cifratura Chiave:',
  'LBL_LDAP_ENC_KEY_DESC' => 'SOAP per l´autenticazione quando si utilizza ldap.',
  'LBL_LDAP_GROUP_ATTR' => 'Attributo Utente:',
  'LBL_LDAP_GROUP_ATTR_DESC' => 'L´attributo del Gruppo che verrà utilizzato per filtrare l´attributo Utente Esempio: <em>memberUid</em>',
  'LBL_LDAP_GROUP_DN' => 'Gruppo DN:',
  'LBL_LDAP_GROUP_DN_DESC' => 'Esempio: <em>ou=groups,dc=example,dc=com</em>',
  'LBL_LDAP_GROUP_MEMBERSHIP' => 'Membri del Gruppo:',
  'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Gli utenti devono essere membri di un gruppo specifico',
  'LBL_LDAP_GROUP_NAME' => 'Nome Gruppo:',
  'LBL_LDAP_GROUP_NAME_DESC' => 'Esempio <em>cn=sugarcrm</em>',
  'LBL_LDAP_GROUP_USER_ATTR' => 'Attributo Utente:',
  'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Gli unici identificatori della persona che verranno utilizzati per verificare se sono membro di un gruppo Esempio: <em>uid</em>',
  'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Attributi login:',
  'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Per cercare per LDAP esempi utente:[<b>AD:</b> nomePirncipaleutente] [<b>apriLDAP:</b> dn] [<b>Mac OS X:</b> dn]',
  'LBL_LDAP_SERVER_HOSTNAME' => 'Server:',
  'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Esempio: ldap.example.com',
  'LBL_LDAP_SERVER_PORT' => 'Porta:',
  'LBL_LDAP_SERVER_PORT_DESC' => 'Esempio: 389',
  'LBL_LDAP_TITLE' => 'Supporto di autenticazione LDAP',
  'LBL_LDAP_USER_DN' => 'Utente DN:',
  'LBL_LDAP_USER_DN_DESC' => 'Esempio: <em>ou=people,dc=example,dc=com</eM>',
  'LBL_LDAP_USER_FILTER' => 'Filtro Utente:',
  'LBL_LDAP_USER_FILTER_DESC' => 'Ulteriori paremetri di filtro da applicare all´autenticazione degli utenti e.g.<em>is_sugar_user=1 or (is_sugar_user=1)(is_sales=1)</em>',
  'LBL_LEAD_CONV_OPTION' => 'Opzioni Conversione Lead',
  'LBL_LOADING' => 'Caricamento...',
  'LBL_LOGGER' => 'Impostazioni Accesso',
  'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Formato Data Default',
  'LBL_LOGGER_FILENAME' => 'Nome File Log',
  'LBL_LOGGER_FILENAME_SUFFIX' => 'Aggiungere successivamente il nome del file',
  'LBL_LOGGER_FILE_EXTENSION' => 'Estensione',
  'LBL_LOGGER_LOG_LEVEL' => 'Livello Log',
  'LBL_LOGGER_MAX_LOGS' => 'Numero massimo di logs (prima del rolling)',
  'LBL_LOGGER_MAX_LOG_SIZE' => 'Dimensione Massima Log',
  'LBL_LOGO' => 'Logo',
  'LBL_LOGVIEW' => 'Configurare Impostazioni di Accesso',
  'LBL_LOG_NOT_CHANGED' => 'L´accesso non è cambiato',
  'LBL_MAILMERGE' => 'Stampa Unione',
  'LBL_MAILMERGE_DESC' => 'Questo flag può essere selezionato solo se hai Sugar Plug-in for Microsoft® Word®.',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Utilizzare l´Autenticazione SMTP?',
  'LBL_MAIL_SMTPPASS' => 'Password SMTP:',
  'LBL_MAIL_SMTPPORT' => 'Porta SMTP:',
  'LBL_MAIL_SMTPSERVER' => 'Server SMTP:',
  'LBL_MAIL_SMTPTYPE' => 'Tipo di server SMTP:',
  'LBL_MAIL_SMTPUSER' => 'Login SMTP:',
  'LBL_MAIL_SMTP_SETTINGS' => 'Specifica Server SMTP',
  'LBL_MARKING_WHERE_START_LOGGING' => 'Marking Where To Start Logging From',
  'LBL_MARK_POINT' => 'Mark Point',
  'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Intervallo minimo Aggiornamento Automatico Dashlet',
  'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Questo è il valore minimo che si può scegliere per l´aggiornamento automatico delle dashlets. Impostando ´Mai´ si disattiva completamente l´aggiornamento automatico delle dashlets.',
  'LBL_MOBILE_MOD_REPORTS_RESTRICTION' => '* Il modulo Reports è disponibile solamente per il client iPhone Sugar Mobile .',
  'LBL_MOBILE_MOD_REPORTS_RESTRICTION2' => '*Il modulo Report non è disponibile in modalità mobile via browser.',
  'LBL_MODULE_FAVICON' => 'Mostra l´icona del modulo come favicon',
  'LBL_MODULE_FAVICON_HELP' => 'Se sei in un modulo con icona, usa l´icona del modulo come favicon, invece della favicon del tema, nella barra del browser.',
  'LBL_MODULE_ID' => 'Configuratore',
  'LBL_MODULE_NAME' => 'Impostazioni Sistema',
  'LBL_MODULE_NAME_SINGULAR' => 'Impostazioni Sistema',
  'LBL_MODULE_TITLE' => 'Interfaccia Utente',
  'LBL_NEXT_' => 'Prossimo>>',
  'LBL_NOTIFY_FROMADDRESS' => 'Indirizzo Mittente:',
  'LBL_NOTIFY_SUBJECT' => 'Oggetto Email:',
  'LBL_OC_STATUS' => 'Stato di default del client offline',
  'LBL_OC_STATUS_DESC' => 'Cerca qui se vuoi che qualsiasi utente abbia accesso al Client Offline. Oppure puoi configurare l´accesso al livello utente.',
  'LBL_PDFMODULE_NAME' => 'PDF Settings',
  'LBL_PDF_ENCODING_TABLE' => 'Tabella di codifica',
  'LBL_PDF_ENCODING_TABLE_INFO' => 'Nome della tabella di codifica.<br>Questa opzione è ignorata per TrueType Unicode, OpenType Unicode e caratteri simbolici.<br>La codifica definisce l´associazione tra un codice (da 0 a 255) e un carattere contenuto nel Font.<br>I primi 128 sono fissi e corrispondono a ASCII.',
  'LBL_PDF_FONT_FILE' => 'Font File',
  'LBL_PDF_FONT_FILE_INFO' => '.ttf o .otf o .pfb file',
  'LBL_PDF_INSTRUCTIONS' => 'Istruzioni',
  'LBL_PDF_METRIC_FILE' => 'Metric File',
  'LBL_PDF_METRIC_FILE_INFO' => '.afm o .ufm file',
  'LBL_PDF_PATCH' => 'Patch',
  'LBL_PDF_PATCH_INFO' => 'Modifica personalizzata della codifica. Scrivi un array PHP .<br>Esempio :<br>ISO-8859-1 non contiene il simbolo dell´euro. Per aggiungerlo alla posizione 164, scrivi "array(164=>\\´Euro\\´)".',
  'LBL_PORTAL_ON' => 'Abilitare l´integrazione con il portale self-service?',
  'LBL_PORTAL_ON_DESC' => 'Abilita l´accesso a Reclami, Note e altri dati dall´esterno attraverso il portale self-service.',
  'LBL_PORTAL_TITLE' => 'Portale Self-Service per i Clienti',
  'LBL_PROXY_AUTH' => 'Autenticazione?',
  'LBL_PROXY_HOST' => 'Server Proxy',
  'LBL_PROXY_ON' => 'Utilizzare server proxy?',
  'LBL_PROXY_ON_DESC' => 'Configura l´indirizzo del server proxy e le impostazioni di autenticazione',
  'LBL_PROXY_PASSWORD' => 'Password',
  'LBL_PROXY_PORT' => 'Porta',
  'LBL_PROXY_TITLE' => 'Impostazioni Proxy',
  'LBL_PROXY_USERNAME' => 'Nome Utente',
  'LBL_REFRESH_FROM_MARK' => 'Refresh From Mark',
  'LBL_REG_EXP' => 'Reg Exp:',
  'LBL_REMOVE' => 'Rimuovi',
  'LBL_RESTORE_BUTTON_LABEL' => 'Ripristina',
  'LBL_SEARCH' => 'Cerca:',
  'LBL_SESSION_TIMEOUT_TOOLTIP' => 'Il Timeout della Sessionde del Portale è disponibile per versioni del Portale di SugarCRM dalla 6.5 in poi.',
  'LBL_SKYPEOUT_ON' => 'Abilitare l´integrazione con SkypeOut®?',
  'LBL_SKYPEOUT_ON_DESC' => 'Permetti agli utenti di cliccare sui numeri di telefono per chiamare con SkypeOut®. I numeri devono essere formattati correttamente. Ovvero deve esserci "+" "il codice nazione" "il numero", ad es. +1 (555) 555-1234. Per ulteriori informazioni consultare le FAQ di Skype FAQ all´indirizzo <a href=http://www.skype.com/help/faq/skypeout.html#calling target=skype>skype® faq</a>',
  'LBL_SKYPEOUT_TITLE' => 'SkypeOut®',
  'LBL_STATUS_FONT_ERROR' => 'ERRORE : Il carattere non è stato aggiunto. Guarda il log sotto.',
  'LBL_STATUS_FONT_SUCCESS' => 'Operazione avvenuta con successo : Il carattere è stato aggiunto a SugarCRM.',
  'LBL_SYSTEM_SETTINGS' => 'Impostazioni del sistema',
  'LBL_USE_REAL_NAMES' => 'Mostra Nome Completo (non il Login)',
  'LBL_USE_REAL_NAMES_DESC' => 'Visualizza i nomi completi degli utenti anzichè i loro Nomi Utenti nei campi di assegnazione.',
  'LBL_VCAL_PERIOD' => 'vCal Aggiornamenti periodici:',
  'LBL_WELCOME' => 'Benvenuto',
  'LBL_WIRELESS_LIST_ENTRIES' => 'Voci per pagina della maschera elenco (Wireless)',
  'LBL_WIRELESS_SERVER_URL' => 'Server Sugar Mobile Plus',
  'LBL_WIRELESS_SUBPANEL_LIST_ENTRIES' => 'Voci per pagina per sottopannello (Wireless)',
  'LBL_WIZARD_BACK_BUTTON' => '< Indietro',
  'LBL_WIZARD_CONTINUE_BUTTON' => 'Continua',
  'LBL_WIZARD_FINISH' => 'Clicca <b>Continua</b> per configurare le impostazioni utente.<br/><br /><br />Per configurare impostazioni aggiuntive del sistema, clicca <a href="index.php?module=Administration&action=index" target="_blank">qui</a>.',
  'LBL_WIZARD_FINISH_BUTTON' => 'Termina',
  'LBL_WIZARD_FINISH_TAB' => 'Termina',
  'LBL_WIZARD_FINISH_TITLE' => 'Configurazione base del sistema completata',
  'LBL_WIZARD_LOCALE_DESC' => 'Specifica come vuoi visualizzare i dati in Sugar, in base alla tua posizione geografica. Le impostazioni che configuri qui saranno le impostazioni di default. Gli utenti potranno impostare le proprie preferenze.',
  'LBL_WIZARD_NEXT_BUTTON' => 'Avanti >',
  'LBL_WIZARD_SKIP_BUTTON' => 'Salta',
  'LBL_WIZARD_SMTP_DESC' => 'Fornisci l´account email che verrà utilizzato per inviare le emails, come le notifiche di assegnazione e le passwords dei nuovi utenti. Gli utenti riceveranno le emails da Sugar come se fossero inviate dall´account email specificato.',
  'LBL_WIZARD_SYSTEM_DESC' => 'Fornisci il nome e il logo della tua azienda per personalizzare il tuo Sugar.',
  'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
  'LBL_WIZARD_TITLE' => 'Guida amministratore',
  'LBL_WIZARD_WELCOME' => 'Clicca <b>Avanti</b> per configurare Sugar adesso. Se vuoi configurare Sugar più tardi, clicca <b>Salta</b>.',
  'LBL_WIZARD_WELCOME_TAB' => 'Benvenuto',
  'LBL_WIZARD_WELCOME_TITLE' => 'Benvenuto in Sugar!',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Password di Mail Yahoo!:',
  'LBL_YAHOOMAIL_SMTPUSER' => 'ID di Mail Yahoo!:',
  'LBL_YAHOO_MAIL' => 'Yahoo Mail',
  'LBL_YOUR_IP_ADDRESS' => 'Indirizzo IP è',
  'LBL_YOUR_PROCESS_ID' => 'ID Processo',
  'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Estensione php_mcrypt deve essere abilitata nel file php.ini.',
  'LEAD_CONV_OPT_HELP' => '<b>Copia</b> - Crea e collega le attività dei Lead ai nuovi record che sono stati selezionati dall´utente durante la conversione. Le copie sono create per ogni record selezionato.<br><br><b>Sposta</b> - Sposta tutte le attività dei Lead ai nuovi record che sono stati selezionati dall´utente durante la conversione. <br><br><b>Niente</b> - Fare niente con le attività dei Lead durante la conversione. Le attività rimangono collegate solamente al Lead.',
  'LIST_ENTRIES_PER_LISTVIEW' => 'Voci per pagina della maschera elenco',
  'LIST_ENTRIES_PER_SUBPANEL' => 'Voci per pagina per sottopannello',
  'LOCK_HOMEPAGE' => 'Vieta la personalizzazione del layout della Home Page',
  'LOCK_HOMEPAGE_HELP' => 'Questa impostazione è per impedire<BR> 1) l´aggiunta di nuove pagine nella Home <BR>2) personalizzazione nel collocamento delle dashlet nella home page con la funzione drag & drop.',
  'LOCK_SUBPANELS' => 'Vieta la personalizzazione del layout del sottopannello',
  'LOG_MEMORY_USAGE' => 'Registra utilizzo memoria',
  'LOG_SLOW_QUERIES' => 'Registra interrogazioni database lente',
  'MAX_DASHLETS' => 'Numero massimo di dashlets di Sugar visualizzabili nella Home Page',
  'NEW_LOGO' => 'Carica nuovo logo',
  'NEW_LOGO_HELP' => 'Il formato dell´immagine dovrebbe essere .png o .jpg.<BR>La dimensione consigliata è 212x40 px.',
  'NEW_LOGO_HELP_NO_SPACE' => 'Il formato dell´immagine può essere .png o .jpg. L´altezza massima è 17px, la larghezza massima è 450px. Qualsiasi immagine caricata che supera queste dimensioni sarà ridimensionata a questa dimensione. Il nome del file dell´immagine non deve contenere spazi.',
  'NEW_QUOTE_LOGO' => 'Carica nuovo logo per le offerte',
  'NEW_QUOTE_LOGO_HELP' => 'Il formato richiesto dell´immagine è .jpg.<BR>La dimensione consigliata è 867x74 px.',
  'PDF_ACL_ACCESS' => 'Controllo Accesso',
  'PDF_ACL_ACCESS_INFO' => 'Controllo Accesso predefinito per la creazione di PDF.',
  'PDF_AUTHOR' => 'Autore',
  'PDF_AUTHOR_INFO' => 'L´autore appare nelle proprietà del documento.',
  'PDF_COMPRESSION' => 'Compressione',
  'PDF_COMPRESSION_INFO' => 'Attiva o disattiva la compressione della pagina. <br>Una volta attivata, la rappresentazione interna di ogni pagina viene compressa, conducendo ad una rapporto di compressione di circa 2 per il documento derivante.',
  'PDF_CREATOR' => 'PDF Creator',
  'PDF_CREATOR_INFO' => 'Definisci il creator del documento. <br>Generalmente è il nome dell´applicazione che crea il PDF.',
  'PDF_FILENAME' => 'Nome File predefinito',
  'PDF_FILENAME_INFO' => 'Nome File predefinito per i Files PDF creati',
  'PDF_GD_WARNING' => 'Non hai installato la libreria GD per PHP. Senza l´installazione della libreria GD, possono essere visualizzati solo i loghi JPEG nei documenti PDF.',
  'PDF_HEADER_LOGO' => 'Documenti PDF per Offerte',
  'PDF_HEADER_LOGO_INFO' => 'Questa immagine compare nell´intestazione predefinita nei Documenti PDF delle Offerte.',
  'PDF_HEADER_LOGO_WIDTH' => 'Dimensione Immagine delle Offerte',
  'PDF_HEADER_LOGO_WIDTH_INFO' => 'Modifica la scala dell´immagine caricata che appare nei Documenti PDF delle Offerte. (Solo TCPDF)',
  'PDF_HEADER_STRING' => 'Stringa Intestazione',
  'PDF_HEADER_STRING_INFO' => 'Descrizione della stringa di Intestazione',
  'PDF_HEADER_TITLE' => 'Titolo Intestazione',
  'PDF_HEADER_TITLE_INFO' => 'Stringa da scrivere come titolo nell´intestazione del documento',
  'PDF_IMAGE_SCALE_RATIO' => 'Rapporto di Scala dell´Immagine',
  'PDF_IMAGE_SCALE_RATIO_INFO' => 'Rapporto utilizzato per scalare le immagini',
  'PDF_INSTRUCTIONS_ADD_FONT' => 'Fonts supported by SugarPDF :<br /><ul><br /><li>TrueTypeUnicode (UTF-8 Unicode)</li><br /><li>OpenTypeUnicode</li><br /><li>TrueType</li><br /><li>OpenType</li><br /><li>Type1</li><br /><li>CID-0</li><br /></ul><br /><br><br />If you choose to not embed your font in the PDF, the generated PDF file will be lighter but a substitution will be use if the font is not available in the system of your reader.<br /><br><br><br />Adding a PDF font to SugarCRM requires to follow steps 1 and 2 of the TCPDF Fonts documentation available in the "DOCS" section of the <a href="http://www.tcpdf.org" target="_blank">TCPDF website</a>.<br /><br><br>The pfm2afm and ttf2ufm utils are available in fonts/utils in the TCPDF package that you can download on the "DOWNLOAD" section of the <a href="http://www.tcpdf.org" target="_blank">TCPDF website</a>.<br /><br><br>Load the metric file generated in step 2 and your font file below.',
  'PDF_JPEG_QUALITY' => 'JPEG Qualità(1-100)',
  'PDF_JPEG_QUALITY_INFO' => 'Imposta la qualità di compressione JPEG predefinita (1-100)',
  'PDF_KEYWORDS' => 'Parolachiave(Parolechiave)',
  'PDF_KEYWORDS_INFO' => 'Associa Parolechiave al documento, generalmente con la formula "parolachiave1 parolachiave2..."',
  'PDF_NEW_HEADER_LOGO' => 'Seleziona una Nuova Immagine per le Offerte',
  'PDF_NEW_HEADER_LOGO_INFO' => 'Il formato del file può essere .jpg o .png. (Solo .jpg per EZPDF)<BR>La dimensione consigliata è 867x74 px.',
  'PDF_NEW_SMALL_HEADER_LOGO' => 'Seleziona una Nuova Immagine per i Reports',
  'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'Il formato del file può essere .jpg o .png. (Solo .jpg per EZPDF)<BR>La dimensione consigliata è 212x40 px.',
  'PDF_OWNER_PASSWORD' => 'Password proprietaria',
  'PDF_OWNER_PASSWORD_INFO' => 'Se non imposti una password, il documento verrà aperto come di consueto. <br>Se imposti una password utente, il visualizzatore PDF la richiederà prima di aprire il documento. <br>La password principale, se diversa dalla password utente, può essere utilizzata per avere l´intero.',
  'PDF_PDF_VERSION' => 'Versione PDF',
  'PDF_PDF_VERSION_INFO' => 'Imposta la versione PDF (controlla la fonte PDF per valori validi).',
  'PDF_PROTECTION' => 'Protezione del Documento',
  'PDF_PROTECTION_INFO' => 'Imposta la Protezione del Documento<br>- copia: copia testo ed immagini nella clipboard<br>- stampa: stampa il documento<br>- modifica: modifica il documento (eccetto note e moduli)<br>- note-moduli: aggiungi note e moduli<br>Nota: la protezione sulla modifica è riservata alle persone che hanno l´intero prodotto Acrobat.',
  'PDF_SMALL_HEADER_LOGO' => 'Documenti PDF per Reports',
  'PDF_SMALL_HEADER_LOGO_INFO' => 'Questa immagine compare nell´intestazione predefinita nei Documenti PDF dei Reports.<br> Questa immagine appare anche nell´angolo in alto a sinistra dell´applicazione Sugar.',
  'PDF_SMALL_HEADER_LOGO_WIDTH' => 'Dimensione Immagine dei Reports',
  'PDF_SMALL_HEADER_LOGO_WIDTH_INFO' => 'Modifica la scala dell´immagine caricata che appare nei Documenti PDF dei Reports. (Solo TCPDF)',
  'PDF_SUBJECT' => 'Soggetto',
  'PDF_SUBJECT_INFO' => 'Il Soggetto compare nelle proprietà dei documenti.',
  'PDF_TITLE' => 'Titolo',
  'PDF_TITLE_INFO' => 'Il Titolo compare nelle proprietà dei documenti.',
  'PDF_UNIT' => 'Unità',
  'PDF_UNIT_INFO' => 'Unità di misura del documento',
  'PDF_USER_PASSWORD' => 'Password Utente',
  'PDF_USER_PASSWORD_INFO' => 'Se non imposti una password, il documento verrà aperto come di consueto. <br>Se imposti una password utente, il visualizzatore PDF la richiederà prima di aprire il documento. <br>La password principale, se diversa dalla password utente, può essere utilizzata per avere l´intero.',
  'QUOTES_CURRENT_LOGO' => 'Logo usato nelle Offerte',
  'SESSION_TIMEOUT' => 'Portale sessione timeout',
  'SESSION_TIMEOUT_UNITS' => 'secondi',
  'SHOW_DOWNLOADS_TAB' => 'Visualizza Tab Downloads',
  'SHOW_DOWNLOADS_TAB_HELP' => 'Se selezionato, il tab di Donwload apparirà nelle impostazioni dell´Utente e fornirà agli utenti l´accesso ai plug-ins di Sugar e ad altri file disponibili.',
  'SLOW_QUERY_TIME_MSEC' => 'Soglia interrogazioni lente (msec)',
  'STACK_TRACE_ERRORS' => 'Mostra contenuto stack in caso di errore',
  'SUGARPDF_ADVANCED_SETTINGS' => 'Impostazioni avanzate',
  'SUGARPDF_BASIC_SETTINGS' => 'Proprietà del documento',
  'SUGARPDF_LOGO_SETTINGS' => 'Immmagini',
  'SYSTEM_NAME' => 'Nome del Sistema',
  'SYSTEM_NAME_HELP' => 'Questo è il nome che appare nella barra titolo del tuo browser.',
  'SYSTEM_NAME_WIZARD' => 'Nome:',
  'UPLOAD_MAX_SIZE' => 'Dimensione massima upload',
  'VERIFY_CLIENT_IP' => 'Convalida l´indirizzo IP degli utenti',
  'vCAL_HELP' => 'Usa questa impostazione per stabilire il numero di mesi antecedenti la data corrente per i quali l´informazione Libero/Occupato per chiamate e riunioni è pubblicato.</BR>Per disattivare la pubblicazione dello stato Libero/Occupato, impostare "0".  Il minimo è 1 mese; il massimo 12 mesi.',
);
