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
  'ERR_DELETE_RECORD' => 'Ett objektnummer måste specificeras för att kunna radera organisationen.',
  'ERR_EMAIL_INCORRECT' => 'Ange en giltig epostadress för att kunna skapa och skicka lösenordet.',
  'ERR_EMAIL_NOT_SENT_ADMIN' => 'Systemet kan inte utföra begärd handling, var god kontrollera:',
  'ERR_EMAIL_NO_OPTS' => 'Kunde inte hitta optimala inställningar för inkommande Epost',
  'ERR_ENTER_CONFIRMATION_PASSWORD' => 'Var god fyll i din lösenords verifiering.',
  'ERR_ENTER_NEW_PASSWORD' => 'Var god fyll i ditt nya lösenord.',
  'ERR_ENTER_OLD_PASSWORD' => 'Var god fyll i ditt gamla lösenord.',
  'ERR_IE_FAILURE1' => '[Klicka här för att återgå]',
  'ERR_IE_FAILURE2' => 'Ett problem uppstod vid kommunikationen med epostkontot. Vänligen kontrollera dina inställningar och försök igen.',
  'ERR_IE_MISSING_REQUIRED' => 'Inställningarna för inkommande epost saknar obligatorisk information. vänligen kontrollera dina inställningar och försök igen. Om du inte sätter upp inkommande epost, vänligen rensa alla fält i den här sektionen.',
  'ERR_INVALID_PASSWORD' => 'Du måste ange ett giltigt användarnamn och lösenord.',
  'ERR_LAST_ADMIN_1' => 'Användarnamnet "',
  'ERR_LAST_ADMIN_2' => '" är den sista användaren med administratörs rättigheter. Minst en användare måste vara administratör.',
  'ERR_NO_LOGIN_MOBILE' => 'Din första login till den här applikationen måste göras via en icke-mobil browser eller i normalt läge. Vänligen kom till med en fullständig browser eller klicka på normala länken nedan. Vi ber om ursäkt för allt besvär.',
  'ERR_PASSWORD_CHANGE_FAILED_1' => 'Ändring av lösenord misslyckades för',
  'ERR_PASSWORD_CHANGE_FAILED_2' => 'misslyckades. Det nya lösenordet måste sättas.',
  'ERR_PASSWORD_CHANGE_FAILED_3' => '. Det nya lösenordet är ogiltigt.',
  'ERR_PASSWORD_INCORRECT_OLD_1' => 'Gamla lösenordet inkorekt för användare',
  'ERR_PASSWORD_INCORRECT_OLD_2' => '. Fyll i lösenordsinformationen igen.',
  'ERR_PASSWORD_LINK_EXPIRED' => 'Din länk är inte giltig längre, var god generera en ny',
  'ERR_PASSWORD_MISMATCH' => 'Lösenorden stämmer ej överens.',
  'ERR_PASSWORD_USERNAME_MISSMATCH' => 'Du måste ange en giltig användare och epostadress.',
  'ERR_REASS_DIFF_USERS' => 'Vänligen välj en tilldelad användare som inte är den samma som från användaren.',
  'ERR_REASS_SELECT_MODULE' => 'Vänligen gå tillbaka och välj minst en modul.',
  'ERR_RECIPIENT_EMAIL' => 'Mottagarens epostadress',
  'ERR_REENTER_PASSWORDS' => 'Vänligen skriv in lösenordet igen.	\\"Nytt lösenord\\" och \\"bekräfta lösenord\\" är inte lika.',
  'ERR_REPORT_LOOP' => 'Systemet upptäckte en rapporteringsloop. En användare kan inte rapportera till sig själv, en chef kan inte rapportera till en användare.',
  'ERR_RULES_NOT_MET' => 'Det lösenord du angav är inte tillräckligt starkt, var snäll och pröva igen.',
  'ERR_SERVER_SMTP_EMPTY' => 'Systemet kan inte skicka ett epostmeddelande till användaren. Var god kontrollera konfigurationen för utgående epost under Epost inställningar.',
  'ERR_SERVER_STATUS' => 'Din serverstatus',
  'ERR_SMTP_URL_SMTP_PORT' => 'SMTP Server URL och port',
  'ERR_SMTP_USERNAME_SMTP_PASSWORD' => 'SMTP användarnamn och SMPT lösenord',
  'ERR_USER_INFO_NOT_FOUND' => 'Användarinformation kunde ej hittas',
  'ERR_USER_IS_LOCKED_OUT' => 'Denna användare har låsts ute av Sugar applikation och kan inte logga in genom att använda existerande lösenord.',
  'ERR_USER_NAME_EXISTS_1' => 'Användarnamnet',
  'ERR_USER_NAME_EXISTS_2' => 'finns redan. Lika användarnamn är inte tillåtet. Ändra användarnamnet så att det blir unikt.',
  'LBL_ACCOUNT_NAME' => 'Företagsnamn',
  'LBL_ADDRESS' => 'Adress',
  'LBL_ADDRESS_CITY' => 'Adress stad',
  'LBL_ADDRESS_COUNTRY' => 'Adress land',
  'LBL_ADDRESS_INFORMATION' => 'Adressinformation',
  'LBL_ADDRESS_POSTALCODE' => 'Adress postnummer',
  'LBL_ADDRESS_STATE' => 'Adress stat',
  'LBL_ADDRESS_STREET' => 'Adress gata',
  'LBL_ADMIN' => 'Administratör',
  'LBL_ADMIN_DESC' => 'Användare kan komma åt administrations sidan för alla poster, oavsett team säkerheten.',
  'LBL_ADMIN_USER' => 'Administratörsanvändare',
  'LBL_ADVANCED' => 'Avancerad',
  'LBL_AFFECTED' => 'berörda',
  'LBL_ANY_ADDRESS' => 'Någon adress:',
  'LBL_ANY_EMAIL' => 'Någon epost',
  'LBL_ANY_PHONE' => 'Någon telefon',
  'LBL_APPLY_OPTIMUMS' => 'Applicera Optimala Värden',
  'LBL_ASSIGN_PRIVATE_TEAM' => '(privat team vid spara)',
  'LBL_ASSIGN_TEAM' => 'Tilldela till team',
  'LBL_ASSIGN_TO_USER' => 'Tilldela till användare',
  'LBL_AUTHENTICATE_ID' => 'Verifieringsid',
  'LBL_BASIC' => 'Inkommande inställningar',
  'LBL_BUTTON_CREATE' => 'Skapa',
  'LBL_BUTTON_EDIT' => 'Redigera',
  'LBL_CALENDAR_OPTIONS' => 'Kalenderalternativ',
  'LBL_CANCEL' => 'Avbryt',
  'LBL_CANNOT_SEND_PASSWORD' => 'Kan inte skicka lösenord',
  'LBL_CERT' => 'Validera certifikat',
  'LBL_CERT_DESC' => 'Tvinga validering av mailservers säkerhets certifikat - använd inte om certifikat är självsignerat',
  'LBL_CHANGE_PASSWORD' => 'Ändra lösenord',
  'LBL_CHANGE_PASSWORD_TITLE' => 'Lösenord',
  'LBL_CHANGE_SYSTEM_PASSWORD' => 'Var god ange ett nytt lösenord',
  'LBL_CHECKMARK' => 'Checkmark',
  'LBL_CHOOSE_A_KEY' => 'Välj en nyckel för att unvika obehörig publicering av din kalender',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Välj din Epost leverantör',
  'LBL_CHOOSE_WHICH' => 'Välj vilka flikar som ska visas',
  'LBL_CITY' => 'Stad',
  'LBL_CLEAR_BUTTON_TITLE' => 'Rensa',
  'LBL_CONFIRM_PASSWORD' => 'Bekräfta lösenord',
  'LBL_CONFIRM_REGULAR_USER' => 'Du har ändrat användartypen från systemadministratör till vanlig användare. Efter att du sparat så kommer denna användare inte längre att ha systemadministratörsrättigheter. Klicka på OK för att fortsätta eller Avbryt för att återgå till posten.',
  'LBL_COUNTRY' => 'Land',
  'LBL_CREATED_BY_NAME' => 'Skapad av',
  'LBL_CURRENCY' => 'Valuta',
  'LBL_CURRENCY_EXAMPLE' => 'Visa valuta exempel',
  'LBL_CURRENCY_SIG_DIGITS' => 'Signifikanta Siffror för Valuta',
  'LBL_CURRENCY_SIG_DIGITS_DESC' => 'Antal decimaler att visa för Valuta',
  'LBL_CURRENCY_TEXT' => 'Välj en standard valuta',
  'LBL_DATE_ENTERED' => 'Skapat datum',
  'LBL_DATE_FORMAT' => 'Datumformat',
  'LBL_DATE_FORMAT_TEXT' => 'Välj visningsalternativ för datumsättning',
  'LBL_DATE_MODIFIED' => 'Senast ändrad',
  'LBL_DECIMAL_SEP' => 'Decimal symbol',
  'LBL_DECIMAL_SEP_TEXT' => 'Tecken för att decimalseparera',
  'LBL_DEFAULT_PRIMARY_TEAM' => 'Standard Primärt Team',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Användare',
  'LBL_DEFAULT_TEAM' => 'Standard team',
  'LBL_DEFAULT_TEAM_TEXT' => 'Standardteam för nya poster',
  'LBL_DELETED' => 'Raderad',
  'LBL_DELETE_GROUP_CONFIRM' => 'Är du säker på att du vill radera grupp användaren? Klicka på OK för att radera posten.<br />Efter att du klickat på OK kommer du att få chansen att omplacera poster som var tilldelade gruppanvändaren till en annan.',
  'LBL_DELETE_PORTAL_CONFIRM' => 'Är du säker på att du vill ta bort denna Portal API användare? Klicka OK för att ta bort.',
  'LBL_DELETE_USER' => 'Radera användare',
  'LBL_DELETE_USER_CONFIRM' => 'Korresponderande anställd posten kommer också att raderas när denna post är raderad. Efter att användaren är raderad så kan arbetsflödes definitioner och rapporter kopplade till användaren att behövas uppdateras.<br /><br />Klicka på Ok för att radera användarposten. Efter att du klickat OK så får du möjligheten att omplacera alla poster till en annan användare.',
  'LBL_DEPARTMENT' => 'Avdelning',
  'LBL_DESCRIPTION' => 'Beskrivning',
  'LBL_DISPLAY_TABS' => 'Visa flikar',
  'LBL_DOWNLOADS' => 'Nedladdningar',
  'LBL_DST_INSTRUCTIONS' => '(+DST) indikerar att hänsyn tags till sommar/vinter-tid',
  'LBL_EAPM_SUBPANEL_TITLE' => 'Externa Konton',
  'LBL_EDIT' => 'Redigera',
  'LBL_EDITLAYOUT' => 'Redigera layout',
  'LBL_EDIT_TABS' => 'Redigera flikar',
  'LBL_EMAIL' => 'Epostadress',
  'LBL_EMAILS' => 'Eposts',
  'LBL_EMAIL_CHARSET' => 'Utgående teckenuppsättning',
  'LBL_EMAIL_EDITOR_OPTION' => 'Skapande format',
  'LBL_EMAIL_GMAIL_DEFAULTS' => 'Fyll i Gmail inställningar',
  'LBL_EMAIL_INBOUND_TITLE' => 'Inkommande epostinställningar',
  'LBL_EMAIL_LINK_TYPE' => 'Epostklient',
  'LBL_EMAIL_LINK_TYPE_HELP' => '<b>Sugar Epost kient:</B> Skicka epost genom epost klienten i Sugar CRM.<br /><b>Extern Epost klient:</b> Skicka epost genom en klient utanför Sugar CRM, t.ex Microsoft Outlook',
  'LBL_EMAIL_NOT_SENT' => 'Systemet kan inte processa din begäran. Var snäll och kontakta din system administratör',
  'LBL_EMAIL_OTHER' => 'Epost 2',
  'LBL_EMAIL_OUTBOUND_TITLE' => 'Utgående epostinställningar',
  'LBL_EMAIL_PROVIDER' => 'Epostleverantör',
  'LBL_EMAIL_SHOW_COUNTS' => 'Visa epost räknare?',
  'LBL_EMAIL_SIGNATURE_ERROR1' => 'Signaturen kräver ett',
  'LBL_EMAIL_SMTP_SSL' => 'Aktivera SMTP över SSL',
  'LBL_EMAIL_TEMPLATE_MISSING' => 'Ingen epost mall har valts för meddelandet som skickas till användare med lösenord. Var god välj en epost mall för i Lösenordshanterings sidan.',
  'LBL_EMPLOYEE_INFORMATION' => 'Information om anställd',
  'LBL_EMPLOYEE_STATUS' => 'Anställningsstatus',
  'LBL_ERROR' => 'Fel',
  'LBL_EXCHANGE_SMTPPASS' => 'Exchange Lösenord',
  'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server port',
  'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server',
  'LBL_EXCHANGE_SMTPUSER' => 'Exchange Användarnamn',
  'LBL_EXPORT_CHARSET' => 'Teckenuppsättning för Import/Export',
  'LBL_EXPORT_CHARSET_DESC' => 'Välj vilken teckenuppsättning som ska användas lokalt. Denna egenskap kommer att användas vi dimporter, utgående epost, .csv exporter, PDF generering samt för vCard generering',
  'LBL_EXPORT_CREATED_BY' => 'Skapad av ID',
  'LBL_EXPORT_DELIMITER' => 'Exportseparator',
  'LBL_EXPORT_DELIMITER_DESC' => 'Specificera vilket/vilka som ska användas som export separator',
  'LBL_EXTERNAL_AUTH_ONLY' => 'Verifiera denna användare endast genom',
  'LBL_EXT_AUTHENTICATE' => 'Extern verifiering',
  'LBL_FAX' => 'Fax',
  'LBL_FAX_PHONE' => 'Fax',
  'LBL_FDOW' => 'Första Dagen av Veckan',
  'LBL_FDOW_TEXT' => 'Första Dagen visas i Vecko, Månad och Års vyer',
  'LBL_FIND_OPTIMUM_KEY' => 'f',
  'LBL_FIND_OPTIMUM_MSG' => '<br>Söker optimala anslutningsvärden',
  'LBL_FIND_OPTIMUM_TITLE' => 'Sök optimal konfiguration',
  'LBL_FIRST_NAME' => 'Förnamn',
  'LBL_FORCE' => 'Tvinga Negativ',
  'LBL_FORCE_DESC' => 'Vissa IMAP/POP3 servrar kräver speciella parametrar. Kryssa i för att tvinga negativ parameter vid uppkoppling (/notls)',
  'LBL_FOUND_OPTIMUM_MSG' => '<br>Hittade optimala inställningar. Klicka på knappen nedan för att applicera dem på din Inkorg.',
  'LBL_GENERATE_PASSWORD' => 'Återställ lösenord',
  'LBL_GENERATE_PASSWORD_BUTTON_KEY' => 'G',
  'LBL_GENERATE_PASSWORD_BUTTON_LABEL' => 'Återställ lösenord',
  'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Återställ lösenord [Alt+G]',
  'LBL_GMAIL_SMTPPASS' => 'Gmail Lösenord',
  'LBL_GMAIL_SMTPUSER' => 'Gmail Epost Adress',
  'LBL_GROUP_DESC' => 'Agera som en gruppanvändare. Användaren kan inte logga in via Sugar&#39;s webbgränssnitt. Användaren används endast för att tilldela poster till en grupp via inkommande epost funktionalitet.',
  'LBL_GROUP_USER' => 'Gruppanvändare',
  'LBL_GROUP_USER_STATUS' => 'Gruppanvändare',
  'LBL_HELP' => 'Hjälp',
  'LBL_HIDEOPTIONS' => 'Dölj Alternativ',
  'LBL_HIDE_TABS' => 'Dölj flikar',
  'LBL_HOME_PHONE' => 'Hemtelefon:',
  'LBL_ICAL_PUB_URL' => 'iCal integration URL',
  'LBL_ICAL_PUB_URL_HELP' => 'Använd den här URLen för att prenumerera på Sugar kalender inuti iCal.',
  'LBL_INBOUND_TITLE' => 'Organisationsinformation',
  'LBL_IS_ADMIN' => 'Är administratör',
  'LBL_IS_GROUP' => 'Är Grupp',
  'LBL_LANGUAGE' => 'Språk',
  'LBL_LAST_ADMIN_NOTICE' => 'Du har valt dig själv, du kan inte ange Användartyp eller statusen av dig själv.',
  'LBL_LAST_NAME' => 'Efternamn',
  'LBL_LAST_NAME_SLASH_NAME' => 'Senaste namn/namn',
  'LBL_LAYOUT_OPTIONS' => 'Utseendealternativ',
  'LBL_LDAP' => 'LDAP',
  'LBL_LDAP_AUTHENTICATION' => 'LDAP verifering',
  'LBL_LDAP_ERROR' => 'LDAP fel: Vänligen kontakta administratören',
  'LBL_LDAP_EXTENSION_ERROR' => 'LDAP Fel: Saknar utökat stöd',
  'LBL_LIST_ACCEPT_STATUS' => 'Accepterat status',
  'LBL_LIST_ADMIN' => 'Admin',
  'LBL_LIST_DEPARTMENT' => 'Avdelning',
  'LBL_LIST_DESCRIPTION' => 'Beskrivning',
  'LBL_LIST_EMAIL' => 'Epost',
  'LBL_LIST_FORM_TITLE' => 'Användare',
  'LBL_LIST_GROUP' => 'Grupp',
  'LBL_LIST_LAST_NAME' => 'Efternamn',
  'LBL_LIST_MEMBERSHIP' => 'Medlemsskap',
  'LBL_LIST_NAME' => 'Namn',
  'LBL_LIST_PASSWORD' => 'Lösenord',
  'LBL_LIST_PRIMARY_PHONE' => 'Primär telefon',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_TITLE' => 'Titel',
  'LBL_LIST_USER_NAME' => 'Användarnamn',
  'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Format för att visa namn',
  'LBL_LOCALE_DESC_FIRST' => '[Förnamn]',
  'LBL_LOCALE_DESC_LAST' => '[Efternamn]',
  'LBL_LOCALE_DESC_SALUTATION' => '[Titel]',
  'LBL_LOCALE_DESC_TITLE' => '[Titel]',
  'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Exempel',
  'LBL_LOCALE_NAME_FORMAT_DESC' => 'Välj hur namnen ska visas',
  'LBL_LOCALE_NAME_FORMAT_DESC_2' => '<i>"s" Titel<br>"f" Förnamn<br>"l" Efternamn</i>',
  'LBL_LOGGED_OUT_1' => 'Du har blivit utloggad. För att logga in igen vänligen klicka',
  'LBL_LOGGED_OUT_2' => 'här',
  'LBL_LOGGED_OUT_3' => '.',
  'LBL_LOGIN' => 'Användarnamn',
  'LBL_LOGIN_ADMIN_CALL' => 'Var god kontakta system administratören.',
  'LBL_LOGIN_ATTEMPTS_OVERRUN' => 'För många inloggningsförsök',
  'LBL_LOGIN_BUTTON_KEY' => 'L',
  'LBL_LOGIN_BUTTON_LABEL' => 'Login',
  'LBL_LOGIN_BUTTON_TITLE' => 'Login [Alt+L]',
  'LBL_LOGIN_FORGOT_PASSWORD' => 'Glömt ditt lösenord?',
  'LBL_LOGIN_LOGIN_TIME_ALLOWED' => 'Du kan pröva att logga in igen',
  'LBL_LOGIN_LOGIN_TIME_DAYS' => 'dagar.',
  'LBL_LOGIN_LOGIN_TIME_HOURS' => 'h.',
  'LBL_LOGIN_LOGIN_TIME_MINUTES' => 'min.',
  'LBL_LOGIN_LOGIN_TIME_SECONDS' => 'sek.',
  'LBL_LOGIN_OPTIONS' => 'Alternativ',
  'LBL_LOGIN_SUBMIT' => 'Skicka',
  'LBL_LOGIN_WELCOME_TO' => 'Välkommen till',
  'LBL_MAILBOX' => 'Övervakad katalog',
  'LBL_MAILBOX_DEFAULT' => 'INBOX',
  'LBL_MAILBOX_SSL_DESC' => 'Använd SSL vid kommunikation. Om detta inte fungerar kontrollera din PHP installation inkluderad "--With-imap-ssl" i konfigurationen.',
  'LBL_MAILBOX_TYPE' => 'Möjliga åtgärder',
  'LBL_MAILMERGE' => 'Samman',
  'LBL_MAILMERGE_TEXT' => 'Aktivera Sammanfoga Epost (Sammanfoga Epost måste även vara aktiverat av administratör i systemets inställningar)',
  'LBL_MAIL_FROMADDRESS' => 'Svara-till adress',
  'LBL_MAIL_FROMNAME' => 'Svara-till namn',
  'LBL_MAIL_OPTIONS_TITLE' => 'Epostalternativ',
  'LBL_MAIL_SENDTYPE' => 'Agent för skickande av epost:',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Använd SMTP autentifiering?',
  'LBL_MAIL_SMTPPASS' => 'SMTP lösenord:',
  'LBL_MAIL_SMTPPORT' => 'SMTP port',
  'LBL_MAIL_SMTPSERVER' => 'SMTP server',
  'LBL_MAIL_SMTPTYPE' => 'SMTP Server typ:',
  'LBL_MAIL_SMTPUSER' => 'SMTP användarnamn',
  'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Server specifikation',
  'LBL_MARK_READ' => 'Lämna meddelanden på servern',
  'LBL_MARK_READ_DESC' => 'Importera och markera meddelanden som lästa på mailservern, radera ej.',
  'LBL_MARK_READ_NO' => 'Mail markerade som raderade efter import',
  'LBL_MARK_READ_YES' => 'Mail kvar på servern efter import',
  'LBL_MAX_SUBTAB' => 'Antal subflikar',
  'LBL_MAX_SUBTAB_DESCRIPTION' => 'Antal av subflikar som visas per flik innan överflödesmenyn visas.',
  'LBL_MAX_TAB' => 'Antal flikar',
  'LBL_MAX_TAB_DESCRIPTION' => 'Antal flikar som visas på toppen av sidan innan överflödesmenyn visas.',
  'LBL_MESSENGER_ID' => 'IM namn',
  'LBL_MESSENGER_TYPE' => 'IM typ',
  'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Administratören har inte konfigurerat default utgående konto. Kan ej skicka test epost meddelande.',
  'LBL_MOBILE_PHONE' => 'Mobil',
  'LBL_MODIFIED_BY' => 'Ändrad av',
  'LBL_MODIFIED_BY_ID' => 'Ändrad av ID',
  'LBL_MODIFIED_USER_ID' => 'Ändrad Användar ID',
  'LBL_MODULE_NAME' => 'Användare',
  'LBL_MODULE_TITLE' => 'Användare:Hem',
  'LBL_MY_TEAMS' => 'Mina team',
  'LBL_NAME' => 'Hela namnet',
  'LBL_NAVIGATION_PARADIGM' => 'Navigering',
  'LBL_NAVIGATION_PARADIGM_DESCRIPTION' => 'Visa moduler grupperade under flikkategorier eller visa moduler som separata flikar för varje modul.',
  'LBL_NEW_FORM_TITLE' => 'Ny användare',
  'LBL_NEW_PASSWORD' => 'Nytt lösenord',
  'LBL_NEW_PASSWORD1' => 'Lösenord',
  'LBL_NEW_PASSWORD2' => 'Bekräfta lösenord',
  'LBL_NEW_USER_BUTTON_KEY' => 'N',
  'LBL_NEW_USER_BUTTON_LABEL' => 'Ny användare',
  'LBL_NEW_USER_BUTTON_TITLE' => 'Ny användare [Alt+N]',
  'LBL_NEW_USER_PASSWORD_1' => 'Lösenordet är ändrat',
  'LBL_NEW_USER_PASSWORD_2' => 'Ett epostmeddelande har skickats till användaren innehållande ett system genererat lösenord.',
  'LBL_NEW_USER_PASSWORD_3' => 'Lösenordet skapades',
  'LBL_NORMAL_LOGIN' => 'Ändra till normal vy',
  'LBL_NOTES' => 'Anteckningar',
  'LBL_NO_KEY' => 'Nyckeln är inte ifyllt. Vänligen fyll i nyckel för att aktivera publiceringen.',
  'LBL_NUMBER_GROUPING_SEP' => '1000 separator',
  'LBL_NUMBER_GROUPING_SEP_TEXT' => 'Tecken för att separera tusental',
  'LBL_OAUTH_TOKENS' => 'OAuth Tokens',
  'LBL_OAUTH_TOKENS_SUBPANEL_TITLE' => 'OAuth Access Tokens',
  'LBL_OFFICE_PHONE' => 'Kontorstelefon',
  'LBL_OK' => 'OK',
  'LBL_OLD_PASSWORD' => 'Gammalt lösenord',
  'LBL_ONLY' => 'Endast',
  'LBL_ONLY_SINCE' => 'Importera endast sedan senaste kontrollen',
  'LBL_ONLY_SINCE_DESC' => 'PHP kan inte urskilja Nya från Olästa meddelanden när POP3 används. Kryssa i här för att endast söka efter nya meddelanden, sedan den sista sökningen gjordes. Det här kommer markant att öka prestandan om din mailserver inte stöder IMAP.',
  'LBL_ONLY_SINCE_NO' => 'Nej. Kontrollera mot alla mail på mailservern.',
  'LBL_ONLY_SINCE_YES' => 'Ja.',
  'LBL_OTHER' => 'Annan',
  'LBL_OTHER_EMAIL' => 'Annan epostadress',
  'LBL_OTHER_PHONE' => 'Annan telefon',
  'LBL_OWN_OPPS' => 'Inga affärsmöjligheter',
  'LBL_OWN_OPPS_DESC' => 'Sätt denna till sant om användaren inte kommer tilldelas några affärsmöjligheter. Du ska ignorera denna flagga för användare som inte är chefer och inte involverade i säljaktiviteter. Används av prognosmodulen.',
  'LBL_PASSWORD' => 'Lösenord',
  'LBL_PASSWORD_EXPIRATION_GENERATED' => 'Ditt lösenord är system genererat',
  'LBL_PASSWORD_EXPIRATION_LOGIN' => 'Ditt lösenord har gått ut, var god ange ett nytt lösenord',
  'LBL_PASSWORD_EXPIRATION_TIME' => 'Ditt lösenord har gått ut. Var snäll och ange ett nytt lösenord',
  'LBL_PASSWORD_GENERATED' => 'Nytt lösenord genererats',
  'LBL_PASSWORD_SENT' => 'Lösenord uppdaterat',
  'LBL_PDF_FONT_NAME_DATA' => 'Font för sidfoten',
  'LBL_PDF_FONT_NAME_DATA_TEXT' => 'Det angivna typsnittet kommer att läggas till den text som visas i PDF dokument sidfoten.',
  'LBL_PDF_FONT_NAME_MAIN' => 'Typsnitt för sidhuvud och brödtext',
  'LBL_PDF_FONT_NAME_MAIN_TEXT' => 'Den valda fonten kommer att läggas till sidhuvud och brödtext på PDF dokumentet',
  'LBL_PDF_FONT_SIZE_DATA' => 'Data font storlek',
  'LBL_PDF_FONT_SIZE_DATA_TEXT' => '-blank-',
  'LBL_PDF_FONT_SIZE_MAIN' => 'Huvud font storlek',
  'LBL_PDF_FONT_SIZE_MAIN_TEXT' => '-blank-',
  'LBL_PDF_MARGIN_BOTTOM' => 'Botten marginal',
  'LBL_PDF_MARGIN_BOTTOM_TEXT' => '-blank-',
  'LBL_PDF_MARGIN_FOOTER' => 'Fotmarginal',
  'LBL_PDF_MARGIN_FOOTER_TEXT' => '-blank-',
  'LBL_PDF_MARGIN_HEADER' => 'Huvudmarginal',
  'LBL_PDF_MARGIN_HEADER_TEXT' => '-blank-',
  'LBL_PDF_MARGIN_LEFT' => 'Vänster marginal',
  'LBL_PDF_MARGIN_LEFT_TEXT' => '-blank-',
  'LBL_PDF_MARGIN_RIGHT' => 'Höger marginal',
  'LBL_PDF_MARGIN_RIGHT_TEXT' => '-blank-',
  'LBL_PDF_MARGIN_TOP' => 'Topp marginal',
  'LBL_PDF_MARGIN_TOP_TEXT' => '-blank-',
  'LBL_PDF_PAGE_FORMAT' => 'Sidformat',
  'LBL_PDF_PAGE_FORMAT_TEXT' => 'Formatet som används av sidorna',
  'LBL_PDF_PAGE_ORIENTATION' => 'Sid orientering',
  'LBL_PDF_PAGE_ORIENTATION_L' => 'Landskap',
  'LBL_PDF_PAGE_ORIENTATION_P' => 'Portrait',
  'LBL_PDF_PAGE_ORIENTATION_TEXT' => '-blank-',
  'LBL_PDF_SETTINGS' => 'PDF Inställningar',
  'LBL_PHONE' => 'Telefon',
  'LBL_PHONE_FAX' => 'Telefon fax',
  'LBL_PHONE_HOME' => 'Telefon Hem',
  'LBL_PHONE_MOBILE' => 'Telefon Mobil',
  'LBL_PHONE_OTHER' => 'Telefon Övrig',
  'LBL_PHONE_WORK' => 'Telefon Jobb',
  'LBL_PICK_TZ_DESCRIPTION' => 'Innan du fortsätter, vänligen bekräfta din tidzon. Välj lämplig tidzon från listan nedan, och klicka på Spara för att fortsätta. <br />Tidzonen kan ändras när som helt under "Mitt konto".',
  'LBL_PICK_TZ_WELCOME' => 'Välkommen till Sugar',
  'LBL_PICTURE_FILE' => 'Bild',
  'LBL_PORT' => 'Mailserver port',
  'LBL_PORTAL_ONLY' => 'Endast portalanvändare',
  'LBL_PORTAL_ONLY_DESC' => 'Använd för Portal API. Denna typ kan inte logga in genom Sugar webb gränssnitt.',
  'LBL_PORTAL_ONLY_USER' => 'Portal API användare',
  'LBL_POSTAL_CODE' => 'Postnummer:',
  'LBL_PRIMARY_ADDRESS' => 'Primär adress',
  'LBL_PRIVATE_TEAM_FOR' => 'Privat team för',
  'LBL_PROCESSING' => 'Utför',
  'LBL_PROMPT_TIMEZONE' => 'Begär tidzon',
  'LBL_PROMPT_TIMEZONE_TEXT' => 'Kryssa i för att tvinga användaren att bekräfta tidszon vid inloggning.',
  'LBL_PROSPECT_LIST' => 'Prospektlista',
  'LBL_PROVIDE_USERNAME_AND_EMAIL' => 'Ange både användarnamn och en epostadress.',
  'LBL_PSW_MODIFIED' => 'lösenord senast ändrat',
  'LBL_PUBLISH_KEY' => 'Publicerings nyckel',
  'LBL_REASS_ASSESSING' => 'Uppskatta',
  'LBL_REASS_BUTTON_CLEAR' => 'Rensa',
  'LBL_REASS_BUTTON_CONTINUE' => 'Fortsätt',
  'LBL_REASS_BUTTON_GO_BACK' => 'Gå tillbaka',
  'LBL_REASS_BUTTON_REASSIGN' => 'Omplacera',
  'LBL_REASS_BUTTON_RESTART' => 'Starta på nytt',
  'LBL_REASS_BUTTON_RETURN' => 'Återgå',
  'LBL_REASS_BUTTON_SUBMIT' => 'Lägg till',
  'LBL_REASS_CANNOT_PROCESS' => 'kan inte processas:',
  'LBL_REASS_CONFIRM_REASSIGN' => 'Vill du tilldela om alla poster för den här användaren?',
  'LBL_REASS_CONFIRM_REASSIGN_NO' => 'Nej',
  'LBL_REASS_CONFIRM_REASSIGN_TITLE' => 'Tilldela igen',
  'LBL_REASS_CONFIRM_REASSIGN_YES' => 'Ja',
  'LBL_REASS_DESC_PART1' => 'Alla poster kommer hittas (i de valda modulerna) som är tilldelade till en användare, och gör det möjilgt för dig att tilldela dem till en annan användare.',
  'LBL_REASS_DESC_PART2' => 'Välj vilka moduler som ska köras mot vilka arbetsflöden, skicka uppdrags meddelanden och utför spårning under omplacering. Klicka nästa för att fortsätta omplacera poster. Klicka på återstart för att starta om igen.',
  'LBL_REASS_FAILED' => 'Misslyckades',
  'LBL_REASS_FAILED_SAVE' => 'Misslyckades att spara posten',
  'LBL_REASS_FILTERS' => 'Filter:',
  'LBL_REASS_FROM' => 'från',
  'LBL_REASS_HAVE_BEEN_UPDATED' => 'har blivit uppdaterad:',
  'LBL_REASS_MOD_REASSIGN' => 'Moduler som ska ingå i nya tilldelningen:',
  'LBL_REASS_NONE' => 'Ingen',
  'LBL_REASS_NOTES_ONE' => 'Tilldelning av poster till dig själv kommer inte generera tilldelningsnotifieringar.',
  'LBL_REASS_NOTES_THREE' => 'Även om du inte inkluderar Ändringshistorik, kommer Senast Ändrad och Ändrad Av att uppderas som vanligt.',
  'LBL_REASS_NOTES_TITLE' => 'Anteckningar:',
  'LBL_REASS_NOTES_TWO' => 'Att inkludera Arbetsflöden, Alarm and Ändringshistorik, i tilldelningen försämrar prestandan betydligt.',
  'LBL_REASS_NOT_PROCESSED' => 'kunde inte genomföras:',
  'LBL_REASS_RECORDS_FROM' => 'poster från',
  'LBL_REASS_SCRIPT_TITLE' => 'Tilldela om poster',
  'LBL_REASS_STEP2_DESC' => 'De team som listas nedan var tillgängliga för Från användarens team men inte för Till användarens team. Alla poster i Från användarens team kommer inte vara synliga för Till användarens team om inte teamvärdena är mappade.',
  'LBL_REASS_STEP2_TITLE' => 'Tilldela om team',
  'LBL_REASS_SUCCESSFUL' => 'Genomförd',
  'LBL_REASS_SUCCESS_ASSIGN' => 'Genomförd tilldelning',
  'LBL_REASS_TEAMS_GOOD_MSG' => 'Till användaren har tillgång till alla Från användarens team. Ingen mappning behövs. Omdirigeras till nästa sida om 5 sekunder.',
  'LBL_REASS_TEAM_NO_CHANGE' => '-- Ingen ändring --',
  'LBL_REASS_TEAM_SET_TO' => 'och team sattes till',
  'LBL_REASS_TEAM_TO' => 'Sätt team till:',
  'LBL_REASS_THE_FOLLOWING' => 'Följande',
  'LBL_REASS_TO' => 'till',
  'LBL_REASS_UPDATE_COMPLETE' => 'Genomförd uppdatering',
  'LBL_REASS_USER_FROM' => 'Från användare:',
  'LBL_REASS_USER_FROM_TEAM' => 'Från användarteam:',
  'LBL_REASS_USER_TO' => 'Till användare:',
  'LBL_REASS_USER_TO_TEAM' => 'Till användarteam:',
  'LBL_REASS_VERBOSE_HELP' => 'Välj detta alternativ för att visa detaljerad information om omplacering av uppgifter som involverar arbetsflöden.',
  'LBL_REASS_VERBOSE_OUTPUT' => 'Visa svar (gäller bara för tilldelningar där arbetsflöden inkluderas)',
  'LBL_REASS_WILL_BE_UPDATED' => 'kommer att uppdateras.',
  'LBL_REASS_WORK_NOTIF_AUDIT' => 'Inkludera Arbetsflöden/Alarm/Ändringshistork (bedydligt långsammare)',
  'LBL_RECAPTCHA_FILL_FIELD' => 'Ange texten som visas i bilden.',
  'LBL_RECAPTCHA_IMAGE' => 'Ändra till bild',
  'LBL_RECAPTCHA_INSTRUCTION' => 'Ange de två orden nedan',
  'LBL_RECAPTCHA_INSTRUCTION_OPPOSITE' => 'Ange de två orden till höger',
  'LBL_RECAPTCHA_INVALID_PRIVATE_KEY' => 'Ogiltig Recaptcha privat nyckel',
  'LBL_RECAPTCHA_INVALID_REQUEST_COOKIE' => 'Värdet för att verifiera "Recaptcha" var ogiltigt.',
  'LBL_RECAPTCHA_NEW_CAPTCHA' => 'Förnya CAPTCHA',
  'LBL_RECAPTCHA_SOUND' => 'Byt till ljud',
  'LBL_RECAPTCHA_UNKNOWN' => 'Okänt Recatpcha fel',
  'LBL_RECEIVE_NOTIFICATIONS' => 'Meddela vid tilldelning',
  'LBL_RECEIVE_NOTIFICATIONS_TEXT' => 'Få ett mail när en post tilldelas till dig.',
  'LBL_REGISTER' => 'Ny användare? Vänligen registrera',
  'LBL_REGULAR_DESC' => 'Du kan komma åt moduler och poster baserat på team säkerheten och roller.',
  'LBL_REGULAR_USER' => 'Vanlig användare',
  'LBL_REMINDER' => 'Visa påminnelser?',
  'LBL_REMINDER_EMAIL' => 'Epost',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Maila alla inbjudna',
  'LBL_REMINDER_POPUP' => 'Popup',
  'LBL_REMINDER_TEXT' => 'Skapa en påminnelse om ett kommande möte eller telefonsamtal',
  'LBL_REMOVED_TABS' => 'Borttagna flikar av admin',
  'LBL_REPORTS_TO' => 'Rapporterar till',
  'LBL_REPORTS_TO_ID' => 'Rapporterar till ID:',
  'LBL_REPORTS_TO_NAME' => 'Rapporterar till',
  'LBL_REQUEST_SUBMIT' => 'Din begäran har skickats.',
  'LBL_RESET_DASHBOARD' => 'Återställ till standard dashboards',
  'LBL_RESET_HOMEPAGE' => 'Återställ till standard hemsidan',
  'LBL_RESET_HOMEPAGE_WARNING' => 'Är du säker på att du vill återställa din hemsida?',
  'LBL_RESET_HOMEPAGE_WARNING_USER' => 'Är du säker på att du vill återställa hemsidan för denna användare?',
  'LBL_RESET_PREFERENCES' => 'Återställ till standardvärden',
  'LBL_RESET_PREFERENCES_WARNING' => 'Är du säker på att du vill återställa alla inställningar?',
  'LBL_RESET_PREFERENCES_WARNING_USER' => 'Är du säger på att du vill återställa alla egenskaper för denna användare?',
  'LBL_RESET_TO_DEFAULT' => 'Återställ till standard',
  'LBL_RESOURCE_NAME' => 'Namn',
  'LBL_RESOURCE_TYPE' => 'Typ',
  'LBL_ROLES_SUBPANEL_TITLE' => 'Roller',
  'LBL_SALUTATION' => 'Tilltal',
  'LBL_SAVED_SEARCH' => 'Sparade sökningar & layout',
  'LBL_SEARCH_FORM_TITLE' => 'Sök användare',
  'LBL_SEARCH_URL' => 'Sök placering',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Välj markerade användare',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Välj markerade användare',
  'LBL_SERVER_OPTIONS' => 'Avancerade inställningar',
  'LBL_SERVER_TYPE' => 'Mailserver protokoll',
  'LBL_SERVER_URL' => 'Mailserver adress',
  'LBL_SESSION_EXPIRED' => 'Du har blivit utloggad för att din session timade ut',
  'LBL_SETTINGS_URL' => 'URL',
  'LBL_SETTINGS_URL_DESC' => 'Använd denna URL till inloggningsinställningarna för Sugar&#39;s plug-in för Microsoft® Outlook® och för Sugar&#39;s plug-in för Microsoft® Word®.',
  'LBL_SHOWOPTIONS' => 'Visa Alternativ',
  'LBL_SHOW_ON_EMPLOYEES' => 'Visa Anställds Protokoll',
  'LBL_SIGNATURE' => 'Signatur',
  'LBL_SIGNATURES' => 'Signaturer',
  'LBL_SIGNATURE_DEFAULT' => 'Använd signatur?',
  'LBL_SIGNATURE_HTML' => 'HTML signatur',
  'LBL_SIGNATURE_NAME' => 'Namn',
  'LBL_SIGNATURE_PREPEND' => 'Signatur ovanför svar?',
  'LBL_SMTP_SERVER_HELP' => 'Denna SMTP Epost server kan användas för utgående epost. Ange ett användarnamn och lösenord för ditt epost konto ifall du vill använda den.',
  'LBL_SSL' => 'Använd SSL',
  'LBL_SSL_DESC' => 'Använd Secure Socket Layer vid kommunikation till din mailserver.',
  'LBL_STATE' => 'Stat',
  'LBL_STATUS' => 'Status',
  'LBL_SUBPANEL_LINKS' => 'Subpanel länkar',
  'LBL_SUBPANEL_LINKS_DESCRIPTION' => 'I detaljerad vy, visa en rad med länkar med genvägar till subpaneler.',
  'LBL_SUBPANEL_TABS' => 'Subpanelsflikar',
  'LBL_SUBPANEL_TABS_DESCRIPTION' => 'I detaljerad vy, gruppera subpanelerna till flikar och visa en flik åt gången.',
  'LBL_SUGAR_LOGIN' => 'Är Sugar användare',
  'LBL_SUPPORTED_THEME_ONLY' => 'Påverkas endast av teman som supportar detta alternativ.',
  'LBL_SWAP_LAST_VIEWED_DESCRIPTION' => 'Visa senast visade-menyn på sidan om ikryssad. Annars visas den högst upp.',
  'LBL_SWAP_LAST_VIEWED_POSITION' => 'Senast visade på sidan',
  'LBL_SWAP_SHORTCUT_DESCRIPTION' => 'Visar genvägsmenyn högst upp om ikryssad. Annars visas den på sidan.',
  'LBL_SWAP_SHORTCUT_POSITION' => 'Genvägar högst upp',
  'LBL_SYSTEM_GENERATED_PASSWORD' => 'Systemgenererat lösenord',
  'LBL_TAB_TITLE_EMAIL' => 'Epost inställningar',
  'LBL_TAB_TITLE_USER' => 'Användarinställningar',
  'LBL_TEAMS' => 'Team',
  'LBL_TEAM_MEMBERSHIP' => 'Team Medlemskap',
  'LBL_TEAM_SET' => 'Välj Team',
  'LBL_TEAM_UPLINE' => 'Medlem rapporterar till',
  'LBL_TEAM_UPLINE_EXPLICIT' => 'Medlem',
  'LBL_TEST_BUTTON_KEY' => 't',
  'LBL_TEST_BUTTON_TITLE' => 'Test [Alt+T]',
  'LBL_TEST_SETTINGS' => 'Testa inställningar',
  'LBL_TEST_SUCCESSFUL' => 'Uppkoppling slutfördes korrekt.',
  'LBL_THEME' => 'Tema',
  'LBL_THEMEPREVIEW' => 'Förhandsgranska',
  'LBL_THEME_COLOR' => 'Färg',
  'LBL_THEME_FONT' => 'Font',
  'LBL_TIMEZONE' => 'Tidzon',
  'LBL_TIMEZONE_DST' => 'Sommartidsinställning',
  'LBL_TIMEZONE_DST_TEXT' => 'Observera sommartidsinställningar',
  'LBL_TIMEZONE_TEXT' => 'Sätt aktuell tidzon',
  'LBL_TIME_FORMAT' => 'Tidsformat',
  'LBL_TIME_FORMAT_TEXT' => 'Sätt visningsalternativ för tidvisning',
  'LBL_TITLE' => 'Titel',
  'LBL_TLS' => 'Använd TLS',
  'LBL_TLS_DESC' => 'Använd Transport Layer Security när du kommunicerar med mailservern - använd endast detta om din mailserver hanterar detta protokoll.',
  'LBL_TOGGLE_ADV' => 'Visa Avancerat',
  'LBL_TOO_MANY_CONCURRENT' => 'Den här sessionen har avslutats för att en annan session har startats med samma användarnman.',
  'LBL_UPDATE_FINISH' => 'Genomförd uppdatering',
  'LBL_USER' => 'Användare',
  'LBL_USER_ACCESS' => 'Åtkomst',
  'LBL_USER_HASH' => 'Lösenord',
  'LBL_USER_HOLIDAY_SUBPANEL_TITLE' => 'Lediga Dagar',
  'LBL_USER_INFORMATION' => 'Användarinformation',
  'LBL_USER_LOCALE' => 'Lokala inställningar',
  'LBL_USER_NAME' => 'Användarnamn',
  'LBL_USER_NAME_FOR_ROLE' => 'Användare/Team/Roller',
  'LBL_USER_PREFERENCES' => 'Användarinställningar',
  'LBL_USER_SETTINGS' => 'Användarinställningar',
  'LBL_USER_TYPE' => 'Användartyp',
  'LBL_USE_GROUP_TABS' => 'Grupperade moduler',
  'LBL_USE_REAL_NAMES' => 'Visa hela namnet',
  'LBL_USE_REAL_NAMES_DESC' => 'Visa användarens hela namn istället för användarnamnet',
  'LBL_WIZARD_BACK_BUTTON' => '< Tillbaka',
  'LBL_WIZARD_FINISH' => 'Klicka <b>fortsätt</b> nedanför för att spara dina inställningar och börja använda Sugar. För mer information om att använda Sugar:<br /><br /><br /><table cellpadding=0 cellspacing=0><br /><tr><td><!--not_in_theme!--><img src=include/images/university.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/university" target="_blank"><b>Sugar University</b></a><br>End-user och System Administratör Träning and Resurser</td></tr><br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr><br /><tr><td><!--not_in_theme!--><img src=include/images/docs.png style="margin-right: 5px;"></td><td><a href="http://docs.sugarcrm.com/" target="_blank"><b>Dokumentation</b></a><br>Produkt Guider och Publicera Anteckningar</td></tr><br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr><br /><tr><td><!--not_in_theme!--><img src=include/images/kb.png style="margin-right: 5px;"></td><td><a href="http://kb.sugarcrm.com/" target="_blank"><b>Kunskapsbas</b></a><br>Tips från SugarCRM Support för att använda vanliga uppgifter och processer inom Sugar</td></tr><br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr><br /><tr><td><!--not_in_theme!--><img src=include/images/forums.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/forums" target="_blank"><b>Forum</b></a><br>Forum dedikerade till Sugar Communityt för att diskutera intresseområden med varandra och med SugarCRM Utvecklare</td></tr><br /></table>',
  'LBL_WIZARD_FINISH1' => 'Vad vill du göra härnäst?',
  'LBL_WIZARD_FINISH10' => 'Använd Studio för att skapa och hantera applikationens fält och layout.',
  'LBL_WIZARD_FINISH11' => 'Besök Sugar University',
  'LBL_WIZARD_FINISH12' => 'Hitta träningsmaterial och kurser som kan hjälpa dig börja som systemadministratör eller end user av applikationen.',
  'LBL_WIZARD_FINISH14' => 'Dokumentation',
  'LBL_WIZARD_FINISH15' => 'Produktguider och publicerade anteckningar',
  'LBL_WIZARD_FINISH16' => 'Kunskapsbas',
  'LBL_WIZARD_FINISH17' => 'Tips från SugarCRM Support för att använda vanliga uppgifter och processer inom Sugar.',
  'LBL_WIZARD_FINISH18' => 'Forum',
  'LBL_WIZARD_FINISH19' => 'Forum dedikerade till Sugar Communityt för att diskutera intresseområden med varandra och med SugarCRM Utvecklare.',
  'LBL_WIZARD_FINISH2' => 'Börja Använda Sugar',
  'LBL_WIZARD_FINISH2DESC' => 'Gå direkt till applikationens Huvudsida',
  'LBL_WIZARD_FINISH3' => 'Importera Data',
  'LBL_WIZARD_FINISH4' => 'Importera data från externa källor inom applikationen.',
  'LBL_WIZARD_FINISH5' => 'Skapa Användare.',
  'LBL_WIZARD_FINISH6' => 'Skapa nya användarkonton för personer som ska få åtkomst till applikationen.',
  'LBL_WIZARD_FINISH7' => 'Visa och Hantera Applikations Inställningar',
  'LBL_WIZARD_FINISH8' => 'Hantera avancerade inställningar, inklusive applikationens standarsinställningar.',
  'LBL_WIZARD_FINISH9' => 'Konfigurera Applikationen',
  'LBL_WIZARD_FINISH_BUTTON' => 'Avsluta',
  'LBL_WIZARD_FINISH_TAB' => 'Avsluta',
  'LBL_WIZARD_FINISH_TITLE' => 'Du är redo att använda Sugar!',
  'LBL_WIZARD_LOCALE' => 'Din plats',
  'LBL_WIZARD_LOCALE_DESC' => 'Ange din tidszon och hur du vill att datum, valutor och namn ska visas i Sugar.',
  'LBL_WIZARD_NEXT_BUTTON' => 'Nästa >',
  'LBL_WIZARD_PERSONALINFO' => 'Din information',
  'LBL_WIZARD_PERSONALINFO_DESC' => 'Ange information om dig själv. Informationen du anger kommer att vara synlig för andra Sugar användare. Fält markerade med * är obligatoriska.',
  'LBL_WIZARD_SKIP_BUTTON' => 'Skippa',
  'LBL_WIZARD_SMTP' => 'Ditt epostkonto',
  'LBL_WIZARD_SMTP_DESC' => 'Ange din epost användare och lösenord för default utgående epost server.',
  'LBL_WIZARD_TITLE' => 'Användarguide',
  'LBL_WIZARD_WELCOME' => 'Klicka på <b>Nästa</b> för att konfigurera några grundinställningar i Sugar.',
  'LBL_WIZARD_WELCOME_NOSMTP' => 'Klicka på <b>Nästa</b> för att konfigurera grundinställningarna i Sugar.',
  'LBL_WIZARD_WELCOME_TAB' => 'Välkommen',
  'LBL_WIZARD_WELCOME_TITLE' => 'Välkommen till Sugar!',
  'LBL_WORK_PHONE' => 'Kontorstelefon',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Lösenord',
  'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID',
  'LBL_YOUR_PUBLISH_URL' => 'Publicera på min placering',
  'LBL_YOUR_QUERY_URL' => 'Din query URL',
  'LNK_EDIT_TABS' => 'Redigera flikar',
  'LNK_IMPORT_USERS' => 'Importera användareLösenor',
  'LNK_NEW_GROUP_USER' => 'Skapa grupp användare',
  'LNK_NEW_PORTAL_USER' => 'Skapa portal API användare',
  'LNK_NEW_USER' => 'Skapa ny användare',
  'LNK_REASSIGN_RECORDS' => 'Tilldela om poster',
  'LNK_USER_LIST' => 'Användare',
  'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION' => 'Är du säker på att du vill ta bort användarens medlemskap?',
);

