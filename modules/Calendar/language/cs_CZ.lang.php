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

	

$mod_list_strings = array (
  'dom_cal_month' => 
  array (
    0 => '',
    1 => 'Led',
    2 => 'Úno',
    3 => 'Bře',
    4 => 'Dub',
    5 => 'Kvě',
    6 => 'Čer',
    7 => 'Črv',
    8 => 'Srp',
    9 => 'Zář',
    10 => 'Říj',
    11 => 'Lis',
    12 => 'Pro',
  ),
  'dom_cal_month_long' => 
  array (
    0 => '',
    1 => 'Leden',
    2 => 'Únor',
    3 => 'Březen',
    4 => 'Duben',
    5 => 'Květen',
    6 => 'Červen',
    7 => 'Červenec',
    8 => 'Srpen',
    9 => 'Září',
    10 => 'Říjen',
    11 => 'Listopad',
    12 => 'Prosinec',
  ),
  'dom_cal_weekdays' => 
  array (
    0 => 'Ne',
    1 => 'Po',
    2 => 'Út',
    3 => 'St',
    4 => 'Čt',
    5 => 'Pá',
    6 => 'So',
  ),
  'dom_cal_weekdays_long' => 
  array (
    0 => 'Neděle',
    1 => 'Pondělí',
    2 => 'Úterý',
    3 => 'Středa',
    4 => 'Čtvrtek',
    5 => 'Pátek',
    6 => 'Sobota',
  ),
);

