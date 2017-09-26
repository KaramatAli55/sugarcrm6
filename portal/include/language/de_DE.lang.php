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

	

$app_list_strings = array (
  'account_type_dom' => 
  array (
    '' => '',
    'Analyst' => 'Analyst',
    'Competitor' => 'Mitbewerber',
    'Customer' => 'Kunde',
    'Integrator' => 'Integrator',
    'Investor' => 'Investor',
    'Other' => 'Andere',
    'Partner' => 'Partner',
    'Press' => 'Presse',
    'Prospect' => 'Potentieller Kunde',
    'Reseller' => 'Wiederverkäufer',
  ),
  'activity_dom' => 
  array (
    'Call' => 'Anruf:',
    'Email' => 'Email',
    'Meeting' => 'Meeting:',
    'Note' => 'Notiz',
    'Task' => 'Aufgabe',
  ),
  'bopselect_type_dom' => 
  array (
    'Equals' => 'Gleich',
  ),
  'bselect_type_dom' => 
  array (
    'bool_false' => 'Nein',
    'bool_true' => 'Ja',
  ),
  'bug_priority_dom' => 
  array (
    'High' => 'Hoch',
    'Low' => 'Niedrig',
    'Medium' => 'Mittel',
    'Urgent' => 'Dringend',
  ),
  'bug_resolution_dom' => 
  array (
    '' => '',
    'Accepted' => 'Akzeptiert',
    'Duplicate' => 'Duplizieren',
    'Fixed' => 'fixiert',
    'Invalid' => 'Ungültig',
    'Later' => 'Später',
    'Out of Date' => 'Abgelaufen',
  ),
  'bug_status_dom' => 
  array (
    'Assigned' => 'Zugewiesen',
    'Closed' => 'Abgeschlossen',
    'New' => 'Neu',
    'Pending' => 'Pending',
    'Rejected' => 'Abgelehnt',
  ),
  'bug_type_dom' => 
  array (
    'Defect' => 'Defekt',
    'Feature' => 'Funktionalität',
  ),
  'call_direction_dom' => 
  array (
    'Inbound' => 'Eingehend',
    'Outbound' => 'Ausgehend',
  ),
  'call_status_dom' => 
  array (
    'Held' => 'Durchgeführt',
    'Not Held' => 'Nicht durchgeführt',
    'Planned' => 'Geplant',
  ),
  'campaign_status_dom' => 
  array (
    '' => '',
    'Active' => 'Aktive',
    'Complete' => 'Abgeschlossen:',
    'In Queue' => 'in Warteschlange',
    'Inactive' => 'Inaktiv',
    'Planning' => 'Planung',
    'Sending' => 'wird gesendet',
  ),
  'campaign_type_dom' => 
  array (
    '' => '',
    'Email' => 'Email',
    'Mail' => 'Brief',
    'Print' => 'Druck',
    'Radio' => 'Radio',
    'Telesales' => 'Telefonverkauf',
    'Television' => 'Fernsehen',
    'Web' => 'Web',
  ),
  'campainglog_activity_type_dom' => 
  array (
    '' => '',
    'contact' => 'Neue Kontakte',
    'invalid email' => 'Nicht zustellbar, ungültige E-Mail',
    'lead' => 'Erstellte Intessenten',
    'link' => 'Klickbarer Link',
    'removed' => 'Opted Out',
    'send error' => 'Nicht zustellbar, andere',
    'targeted' => 'Nachricht gesendet/versucht',
    'viewed' => 'Gelesene Mitteilung',
  ),
  'campainglog_target_type_dom' => 
  array (
    'Contacts' => 'Kontakte',
    'Leads' => 'Interessenten',
    'Prospects' => 'Zielkontakte',
    'Users' => 'Benutzer',
  ),
  'case_priority_dom' => 
  array (
    'P1' => 'Hoch',
    'P2' => 'Mittel',
    'P3' => 'Niedrig',
  ),
  'case_relationship_type_dom' => 
  array (
    '' => '',
    'Alternate Contact' => 'Alternativkontakt',
    'Primary Contact' => 'Hauptkontakt',
  ),
  'case_status_dom' => 
  array (
    'Assigned' => 'Zugewiesen',
    'Closed' => 'Abgeschlossen',
    'Duplicate' => 'Duplikat',
    'New' => 'Neu',
    'Pending Input' => 'Rückmeldung ausstehend',
    'Rejected' => 'Abgelehnt',
  ),
  'checkbox_dom' => 
  array (
    '' => '',
    1 => 'Ja',
    2 => 'Nein',
  ),
  'contract_expiration_notice_dom' => 
  array (
    1 => '1 tag',
    3 => '3 Tage',
    5 => '5  Tage',
    7 => '1 Woche',
    14 => '2 Wochen',
    21 => '3 Wochen',
    31 => '1 Monat',
  ),
  'contract_payment_frequency_dom' => 
  array (
    'halfyearly' => 'Halbjährlich',
    'monthly' => 'Monatlich',
    'quarterly' => 'Quartalsweise',
    'yearly' => 'Jährlich',
  ),
  'contract_status_dom' => 
  array (
    'inprogress' => 'In Bearbeitung',
    'notstarted' => 'Nicht begonnen',
    'signed' => 'Unterzeichnet',
  ),
  'cselect_type_dom' => 
  array (
    'Does not Equal' => 'Ungleich',
    'Equals' => 'Gleich',
  ),
  'document_category_dom' => 
  array (
    '' => '',
    'Knowledege Base' => 'Wissensbasis',
    'Marketing' => 'Marketing',
    'Sales' => 'Verkauf',
  ),
  'document_status_dom' => 
  array (
    'Active' => 'Aktiv',
    'Draft' => 'Entwurf',
    'Expired' => 'Abgelaufen',
    'FAQ' => 'FAQ',
    'Pending' => 'Pending',
    'Under Review' => 'Wird überprüft',
  ),
  'document_subcategory_dom' => 
  array (
    '' => '',
    'FAQ' => 'FAQ',
    'Marketing Collateral' => 'Werbematerial',
    'Product Brochures' => 'Produktbroschüren',
  ),
  'document_template_type_dom' => 
  array (
    '' => '',
    'eula' => 'EULA',
    'license' => 'Lizenz Vereinbarung',
    'mailmerge' => 'Serienbrief',
    'nda' => 'NDA',
  ),
  'dom_cal_month_long' => 
  array (
    0 => '',
    1 => 'Januar',
    2 => 'Februar',
    3 => 'März',
    4 => 'April',
    5 => 'Mai',
    6 => 'Juni',
    7 => 'Juli',
    8 => 'August',
    9 => 'September',
    10 => 'Oktober',
    11 => 'November',
    12 => 'Dezember',
  ),
  'dom_email_bool' => 
  array (
    'bool_false' => 'Nein',
    'bool_true' => 'Ja',
  ),
  'dom_email_distribution' => 
  array (
    '' => '--Keine--',
    'direct' => 'Direkt zuweisen',
    'leastBusy' => 'geringste Auslastung',
    'roundRobin' => 'Umlauf-Verfahren',
  ),
  'dom_email_editor_option' => 
  array (
    '' => 'Default E-Mail Format',
    'html' => 'HTML E-Mail',
    'plain' => 'Plain Text Email',
  ),
  'dom_email_errors' => 
  array (
    1 => 'Nur einen Benutzer auswählen bei der Zuweisung',
    2 => 'Sie dürfen nur ein ausgeähltes Element zuweisen wenn Sie direkt zuweisen',
  ),
  'dom_email_link_type' => 
  array (
    '' => 'System Default Mail Client',
    'mailto' => 'Externer Mail Client',
    'sugar' => 'SugarCRM E-Mail Client',
  ),
  'dom_email_server_type' => 
  array (
    '' => '--Keine--',
    'imap' => 'IMAP',
    'pop3' => 'POP3',
  ),
  'dom_email_status' => 
  array (
    'archived' => 'Archiviert',
    'closed' => 'Abgeschlossen',
    'draft' => 'Entwurf',
    'read' => 'Gelesen',
    'replied' => 'Beantwortet',
    'send_error' => 'Sende-Fehler',
    'sent' => 'Gesendet',
    'unread' => 'Ungelesen',
  ),
  'dom_email_types' => 
  array (
    'archived' => 'Archiviert',
    'draft' => 'Entwurf',
    'inbound' => 'Eingehend',
    'out' => 'Gesendet:',
  ),
  'dom_int_bool' => 
  array (
    0 => 'Nein',
    1 => 'Ja',
  ),
  'dom_mailbox_type' => 
  array (
    'bounce' => 'Nicht zustellbare bearbeiten',
    'bug' => 'Neuer Fehler',
    'contact' => 'Neuer Kontakt',
    'pick' => 'Anlegen [Jede]',
    'sales' => 'Neuer Interessent',
    'support' => 'Neues Ticket',
    'task' => 'Neue Aufgabe',
  ),
  'dom_meeting_accept_options' => 
  array (
    'accept' => 'Akzeptiert',
    'decline' => 'Abgelehnt',
    'tentative' => 'Vorläufig',
  ),
  'dom_meeting_accept_status' => 
  array (
    'accept' => 'Akzeptiert',
    'decline' => 'Abgelehnt',
    'none' => 'Kein(e)',
    'tentative' => 'Vorläufig',
  ),
  'dom_report_types' => 
  array (
    'detailed_summary' => 'Summe mit Details',
    'summary' => 'Summen',
    'tabular' => 'Zeilen und Spalten',
  ),
  'dom_switch_bool' => 
  array (
    '' => 'Nein',
    'off' => 'Nein',
    'on' => 'Ja',
  ),
  'dom_timezones' => 
  array (
    -12 => '(GMT - 12) International Date Line West',
    -11 => '(GMT - 11) Midway Island, Samoa',
    -10 => '(GMT - 10) Hawaii',
    -9 => '-9<br />(GMT - 9) Alaska',
    -8 => '(GMT - 8) San Francisco',
    -7 => '(GMT - 7) Phoenix',
    -6 => '(GMT - 6) Saskatchewan',
    -5 => '(GMT - 5) New York',
    -4 => '(GMT - 4) Santiago',
    -3 => '(GMT - 3) Buenos Aires',
    -2 => '(GMT - 2) Mid-Atlantic',
    -1 => '(GMT - 1) Azores',
    0 => '(GMT)',
    1 => '(GMT + 1) Madrid',
    2 => '(GMT + 2) Athens',
    3 => '(GMT + 2) Athens',
    4 => '(GMT + 4) Kabul',
    5 => '(GMT + 5) Ekaterinburg',
    6 => '(GMT + 6) Astana',
    7 => '(GMT + 7) Bangkok',
    8 => '(GMT + 8) Perth',
    9 => '(GMT + 9) Seol',
    10 => '(GMT + 10) Brisbane',
    11 => '(GMT + 11) Solomone Is.',
    12 => '(GMT + 12) Auckland',
  ),
  'dom_timezones_extra' => 
  array (
    -12 => '12<br />(GMT-12) International Date Line West',
    -11 => '(GMT-11) Midway Island, Samoa',
    -10 => '(GMT-10) Hawaii',
    -9 => '(GMT-9) Alaska',
    -8 => '(GMT-8) (PST)',
    -7 => '(GMT-7) (MST)',
    -6 => '(GMT-6) (CST)',
    -5 => '(GMT-5) (EST)',
    -4 => '(GMT-4) Santiago',
    -3 => '(GMT-3) Buenos Aires',
    -2 => '(GMT-2) Mid-Atlantic',
    -1 => '(GMT-1) Azores',
    0 => '(GMT)',
    1 => '(GMT+1) Madrid',
    2 => '(GMT+2) Athens',
    3 => '(GMT+3) Moscow',
    4 => '(GMT+4) Kabul',
    5 => '(GMT+5) Ekaterinburg',
    6 => '(GMT+6) Astana',
    7 => '(GMT+7) Bangkok',
    8 => '(GMT+8) Perth',
    9 => '(GMT+9) Seol',
    10 => '(GMT+10) Brisbane',
    11 => '(GMT+11) Solomone Is.',
    12 => '(GMT+12) Auckland',
  ),
  'dselect_type_dom' => 
  array (
    'Does not Equal' => 'Ungleich',
    'Equals' => 'Gleich',
    'Less Than' => 'Kleiner als',
    'More Than' => 'Größer als',
  ),
  'dtselect_type_dom' => 
  array (
    'Less Than' => 'ist kleiner als',
    'More Than' => 'war größer als',
  ),
  'duration_intervals' => 
  array (
    0 => '00',
    15 => '15',
    30 => '30',
    45 => '45',
  ),
  'email_marketing_status_dom' => 
  array (
    '' => '',
    'active' => 'Aktive',
    'inactive' => 'Inaktive',
  ),
  'employee_status_dom' => 
  array (
    'Active' => 'Aktiv',
    'Leave of Absence' => 'Abwesend',
    'Terminated' => 'Beendet',
  ),
  'forecast_schedule_status_dom' => 
  array (
    'Active' => 'Aktiv',
    'Inactive' => 'Inaktiv',
  ),
  'forecast_type_dom' => 
  array (
    'Direct' => 'Direkt',
    'Rollup' => 'Rollup',
  ),
  'industry_dom' => 
  array (
    '' => '',
    'Apparel' => 'Bekleidungsindustrie',
    'Banking' => 'Bankwesen',
    'Biotechnology' => 'Biotechnologie',
    'Chemicals' => 'Chemieindustrie',
    'Communications' => 'Kommunikation',
    'Construction' => 'Baugewerbe',
    'Consulting' => 'Beratung',
    'Education' => 'Bildungwesen',
    'Electronics' => 'Elektronik',
    'Energy' => 'Energieerzeuger',
    'Engineering' => 'Entwicklung',
    'Entertainment' => 'Unterhaltungsindustrie',
    'Environmental' => 'Umwelt',
    'Finance' => 'Finanzsektor',
    'Government' => 'Öffentliche Einrichtung',
    'Healthcare' => 'Gesundheitswesen',
    'Hospitality' => 'Gastgewerbe',
    'Insurance' => 'Versicherung',
    'Machinery' => 'Maschinenbau',
    'Manufacturing' => 'Produktion',
    'Media' => 'Medien',
    'Not For Profit' => 'Gemeinnützige Organisation',
    'Other' => 'Andere',
    'Recreation' => 'Freizeitindustrie',
    'Retail' => 'Einzelhandel',
    'Shipping' => 'Versandhandel',
    'Technology' => 'Technologie',
    'Telecommunications' => 'Telekommunikation',
    'Transportation' => 'Transportwesen',
    'Utilities' => 'Energieversorger',
  ),
  'language_pack_name' => 'Deutsch',
  'layouts_dom' => 
  array (
    'Invoice' => 'Rechnung',
    'Standard' => 'Angebot',
    'Terms' => 'Zahlungskonditionen',
  ),
  'lead_source_dom' => 
  array (
    '' => '',
    'Cold Call' => 'Kalt Akquise',
    'Conference' => 'Konferenz',
    'Direct Mail' => 'Aussendung',
    'Email' => 'Email',
    'Employee' => 'Mitarbeiter',
    'Existing Customer' => 'Bestehender Kunde',
    'Other' => 'Andere',
    'Partner' => 'Partner',
    'Public Relations' => 'Public Relations',
    'Self Generated' => 'Selbst generierter Kunde',
    'Trade Show' => 'Messe',
    'Web Site' => 'Web Seite',
    'Word of mouth' => 'Mund zu Mund Propaganda',
  ),
  'lead_status_dom' => 
  array (
    '' => '',
    'Assigned' => 'Zugewiesen',
    'Converted' => 'Umgewandelt',
    'Dead' => 'Ausgeschieden',
    'In Process' => 'In Arbeit',
    'New' => 'Neu',
    'Recycled' => 'Wiederaufgenommen',
  ),
  'lead_status_noblank_dom' => 
  array (
    'Assigned' => 'Zugewiesen',
    'Converted' => 'Umgewandelt',
    'Dead' => 'Ausgeschieden',
    'In Process' => 'In Arbeit',
    'New' => 'Neu',
    'Recycled' => 'Wiederaufgenommen',
  ),
  'meeting_status_dom' => 
  array (
    'Held' => 'Durchgeführt',
    'Not Held' => 'Nicht durchgeführt',
    'Planned' => 'Geplant',
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
    'Bugs' => 'Fehlerverfolgung',
    'Cases' => 'Tickets',
    'FAQ' => 'FAQ',
    'Home' => 'Home',
    'KBDocuments' => 'Wissensbasis',
    'Newsletters' => 'Newsletter',
    'Notes' => 'Notizen',
    'Teams' => 'Teams',
    'Users' => 'Benutzer',
  ),
  'moduleListSingular' => 
  array (
    'Bugs' => 'Fehler',
    'Cases' => 'Tickets',
    'Home' => 'Home',
    'Notes' => 'Notizen',
    'Teams' => 'Team',
    'Users' => 'Benutzer',
  ),
  'mselect_type_dom' => 
  array (
    'Equals' => 'Gleich',
    'in' => 'ist eines von',
  ),
  'notifymail_sendtype' => 
  array (
    'SMTP' => 'SMTP',
  ),
  'opportunity_relationship_type_dom' => 
  array (
    '' => '',
    'Business Decision Maker' => 'Business Entscheidungsträger',
    'Business Evaluator' => 'Business Vorentscheider',
    'Executive Sponsor' => 'Executive Sponsor',
    'Influencer' => 'Einflussreiche Person',
    'Other' => 'Andere:',
    'Primary Decision Maker' => 'Hauptentscheidungsträger',
    'Technical Decision Maker' => 'Technischer Entscheidungsträger',
    'Technical Evaluator' => 'Technik Vorentscheider',
  ),
  'opportunity_type_dom' => 
  array (
    '' => '',
    'Existing Business' => 'Bestandskunde',
    'New Business' => 'Neukunde',
  ),
  'order_stage_dom' => 
  array (
    'Cancelled' => 'Storniert',
    'Confirmed' => 'Bestätigt',
    'On Hold' => 'Zurückgestellt',
    'Pending' => 'Pending',
    'Shipped' => 'Geliefert',
  ),
  'payment_terms' => 
  array (
    '' => '',
    'Net 15' => '15 Tage netto',
    'Net 30' => '30 Tage netto',
  ),
  'pricing_formula_dom' => 
  array (
    'Fixed' => 'Festpreis',
    'IsList' => 'wie Listenpreis',
    'PercentageDiscount' => 'Rabatt vom Listenpreis',
    'PercentageMarkup' => 'Spanne',
    'ProfitMargin' => 'Gewinn',
  ),
  'product_category_dom' => 
  array (
    '' => '',
    'Accounts' => 'Firmen',
    'Activities' => 'Aktivitäten',
    'Bugs' => 'Fehlerverfolgung',
    'Calendar' => 'Kalender',
    'Calls' => 'Anrufe',
    'Campaigns' => 'Kampagnen',
    'Cases' => 'Tickets',
    'Contacts' => 'Kontakte',
    'Currencies' => 'Währungen',
    'Dashboard' => 'Übersicht',
    'Documents' => 'Dokumente',
    'Emails' => 'Emails',
    'Feeds' => 'Feeds',
    'Forecasts' => 'Prognosen',
    'Help' => 'Hilfe',
    'Home' => 'Home',
    'Leads' => 'Interessenten',
    'Meetings' => 'Termine',
    'Notes' => 'Notizen',
    'Opportunities' => 'Verkaufschancen',
    'Outlook Plugin' => 'Outlook Plugin',
    'Product Catalog' => 'Produktkatalog',
    'Products' => 'Produkte',
    'Projects' => 'Projekte',
    'Quotes' => 'Angebote',
    'RSS' => 'RSS',
    'Releases' => 'Releases',
    'Studio' => 'Studio',
    'Upgrade' => 'Upgrade',
    'Users' => 'Benutzer',
  ),
  'product_status_dom' => 
  array (
    'Orders' => 'beauftrag',
    'Quotes' => 'angeboten',
    'Ship' => 'geliefert',
  ),
  'product_status_quote_key' => 'Angebote',
  'product_template_status_dom' => 
  array (
    'Available' => 'verfügbar',
    'Unavailable' => 'nicht verfügbar',
  ),
  'project_task_priority_options' => 
  array (
    'High' => 'Hoch',
    'Low' => 'Niedrig',
    'Medium' => 'Mittel',
  ),
  'project_task_status_options' => 
  array (
    'Completed' => 'Abgeschlossen',
    'Deferred' => 'Zurückgestellt',
    'In Progress' => 'In Bearbeitung',
    'Not Started' => 'Nicht begonnen',
    'Pending Input' => 'Rückmeldung ausstehend',
  ),
  'project_task_utilization_options' => 
  array (
    0 => 'keine',
    25 => '25',
    50 => '50',
    75 => '75',
    100 => '100',
  ),
  'prospect_list_type_dom' => 
  array (
    'default' => 'Standard',
    'exempt' => 'Unterdrückungs Liste - nach ID',
    'exempt_address' => 'Unterdrückungs Liste - nach E-Mail Adresse',
    'exempt_domain' => 'Unterdrückungs Liste - nach Domäne',
    'seed' => 'Muster',
    'test' => 'Test',
  ),
  'query_calc_oper_dom' => 
  array (
    '*' => '(*) Multiplikation',
    '+' => '(+) Plus',
    '-' => '(-) Minus',
    '/' => '(/) Division',
  ),
  'quote_relationship_type_dom' => 
  array (
    '' => '',
    'Business Decision Maker' => 'Business Entscheidungsträger',
    'Business Evaluator' => 'Business Vorentscheider',
    'Executive Sponsor' => 'Executive Sponsor',
    'Influencer' => 'Einflussreiche Person',
    'Other' => 'Andere',
    'Primary Decision Maker' => 'Hauptentscheidungsträger',
    'Technical Decision Maker' => 'Technischer Entscheidungsträger',
    'Technical Evaluator' => 'Technik Vorentscheider',
  ),
  'quote_stage_dom' => 
  array (
    'Closed Accepted' => 'Gewonnen',
    'Closed Dead' => 'Wird nicht realisiert',
    'Closed Lost' => 'Verloren',
    'Confirmed' => 'Zugesagt',
    'Delivered' => 'Geliefert',
    'Draft' => 'Entwurf',
    'Negotiation' => 'Verhandlung',
    'On Hold' => 'Rückgestellt',
  ),
  'quote_type_dom' => 
  array (
    'Orders' => 'Aufträge',
    'Quotes' => 'Angebote',
  ),
  'record_type_display' => 
  array (
    'Accounts' => 'Firmen',
    'Bugs' => 'Fehler',
    'Cases' => 'Tickets',
    'Contacts' => 'Kontakte',
    'Leads' => 'Interessenten',
    'Opportunities' => 'Verkaufschancen',
    'ProductTemplates' => 'Produkt',
    'Project' => 'Projekte',
    'ProjectTask' => 'Projektaufgaben',
    'Quotes' => 'Angebote',
    'Tasks' => 'Aufgaben',
  ),
  'record_type_display_notes' => 
  array (
    'Accounts' => 'Firmen',
    'Bugs' => 'Fehler',
    'Calls' => 'Anrufe',
    'Cases' => 'Tickets',
    'Contacts' => 'Kontakte',
    'Contracts' => 'Verträge',
    'Emails' => 'E-Mails',
    'Leads' => 'Interessenten',
    'Meetings' => 'Meetings',
    'Opportunities' => 'Verkaufschancen',
    'ProductTemplates' => 'Produkte',
    'Products' => 'Produkte',
    'Project' => 'Projekte',
    'ProjectTask' => 'Projektaufgaben',
    'Quotes' => 'Angebote',
  ),
  'reminder_max_time' => '3600',
  'reminder_time_options' => 
  array (
    60 => '1 Minute davor',
    300 => '5 Minuten davor',
    600 => '10 Minuten davor',
    900 => '15 Minuten davor',
    1800 => '30 Minuten davor',
    3600 => '1 Stunde davor',
  ),
  'sales_probability_dom' => 
  array (
    'Closed Lost' => 'Verloren',
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
    'Closed Lost' => 'verloren',
    'Closed Won' => 'gewonnen',
    'Id. Decision Makers' => 'Entscheidungsträger',
    'Needs Analysis' => 'Bedarfsanalyse',
    'Negotiation/Review' => 'Verhandlung',
    'Perception Analysis' => 'Vorstellungsalignment',
    'Proposal/Price Quote' => 'Angebot',
    'Prospecting' => 'Prospecting',
    'Qualification' => 'Qualifizierung',
    'Value Proposition' => 'Wertanalyse',
  ),
  'salutation_dom' => 
  array (
    '' => '',
    'Dr.' => 'Dr.',
    'Mr.' => 'Herr',
    'Mrs.' => 'Frau',
    'Ms.' => 'Frau',
    'Prof.' => 'Prof.',
  ),
  'schedulers_times_dom' => 
  array (
    'completed' => 'Abgeschlossen',
    'failed' => 'Fehlgeschlagen',
    'in progress' => 'In Bearbeitung',
    'no curl' => 'Nicht gelaufen: cURL nicht verfügbar',
    'not run' => 'Zeitvorgabe abgelaufen, nicht ausgeführt',
    'ready' => 'Bereit',
  ),
  'source_dom' => 
  array (
    '' => '',
    'Forum' => 'Forum',
    'InboundEmail' => 'Email',
    'Internal' => 'Intern',
    'Web' => 'Web',
  ),
  'support_term_dom' => 
  array (
    '+1 year' => 'Ein Jahr',
    '+2 years' => 'Zwei Jahre',
    '+6 months' => 'Sechs Monate',
  ),
  'task_priority_dom' => 
  array (
    'High' => 'Hoch',
    'Low' => 'Niedrig',
    'Medium' => 'Mittel',
  ),
  'task_status_dom' => 
  array (
    'Completed' => 'Abgeschlossen',
    'Deferred' => 'Zurückgestellt',
    'In Progress' => 'In Bearbeitung',
    'Not Started' => 'Nicht begonnen',
    'Pending Input' => 'Rückmeldung ausstehend',
  ),
  'tax_class_dom' => 
  array (
    'Non-Taxable' => 'steuerfrei',
    'Taxable' => 'steuerbar',
  ),
  'tselect_type_dom' => 
  array (
    0 => '0 Stunden',
    14440 => '4 Stunden',
    28800 => '8 Stunden',
    43200 => '12 Stunden',
    86400 => '1 Tag',
    172800 => '2 Tage',
    259200 => '3 Tage',
    345600 => '4 Tage',
    432000 => '5 Tage',
    604800 => '1 Woche',
    1209600 => '2 Wochen',
    1814400 => '3 Wochen',
    2592000 => '30 Tage',
    5184000 => '60 Tage',
    7776000 => '90 Tage',
    10368000 => '120 Tage',
    12960000 => '150 Tage',
    15552000 => '180 Tage',
  ),
  'user_status_dom' => 
  array (
    'Active' => 'Aktiv',
    'Inactive' => 'Inaktiv',
  ),
  'wflow_action_datetime_type_dom' => 
  array (
    'Existing Value' => 'bestehender Wert',
    'Triggered Date' => 'Zeitpunkt der Ausführung',
  ),
  'wflow_action_type_dom' => 
  array (
    'new' => 'Neuer Datensatz',
    'update' => 'Datensatz aktualisieren',
    'update_rel' => 'Verknüpfte Datensätze aktualisieren',
  ),
  'wflow_address_type_dom' => 
  array (
    'bcc' => 'Bcc:',
    'cc' => 'Cc:',
    'to' => 'An:',
  ),
  'wflow_address_type_invite_dom' => 
  array (
    'bcc' => 'Bcc:',
    'cc' => 'Cc:',
    'invite_only' => '(Invite Only)',
    'to' => 'An:',
  ),
  'wflow_address_type_to_only_dom' => 
  array (
    'to' => 'An:',
  ),
  'wflow_adv_enum_type_dom' => 
  array (
    'advance' => 'Dropdown vorwärtsverschieben',
    'retreat' => 'Dropdown zurückverschieben',
  ),
  'wflow_adv_team_type_dom' => 
  array (
    'current_team' => 'Team des eingeloggten Benutzers',
    'team_id' => 'derzeitiges Team des Datensatzes',
  ),
  'wflow_adv_user_type_dom' => 
  array (
    'assigned_user_id' => 'Benutzer der dem Datensatz zugeordnet ist',
    'created_by' => 'Benutzer der den Datensatz angelegt hat',
    'current_user' => 'eingeloggter Benutzer',
    'modified_user_id' => 'Benutzer der den Datensatz zuletzt geändert hat',
  ),
  'wflow_alert_type_dom' => 
  array (
    'Email' => 'Email',
    'Invite' => 'Einladung',
  ),
  'wflow_array_type_dom' => 
  array (
    'future' => 'Neuer Wert',
    'past' => 'Alter Wert',
  ),
  'wflow_fire_order_dom' => 
  array (
    'actions_alerts' => 'Aktionen dann Alarm',
    'alerts_actions' => 'Alarm dann Aktionen',
  ),
  'wflow_record_type_dom' => 
  array (
    'All' => 'Neue und bestehende Einträge',
    'New' => 'nur neue Einträge',
    'Update' => 'nur bestehende Einträge',
  ),
  'wflow_rel_type_dom' => 
  array (
    'all' => 'Alle',
    'filter' => 'Filter related',
  ),
  'wflow_relate_type_dom' => 
  array (
    'Manager' => 'Manager des Benutzers',
    'Self' => 'Benutzer',
  ),
  'wflow_relfilter_type_dom' => 
  array (
    'all' => 'Alle',
    'any' => 'alle zugeordneten',
  ),
  'wflow_set_type_dom' => 
  array (
    'Advanced' => 'Erweiterte Optionen',
    'Basic' => 'Standard Optionen',
  ),
  'wflow_source_type_dom' => 
  array (
    'Custom Template' => 'Benutzerdefinierte Vorlage',
    'Normal Message' => 'Standard Nachricht',
    'System Default' => 'System Vorgabe',
  ),
  'wflow_type_dom' => 
  array (
    'Normal' => 'Beim Speichern des Datensatzes',
    'Time' => 'Nach Zeitablauf',
  ),
  'wflow_user_type_dom' => 
  array (
    'current_user' => 'Logged-in User',
    'rel_user' => 'Verknüpfte Benutzer',
    'rel_user_custom' => 'Verknüpfte Individualbenutzer',
    'specific_role' => 'Bestimmte Rolle',
    'specific_team' => 'Bestimmtes Team',
    'specific_user' => 'Bestimmte Benutzer',
  ),
);

