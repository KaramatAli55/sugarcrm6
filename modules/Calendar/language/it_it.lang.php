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
  'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: non definito per questa vista',
  'ERR_YEAR_BETWEEN' => 'Spiacente, il calendario non può gestire l´anno inserito<br />L´anno deve essere compreso tra 1970 e 2037',
  'LBL_AM' => 'AM',
  'LBL_APPLY_BUTTON' => 'Applica',
  'LBL_ASSIGNED_TO_NAME' => 'Assegnato a:',
  'LBL_BUSY' => 'Occupato',
  'LBL_CANCEL_BUTTON' => 'Annulla',
  'LBL_CLOSE_BUTTON' => 'Chiudi',
  'LBL_CONFIRM_REMOVE' => 'Sei sicuro di voler eliminare il record?',
  'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Sei sicuro di voler cancellare tutti i record ricorrenti?',
  'LBL_CONFLICT' => 'Conflitto',
  'LBL_CREATE_CALL' => 'Nuova Chiamata',
  'LBL_CREATE_MEETING' => 'Pianifica Riunione',
  'LBL_CREATE_NEW_RECORD' => 'Nuova Attività',
  'LBL_DATE' => 'Data e Ora di inizio',
  'LBL_DATE_END_ERROR' => 'Data fine precede la data inizio',
  'LBL_DATE_TIME' => 'Data e Ora',
  'LBL_DAY' => 'Giorno',
  'LBL_DELETE_BUTTON' => 'Elimina',
  'LBL_DURATION' => 'Durata',
  'LBL_EDIT_ALL_RECURRENCES' => 'Modifica tutte le ricorrenze',
  'LBL_EDIT_RECORD' => 'Modifica Attività',
  'LBL_EDIT_USERLIST' => 'Elenco Utenti',
  'LBL_ERROR_LOADING' => 'Errore durante il caricamento',
  'LBL_ERROR_SAVING' => 'Errore durante il salvataggio',
  'LBL_FILTER_BY_TEAM' => 'Filtra l´elenco degli utenti per gruppo:',
  'LBL_GENERAL_TAB' => 'Dettagli',
  'LBL_GOTO_DATE' => 'Vai a data',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_INFO_DESC' => 'Descrizione',
  'LBL_INFO_DUE_DT' => 'Data Ora Scadenza',
  'LBL_INFO_DURATION' => 'Durata',
  'LBL_INFO_NAME' => 'Oggetto',
  'LBL_INFO_RELATED_TO' => 'Relativo a',
  'LBL_INFO_START_DT' => 'Data Ora Inizio',
  'LBL_INFO_TITLE' => 'Ulteriori Dettagli',
  'LBL_LOADING' => 'Caricamento...',
  'LBL_MINS_ABBREV' => 'm',
  'LBL_MODULE_NAME' => 'Calendario',
  'LBL_MODULE_NAME_SINGULAR' => 'Calendario',
  'LBL_MODULE_TITLE' => 'Calendario',
  'LBL_MONTH' => 'Mese',
  'LBL_NEXT_DAY' => 'Giorno Successivo',
  'LBL_NEXT_MONTH' => 'Mese Successivo',
  'LBL_NEXT_SHARED' => 'Successiva',
  'LBL_NEXT_WEEK' => 'Settimana Successiva',
  'LBL_NEXT_YEAR' => 'Anno Successivo',
  'LBL_NO' => 'No',
  'LBL_NO_USER' => 'Nessuna corrispondenza per il campo: Assegnato a',
  'LBL_PARTICIPANTS_TAB' => 'Invitati',
  'LBL_PM' => 'PM',
  'LBL_PREVIOUS_DAY' => 'Giorno Precedente',
  'LBL_PREVIOUS_MONTH' => 'Mese Precedente',
  'LBL_PREVIOUS_SHARED' => 'Precedente',
  'LBL_PREVIOUS_WEEK' => 'Settimana Precedente',
  'LBL_PREVIOUS_YEAR' => 'Anno Precedente',
  'LBL_RECURRING_LIMIT_ERROR' => 'Questo Titolo ricorrente del Modulo non può essere schedulato perchè supera il $limite di ricorrenza massima consentita.',
  'LBL_REFRESH' => 'Aggiorna',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Cancella tutte le ricorrenze',
  'LBL_REPEAT_COUNT' => 'Numero delle ricorrenze',
  'LBL_REPEAT_DOW' => 'Su',
  'LBL_REPEAT_END' => 'Fine',
  'LBL_REPEAT_END_AFTER' => 'Dopo',
  'LBL_REPEAT_END_BY' => 'da',
  'LBL_REPEAT_INTERVAL' => 'Ogni',
  'LBL_REPEAT_OCCURRENCES' => 'Ricorrenze',
  'LBL_REPEAT_TAB' => 'Ricorrenze',
  'LBL_REPEAT_TYPE' => 'Ripetere',
  'LBL_REPEAT_UNTIL' => 'Ripetere Fino',
  'LBL_SAVE_BUTTON' => 'Salva',
  'LBL_SAVING' => 'Salvataggio in corso...',
  'LBL_SCHEDULED' => 'Schedulato',
  'LBL_SELECT_USERS' => 'Selezionare gli utenti per la visualizzazione del calendario',
  'LBL_SENDING_INVITES' => 'Salvataggio & Invio inviti .....',
  'LBL_SEND_INVITES' => 'Invia Inviti',
  'LBL_SETTINGS' => 'Impostazioni',
  'LBL_SETTINGS_CALLS_SHOW' => 'Mostra Chiamate:',
  'LBL_SETTINGS_COMPLETED_SHOW' => 'Visualizza Riunioni, Chiamate e Compiti Completati:',
  'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Visualizza le fasce orarie nelle viste giornaliere e settimanali:',
  'LBL_SETTINGS_TASKS_SHOW' => 'Mostra Compiti:',
  'LBL_SETTINGS_TIME_ENDS' => 'Ora fine:',
  'LBL_SETTINGS_TIME_STARTS' => 'Ora inizio:',
  'LBL_SETTINGS_TITLE' => 'Impostazioni',
  'LBL_SHARED' => 'Condiviso',
  'LBL_SHARED_CAL_TITLE' => 'Calendario Condiviso',
  'LBL_STATUS' => 'Stato',
  'LBL_STYLE_ADVANCED' => 'Avanzata',
  'LBL_STYLE_BASIC' => 'Basic',
  'LBL_SUBJECT' => 'Oggetto',
  'LBL_USERS' => 'Utente',
  'LBL_USER_CALENDARS' => 'Calendari Utente',
  'LBL_WEEK' => 'Settimana',
  'LBL_YEAR' => 'Anno',
  'LBL_YES' => 'Sì',
  'LNK_CALL_LIST' => 'Visualizza Chiamate',
  'LNK_IMPORT_CALLS' => 'Importa Chiamate',
  'LNK_IMPORT_MEETINGS' => 'Importa Riunioni',
  'LNK_IMPORT_TASKS' => 'Importa Compiti',
  'LNK_MEETING_LIST' => 'Visualizza Riunioni',
  'LNK_NEW_APPOINTMENT' => 'Nuovo Appuntamento',
  'LNK_NEW_CALL' => 'Nuova Chiamata',
  'LNK_NEW_MEETING' => 'Nuova Riunione',
  'LNK_NEW_TASK' => 'Nuovo Compito',
  'LNK_TASK_LIST' => 'Visualizza Compiti',
  'LNK_VIEW_CALENDAR' => 'Oggi',
  'NOTICE_DURATION_TIME' => 'La durata deve essere superiore a 0',
);

