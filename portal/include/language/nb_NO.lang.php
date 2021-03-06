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

	

$app_strings = array (
  'ERROR_FULLY_EXPIRED' => 'Din SugarCRM bedriftslisens gikk ut for mer enn 30 dager siden og trenger en oppdatering. Kun admin kan logge inn.',
  'ERROR_LICENSE_EXPIRED' => 'Din SugarCRM bedriftslisens trenger en oppdatering. Kun admin kan logge inn.',
  'ERROR_NO_RECORD' => 'En feil oppsto ved henting av oppføring. Denne oppføringen kan ha blitt slettet eller så har du ikke tilgang til den.',
  'ERR_CREATING_FIELDS' => 'Feil ved utfylling av ekstra detaljfelt:',
  'ERR_CREATING_TABLE' => 'Mislykket oppretting av tabell:',
  'ERR_DELETE_RECORD' => 'Du må oppgi postens nummer for å slette kontakten.',
  'ERR_EXPORT_DISABLED' => 'Eksport deaktivert.',
  'ERR_EXPORT_TYPE' => 'Feil ved eksport.',
  'ERR_INVALID_AMOUNT' => 'Angi et gyldig beløp.',
  'ERR_INVALID_DATE' => 'Angi en gyldig dato.',
  'ERR_INVALID_DATE_FORMAT' => 'Datoformatet må være:',
  'ERR_INVALID_DAY' => 'Angi en gyldig dag.',
  'ERR_INVALID_EMAIL_ADDRESS' => 'er ikke en gyldig e-postadresse.',
  'ERR_INVALID_HOUR' => 'Angi et gyldig klokkeslett.',
  'ERR_INVALID_MONTH' => 'Angi en gyldig måned.',
  'ERR_INVALID_REQUIRED_FIELDS' => 'Ugyldig påkrevet felt.',
  'ERR_INVALID_TIME' => 'Angi et gyldig tidspunkt.',
  'ERR_INVALID_VALUE' => 'Ugyldig verdi:',
  'ERR_INVALID_YEAR' => 'Bruk firesifret årstall.',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Du må fylle ut feltet:',
  'ERR_NEED_ACTIVE_SESSION' => 'En aktiv sesjon er påkrevet for å eksportere innhold.',
  'ERR_NOTHING_SELECTED' => 'Foreta et valg før du fortsetter.',
  'ERR_OPPORTUNITY_NAME_DUPE' => 'En Opportunity med navnet %s finnes allerede. Vennligst angi et annet navn nedenfor.',
  'ERR_OPPORTUNITY_NAME_MISSING' => 'Navn på Opportunity ble ikke angitt. Vennligst oppgi et Opportunity navn under.',
  'ERR_PORTAL_LOGIN_FAILED' => 'Ikke mulig å opprette mulighet for login. Vennligst kontakt administrator.',
  'ERR_RESOURCE_MANAGEMENT_INFO' => 'Returner til Hjem',
  'ERR_SELF_REPORTING' => 'Brukeren kan ikke rapportere til seg selv.',
  'ERR_SQS_NO_MATCH' => 'Ingen treff',
  'ERR_SQS_NO_MATCH_FIELD' => 'Ingen treff for feltet:',
  'LBL_ACCOUNT' => 'Bedrift',
  'LBL_ACCOUNTS' => 'Bedrifter',
  'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
  'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Vis sammendrag',
  'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Vis sammendrag [Alt+H]',
  'LBL_ADDITIONAL_DETAILS' => 'Tilleggsinformasjon',
  'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Lukk',
  'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Klikk for å lukke',
  'LBL_ADD_BUTTON' => 'Legg til',
  'LBL_ADD_BUTTON_KEY' => 'A',
  'LBL_ADD_BUTTON_TITLE' => 'Tilføy [Alt+A]',
  'LBL_ADD_DOCUMENT' => 'Legg til dokument',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Legg til i Målliste',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Legg til i Målliste',
  'LBL_ADMIN' => 'Admin',
  'LBL_ALT_HOT_KEY' => 'Alt+',
  'LBL_ARCHIVE' => 'Arkiv',
  'LBL_ASSIGNED_TO' => 'Tildelt:',
  'LBL_ASSIGNED_TO_USER' => 'Tildelt Bruker',
  'LBL_BACK' => 'Tilbake',
  'LBL_BILL_TO_ACCOUNT' => 'Faktura til Bedrift',
  'LBL_BILL_TO_CONTACT' => 'Faktura til Kontakt',
  'LBL_BROWSER_TITLE' => 'SugarCRM - Kommersiell Open Source CRM',
  'LBL_BUGS' => 'Bugs',
  'LBL_BY' => 'av',
  'LBL_CALLS' => 'Oppringninger',
  'LBL_CAMPAIGNS_SEND_QUEUED' => 'Send Kampanjemeldinger fra kø',
  'LBL_CANCEL_BUTTON_KEY' => 'X',
  'LBL_CANCEL_BUTTON_LABEL' => 'Avbryt',
  'LBL_CANCEL_BUTTON_TITLE' => 'Avbryt [Alt+X]',
  'LBL_CASE' => 'Sak',
  'LBL_CASES' => 'Saker',
  'LBL_CHANGE_BUTTON_KEY' => 'G',
  'LBL_CHANGE_BUTTON_LABEL' => 'Endre',
  'LBL_CHANGE_BUTTON_TITLE' => 'Endre [Alt+G]',
  'LBL_CHANGE_PASSWORD' => 'Endre passord',
  'LBL_CHARSET' => 'UTF-8',
  'LBL_CHECKALL' => 'Merk alle',
  'LBL_CLEARALL' => 'Tøm alle',
  'LBL_CLEAR_BUTTON_KEY' => 'C',
  'LBL_CLEAR_BUTTON_LABEL' => 'Tøm',
  'LBL_CLEAR_BUTTON_TITLE' => 'Tøm [Alt+C]',
  'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
  'LBL_CLOSEALL_BUTTON_LABEL' => 'Lukk alle',
  'LBL_CLOSEALL_BUTTON_TITLE' => 'Lukk alle [Alt+I]',
  'LBL_CLOSE_WINDOW' => 'Lukk vindu',
  'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
  'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Skriv e-post',
  'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Skriv e-post [Alt+L]',
  'LBL_CONTACT' => 'Kontakt',
  'LBL_CONTACTS' => 'Kontakter',
  'LBL_CONTACT_LIST' => 'Kontaktliste',
  'LBL_CREATED' => 'Opprettet av:',
  'LBL_CREATED_BY_USER' => 'Opprettet av Bruker',
  'LBL_CREATE_BUTTON_LABEL' => 'Opprett',
  'LBL_CURRENT_USER_FILTER' => 'Bare mine:',
  'LBL_DATE_ENTERED' => 'Opprettet dato:',
  'LBL_DATE_MODIFIED' => 'Sist endret:',
  'LBL_DELETE' => 'Slett',
  'LBL_DELETED' => 'Slettet',
  'LBL_DELETE_BUTTON' => 'Slett',
  'LBL_DELETE_BUTTON_KEY' => 'D',
  'LBL_DELETE_BUTTON_LABEL' => 'Slett',
  'LBL_DELETE_BUTTON_TITLE' => 'Slett [Alt+D]',
  'LBL_DIRECT_REPORTS' => 'Direkterapporterende',
  'LBL_DISPLAY_COLUMNS' => 'Vis kolonner',
  'LBL_DONE_BUTTON_KEY' => 'X',
  'LBL_DONE_BUTTON_LABEL' => 'Utført',
  'LBL_DONE_BUTTON_TITLE' => 'Utført [Alt+X]',
  'LBL_DST_NEEDS_FIXIN' => 'Programmet krever en sommertid-fix for å anvendes.  Vennligst gå til <a href="index.php?module=Administration&action=DstFix">Reparér</a>-linken i Admin-konsollet og slå aktivér sommertid-fix&#39;en.',
  'LBL_DUPLICATE_BUTTON' => 'Dublett',
  'LBL_DUPLICATE_BUTTON_KEY' => 'U',
  'LBL_DUPLICATE_BUTTON_LABEL' => 'Dublett',
  'LBL_DUPLICATE_BUTTON_TITLE' => 'Dublett [Alt+U]',
  'LBL_DUP_MERGE' => 'Finn dubletter',
  'LBL_EDIT_BUTTON' => 'Rediger',
  'LBL_EDIT_BUTTON_KEY' => 'E',
  'LBL_EDIT_BUTTON_LABEL' => 'Rediger',
  'LBL_EDIT_BUTTON_TITLE' => 'Rediger [Alt+E]',
  'LBL_EMAILS' => 'E-postmeldinger',
  'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
  'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Send e-post som PDF',
  'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Send e-post som PDF [Alt+M]',
  'LBL_EMPLOYEES' => 'Ansatte',
  'LBL_ENTER_DATE' => 'Skriv dato',
  'LBL_EXPORT' => 'Eksporter',
  'LBL_EXPORT_ALL' => 'Eksportér alle',
  'LBL_FULL_FORM_BUTTON_KEY' => 'F',
  'LBL_FULL_FORM_BUTTON_LABEL' => 'Fullstendig skjema',
  'LBL_FULL_FORM_BUTTON_TITLE' => 'Fullstendig skjema [Alt+F]',
  'LBL_HIDE' => 'Skjul',
  'LBL_HIDE_COLUMNS' => 'Skjul kolonner',
  'LBL_ID' => 'ID',
  'LBL_IMPORT' => 'Importer',
  'LBL_IMPORT_PROSPECTS' => 'Importer Mål',
  'LBL_LAST_VIEWED' => 'Sist vist',
  'LBL_LEADS' => 'Leads',
  'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Vil du virkelig oppdatere hele listen?',
  'LBL_LISTVIEW_NO_SELECTED' => 'Velg minst 1 post før du fortsetter.',
  'LBL_LISTVIEW_OPTION_CURRENT' => 'Denne siden',
  'LBL_LISTVIEW_OPTION_ENTIRE' => 'Alle poster',
  'LBL_LISTVIEW_OPTION_SELECTED' => 'Valgte poster',
  'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Valgt:',
  'LBL_LIST_ACCOUNT_NAME' => 'Bedriftnavn',
  'LBL_LIST_ASSIGNED_USER' => 'Bruker',
  'LBL_LIST_CONTACT_NAME' => 'Kontaktnavn',
  'LBL_LIST_CONTACT_ROLE' => 'Kontaktrolle',
  'LBL_LIST_EMAIL' => 'E-post',
  'LBL_LIST_NAME' => 'Navn',
  'LBL_LIST_OF' => 'av',
  'LBL_LIST_PHONE' => 'Telefon',
  'LBL_LIST_TEAM' => 'Team',
  'LBL_LIST_USER_NAME' => 'Brukernavn',
  'LBL_LOADING' => 'Laster...',
  'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'John',
  'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Doe',
  'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Hr.',
  'LBL_LOGIN_SESSION_EXCEEDED' => 'Serveren er opptatt. Vennligst prøv senere.',
  'LBL_LOGIN_TO_ACCESS' => 'Logg inn for å få tilgang til dette området',
  'LBL_LOGOUT' => 'Logg ut',
  'LBL_MAILMERGE' => 'E-postfletting',
  'LBL_MAILMERGE_KEY' => 'M',
  'LBL_MASS_UPDATE' => 'Masseoppdatering',
  'LBL_MEETINGS' => 'Møter',
  'LBL_MEMBERS' => 'Medlemmer',
  'LBL_MODIFIED' => 'Endret av',
  'LBL_MODIFIED_BY_USER' => 'Endret av Bruker',
  'LBL_MY_ACCOUNT' => 'Min konto',
  'LBL_NAME' => 'Navn',
  'LBL_NEW_BUTTON_KEY' => 'N',
  'LBL_NEW_BUTTON_LABEL' => 'Opprett',
  'LBL_NEW_BUTTON_TITLE' => 'Opprett [Alt+N]',
  'LBL_NEXT_BUTTON_LABEL' => 'Neste',
  'LBL_NONE' => '--ingen--',
  'LBL_NOTES' => 'Notater',
  'LBL_NO_RECORDS_FOUND' => '-0 poster funnet-',
  'LBL_OPENALL_BUTTON_KEY' => 'O',
  'LBL_OPENALL_BUTTON_LABEL' => 'Åpne alle',
  'LBL_OPENALL_BUTTON_TITLE' => 'Åpne alle [Alt+O]',
  'LBL_OPENTO_BUTTON_KEY' => 'T',
  'LBL_OPENTO_BUTTON_LABEL' => 'Åpen til:',
  'LBL_OPENTO_BUTTON_TITLE' => 'Åpen til: [Alt+T]',
  'LBL_OPPORTUNITIES' => 'Muligheter',
  'LBL_OPPORTUNITY' => 'Mulighet',
  'LBL_OPPORTUNITY_NAME' => 'Mulighetsnavn',
  'LBL_OR' => 'ELLER',
  'LBL_PERCENTAGE_SYMBOL' => '%',
  'LBL_PRODUCTS' => 'Produkter',
  'LBL_PRODUCT_BUNDLES' => 'Produktpakker',
  'LBL_PROJECTS' => 'Prosjekter',
  'LBL_PROJECT_TASKS' => 'Prosjektoppgaver',
  'LBL_QUOTES' => 'Tilbud',
  'LBL_QUOTES_SHIP_TO' => 'Tilbud sendes til',
  'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
  'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Opprett Opportunity fra Tilbud',
  'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Opprett Opportunity fra Tilbud [Alt+O]',
  'LBL_RELATED_RECORDS' => 'Relaterte poster',
  'LBL_REMOVE' => 'Fjern',
  'LBL_REQUIRED_SYMBOL' => '*',
  'LBL_SAVED' => 'Lagret',
  'LBL_SAVED_LAYOUT' => 'Oppsettet er lagret.',
  'LBL_SAVED_VIEWS' => 'Lagrede oppsett',
  'LBL_SAVE_BUTTON_KEY' => 'S',
  'LBL_SAVE_BUTTON_LABEL' => 'Lagre',
  'LBL_SAVE_BUTTON_TITLE' => 'Lagre [Alt+S]',
  'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
  'LBL_SAVE_NEW_BUTTON_LABEL' => 'Lagre og opprett ny',
  'LBL_SAVE_NEW_BUTTON_TITLE' => 'Lagre og opprett ny [Alt+V]',
  'LBL_SAVING' => 'Lagrer',
  'LBL_SAVING_LAYOUT' => 'Lagrer oppsett...',
  'LBL_SEARCH' => 'Søk',
  'LBL_SEARCH_BUTTON_KEY' => 'Q',
  'LBL_SEARCH_BUTTON_LABEL' => 'Søk',
  'LBL_SEARCH_BUTTON_TITLE' => 'Søk [Alt+Q]',
  'LBL_SEARCH_CRITERIA' => 'Søkekriterier',
  'LBL_SELECT_BUTTON_KEY' => 'T',
  'LBL_SELECT_BUTTON_LABEL' => 'Velg',
  'LBL_SELECT_BUTTON_TITLE' => 'Velg [Alt+T]',
  'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
  'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Velg Kontakt',
  'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Velg Kontakt [Alt+T]',
  'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Velg fra Rapporter',
  'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Velg Rapporter',
  'LBL_SELECT_USER_BUTTON_KEY' => 'U',
  'LBL_SELECT_USER_BUTTON_LABEL' => 'Velg Bruker',
  'LBL_SELECT_USER_BUTTON_TITLE' => 'Velg Bruker [Alt+U]',
  'LBL_SERVER_RESPONSE_RESOURCES' => 'Ressurser som denne siden er satt sammen av (queries, filer)',
  'LBL_SERVER_RESPONSE_TIME' => 'Server svartid:',
  'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'sekunder.',
  'LBL_SHIP_TO_ACCOUNT' => 'Send til Bedrift',
  'LBL_SHIP_TO_CONTACT' => 'Send til Kontakt',
  'LBL_SHORTCUTS' => 'Snarveier',
  'LBL_SHOW' => 'Vis',
  'LBL_SQS_INDICATOR' => '',
  'LBL_STATUS' => 'Status:',
  'LBL_STATUS_UPDATED' => 'Din status for denne hendelsen ble  oppdatert!',
  'LBL_SUBJECT' => 'Emne',
  'LBL_SYNC' => 'Sync',
  'LBL_TASKS' => 'Oppgaver',
  'LBL_TEAM' => 'Team:',
  'LBL_TEAMS_LINK' => 'Team',
  'LBL_TEAM_ID' => 'Team ID:',
  'LBL_THOUSANDS_SYMBOL' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arkiver e-post',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arkiver e-post',
  'LBL_UNAUTH_ADMIN' => 'Ulovlig tilgang til administrasjon',
  'LBL_UNDELETE' => 'Opphev fjerning',
  'LBL_UNDELETE_BUTTON' => 'Opphev fjerning',
  'LBL_UNDELETE_BUTTON_LABEL' => 'Opphev fjerning',
  'LBL_UNDELETE_BUTTON_TITLE' => 'Opphev fjerning [Alt+D]',
  'LBL_UNSYNC' => 'Opphev synkronisering',
  'LBL_UPDATE' => 'Oppdater',
  'LBL_USERS' => 'Brukere',
  'LBL_USERS_SYNC' => 'Brukersynkronisering',
  'LBL_USER_LIST' => 'Brukerliste',
  'LBL_VIEW_BUTTON' => 'Vis',
  'LBL_VIEW_BUTTON_KEY' => 'V',
  'LBL_VIEW_BUTTON_LABEL' => 'Vis',
  'LBL_VIEW_BUTTON_TITLE' => 'Vis [Alt+V]',
  'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
  'LBL_VIEW_PDF_BUTTON_LABEL' => 'Skriv ut som PDF',
  'LBL_VIEW_PDF_BUTTON_TITLE' => 'Skriv ut som PDF [Alt+P]',
  'LNK_ABOUT' => 'Om',
  'LNK_ADVANCED_SEARCH' => 'Utvidet',
  'LNK_BASIC_SEARCH' => 'Enkelt søk',
  'LNK_DELETE' => 'slett',
  'LNK_DELETE_ALL' => 'slett alle',
  'LNK_EDIT' => 'endre',
  'LNK_GET_LATEST' => 'Hent nyeste',
  'LNK_GET_LATEST_TOOLTIP' => 'Erstatt med nyeste versjon',
  'LNK_HELP' => 'Hjelp',
  'LNK_LIST_END' => 'Slutt',
  'LNK_LIST_NEXT' => 'Neste',
  'LNK_LIST_PREVIOUS' => 'Forrige',
  'LNK_LIST_RETURN' => 'Tilbake til liste',
  'LNK_LIST_START' => 'Start',
  'LNK_LOAD_SIGNED' => 'Sign',
  'LNK_LOAD_SIGNED_TOOLTIP' => 'Erstatt med signert dokument',
  'LNK_PRINT' => 'Skriv ut',
  'LNK_REMOVE' => 'rem',
  'LNK_RESUME' => 'Gjenoppta',
  'LNK_VIEW_CHANGE_LOG' => 'Vis endringslogg',
  'LOGIN_LOGO_ERROR' => 'Erstatt SugarCRM-logoene.',
  'NTC_CLICK_BACK' => 'Klikk Tilbake-knappen i nettleseren og rett feilen.',
  'NTC_DATE_FORMAT' => '(åååå-mm-dd)',
  'NTC_DATE_TIME_FORMAT' => '(åååå-mm-dd 24:00)',
  'NTC_DELETE_CONFIRMATION' => 'Vil du virkelig slette denne posten?',
  'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Vil du virkelig slette de valgte postene?',
  'NTC_LOGIN_MESSAGE' => 'Skriv brukernavn og passord:',
  'NTC_NO_ITEMS_DISPLAY' => 'ingen',
  'NTC_REMOVE_CONFIRMATION' => 'Vil du virkelig fjerne denne forbindelsen?',
  'NTC_REQUIRED' => 'Felt som må fylles ut',
  'NTC_SUPPORT_SUGARCRM' => 'Support the SugarCRM open source project with a donation through PayPal - it&#39;s fast, free and secure!',
  'NTC_TIME_FORMAT' => '(24:00)',
  'NTC_WELCOME' => 'Start',
  'NTC_YEAR_FORMAT' => '(åååå)',
);