$mod_strings = array (
  'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: nedefinováno v tomto pohledu',
  'ERR_YEAR_BETWEEN' => 'Omlouváme se, ale kalendář nemůže zobrazit rok, který požadujete.<br>Rok musí být mezi 1970 a 2037',
  'LBL_AM' => 'dopoledne',
  'LBL_APPLY_BUTTON' => 'Použít',
  'LBL_ASSIGNED_TO_NAME' => 'Přiřazeno komu',
  'LBL_BUSY' => 'Obsazeno',
  'LBL_CANCEL_BUTTON' => 'Zrušit',
  'LBL_CLOSE_BUTTON' => 'Zavřít',
  'LBL_CONFIRM_REMOVE' => 'Jste si jisti, že chcete odstranit záznam?',
  'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Jste si jisti, že chcete odstranit všechny opakující se záznamy?',
  'LBL_CONFLICT' => 'Konflikt',
  'LBL_CREATE_CALL' => 'Naplánovat hovor',
  'LBL_CREATE_MEETING' => 'Naplánovat schůzku',
  'LBL_CREATE_NEW_RECORD' => 'Vytvořit aktivitu',
  'LBL_DATE' => 'Datum & čas začátku',
  'LBL_DATE_END_ERROR' => 'Konečný datum je menší než počáteční datum',
  'LBL_DATE_TIME' => 'Počáteční datum & čas:',
  'LBL_DAY' => 'Den',
  'LBL_DELETE_BUTTON' => 'Odstranit',
  'LBL_DURATION' => 'Doba trvání:',
  'LBL_EDIT_ALL_RECURRENCES' => 'Upravit všechny recidivy',
  'LBL_EDIT_RECORD' => 'Upravit aktivity',
  'LBL_EDIT_USERLIST' => 'Seznam uživatelů',
  'LBL_ERROR_LOADING' => 'Chyba při načítání',
  'LBL_ERROR_SAVING' => 'Chyba při ukládání',
  'LBL_FILTER_BY_TEAM' => 'Vyfiltrovat uživatele podle týmu:',
  'LBL_GENERAL_TAB' => 'Detaily',
  'LBL_GOTO_DATE' => 'Datum',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_INFO_DESC' => 'Popis',
  'LBL_INFO_DUE_DT' => 'Do data',
  'LBL_INFO_DURATION' => 'Doba trvání',
  'LBL_INFO_NAME' => 'Předmět',
  'LBL_INFO_RELATED_TO' => 'Vztahuje se k',
  'LBL_INFO_START_DT' => 'Počáteční datum',
  'LBL_INFO_TITLE' => 'Další podrobnosti',
  'LBL_LOADING' => 'Nahrávání ...',
  'LBL_MINS_ABBREV' => 'm',
  'LBL_MODULE_NAME' => 'Kalendář',
  'LBL_MODULE_NAME_SINGULAR' => 'Kalendář',
  'LBL_MODULE_TITLE' => 'Kalendář',
  'LBL_MONTH' => 'Měsíc',
  'LBL_NEXT_DAY' => 'Následující den',
  'LBL_NEXT_MONTH' => 'Následující měsíc',
  'LBL_NEXT_SHARED' => 'Další',
  'LBL_NEXT_WEEK' => 'Následující týden',
  'LBL_NEXT_YEAR' => 'Následující rok',
  'LBL_NO' => 'Ne',
  'LBL_NO_USER' => 'Nevybrán žádný uživatel',
  'LBL_PARTICIPANTS_TAB' => 'Pozvaní',
  'LBL_PM' => 'odpoledne',
  'LBL_PREVIOUS_DAY' => 'Předchozí den',
  'LBL_PREVIOUS_MONTH' => 'Předchozí měsíc',
  'LBL_PREVIOUS_SHARED' => 'Předchozí',
  'LBL_PREVIOUS_WEEK' => 'Předchozí týden',
  'LBL_PREVIOUS_YEAR' => 'Předchozí rok',
  'LBL_RECURRING_LIMIT_ERROR' => 'Tento opakující se $moduleTitle nemůže být naplánován protože překročil maximální limit pro opakování $limit.',
  'LBL_REFRESH' => 'Obnovit',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Odstranit všechny recidivy',
  'LBL_REPEAT_COUNT' => 'Čislo recidivy',
  'LBL_REPEAT_DOW' => 'na',
  'LBL_REPEAT_END' => 'Konec',
  'LBL_REPEAT_END_AFTER' => 'Po',
  'LBL_REPEAT_END_BY' => 'dle',
  'LBL_REPEAT_INTERVAL' => 'Každý',
  'LBL_REPEAT_OCCURRENCES' => 'recidivy',
  'LBL_REPEAT_TAB' => 'Recidiva',
  'LBL_REPEAT_TYPE' => 'Opakovat',
  'LBL_REPEAT_UNTIL' => 'Opakovat dokud',
  'LBL_SAVE_BUTTON' => 'Uložit',
  'LBL_SAVING' => 'Ukládám...',
  'LBL_SCHEDULED' => 'Naplánováno',
  'LBL_SELECT_USERS' => 'Vyberte uživate pro zobrazení kalendáře',
  'LBL_SENDING_INVITES' => 'Uložení &amp; zaslání pozvánek',
  'LBL_SEND_INVITES' => 'Uložit &amp; odeslat pozvánky',
  'LBL_SETTINGS' => 'Nastavení',
  'LBL_SETTINGS_CALLS_SHOW' => 'Přehled hovorů:',
  'LBL_SETTINGS_COMPLETED_SHOW' => 'Zobrazit uskutečněné schůzky, hovory a úkoly:',
  'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Zobrazení časových intervalů v zobrazení dne a týdne:',
  'LBL_SETTINGS_TASKS_SHOW' => 'Přehled úkolů:',
  'LBL_SETTINGS_TIME_ENDS' => 'Konečný čas',
  'LBL_SETTINGS_TIME_STARTS' => 'Počáteční čas',
  'LBL_SETTINGS_TITLE' => 'Nastavení',
  'LBL_SHARED' => 'Sdíleno',
  'LBL_SHARED_CAL_TITLE' => 'Sdílený kalendář',
  'LBL_STATUS' => 'Stav',
  'LBL_STYLE_ADVANCED' => 'Rozšiřené',
  'LBL_STYLE_BASIC' => 'Základní',
  'LBL_SUBJECT' => 'Předmět',
  'LBL_USERS' => 'Uživatel',
  'LBL_USER_CALENDARS' => 'Kalendáře uživatelů',
  'LBL_WEEK' => 'Týden',
  'LBL_YEAR' => 'Rok',
  'LBL_YES' => 'Ano',
  'LNK_CALL_LIST' => 'Hovory',
  'LNK_IMPORT_CALLS' => 'Import hovorů',
  'LNK_IMPORT_MEETINGS' => 'Import setkání',
  'LNK_IMPORT_TASKS' => 'Import úkolů',
  'LNK_MEETING_LIST' => 'Schůzky',
  'LNK_NEW_APPOINTMENT' => 'Naplánovat událost',
  'LNK_NEW_CALL' => 'Naplánovat hovor',
  'LNK_NEW_MEETING' => 'Naplánovat schůzku',
  'LNK_NEW_TASK' => 'Přidat úkol',
  'LNK_TASK_LIST' => 'Úkoly',
  'LNK_VIEW_CALENDAR' => 'Dnes',
  'NOTICE_DURATION_TIME' => 'Doba trvání musí být větší než 0',
);