$mod_list_strings = array (
  'dom_cal_month' => 
  array (
    0 => '',
    1 => 'Gen',
    2 => 'Feb',
    3 => 'Mar',
    4 => 'Apr',
    5 => 'Mag',
    6 => 'Giu',
    7 => 'Lug',
    8 => 'Ago',
    9 => 'Set',
    10 => 'Ott',
    11 => 'Nov',
    12 => 'Dic',
  ),
  'dom_cal_month_long' => 
  array (
    0 => '',
    1 => 'Gennaio',
    2 => 'Febbraio',
    3 => 'Marzo',
    4 => 'Aprile',
    5 => 'Maggio',
    6 => 'Giugno',
    7 => 'Luglio',
    8 => 'Agosto',
    9 => 'Settembre',
    10 => 'Ottobre',
    11 => 'Novembre',
    12 => 'Dicembre',
  ),
  'dom_cal_weekdays' => 
  array (
    0 => 'Dom',
    1 => 'Lun',
    2 => 'Mar',
    3 => 'Mer',
    4 => 'Gio',
    5 => 'Ven',
    6 => 'Sab',
  ),
  'dom_cal_weekdays_long' => 
  array (
    0 => 'Domenica',
    1 => 'Lunedì',
    2 => 'Martedì',
    3 => 'Mercoledì',
    4 => 'Giovedì',
    5 => 'Venerdì',
    6 => 'Sabato',
  ),
);