$app_strings = array (
  'ERROR_FULLY_EXPIRED' => 'Die Lizenz Ihrer SugarCRM Installation ist seit über 30 Tagen abgelaufen und muss aktualisiert werden. Nur Admins können einloggen.',
  'ERROR_LICENSE_EXPIRED' => 'Die Lizenz Ihrer SugarCRM Installation muss aktualisiert werden. Nur Admins können einloggen.',
  'ERROR_NO_RECORD' => 'Fehler beim Anzeigen des Datensatzes. Dieser Datensatz wurde entweder gelöscht oder Sie sind nicht berechtigt ihn zu sehen.',
  'ERR_CREATING_FIELDS' => 'Fehler beim Ausfüllen von zusätzlichen Detailfeldern:',
  'ERR_CREATING_TABLE' => 'Fehler beim Anlegen der Tabelle:',
  'ERR_DELETE_RECORD' => 'Um einen Kontakt zu löschen, muss die Nummer des Datensatzes angegeben werden.',
  'ERR_EXPORT_DISABLED' => 'Exporte deaktiviert',
  'ERR_EXPORT_TYPE' => 'Fehler beim Exportieren',
  'ERR_INVALID_AMOUNT' => 'Bitte gültigen Betrag eingeben.',
  'ERR_INVALID_DATE' => 'Bitte ein gültiges Datum eingeben.',
  'ERR_INVALID_DATE_FORMAT' => 'Das Datumsformat muss sein:',
  'ERR_INVALID_DAY' => 'Bitte einen gültigen Tag eingeben.',
  'ERR_INVALID_EMAIL_ADDRESS' => 'Keine gültige E-Mail Adresse.',
  'ERR_INVALID_HOUR' => 'Bitte eine gültige Stunde eingeben.',
  'ERR_INVALID_MONTH' => 'Bitte einen gültigen Monat eingeben.',
  'ERR_INVALID_REQUIRED_FIELDS' => 'Ungültige Pflichtfelder:',
  'ERR_INVALID_TIME' => 'Bitte eine gültige Uhrzeit eingeben.',
  'ERR_INVALID_VALUE' => 'Ungültiger Wert:',
  'ERR_INVALID_YEAR' => 'Bitte eine gültige Jahreszahl mit 4 Ziffern eingeben.',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Fehlendes Pflichtfeld nicht ausgefüllt.',
  'ERR_NEED_ACTIVE_SESSION' => 'Um Inhalt zu exportieren muss eine aktive Session vorhanden sein.',
  'ERR_NOTHING_SELECTED' => 'Bevor Sie weitermachen treffen Sie bitte erst eine Auswahl.',
  'ERR_OPPORTUNITY_NAME_DUPE' => 'Eine Verkaufschance mit dem Namen %s ist bereits vorhanden. Bitte einen anderen Namen unten eingeben.',
  'ERR_OPPORTUNITY_NAME_MISSING' => 'Es wurde kein Name für die Verkaufschance eingegeben. Bitte geben Sie unten einen Namen für die Verkaufschance ein.',
  'ERR_PORTAL_LOGIN_FAILED' => 'Portal Login Session kann nicht erstelle werden. Bitte Ihren Administrator kontaktieren.',
  'ERR_RESOURCE_MANAGEMENT_INFO' => 'Zurück zur Startseite',
  'ERR_SELF_REPORTING' => 'Mitarbeiter kann nicht an sich selbst berichten.',
  'ERR_SQS_NO_MATCH' => 'Kein Treffer',
  'ERR_SQS_NO_MATCH_FIELD' => 'Kein passender Eintrag:',
  'LBL_ACCOUNT' => 'Firma:',
  'LBL_ACCOUNTS' => 'Firmen',
  'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
  'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Zusammenfassung zeigen',
  'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Zusammenfassung zeigen [Alt+H]',
  'LBL_ADDITIONAL_DETAILS' => 'Weitere Details',
  'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Beenden:',
  'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Zum Beenden klicken',
  'LBL_ADD_BUTTON' => 'Hinzufügen',
  'LBL_ADD_BUTTON_KEY' => 'A',
  'LBL_ADD_BUTTON_TITLE' => 'Hinzufügen [Alt+A]',
  'LBL_ADD_DOCUMENT' => 'Dokument hinzufügen',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Zu einer Kontaktliste hinzufügen',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Zu einer Kontaktliste hinzufügen',
  'LBL_ADMIN' => 'Admin',
  'LBL_ALT_HOT_KEY' => 'Alt+',
  'LBL_ARCHIVE' => 'Archivieren',
  'LBL_ASSIGNED_TO' => 'Zugewiesen an',
  'LBL_ASSIGNED_TO_USER' => 'Bearbeiter',
  'LBL_BACK' => 'Zurück',
  'LBL_BILL_TO_ACCOUNT' => 'Rechnung an Firma',
  'LBL_BILL_TO_CONTACT' => 'Rechnung an Kontaktperson',
  'LBL_BROWSER_TITLE' => 'SugarCRM - Kommerzielles Open-Source CRM',
  'LBL_BUGS' => 'Fehler',
  'LBL_BY' => 'von',
  'LBL_CALLS' => 'Anrufe',
  'LBL_CAMPAIGNS_SEND_QUEUED' => 'Sende Kampagnen E-Mails in Warteschlange',
  'LBL_CANCEL_BUTTON_KEY' => 'X',
  'LBL_CANCEL_BUTTON_LABEL' => 'Abbrechen',
  'LBL_CANCEL_BUTTON_TITLE' => 'Abbrechen',
  'LBL_CASE' => 'Ticket',
  'LBL_CASES' => 'Tickets',
  'LBL_CHANGE_BUTTON_KEY' => 'G',
  'LBL_CHANGE_BUTTON_LABEL' => 'Ändern',
  'LBL_CHANGE_BUTTON_TITLE' => 'Ändern [Alt+G]',
  'LBL_CHANGE_PASSWORD' => 'Passwort ändern',
  'LBL_CHARSET' => 'UTF-8',
  'LBL_CHECKALL' => 'Alle markieren',
  'LBL_CLEARALL' => 'Alle Markierungen entfernen',
  'LBL_CLEAR_BUTTON_KEY' => 'C',
  'LBL_CLEAR_BUTTON_LABEL' => 'Leeren',
  'LBL_CLEAR_BUTTON_TITLE' => 'Leeren [Alt+C]',
  'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
  'LBL_CLOSEALL_BUTTON_LABEL' => 'Alle schließen',
  'LBL_CLOSEALL_BUTTON_TITLE' => 'Alle schließen [Alt+I]',
  'LBL_CLOSE_WINDOW' => 'Fenster schließen',
  'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
  'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Neue E-Mail',
  'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Neue E-Mail [Alt+L]',
  'LBL_CONTACT' => 'Kontakt',
  'LBL_CONTACTS' => 'Kontakte',
  'LBL_CONTACT_LIST' => 'Kontakt Liste',
  'LBL_CREATED' => 'Erstellt von',
  'LBL_CREATED_BY_USER' => 'Erstellt von Benutzer',
  'LBL_CREATE_BUTTON_LABEL' => 'Erstellen',
  'LBL_CURRENT_USER_FILTER' => 'Nur meine Einträge:',
  'LBL_DATE_ENTERED' => 'Datum erstellt',
  'LBL_DATE_MODIFIED' => 'Geändert am:',
  'LBL_DELETE' => 'Löschen',
  'LBL_DELETED' => 'Gelöscht',
  'LBL_DELETE_BUTTON' => 'Löschen',
  'LBL_DELETE_BUTTON_KEY' => 'D',
  'LBL_DELETE_BUTTON_LABEL' => 'Löschen',
  'LBL_DELETE_BUTTON_TITLE' => 'Löschen [Alt+D]',
  'LBL_DIRECT_REPORTS' => 'Direkt-Unterstellte',
  'LBL_DISPLAY_COLUMNS' => 'Spalten anzeigen',
  'LBL_DONE_BUTTON_KEY' => 'X',
  'LBL_DONE_BUTTON_LABEL' => 'Fertig',
  'LBL_DONE_BUTTON_TITLE' => 'Fertig [Alt+X]',
  'LBL_DST_NEEDS_FIXIN' => 'Das Programm benötigt die Anwendung des Sommerzeit-Patches.Bitte klicken Sie auf den Reparaturlink im Admin-Bereich und wenden Sie den Sommerzeit Patch an.',
  'LBL_DUPLICATE_BUTTON' => 'Duplizieren',
  'LBL_DUPLICATE_BUTTON_KEY' => 'U',
  'LBL_DUPLICATE_BUTTON_LABEL' => 'Duplizieren',
  'LBL_DUPLICATE_BUTTON_TITLE' => 'Duplizieren [Alt+U]',
  'LBL_DUP_MERGE' => 'Dubletten finden',
  'LBL_EDIT_BUTTON' => 'Bearbeiten',
  'LBL_EDIT_BUTTON_KEY' => 'E',
  'LBL_EDIT_BUTTON_LABEL' => 'Bearbeiten',
  'LBL_EDIT_BUTTON_TITLE' => 'Bearbeiten [Alt+E]',
  'LBL_EMAILS' => 'E-Mails',
  'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
  'LBL_EMAIL_PDF_BUTTON_LABEL' => 'E-Mail als PDF',
  'LBL_EMAIL_PDF_BUTTON_TITLE' => 'E-Mail als PDF [Alt+M]',
  'LBL_EMPLOYEES' => 'Mitarbeiter',
  'LBL_ENTER_DATE' => 'Datum eingeben',
  'LBL_EXPORT' => 'Exportieren',
  'LBL_EXPORT_ALL' => 'Alle exportieren',
  'LBL_FULL_FORM_BUTTON_KEY' => 'F',
  'LBL_FULL_FORM_BUTTON_LABEL' => 'Komplettes Formular',
  'LBL_FULL_FORM_BUTTON_TITLE' => 'Komplettes Formular [Alt+F]',
  'LBL_HIDE' => 'Ausblenden',
  'LBL_HIDE_COLUMNS' => 'Spalten ausblenden',
  'LBL_ID' => 'ID',
  'LBL_IMPORT' => 'Import',
  'LBL_IMPORT_PROSPECTS' => 'Zielpersonen importieren',
  'LBL_LAST_VIEWED' => 'Zuletzt angesehen',
  'LBL_LEADS' => 'Interessenten',
  'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Möchten Sie wirklich die gesamte Liste aktualisieren?',
  'LBL_LISTVIEW_NO_SELECTED' => 'Bitte mindestens 1 Datensatz auswählen um fortzufahren.',
  'LBL_LISTVIEW_OPTION_CURRENT' => 'Diese Seite',
  'LBL_LISTVIEW_OPTION_ENTIRE' => 'Gesamte Liste',
  'LBL_LISTVIEW_OPTION_SELECTED' => 'Ausgewählte Datensätze',
  'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Ausgewählt:',
  'LBL_LIST_ACCOUNT_NAME' => 'Firmenname',
  'LBL_LIST_ASSIGNED_USER' => 'Benutzer',
  'LBL_LIST_CONTACT_NAME' => 'Kontakt',
  'LBL_LIST_CONTACT_ROLE' => 'Kontakt Rolle',
  'LBL_LIST_EMAIL' => 'E-Mail',
  'LBL_LIST_NAME' => 'Name',
  'LBL_LIST_OF' => 'von',
  'LBL_LIST_PHONE' => 'Telefon:',
  'LBL_LIST_TEAM' => 'Team',
  'LBL_LIST_USER_NAME' => 'Benutzername',
  'LBL_LOADING' => 'Laden. Bitte warten...',
  'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Hans',
  'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Muster',
  'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Herr',
  'LBL_LOGIN_SESSION_EXCEEDED' => 'Der Server ist ausgelastet. Bitte später versuchen',
  'LBL_LOGIN_TO_ACCESS' => 'Bitte einloggen um diesen Bereich benutzen zu können.',
  'LBL_LOGOUT' => 'Abmelden',
  'LBL_MAILMERGE' => 'Serienbrief',
  'LBL_MAILMERGE_KEY' => 'M',
  'LBL_MASS_UPDATE' => 'Massenänderung',
  'LBL_MEETINGS' => 'Meetings',
  'LBL_MEMBERS' => 'Mitglieder',
  'LBL_MODIFIED' => 'Geändert von',
  'LBL_MODIFIED_BY_USER' => 'geändert von Benutzer',
  'LBL_MY_ACCOUNT' => 'Mein Konto',
  'LBL_NAME' => 'Name',
  'LBL_NEW_BUTTON_KEY' => 'N',
  'LBL_NEW_BUTTON_LABEL' => 'Erstellen',
  'LBL_NEW_BUTTON_TITLE' => 'Hinzufügen [Alt+N]',
  'LBL_NEXT_BUTTON_LABEL' => 'Weiter',
  'LBL_NONE' => '--Kein(e)--',
  'LBL_NOTES' => 'Notizen',
  'LBL_NO_RECORDS_FOUND' => '- 0 Einträge gefunden',
  'LBL_OPENALL_BUTTON_KEY' => 'O',
  'LBL_OPENALL_BUTTON_LABEL' => 'Alle öffnen',
  'LBL_OPENALL_BUTTON_TITLE' => 'Alle öffnen [Alt+O]',
  'LBL_OPENTO_BUTTON_KEY' => 'T',
  'LBL_OPENTO_BUTTON_LABEL' => 'Öffnen zu:',
  'LBL_OPENTO_BUTTON_TITLE' => 'Öffnen zu: [Alt+T]',
  'LBL_OPPORTUNITIES' => 'Verkaufschancen',
  'LBL_OPPORTUNITY' => 'Verkaufschance',
  'LBL_OPPORTUNITY_NAME' => 'Verkaufschance Name:',
  'LBL_OR' => 'ODER',
  'LBL_PERCENTAGE_SYMBOL' => '%',
  'LBL_PRODUCTS' => 'Produkte',
  'LBL_PRODUCT_BUNDLES' => 'Produkpakete',
  'LBL_PROJECTS' => 'Projekte',
  'LBL_PROJECT_TASKS' => 'Projektaufgaben',
  'LBL_QUOTES' => 'Angebote',
  'LBL_QUOTES_SHIP_TO' => 'Angebote liefern an',
  'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
  'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Verkaufschance aus Angebot erstellen',
  'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Verkaufschance aus Angebot erstellen [Alt+O]',
  'LBL_RELATED_RECORDS' => 'Verknüpfte Einträge',
  'LBL_REMOVE' => 'Entfernen',
  'LBL_REQUIRED_SYMBOL' => '*',
  'LBL_SAVED' => 'Gespeichert.',
  'LBL_SAVED_LAYOUT' => 'Layout wurde gespeichert.',
  'LBL_SAVED_VIEWS' => 'Gespeicherte Ansichten',
  'LBL_SAVE_BUTTON_KEY' => 'S',
  'LBL_SAVE_BUTTON_LABEL' => 'Speichern',
  'LBL_SAVE_BUTTON_TITLE' => 'Speichern [Alt+S]',
  'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
  'LBL_SAVE_NEW_BUTTON_LABEL' => 'Speichern & neuen erzeugen',
  'LBL_SAVE_NEW_BUTTON_TITLE' => 'Speichern & neuen erzeugen [Alt+V]',
  'LBL_SAVING' => 'Speichern',
  'LBL_SAVING_LAYOUT' => 'Layout wird gespeichert...',
  'LBL_SEARCH' => 'Suchen',
  'LBL_SEARCH_BUTTON_KEY' => 'Q',
  'LBL_SEARCH_BUTTON_LABEL' => 'Suchen',
  'LBL_SEARCH_BUTTON_TITLE' => 'Suchen [Alt+Q]',
  'LBL_SEARCH_CRITERIA' => 'Suchkriterien',
  'LBL_SELECT_BUTTON_KEY' => 'T',
  'LBL_SELECT_BUTTON_LABEL' => 'Auswählen',
  'LBL_SELECT_BUTTON_TITLE' => 'Auswählen [Alt+T]',
  'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
  'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Kontakt auswählen',
  'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Kontakt auswählen [Alt+T]',
  'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Aus Bericht wählen',
  'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Berichte auswählen',
  'LBL_SELECT_USER_BUTTON_KEY' => 'U',
  'LBL_SELECT_USER_BUTTON_LABEL' => 'Benutzer auswählen:',
  'LBL_SELECT_USER_BUTTON_TITLE' => 'Benutzer auswählen [Alt+U]',
  'LBL_SERVER_RESPONSE_RESOURCES' => 'Ressourcen zum Aufbau dieser Seite (Abfragen, Dateien)',
  'LBL_SERVER_RESPONSE_TIME' => 'Server Antwortzeit:',
  'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'Sekunden',
  'LBL_SHIP_TO_ACCOUNT' => 'Liefern an Firma',
  'LBL_SHIP_TO_CONTACT' => 'Liefern an Kontaktperson',
  'LBL_SHORTCUTS' => 'Schnellmenü',
  'LBL_SHOW' => 'Zeigen',
  'LBL_SQS_INDICATOR' => '',
  'LBL_STATUS' => 'Status:',
  'LBL_STATUS_UPDATED' => 'Der Status für dieses Ereignis wurde aktualisiert!',
  'LBL_SUBJECT' => 'Betreff',
  'LBL_SYNC' => 'Sync',
  'LBL_TASKS' => 'Aufgaben',
  'LBL_TEAM' => 'Team',
  'LBL_TEAMS_LINK' => 'Team',
  'LBL_TEAM_ID' => 'Team ID',
  'LBL_THOUSANDS_SYMBOL' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'E-Mail archivieren',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'E-Mail archivieren [Alt+K]',
  'LBL_UNAUTH_ADMIN' => 'Unautorisierter Zugriff auf Administration',
  'LBL_UNDELETE' => 'Rückgängig',
  'LBL_UNDELETE_BUTTON' => 'Rückgängig',
  'LBL_UNDELETE_BUTTON_LABEL' => 'Rückgängig',
  'LBL_UNDELETE_BUTTON_TITLE' => 'Rückgängig [Alt+D]',
  'LBL_UNSYNC' => 'Unsync',
  'LBL_UPDATE' => 'Aktualisieren',
  'LBL_USERS' => 'Benutzer',
  'LBL_USERS_SYNC' => 'Benutzer Sync',
  'LBL_USER_LIST' => 'Benutzer Liste',
  'LBL_VIEW_BUTTON' => 'Ansicht',
  'LBL_VIEW_BUTTON_KEY' => 'V',
  'LBL_VIEW_BUTTON_LABEL' => 'Ansicht',
  'LBL_VIEW_BUTTON_TITLE' => 'Anzeigen [Alt+V]',
  'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
  'LBL_VIEW_PDF_BUTTON_LABEL' => 'Als PDF drucken',
  'LBL_VIEW_PDF_BUTTON_TITLE' => 'Als PDF drucken [Alt+P]',
  'LNK_ABOUT' => 'Über',
  'LNK_ADVANCED_SEARCH' => 'Erweiterte Suche',
  'LNK_BASIC_SEARCH' => 'Einfache Suche',
  'LNK_DELETE' => 'löschen',
  'LNK_DELETE_ALL' => 'alles löschen',
  'LNK_EDIT' => 'bearb.',
  'LNK_GET_LATEST' => 'Neueste anzeigen',
  'LNK_GET_LATEST_TOOLTIP' => 'Ersetzen mit letzter Version',
  'LNK_HELP' => 'Hilfe',
  'LNK_LIST_END' => 'Ende',
  'LNK_LIST_NEXT' => 'Weiter',
  'LNK_LIST_PREVIOUS' => 'Zurück',
  'LNK_LIST_RETURN' => 'Zurück zur Liste',
  'LNK_LIST_START' => 'Start',
  'LNK_LOAD_SIGNED' => 'Unterschreiben',
  'LNK_LOAD_SIGNED_TOOLTIP' => 'Ersetzen durch signiertes Dokument',
  'LNK_PRINT' => 'Drucken',
  'LNK_REMOVE' => 'Entfernen',
  'LNK_RESUME' => 'Fortsetzen',
  'LNK_VIEW_CHANGE_LOG' => 'Änderungslog zeigen',
  'LOGIN_LOGO_ERROR' => 'Bitte die SugarCRM Logos ersetzen',
  'NTC_CLICK_BACK' => 'Bitte den Zurück-Button des Browsers anklicken und den Fehler beheben.',
  'NTC_DATE_FORMAT' => '(jjjj-mm-tt)',
  'NTC_DATE_TIME_FORMAT' => '(jjjj-mm-tt 24:00)',
  'NTC_DELETE_CONFIRMATION' => 'Sind Sie sicher, dass Sie diesen Eintrag löschen wollen?',
  'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Möchten Sie die ausgewählten Einträge wirklich löschen?',
  'NTC_LOGIN_MESSAGE' => 'Bitte geben Sie Ihren Benutzernamen und Ihr Passwort ein.',
  'NTC_NO_ITEMS_DISPLAY' => 'Keine Einträge vorhanden',
  'NTC_REMOVE_CONFIRMATION' => 'Möchten Sie diese Beziehung wirklich entfernen?',
  'NTC_REQUIRED' => 'Pflichtfeld',
  'NTC_SUPPORT_SUGARCRM' => 'Unterstützen Sie das SugarCRM Open Source Projekt mit einer Spende über PayPal - schnell, gratis und sicher!',
  'NTC_TIME_FORMAT' => '(24:00)',
  'NTC_WELCOME' => 'Willkommen',
  'NTC_YEAR_FORMAT' => '(jjjj)',
);

