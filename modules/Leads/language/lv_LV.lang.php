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
  'ERR_DELETE_RECORD' => 'Ir jānorāda ieraksta numurus, lai dzēstu interesentu.',
  'LBL_ACCOUNT_DESCRIPTION' => 'Uzņēmuma apraksts',
  'LBL_ACCOUNT_ID' => 'Uzņēmuma ID:',
  'LBL_ACCOUNT_NAME' => 'Uzņēmuma nosaukums:',
  'LBL_ACTIVITIES_COPY' => 'Kopēt darbības uz',
  'LBL_ACTIVITIES_COPY_HELP' => 'Norādiet ierakstu(-us), kuriem veidot kopijas no interesenta darbībām. Jauni uzdevumi, zvani, tikšanās un piezīmes tiks veidotas katram no atzīmētiem  ierakstiem. E-pasti tiks sasaistīti ar atzīmēto(-ajiem) ierakstu(-iem)',
  'LBL_ACTIVITIES_MOVE' => 'Pārvietot darbības uz',
  'LBL_ACTIVITIES_MOVE_HELP' => 'Norādiet ierakstu uz kuru pārvietot interesenta darbības. Uzdevumi, zvani, tikšanās, piezīmes un e-pasti tiks pārvietoti uz atzīmētajiem ierakstiem.',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Darbības',
  'LBL_ADDRESS_INFORMATION' => 'Adreses informācija',
  'LBL_ADD_BUSINESSCARD' => 'Pievienot vizītkarti',
  'LBL_ALTERNATE_ADDRESS' => 'Cita adrese:',
  'LBL_ALT_ADDRESS' => 'Cita adrese:',
  'LBL_ALT_ADDRESS_CITY' => 'Cita adrese - pilsēta',
  'LBL_ALT_ADDRESS_COUNTRY' => 'Cita adrese - valsts',
  'LBL_ALT_ADDRESS_POSTALCODE' => 'Cita adrese - pasta indekss',
  'LBL_ALT_ADDRESS_STATE' => 'Cita adrese  - Novads:',
  'LBL_ALT_ADDRESS_STREET' => 'Cita adrese - iela',
  'LBL_ALT_ADDRESS_STREET_2' => 'Cita adrese -  iela 2',
  'LBL_ALT_ADDRESS_STREET_3' => 'Cita adrese - iela 3',
  'LBL_ANY_ADDRESS' => 'Jebkāda adrese:',
  'LBL_ANY_EMAIL' => 'Jebkāds e-pasts:',
  'LBL_ANY_PHONE' => 'Jebkāds tālruņa numurs:',
  'LBL_ASSIGNED_TO_ID' => 'Piešķirts lietotājam:',
  'LBL_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam',
  'LBL_ASSISTANT' => 'Asistents',
  'LBL_ASSISTANT_PHONE' => 'Asistenta tālrunis',
  'LBL_BACKTOLEADS' => 'Atpakaļ pie interesentiem',
  'LBL_BIRTHDATE' => 'Dzimšanas diena:',
  'LBL_BUSINESSCARD' => 'Konvertēt interesentu',
  'LBL_CAMPAIGN' => 'Kampaņa:',
  'LBL_CAMPAIGNS' => 'Kampaņas',
  'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Kampaņas',
  'LBL_CAMPAIGN_ID' => 'Kampaņas ID',
  'LBL_CAMPAIGN_LEAD' => 'Kampaņas',
  'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampaņas',
  'LBL_CITY' => 'Pilsēta:',
  'LBL_CLICK_TO_RETURN' => 'Atgriezties portālā',
  'LBL_CONTACT' => 'Interesents:',
  'LBL_CONTACT_ID' => 'Kontakta ID:',
  'LBL_CONTACT_INFORMATION' => 'Apraksts',
  'LBL_CONTACT_NAME' => 'Interesenta vārds:',
  'LBL_CONTACT_OPP_FORM_TITLE' => 'Interesents-Iespēja:',
  'LBL_CONTACT_ROLE' => 'Loma:',
  'LBL_CONVERTED' => 'Konvertēts',
  'LBL_CONVERTED_ACCOUNT' => 'Konvertētais uzņēmums:',
  'LBL_CONVERTED_CONTACT' => 'Konvertētā kontaktpersona:',
  'LBL_CONVERTED_OPP' => 'Konvertētā iespēja:',
  'LBL_CONVERTLEAD' => 'Konvertēt interesentu',
  'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
  'LBL_CONVERTLEAD_TITLE' => 'Konvertēt interesentu',
  'LBL_CONVERTLEAD_WARNING' => 'Brīdinājums: Jūs vēlaties konvertēt Interesentu, kura statuss ir "Konvertēts". Kontaktpersonas un/vai Uzņēmuma ieraksti šim interesentam, iespējams, jau ir izveidoti. Ja vēlies konvertēt interesentu, spied Saglabāt. Ja nevēlies konvertēt Interesentu spied Atcelt.',
  'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Iespējama kontaktpersona:',
  'LBL_CONVERT_ADD_MODULE' => 'Pievienot moduli',
  'LBL_CONVERT_COPY' => 'Kopēt datus',
  'LBL_CONVERT_DELETE' => 'Dzēst',
  'LBL_CONVERT_EDIT' => 'Rediģēt',
  'LBL_CONVERT_EDIT_LAYOUT' => 'Rediģēt konvertēšanas izkārtojumu',
  'LBL_CONVERT_MODULE_NAME' => 'Modulis',
  'LBL_CONVERT_MODULE_NAME_SINGULAR' => 'Modulis',
  'LBL_CONVERT_REQUIRED' => 'Obligāts',
  'LBL_CONVERT_SELECT' => 'Atļaut izvēli',
  'LBL_COPY_TIP' => 'Ja atzīmēts, lauki no interesenta tiks kopēti uz laukiem ar tādu pašu nosaukumu jaunizveidotajos ierakstos.',
  'LBL_COUNTRY' => 'Valsts:',
  'LBL_CREATE' => 'Izveidot',
  'LBL_CREATED' => 'Izveidoja',
  'LBL_CREATED_ACCOUNT' => 'Izveidots jauns uzņēmums',
  'LBL_CREATED_CALL' => 'Izveidots jauns zvans',
  'LBL_CREATED_CONTACT' => 'Izveidota jauna kontaktpersona',
  'LBL_CREATED_ID' => 'Izveidotāja ID',
  'LBL_CREATED_MEETING' => 'Izveidota jauna tikšanās',
  'LBL_CREATED_NEW' => 'Izveidots jauns',
  'LBL_CREATED_OPPORTUNITY' => 'Izveidota jauna iespēja',
  'LBL_CREATED_USER' => 'Izveidots lietotājs',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Interesenti',
  'LBL_DELETE_TIP' => 'Izņemt šo moduli no konvertēšanas izkārtojuma.',
  'LBL_DEPARTMENT' => 'Departaments:',
  'LBL_DESCRIPTION' => 'Apraksts:',
  'LBL_DESCRIPTION_INFORMATION' => 'Apraksta informācija',
  'LBL_DO_NOT_CALL' => 'Nezvanīt:',
  'LBL_DUPLICATE' => 'Līdzīgi interesenti',
  'LBL_EDITLAYOUT' => 'Rediģēt izkārtojumu',
  'LBL_EDIT_INLINE' => 'Rediģēt',
  'LBL_EDIT_TIP' => 'Modificēt konvertēšanas izkārtojumu šim modulim.',
  'LBL_EMAIL_ADDRESS' => 'E-pasts:',
  'LBL_EMAIL_OPT_OUT' => 'Atteikties no e-pastiem:',
  'LBL_ENTERDATE' => 'Ievades datums',
  'LBL_EXISTING_ACCOUNT' => 'Lietots esošs uzņēmums',
  'LBL_EXISTING_CONTACT' => 'Lietots esošs kontakts',
  'LBL_EXISTING_OPPORTUNITY' => 'Lietota esoša iespēja',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Piešķirts lietotājam ID',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Piešķirts lietotājam',
  'LBL_EXPORT_CREATED_BY' => 'Izveidoja ID',
  'LBL_EXPORT_EMAIL2' => 'Cits e-pasts',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificētāja ID',
  'LBL_EXPORT_PHONE_MOBILE' => 'Mobilais tālrunis',
  'LBL_FAX_PHONE' => 'Fakss:',
  'LBL_FIRST_NAME' => 'Vārds:',
  'LBL_FULL_NAME' => 'Pilns vārds:',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Vēsture',
  'LBL_HOME_PHONE' => 'Mājas tālrunis:',
  'LBL_IMPORT_VCARD' => 'Importēt vCard',
  'LBL_IMPORT_VCARDTEXT' => 'Automātiski izveidot jaunu interesentu importējot vCard no failu sistēmas.',
  'LBL_INVALID_EMAIL' => 'Nederīgs e-pasts:',
  'LBL_INVITEE' => 'Tiešie ziņotāji',
  'LBL_LAST_NAME' => 'Uzvārds:',
  'LBL_LEAD_SOURCE' => 'Interesenta avots:',
  'LBL_LEAD_SOURCE_DESCRIPTION' => 'Interesenta avota apraksts:',
  'LBL_LIST_ACCEPT_STATUS' => 'Apstiprināt statusu',
  'LBL_LIST_ACCOUNT_NAME' => 'Uzņēmuma nosaukums',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam',
  'LBL_LIST_CONTACT_NAME' => 'Interesenta vārds',
  'LBL_LIST_CONTACT_ROLE' => 'Loma',
  'LBL_LIST_DATE_ENTERED' => 'Izveidots',
  'LBL_LIST_EMAIL_ADDRESS' => 'E-pasts',
  'LBL_LIST_FIRST_NAME' => 'Vārds',
  'LBL_LIST_FORM_TITLE' => 'Interesentu saraksts',
  'LBL_LIST_LAST_NAME' => 'Uzvārds',
  'LBL_LIST_LEAD_SOURCE' => 'Interesenta avots:',
  'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Interesenta avota apraksts',
  'LBL_LIST_MY_LEADS' => 'Mani interesenti',
  'LBL_LIST_NAME' => 'Nosaukums',
  'LBL_LIST_PHONE' => 'Darba tālrunis',
  'LBL_LIST_REFERED_BY' => 'Ieteica',
  'LBL_LIST_STATUS' => 'Statuss',
  'LBL_LIST_TITLE' => 'Virsraksts',
  'LBL_LOADING' => 'Notiek ielāde ...',
  'LBL_MESSAGE' => 'Ievadiet savu informāciju. Informācija un/vai konts tiks jums izveidots pēc apstiprināšanas',
  'LBL_MOBILE_PHONE' => 'Mobilais tālrunis:',
  'LBL_MODIFIED' => 'Modificēja',
  'LBL_MODIFIED_ID' => 'Modificētāja ID',
  'LBL_MODIFIED_USER' => 'Modificēja lietotājs',
  'LBL_MODULE_NAME' => 'Interesenti',
  'LBL_MODULE_NAME_SINGULAR' => 'Interesents',
  'LBL_MODULE_TIP' => 'Modulis, kurā izveidot jaunu ierakstu.',
  'LBL_MODULE_TITLE' => 'Interesenti: Sākums',
  'LBL_NAME' => 'Nosaukums:',
  'LBL_NEW_FORM_TITLE' => 'Jauns interesents',
  'LBL_NEW_PORTAL_PASSWORD' => 'Jauna portāla parole:',
  'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => 'Paziņojums: Patreizējais Interesentu konvertēšanas ekrāns satur pielāgotos laukus. Kad tu pielāgo  Interesentu konvertēšanas ekrānu pirmoreiz, tev nepieciešams pievienot pielāgotos laukus izkārtojumam. Pielāgotie lauki automātiski neparādīsies izkārtojumā kā iepriekš.',
  'LBL_OFFICE_PHONE' => 'Darba tālrunis:',
  'LBL_OPPORTUNITY_AMOUNT' => 'Iespējas summa:',
  'LBL_OPPORTUNITY_ID' => 'Iespējas ID:',
  'LBL_OPPORTUNITY_NAME' => 'Iespējas nosaukums:',
  'LBL_OPP_NAME' => 'Iespējas nosaukums:',
  'LBL_OTHER_EMAIL_ADDRESS' => 'Cits e-pasts:',
  'LBL_OTHER_PHONE' => 'Cits tālrunis:',
  'LBL_PHONE' => 'Tālrunis',
  'LBL_PHONE_FAX' => 'Fakss',
  'LBL_PHONE_HOME' => 'Mājas tālrunis',
  'LBL_PHONE_MOBILE' => 'Mobilais tālrunis',
  'LBL_PHONE_OTHER' => 'Cits tālrunis',
  'LBL_PHONE_WORK' => 'Darba tālrunis',
  'LBL_PORTAL_ACTIVE' => 'Portāls aktīvs:',
  'LBL_PORTAL_APP' => 'Portāla lietojumprogramma:',
  'LBL_PORTAL_INFORMATION' => 'Portāla informācija',
  'LBL_PORTAL_NAME' => 'Portāla nosaukums:',
  'LBL_PORTAL_PASSWORD_ISSET' => 'Portāla parole ir uzstādīta:',
  'LBL_POSTAL_CODE' => 'Pasta indekss:',
  'LBL_PRIMARY_ADDRESS' => 'Primārā adrese:',
  'LBL_PRIMARY_ADDRESS_CITY' => 'Primārā adrese - pilsēta',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primārā adrese - valsts',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primārā adrese - pasta indekss',
  'LBL_PRIMARY_ADDRESS_STATE' => 'Primārā adrese - novads',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Primārā adrese - iela',
  'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primārā adrese - iela 2',
  'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primārā adrese - iela 3',
  'LBL_PROSPECT_LIST' => 'Mērķu saraksts',
  'LBL_REFERED_BY' => 'Ieteica:',
  'LBL_REGISTRATION' => 'Reģistrācija',
  'LBL_REPORTS_FROM' => 'Atskaites no:',
  'LBL_REPORTS_TO' => 'Vadītājs',
  'LBL_REPORTS_TO_ID' => 'Vadītāja ID:',
  'LBL_REQUIRED_TIP' => 'Pirms Interesents var tikt konvertēts jābūt izveidotam vai atlasītam modulim.',
  'LBL_SALUTATION' => 'Sveiciens',
  'LBL_SAVED' => 'Paldies par reģistrēšanos. Jūsu konts tiks izveidots un tuvākajā laikā kāds ar jums sazināsies.',
  'LBL_SEARCH_FORM_TITLE' => 'Interesentu meklēšana',
  'LBL_SELECT' => '<b>VAI</b> Izvēlēties',
  'LBL_SELECTION_TIP' => 'Moduļi ar saistīto lauku Kontaktpersonu modulī var tikt atlasīti nevis izveidoti interesentu konvertēšanas procesā.',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Atlasīt izvēlētos interesentus',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Atlasīt izvēlētos interesentus',
  'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' => 'Atvainojiet, serveris pašlaik nav pieejams, mēģiniet vēlāk.',
  'LBL_STATE' => 'Novads:',
  'LBL_STATUS' => 'Statuss:',
  'LBL_STATUS_DESCRIPTION' => 'Statusa apraksts:',
  'LBL_STREET' => 'Iela',
  'LBL_TARGET_BUTTON_KEY' => 'T',
  'LBL_TARGET_BUTTON_LABEL' => 'Targeted',
  'LBL_TARGET_BUTTON_TITLE' => 'Targeted',
  'LBL_TARGET_OF_CAMPAIGNS' => 'Veiksmīga kampaņa:',
  'LBL_THANKS_FOR_SUBMITTING_LEAD' => 'Paldies par Jūsu iesniegumu.',
  'LBL_TITLE' => 'Amats:',
  'LBL_VCARD' => 'vCard',
  'LBL_VIEW_FORM_TITLE' => 'Interesentu skatījums',
  'LBL_WEBSITE' => 'Vietne',
  'LNK_IMPORT_LEADS' => 'Importēt interesentus',
  'LNK_IMPORT_VCARD' => 'Izveidot interesentu no vCard',
  'LNK_LEAD_LIST' => 'Skatīt interesentus',
  'LNK_LEAD_REPORTS' => 'Skatīt interesentu atskaites',
  'LNK_NEW_ACCOUNT' => 'Izveidot uzņēmumu',
  'LNK_NEW_APPOINTMENT' => 'Izveidot tikšanos',
  'LNK_NEW_CALL' => 'Reģistrēt zvanu',
  'LNK_NEW_CASE' => 'Izveidot pieteikumu',
  'LNK_NEW_CONTACT' => 'Izveidot kontaktpersonu',
  'LNK_NEW_LEAD' => 'Izveidot interesentu',
  'LNK_NEW_MEETING' => 'Ieplānot tikšanos',
  'LNK_NEW_NOTE' => 'Izveidot piezīmi',
  'LNK_NEW_OPPORTUNITY' => 'Izveidot iespēju',
  'LNK_NEW_TASK' => 'Izveidot uzdevumu',
  'LNK_SELECT_ACCOUNTS' => '<b>vai</b> izvēlēties uzņēmumu',
  'LNK_SELECT_CONTACTS' => '<b>vai</b> norādiet kontaktpersonu',
  'NTC_COPY_ALTERNATE_ADDRESS' => 'Kopēt citu adresi uz primāro adresi',
  'NTC_COPY_PRIMARY_ADDRESS' => 'Kopējiet primāro adresi uz citu adresi',
  'NTC_DELETE_CONFIRMATION' => 'Vai tiešām vēlaties dzēst šo ierakstu?',
  'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Lai izveidotu iespēju, nepieciešams uzņēmums.<br /> Izveidojiet jaunu uzņēmumu vai izvēlieties no esošiem.',
  'NTC_REMOVE_CONFIRMATION' => 'Vai tiešām vēlaties izņemt šo  interesentu no pieteikuma?',
  'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Are you sure you want to remove this record as a direct report?',
  'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
  'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
  'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
  'db_first_name' => 'LBL_LIST_FIRST_NAME',
  'db_last_name' => 'LBL_LIST_LAST_NAME',
  'db_title' => 'LBL_LIST_TITLE',
);