$app_list_strings = array (
  'account_type_dom' => 
  array (
    '' => '',
    'Analyst' => 'Analytiker',
    'Competitor' => 'Konkurrent',
    'Customer' => 'Kunde',
    'Integrator' => 'Integrator',
    'Investor' => 'Investor',
    'Other' => 'Annen',
    'Partner' => 'Partner',
    'Press' => 'Presse',
    'Prospect' => 'Prospect',
    'Reseller' => 'Distributør',
  ),
  'activity_dom' => 
  array (
    'Call' => 'Oppringning:',
    'Email' => 'E-post',
    'Meeting' => 'Møte:',
    'Note' => 'Notat',
    'Task' => 'Oppgave',
  ),
  'bopselect_type_dom' => 
  array (
    'Equals' => 'Er lik',
  ),
  'bselect_type_dom' => 
  array (
    'bool_false' => 'Nei',
    'bool_true' => 'Ja',
  ),
  'bug_priority_dom' => 
  array (
    'High' => 'Høy',
    'Low' => 'Lav',
    'Medium' => 'Middels',
    'Urgent' => 'Haster',
  ),
  'bug_resolution_dom' => 
  array (
    '' => '',
    'Accepted' => 'Godtatt',
    'Duplicate' => 'Dublett',
    'Fixed' => 'Fast',
    'Invalid' => 'Ugyldig',
    'Later' => 'Senere',
    'Out of Date' => 'Foreldet',
  ),
  'bug_status_dom' => 
  array (
    'Assigned' => 'Tildelt',
    'Closed' => 'Lukket',
    'New' => 'Nye',
    'Pending' => 'Venter',
    'Rejected' => 'Avvist',
  ),
  'bug_type_dom' => 
  array (
    'Defect' => 'Defekt',
    'Feature' => 'Egenskap',
  ),
  'call_direction_dom' => 
  array (
    'Inbound' => 'Innkomne',
    'Outbound' => 'Utgående',
  ),
  'call_status_dom' => 
  array (
    'Held' => 'Gjennomført',
    'Not Held' => 'Ikke gjennomført',
    'Planned' => 'Planlagt',
  ),
  'campaign_status_dom' => 
  array (
    '' => '',
    'Active' => 'Aktiv',
    'Complete' => 'Komplett',
    'In Queue' => 'I kø',
    'Inactive' => 'Inaktiv',
    'Planning' => 'Planlegges',
    'Sending' => 'Sendes',
  ),
  'campaign_type_dom' => 
  array (
    '' => '',
    'Email' => 'E-post',
    'Mail' => 'Post',
    'Print' => 'Print',
    'Radio' => 'Radio',
    'Telesales' => 'Telesalg',
    'Television' => 'TV',
    'Web' => 'Web',
  ),
  'campainglog_activity_type_dom' => 
  array (
    '' => '',
    'contact' => 'Kontakter opprettet',
    'invalid email' => 'Returnerte meldinger, ugyldig e-postadresse',
    'lead' => 'Leads opprettet',
    'link' => 'Click-thru Link',
    'removed' => 'Reservert seg',
    'send error' => 'Returnerte meldinger, andre',
    'targeted' => 'Melding sendt/forsøkt',
    'viewed' => 'Lest melding',
  ),
  'campainglog_target_type_dom' => 
  array (
    'Contacts' => 'Kontakter',
    'Leads' => 'Leads',
    'Prospects' => 'Mål',
    'Users' => 'Brukere',
  ),
  'case_priority_dom' => 
  array (
    'P1' => 'Høy',
    'P2' => 'Middels',
    'P3' => 'Lav',
  ),
  'case_relationship_type_dom' => 
  array (
    '' => '',
    'Alternate Contact' => 'Alternativ kontakt',
    'Primary Contact' => 'Hovedkontakt',
  ),
  'case_status_dom' => 
  array (
    'Assigned' => 'Tildelt',
    'Closed' => 'Lukket',
    'Duplicate' => 'Dublett',
    'New' => 'Nye',
    'Pending Input' => 'Venter på informasjon',
    'Rejected' => 'Avvist',
  ),
  'checkbox_dom' => 
  array (
    '' => '',
    1 => 'Ja',
    2 => 'Nei',
  ),
  'contract_expiration_notice_dom' => 
  array (
    1 => '1 dag',
    3 => '3 dager',
    5 => '5 dager',
    7 => '1 uke',
    14 => '2 uker',
    21 => '3 uker',
    31 => '1 måned',
  ),
  'contract_payment_frequency_dom' => 
  array (
    'halfyearly' => 'Halvårlig',
    'monthly' => 'Månedlig',
    'quarterly' => 'Kvartalsvis',
    'yearly' => 'Årlig',
  ),
  'contract_status_dom' => 
  array (
    'inprogress' => 'Pågår',
    'notstarted' => 'Ikke startet',
    'signed' => 'Signert',
  ),
  'cselect_type_dom' => 
  array (
    'Does not Equal' => 'Er ikke lik',
    'Equals' => 'Er lik',
  ),
  'document_category_dom' => 
  array (
    '' => '',
    'Knowledege Base' => 'Kunnskapsbase',
    'Marketing' => 'Markedsføring',
    'Sales' => 'Salg',
  ),
  'document_status_dom' => 
  array (
    'Active' => 'Aktiv',
    'Draft' => 'Utkast',
    'Expired' => 'Foreldet',
    'FAQ' => 'FAQ',
    'Pending' => 'Venter',
    'Under Review' => 'Til vurdering',
  ),
  'document_subcategory_dom' => 
  array (
    '' => '',
    'FAQ' => 'FAQ',
    'Marketing Collateral' => 'Markedsmateriell',
    'Product Brochures' => 'Produktark',
  ),
  'document_template_type_dom' => 
  array (
    '' => '',
    'eula' => 'EULA (Brukeravtale)',
    'license' => 'Lisensavtale',
    'mailmerge' => 'E-postfletting',
    'nda' => 'NDA',
  ),
  'dom_cal_month_long' => 
  array (
    1 => 'Januar',
    2 => 'Februar',
    3 => 'Mars',
    4 => 'April',
    5 => 'Mai',
    6 => 'Juni',
    7 => 'Juli',
    8 => 'August',
    9 => 'September',
    10 => 'Oktober',
    11 => 'November',
    12 => 'Desember',
  ),
  'dom_email_bool' => 
  array (
    'bool_false' => 'Nei',
    'bool_true' => 'Ja',
  ),
  'dom_email_distribution' => 
  array (
    '' => '--Ingen--',
    'direct' => 'Direkte tildeling',
    'leastBusy' => 'Minst-Opptatt',
    'roundRobin' => 'Round-Robin',
  ),
  'dom_email_editor_option' => 
  array (
    '' => 'Standard e-post format',
    'html' => 'E-post i HTML-format',
    'plain' => 'E-post i vanlig tekst',
  ),
  'dom_email_errors' => 
  array (
    1 => 'Velg kun en bruker ved direkte tilordning.',
    2 => 'Velg kun elementer som er avkrysset ved direkte tilordning.',
  ),
  'dom_email_link_type' => 
  array (
    '' => 'Standard e-postklient',
    'mailto' => 'Ekstern e-postklient',
    'sugar' => 'SugarCRMs e-postklient',
  ),
  'dom_email_server_type' => 
  array (
    '' => '--Ingen--',
    'imap' => 'IMAP',
    'pop3' => 'POP3',
  ),
  'dom_email_status' => 
  array (
    'archived' => 'Arkivert',
    'closed' => 'Lukket',
    'draft' => 'Utkast',
    'read' => 'Lest',
    'replied' => 'Besvart',
    'send_error' => 'Mislykket sending',
    'sent' => 'sendt',
    'unread' => 'Ulest',
  ),
  'dom_email_types' => 
  array (
    'archived' => 'Arkivert',
    'draft' => 'Utkast',
    'inbound' => 'Innkomne',
    'out' => 'sendt',
  ),
  'dom_int_bool' => 
  array (
    1 => 'Ja',
  ),
  'dom_mailbox_type' => 
  array (
    'bounce' => 'Håndter feilsending',
    'bug' => 'Opprett Bug',
    'contact' => 'Opprett Kontakt',
    'pick' => 'Opprett  [Any]',
    'sales' => 'Opprett Lead',
    'support' => 'Opprett Sak',
    'task' => 'Opprett Oppgave',
  ),
  'dom_meeting_accept_options' => 
  array (
    'accept' => 'Godtatt',
    'decline' => 'Avvist',
    'tentative' => 'Tentativ',
  ),
  'dom_meeting_accept_status' => 
  array (
    'accept' => 'Godtatt',
    'decline' => 'Avvist',
    'none' => 'Ingen',
    'tentative' => 'Tentativ',
  ),
  'dom_report_types' => 
  array (
    'detailed_summary' => 'Summering med detaljer',
    'summary' => 'Summering',
    'tabular' => 'Rader og kolonner',
  ),
  'dom_switch_bool' => 
  array (
    '' => 'Nei',
    'off' => 'Nei',
    'on' => 'Ja',
  ),
  'dom_timezones' => 
  array (
    -12 => '(GMT - 12) Internasjonal datolinje vest',
    -11 => '(GMT - 11) Midway Island, Samoa',
    -10 => '(GMT - 10) Hawai',
    -9 => '(GMT - 9) Alaska',
    -8 => '(GMT - 8) San Francisco',
    -7 => '(GMT - 7) Phoenix',
    -6 => '(GMT - 6) Saskatchewan',
    -5 => '(GMT - 5) New York',
    -4 => '(GMT - 4) Santiago',
    -3 => '(GMT - 3) Buenos Aires',
    -2 => '(GMT - 2) Mid-Atlantic',
    -1 => '(GMT - 1) Azorene',
    1 => '(GMT + 1) Madrid',
    2 => '(GMT + 2) Athen',
    3 => '(GMT + 3) Moskva',
    4 => '(GMT + 4) Kabul',
    5 => '(GMT + 5) Ekaterinburg',
    6 => '(GMT + 6) Astana',
    7 => '(GMT + 7) Bangkok',
    8 => '(GMT + 8) Perth',
    9 => '(GMT + 9) Seoul',
    10 => '(GMT + 10) Brisbane',
    11 => '(GMT + 11) Solomonøyene',
    12 => '(GMT + 12) Auckland',
  ),
  'dom_timezones_extra' => 
  array (
    -12 => '(GMT-12) Internasjonal datolinje vest',
    -11 => '(GMT-11) Midway Island, Samoa',
    -10 => '(GMT-10) Hawai',
    -9 => '(GMT-9) Alaska',
    -8 => '(GMT-8) (PST)',
    -7 => '(GMT-7) (MST)',
    -6 => '(GMT-6) (CST)',
    -5 => '(GMT-5) (EST)',
    -4 => '(GMT-4) Santiago',
    -3 => '(GMT-3) Buenos Aires',
    -2 => '(GMT-2) Mid-Atlantic',
    -1 => '(GMT-1) Azorene',
    1 => '(GMT+1) Madrid',
    2 => '(GMT+2) Athen',
    3 => '(GMT+3) Moskva',
    4 => '(GMT+4) Kabul',
    5 => '(GMT+5) Ekaterinburg',
    6 => '(GMT+6) Astana',
    7 => '(GMT+7) Bangkok',
    8 => '(GMT+8) Perth',
    9 => '(GMT+9) Seoul',
    10 => '(GMT+10) Brisbane',
    11 => '(GMT+11) Salomonøyene',
    12 => '(GMT+12) Auckland',
  ),
  'dselect_type_dom' => 
  array (
    'Does not Equal' => 'Er ikke lik',
    'Equals' => 'Er lik',
    'Less Than' => 'Er mindre enn',
    'More Than' => 'Er mer enn',
  ),
  'dtselect_type_dom' => 
  array (
    'Less Than' => 'er mindre enn',
    'More Than' => 'var mer enn',
  ),
  'duration_intervals' => 
  array (
    15 => '15',
    30 => '30',
    45 => '45',
  ),
  'email_marketing_status_dom' => 
  array (
    '' => '',
    'active' => 'Aktiv',
    'inactive' => 'Inaktiv',
  ),
  'employee_status_dom' => 
  array (
    'Active' => 'Aktiv',
    'Leave of Absence' => 'Permisjon',
    'Terminated' => 'Avsluttet',
  ),
  'forecast_schedule_status_dom' => 
  array (
    'Active' => 'Aktiv',
    'Inactive' => 'Inaktiv',
  ),
  'forecast_type_dom' => 
  array (
    'Direct' => 'Direkte',
    'Rollup' => 'Rollup',
  ),
  'industry_dom' => 
  array (
    '' => '',
    'Apparel' => 'Konfeksjon',
    'Banking' => 'Bank',
    'Biotechnology' => 'Bioteknologi',
    'Chemicals' => 'Kjemisk industri',
    'Communications' => 'Kommunikasjon',
    'Construction' => 'Bygg/anlegg',
    'Consulting' => 'Konsulent',
    'Education' => 'Utdannelse/opplæring',
    'Electronics' => 'Elektronikk',
    'Energy' => 'Energi',
    'Engineering' => 'Ingeniørvirksomhet',
    'Entertainment' => 'Underholdning',
    'Environmental' => 'Miljø',
    'Finance' => 'Finans',
    'Government' => 'Offentlige etater',
    'Healthcare' => 'Helse',
    'Hospitality' => 'Overnatting',
    'Insurance' => 'Forsikring',
    'Machinery' => 'Maskin og anlegg',
    'Manufacturing' => 'Produksjon',
    'Media' => 'Media',
    'Not For Profit' => 'Veldedig virksomhet',
    'Other' => 'Annen',
    'Recreation' => 'Ferie og fritid',
    'Retail' => 'Detaljhandel',
    'Shipping' => 'Skipsfart',
    'Technology' => 'Teknologi',
    'Telecommunications' => 'Telekommunikasjon',
    'Transportation' => 'Transport',
    'Utilities' => 'Offentlige tjenester',
  ),
  'language_pack_name' => 'Norsk',
  'layouts_dom' => 
  array (
    'Invoice' => 'Faktura',
    'Standard' => 'Tilbud',
    'Terms' => 'Betalingsbetingelser',
  ),
  'lead_source_dom' => 
  array (
    '' => '',
    'Cold Call' => 'Cold call',
    'Conference' => 'Konferanse',
    'Direct Mail' => 'DM',
    'Email' => 'E-post',
    'Employee' => 'Ansatt',
    'Existing Customer' => 'Nåværende kunde',
    'Other' => 'Annen',
    'Partner' => 'Partner',
    'Public Relations' => 'PR',
    'Self Generated' => 'Egenopprettet',
    'Trade Show' => 'Bransjemesse',
    'Web Site' => 'Nettsted',
    'Word of mouth' => 'Omtale',
  ),
  'lead_status_dom' => 
  array (
    '' => '',
    'Assigned' => 'Tildelt',
    'Converted' => 'Konvertert',
    'Dead' => 'Død',
    'In Process' => 'Pågår',
    'New' => 'Nye',
    'Recycled' => 'Gjenvunnet',
  ),
  'lead_status_noblank_dom' => 
  array (
    'Assigned' => 'Tildelt',
    'Converted' => 'Konvertert',
    'Dead' => 'Død',
    'In Process' => 'Pågår',
    'New' => 'Nye',
    'Recycled' => 'Gjenvunnet',
  ),
  'meeting_status_dom' => 
  array (
    'Held' => 'Gjennomført',
    'Not Held' => 'Ikke gjennomført',
    'Planned' => 'Planlagt',
  ),
  'messenger_type_dom' => 
  array (
    '' => '',
    'AOL' => 'AOL',
    'MSN' => 'MSN',
    'Yahoo!' => 'Yahoo!',
  ),
  'moduleList' => 
  array (
    'Bugs' => 'Bugs',
    'Cases' => 'Saker',
    'FAQ' => 'FAQ',
    'Home' => 'Hjem',
    'KBDocuments' => 'Kunnskapsbase',
    'Newsletters' => 'Nyhetsbrev',
    'Notes' => 'Notater',
    'Teams' => 'Team',
    'Users' => 'Brukere',
  ),
  'moduleListSingular' => 
  array (
    'Bugs' => 'Bug:',
    'Cases' => 'Sak',
    'Home' => 'Hjem',
    'Notes' => 'Notat',
    'Teams' => 'Team',
    'Users' => 'Bruker',
  ),
  'mselect_type_dom' => 
  array (
    'Equals' => 'Er lik',
    'in' => 'Er en av',
  ),
  'notifymail_sendtype' => 
  array (
    'SMTP' => 'SMTP',
  ),
  'opportunity_relationship_type_dom' => 
  array (
    '' => '',
    'Business Decision Maker' => 'Kommersiell beslutningstager',
    'Business Evaluator' => 'Kommersiell evaluerer',
    'Executive Sponsor' => 'Hovedsponsor',
    'Influencer' => 'Påvirker',
    'Other' => 'Annen',
    'Primary Decision Maker' => 'Hoved-beslutningstager',
    'Technical Decision Maker' => 'Teknisk beslutningstager',
    'Technical Evaluator' => 'Teknisk evaluerer',
  ),
  'opportunity_type_dom' => 
  array (
    '' => '',
    'Existing Business' => 'Eksisterende kunde',
    'New Business' => 'Ny kunde',
  ),
  'order_stage_dom' => 
  array (
    'Cancelled' => 'Avlyst',
    'Confirmed' => 'Bekreftet',
    'On Hold' => 'Avventer',
    'Pending' => 'Venter',
    'Shipped' => 'Levert',
  ),
  'payment_terms' => 
  array (
    '' => '',
    'Net 15' => 'Netto 15',
    'Net 30' => 'Netto 30',
  ),
  'pricing_formula_dom' => 
  array (
    'Fixed' => 'Fast pris',
    'IsList' => 'Samme som liste',
    'PercentageDiscount' => 'Rabatt fra liste',
    'PercentageMarkup' => 'Tillegg over kostnad',
    'ProfitMargin' => 'Fortjenestemargin',
  ),
  'product_category_dom' => 
  array (
    '' => '',
    'Accounts' => 'Bedrifter',
    'Activities' => 'Aktiviteter',
    'Bugs' => 'Bugs',
    'Calendar' => 'Kalender',
    'Calls' => 'Oppringninger',
    'Campaigns' => 'Kampanjer',
    'Cases' => 'Saker',
    'Contacts' => 'Kontakter',
    'Currencies' => 'Valuta',
    'Dashboard' => 'Dashbord',
    'Documents' => 'Dokumenter',
    'Emails' => 'E-post',
    'Feeds' => 'Nyhetsmatinger',
    'Forecasts' => 'Prognoser',
    'Help' => 'Hjelp',
    'Home' => 'Hjem',
    'Leads' => 'Leads',
    'Meetings' => 'Møter',
    'Notes' => 'Notater',
    'Opportunities' => 'Opportunities',
    'Outlook Plugin' => 'Outlook Plugin',
    'Product Catalog' => 'Produktkatalog',
    'Products' => 'Produkter',
    'Projects' => 'Prosjekter',
    'Quotes' => 'Tilbud',
    'RSS' => 'RSS',
    'Releases' => 'Utgivelser',
    'Studio' => 'Studio',
    'Upgrade' => 'Oppgrader:',
    'Users' => 'Brukere',
  ),
  'product_status_dom' => 
  array (
    'Orders' => 'Bestilt',
    'Quotes' => 'Tilbud',
    'Ship' => 'Levert',
  ),
  'product_status_quote_key' => 'Tilbud',
  'product_template_status_dom' => 
  array (
    'Available' => 'På lager',
    'Unavailable' => 'Ikke på lager',
  ),
  'project_task_priority_options' => 
  array (
    'High' => 'Høy',
    'Low' => 'Lav',
    'Medium' => 'Middels',
  ),
  'project_task_status_options' => 
  array (
    'Completed' => 'Fullført',
    'Deferred' => 'Utsatt',
    'In Progress' => 'Pågår',
    'Not Started' => 'Ikke startet',
    'Pending Input' => 'Venter på informasjon',
  ),
  'project_task_utilization_options' => 
  array (
    25 => '25',
    50 => '50',
    75 => '75',
    100 => '100',
  ),
  'prospect_list_type_dom' => 
  array (
    'default' => 'Default',
    'exempt' => 'Unntaksliste - etter ID',
    'exempt_address' => 'Unntaksliste - etter e-postadresse',
    'exempt_domain' => 'Unntaksliste - etter domene',
    'seed' => '\'Såkorn\'',
    'test' => 'Test',
  ),
  'query_calc_oper_dom' => 
  array (
    '*' => '(X) Multiplisert med',
    '+' => '(+) Pluss',
    '-' => '(-) Minus',
    '/' => '(/) Delt på',
  ),
  'quote_relationship_type_dom' => 
  array (
    '' => '',
    'Business Decision Maker' => 'Kommersiell beslutningstager',
    'Business Evaluator' => 'Kommersiell evaluerer',
    'Executive Sponsor' => 'Hovedsponsor',
    'Influencer' => 'Påvirker',
    'Other' => 'Annen',
    'Primary Decision Maker' => 'Hoved-beslutningstager',
    'Technical Decision Maker' => 'Teknisk beslutningstager',
    'Technical Evaluator' => 'Teknisk evaluerer',
  ),
  'quote_stage_dom' => 
  array (
    'Closed Accepted' => 'Lukket og akseptert',
    'Closed Dead' => 'Lukket og dødt',
    'Closed Lost' => 'Lukket og tapt',
    'Confirmed' => 'Bekreftet',
    'Delivered' => 'Levert',
    'Draft' => 'Utkast',
    'Negotiation' => 'Forhandling',
    'On Hold' => 'Avventer',
  ),
  'quote_type_dom' => 
  array (
    'Orders' => 'Ordre',
    'Quotes' => 'Tilbud',
  ),
  'record_type_display' => 
  array (
    'Accounts' => 'Bedrifter',
    'Bugs' => 'Bug:',
    'Cases' => 'Sak',
    'Contacts' => 'Kontakter',
    'Leads' => 'Leads',
    'Opportunities' => 'Opportunities',
    'ProductTemplates' => 'Produkt',
    'Project' => 'Prosjekt:',
    'ProjectTask' => 'Prosjektoppgave',
    'Quotes' => 'Tilbud',
    'Tasks' => 'Oppgave',
  ),
  'record_type_display_notes' => 
  array (
    'Accounts' => 'Bedrift',
    'Bugs' => 'Bug',
    'Calls' => 'Oppringning',
    'Cases' => 'Sak',
    'Contacts' => 'Kontakt',
    'Contracts' => 'Kontrakt',
    'Emails' => 'E-post',
    'Leads' => 'Lead',
    'Meetings' => 'Møte',
    'Opportunities' => 'Opportunity',
    'ProductTemplates' => 'Produkt',
    'Products' => 'Produkt',
    'Project' => 'Prosjekt',
    'ProjectTask' => 'Prosjektoppgave',
    'Quotes' => 'Tilbud',
  ),
  'reminder_max_time' => '3600',
  'reminder_time_options' => 
  array (
    60 => '1 minutt før',
    300 => '5 minutter før',
    600 => '10 minutter før',
    900 => '15 minutter før',
    1800 => '30 minutter før',
    3600 => '1 time før',
  ),
  'sales_probability_dom' => 
  array (
    'Closed Lost' => '',
    'Closed Won' => '100',
    'Id. Decision Makers' => '40',
    'Needs Analysis' => '25',
    'Negotiation/Review' => '80',
    'Perception Analysis' => '50',
    'Proposal/Price Quote' => '65',
    'Prospecting' => '10',
    'Qualification' => '20',
    'Value Proposition' => '30',
  ),
  'sales_stage_dom' => 
  array (
    'Closed Lost' => 'Lukket og tapt',
    'Closed Won' => 'Lukket vunnet',
    'Id. Decision Makers' => 'Identifiser beslutningstakere',
    'Needs Analysis' => 'Behovsanalyse',
    'Negotiation/Review' => 'Forhandling/Review',
    'Perception Analysis' => 'Analyse av oppfattelsen',
    'Proposal/Price Quote' => 'Tilbud/Prisoverslag',
    'Prospecting' => 'Prospektering',
    'Qualification' => 'Kvalifisering',
    'Value Proposition' => 'Verdiforslag',
  ),
  'salutation_dom' => 
  array (
    '' => '',
    'Dr.' => 'Dr.',
    'Mr.' => 'Hr.',
    'Mrs.' => 'Fru',
    'Ms.' => 'Fr.',
    'Prof.' => 'Prof.',
  ),
  'schedulers_times_dom' => 
  array (
    'completed' => 'Fullført',
    'failed' => 'Mislyktes',
    'in progress' => 'Pågår',
    'no curl' => 'Ikke kjørt: cURL ikke tilgjengelig',
    'not run' => 'Forbi kjøretid, ikke gjennomført',
    'ready' => 'Klar',
  ),
  'source_dom' => 
  array (
    '' => '',
    'Forum' => 'Forum',
    'InboundEmail' => 'E-post',
    'Internal' => 'Intern',
    'Web' => 'Web',
  ),
  'support_term_dom' => 
  array (
    '+1 year' => '+1 år',
    '+2 years' => '+2 år',
    '+6 months' => '+6 måneder',
  ),
  'task_priority_dom' => 
  array (
    'High' => 'Høy',
    'Low' => 'Lav',
    'Medium' => 'Medium',
  ),
  'task_status_dom' => 
  array (
    'Completed' => 'Fullført',
    'Deferred' => 'Utsatt',
    'In Progress' => 'Pågår',
    'Not Started' => 'Ikke startet',
    'Pending Input' => 'Venter på informasjon',
  ),
  'tax_class_dom' => 
  array (
    'Non-Taxable' => 'Ikke avgiftspliktig',
    'Taxable' => 'Avgiftspliktig',
  ),
  'tselect_type_dom' => 
  array (
    14440 => '4 timer',
    28800 => '8 timer',
    43200 => '12 timer',
    86400 => '1 dag',
    172800 => '2 dager',
    259200 => '3 dager',
    345600 => '4 dager',
    432000 => '5 dager',
    604800 => '1 uke',
    1209600 => '2 uker',
    1814400 => '3 uker',
    2592000 => '30 dager',
    5184000 => '60 dager',
    7776000 => '90 dager',
    10368000 => '120 dager',
    12960000 => '150 dager',
    15552000 => '180 dager',
  ),
  'user_status_dom' => 
  array (
    'Active' => 'Aktiv',
    'Inactive' => 'Inaktiv',
  ),
  'wflow_action_datetime_type_dom' => 
  array (
    'Existing Value' => 'Eksisterende verdi',
    'Triggered Date' => 'Oppstartsdato',
  ),
  'wflow_action_type_dom' => 
  array (
    'new' => 'Ny post',
    'update' => 'Oppdater post',
    'update_rel' => 'Oppdatert relatert post',
  ),
  'wflow_address_type_dom' => 
  array (
    'bcc' => 'Blindkopi:',
    'cc' => 'Kopi:',
    'to' => 'Til:',
  ),
  'wflow_address_type_invite_dom' => 
  array (
    'bcc' => 'Blindkopi:',
    'cc' => 'Kopi:',
    'invite_only' => '(Kun inviterte)',
    'to' => 'Til:',
  ),
  'wflow_address_type_to_only_dom' => 
  array (
    'to' => 'Til:',
  ),
  'wflow_adv_enum_type_dom' => 
  array (
    'advance' => 'Flytt rullelisten fremover til',
    'retreat' => 'Flytt rullelisten bakover til',
  ),
  'wflow_adv_team_type_dom' => 
  array (
    'current_team' => 'Team for innloggete bruker',
    'team_id' => 'Nåværende gruppe av utløst post',
  ),
  'wflow_adv_user_type_dom' => 
  array (
    'assigned_user_id' => 'Bruker som er knyttet til utløst post',
    'created_by' => 'Bruker som opprettet utløst post',
    'current_user' => 'Innlogget bruker',
    'modified_user_id' => 'Bruker som sist endret utløst post',
  ),
  'wflow_alert_type_dom' => 
  array (
    'Email' => 'E-post',
    'Invite' => 'Inviter',
  ),
  'wflow_array_type_dom' => 
  array (
    'future' => 'Ny verdi',
    'past' => 'Gammel verdi',
  ),
  'wflow_fire_order_dom' => 
  array (
    'actions_alerts' => 'Først handling; så varsel',
    'alerts_actions' => 'Først varsel; så handling',
  ),
  'wflow_record_type_dom' => 
  array (
    'All' => 'Nye og eksisterende poster',
    'New' => 'Kun nye poster',
    'Update' => 'Kun eksisterende poster',
  ),
  'wflow_rel_type_dom' => 
  array (
    'all' => 'Alle relatert',
    'filter' => 'Filtrer relaterte',
  ),
  'wflow_relate_type_dom' => 
  array (
    'Manager' => 'Brukers leder',
    'Self' => 'Bruker',
  ),
  'wflow_relfilter_type_dom' => 
  array (
    'all' => 'Alle relaterte',
    'any' => 'hvilken som helst som er relatert',
  ),
  'wflow_set_type_dom' => 
  array (
    'Advanced' => 'Avanserte valgmuligheter',
    'Basic' => 'Grunnleggende valgmuligheter',
  ),
  'wflow_source_type_dom' => 
  array (
    'Custom Template' => 'Tilpasset Mal',
    'Normal Message' => 'Normal melding',
    'System Default' => 'System Default',
  ),
  'wflow_type_dom' => 
  array (
    'Normal' => 'Når posten ble lagret',
    'Time' => 'Etter endt tid',
  ),
  'wflow_user_type_dom' => 
  array (
    'current_user' => 'Innloggete brukere',
    'rel_user' => 'Relaterte brukere',
    'rel_user_custom' => 'Relaterte tilpassede brukere',
    'specific_role' => 'Spesifikk rolle',
    'specific_team' => 'Spesifikk Team',
    'specific_user' => 'Spesifikk Bruker',
  ),
);

