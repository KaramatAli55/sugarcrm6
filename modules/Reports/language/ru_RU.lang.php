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
  'CHART_COUNT_PATTERN' => '{count} {module} где {group_label} является {group_text}',
  'CHART_MINMAX_PATTERN' => '{count} {module} {numerical_function} {numerical_label} является {numerical_value}{thousands} где {group_label} является {group_text}',
  'CHART_SUMAVG_PATTERN' => '{count} {module} {numerical_function} {numerical_label} в {currency_symbol}{numerical_value}{thousands} где {group_label} является {group_text}',
  'DEFAULT_REPORT_TITLE_1' => 'Прогноз на текущий квартал',
  'DEFAULT_REPORT_TITLE_10' => 'Новые обращения по месяцам',
  'DEFAULT_REPORT_TITLE_11' => 'Воронка продаж по типу и по работавшей команде',
  'DEFAULT_REPORT_TITLE_12' => 'Воронка продаж по команде и по пользователю',
  'DEFAULT_REPORT_TITLE_13' => 'Задачи по команде и пользователю',
  'DEFAULT_REPORT_TITLE_14' => 'Звонки по команде и пользователю',
  'DEFAULT_REPORT_TITLE_15' => 'Встречи по команде и пользователю',
  'DEFAULT_REPORT_TITLE_16' => 'Контрагенты по типу и по индустрии',
  'DEFAULT_REPORT_TITLE_17' => 'Сделки, полученные в результате Предварительных контактов',
  'DEFAULT_REPORT_TITLE_18' => 'Предварительные контакты по источнику контакта',
  'DEFAULT_REPORT_TITLE_19' => 'Мои показатели использования (Сегодня)',
  'DEFAULT_REPORT_TITLE_2' => 'Детальный прогноз',
  'DEFAULT_REPORT_TITLE_20' => 'Мои показатели использования (Последние 7 дней)',
  'DEFAULT_REPORT_TITLE_21' => 'Мои показатели использования (Последние 30 дней)',
  'DEFAULT_REPORT_TITLE_22' => 'Моё использование модулей (Сегодня)',
  'DEFAULT_REPORT_TITLE_23' => 'Моё использование модулей (Последние 7 дней)',
  'DEFAULT_REPORT_TITLE_24' => 'Моё использование модулей (Последние 30 дней)',
  'DEFAULT_REPORT_TITLE_25' => 'Показатели использования пользователями (Последние 7 дней)',
  'DEFAULT_REPORT_TITLE_26' => 'Показатели использования пользователями (Последние 30 дней)',
  'DEFAULT_REPORT_TITLE_27' => 'Модули, использованные в моих Прямых отчётах (Последние 30 дней)',
  'DEFAULT_REPORT_TITLE_28' => 'Медленные запросы',
  'DEFAULT_REPORT_TITLE_29' => 'Мои изменённые записи (Последние 7 дней)',
  'DEFAULT_REPORT_TITLE_3' => 'Список контрагентов-партнёров',
  'DEFAULT_REPORT_TITLE_31' => 'Мои недавно изменённые записи (Последние 30 дней)',
  'DEFAULT_REPORT_TITLE_32' => 'Записи, изменённые моими прямыми отчётами',
  'DEFAULT_REPORT_TITLE_4' => 'Список контрагентов-клиентов',
  'DEFAULT_REPORT_TITLE_41' => 'Активные сессии пользователя (Последние 7 дней)',
  'DEFAULT_REPORT_TITLE_42' => 'Итог сессий пользователя (Последние 7 дней)',
  'DEFAULT_REPORT_TITLE_43' => 'Владельцы учётных записей контрагентов',
  'DEFAULT_REPORT_TITLE_44' => 'Мои новые учётные записи клиентов',
  'DEFAULT_REPORT_TITLE_45' => 'Сделки по Этапу продаж',
  'DEFAULT_REPORT_TITLE_46' => 'Сделки по Типу',
  'DEFAULT_REPORT_TITLE_47' => 'Открытые звонки',
  'DEFAULT_REPORT_TITLE_48' => 'Открытые встречи',
  'DEFAULT_REPORT_TITLE_49' => 'Открытые задачи',
  'DEFAULT_REPORT_TITLE_5' => 'Список звонков, отсортированный по дате последнего звонка',
  'DEFAULT_REPORT_TITLE_50' => 'Успешно закрытые сделки по Контрагенту',
  'DEFAULT_REPORT_TITLE_51' => 'Успешно закрытые сделки по Пользователю',
  'DEFAULT_REPORT_TITLE_52' => 'Все открытые сделки',
  'DEFAULT_REPORT_TITLE_53' => 'Все закрытые сделки',
  'DEFAULT_REPORT_TITLE_56' => 'Разбивка продуктов продажи по месяцам согласно прошлому, текущему и будущему временному периоду',
  'DEFAULT_REPORT_TITLE_57' => '',
  'DEFAULT_REPORT_TITLE_58' => '',
  'DEFAULT_REPORT_TITLE_59' => '',
  'DEFAULT_REPORT_TITLE_6' => 'Сделки по источнику Предварительного контакта',
  'DEFAULT_REPORT_TITLE_7' => 'Открытые Обращения по Пользователю и Статусу',
  'DEFAULT_REPORT_TITLE_8' => 'Открытые Обращения по месяцам и по работавшим пользователям',
  'DEFAULT_REPORT_TITLE_9' => 'Открытые Обращения по приоритету и по пользователям',
  'DROPDOWN_SCHEDULE_INTERVALS' => 
  array (
    3600 => 'Раз в час',
    21600 => 'Раз в 6 часов',
    43200 => 'Раз в 12 часов',
    86400 => 'Ежедневно',
    604800 => 'Еженедельно',
    1209600 => 'Раз в 2 недели',
    2419200 => 'Раз в 4 недели',
  ),
  'ERR_REPORT_INVALID' => 'Определение отчета "{0}" содержит недействительные поля: {1}',
  'ERR_REPORT_INVALID_SUBJECT' => 'Отчет недействителен',
  'ERR_SELECT_COLUMN' => 'Сначала выберите столбец для отображения.',
  'LBL_1X2' => '1 X 2',
  'LBL_1_REPORT_ON' => '1. Отчет по',
  'LBL_2X1' => '2 X 1',
  'LBL_2_FILTER' => '2. Фильтр',
  'LBL_3_CHOOSE' => '3. Выберите столбцы для отображения',
  'LBL_3_GROUP' => '3. Группа',
  'LBL_4_CHOOSE' => '4. Выберите столбцы для отображения',
  'LBL_5_CHART_OPTIONS' => '5. Настройки диаграммы',
  'LBL_ACCOUNT' => 'Контрагент',
  'LBL_ACCOUNTS' => 'Контрагенты',
  'LBL_ACCOUNT_REPORTS' => 'Отчеты по контрагенту',
  'LBL_ACTIVITIES_REPORTS' => 'Отчеты по мероприятиям',
  'LBL_ADDED_FAVORITES' => 'отчет (-ы), добавленный (-ые) в Избранное.',
  'LBL_ADD_BTN_HELP' => 'Щёлкните, чтобы добавить новую группу фильтров. Используйте группу для применения логических операторов И/ИЛИ к наборам фильтров.',
  'LBL_ADD_COLUMN' => 'Добавить столбец',
  'LBL_ADD_FILTER_TO' => 'Добавить фильтр к',
  'LBL_ADD_GROUP' => 'Добавить группу фильтров',
  'LBL_ADD_NEW_FILTER' => 'Добавить новый фильтр',
  'LBL_ADD_RELATE' => 'Добавить связанные',
  'LBL_ADVANCED_FILTERS' => 'Расширенные фильтры',
  'LBL_AFTER' => 'После',
  'LBL_ALERT_CANT_ADD' => 'Вы не можете добавить связанный модуль до тех пор, пока не определите таблицу, с которой он связан.\\n Выберите модуль в выпадающем списке слева от кнопки &#39;Добавить связанные&#39;.',
  'LBL_ALL' => 'По крайней мере',
  'LBL_ALL_PUBLISHED_REPORTS' => 'Все опубликованные отчеты',
  'LBL_ALL_REPORTS' => 'Просмотр отчетов',
  'LBL_ALT_INFORMATION' => 'Информация',
  'LBL_ALT_SHOW' => 'Показать',
  'LBL_AND' => 'и',
  'LBL_ANY' => 'Любой',
  'LBL_ANY_ONE_OF' => 'Любой из',
  'LBL_ASCENDING' => 'возрастанию',
  'LBL_ASSIGNED_TO_NAME' => 'Ответственный (-ая):',
  'LBL_AT_LEAST_ONE_DISPLAY_COLUMN' => 'Выберите по крайней мере один столбец для отображения.',
  'LBL_AT_LEAST_ONE_SUMMARY_COLUMN' => 'По крайней мере один итоговый столбец.',
  'LBL_AVAILABLE_FIELDS' => 'Доступные поля',
  'LBL_AVG' => 'Средняя',
  'LBL_BASIC_FILTERS' => 'Базовые фильтры',
  'LBL_BEFORE' => 'До',
  'LBL_BUG_REPORTS' => 'Отчеты по ошибке',
  'LBL_BY_DAY' => 'По дням',
  'LBL_BY_FISCAL_QUARTER' => 'По финансовому кварталу',
  'LBL_BY_FISCAL_YEAR' => 'По финансовому году',
  'LBL_BY_MONTH' => 'За месяц',
  'LBL_BY_QUARTER' => 'За квартал',
  'LBL_BY_YEAR' => 'За год',
  'LBL_CALL_LIST_BY_LAST_DATE_CONTACTED' => 'Список звонков, отсортированный по дате последнего звонка',
  'LBL_CALL_REPORTS' => 'Отчеты по по звонку',
  'LBL_CANCEL' => 'Отмена',
  'LBL_CANNOT_BE_EMPTY' => 'не может быть пустым.',
  'LBL_CANNOT_DISPLAY_CHART_MESSAGE' => 'Невозможно отобразить график через настройки конфигурации.',
  'LBL_CASE_REPORTS' => 'Отчеты по обращению',
  'LBL_CHANGE' => 'Изменить',
  'LBL_CHART_DATA_HELP' => 'Выберите итог который будет показан в таблице.',
  'LBL_CHART_DESCRIPTION' => 'Описание',
  'LBL_CHART_OPTIONS' => 'Дополнительные настройки диаграммы',
  'LBL_CHART_TYPE' => 'Тип диаграммы:',
  'LBL_CHOOSE_COLUMNS' => 'Выберите строки для отображения',
  'LBL_CHOOSE_DISPLAY_COLS' => 'Выбрать столбцы отображения',
  'LBL_CHOOSE_SUMMARIES' => 'Выберите итоги для отображения',
  'LBL_CLEAR' => 'Очистить',
  'LBL_COLUMN_NAME' => 'Название столбца',
  'LBL_COMBO_TYPE_AHEAD' => 'Искать поле',
  'LBL_CONTACT' => 'Контакт',
  'LBL_CONTACTS' => 'Контакты',
  'LBL_CONTACT_REPORTS' => 'Отчеты по контакту',
  'LBL_CONTAINS' => 'Содержит',
  'LBL_CONTENT' => 'Содержание',
  'LBL_CONTRACT_REPORTS' => 'Отчёты по контрактам',
  'LBL_COUNT' => 'Количество',
  'LBL_CREATE_CUSTOM_REPORT' => 'Мастер запросов',
  'LBL_CREATE_REPORT' => 'Создать отчет',
  'LBL_CSV_TIMESTAMP' => 'Y_m_d_H_i_s',
  'LBL_CURRENT_FISCAL_QUARTER' => 'Текущий финансовый квартал',
  'LBL_CURRENT_FISCAL_YEAR' => 'Текущий финансовый год',
  'LBL_CURRENT_QUARTER_COMMITTED_DEALS' => 'Сделки, ожидаемые в данном квартале',
  'LBL_CURRENT_QUARTER_FORECAST' => 'Прогноз на текущий квартал',
  'LBL_CURRENT_USER' => 'Текущий пользователь',
  'LBL_CUSTOMER_ACCOUNT_LIST' => 'Список контрагентов-клиентов',
  'LBL_DATE' => 'Дата начала',
  'LBL_DATE_BASED_FILTERS' => 'Фильтры даты соотносятся с часовыми поясами пользователя, за которым закреплён данный отчёт.',
  'LBL_DAY' => 'День',
  'LBL_DEFINE_FILTERS' => 'Определить фильтры',
  'LBL_DELETE' => 'Удалить',
  'LBL_DELETED_FIELD_IN_REPORT1' => 'Следующее поле в этих отчётах больше не является действительным:',
  'LBL_DELETED_FIELD_IN_REPORT2' => 'Отредактируйте, пожалуйста, отчёт и удостоверьтесь, что другие параметры действительны.',
  'LBL_DELETE_ERROR' => 'Только владельцы отчетов или Администраторы могут удалять отчеты',
  'LBL_DEL_THIS' => 'Удалить',
  'LBL_DESCENDING' => 'убыванию',
  'LBL_DETAILED_FORECAST' => 'Детальный отчет',
  'LBL_DISPLAY_COLS_HELP_DESC' => 'Шаги для выбора столбцов отображения:<br /><br />1) В разделе "Связанные модули" щёлкните на модуле, для которого хотите задать фильтры. По умолчанию будет выбран основной модуль (верхний узел в древовидном отображении).<br /><br />Вы можете выбрать связанный модуль (дочерний узел в древовидном отображении) путём нажатия на модуле. Разверните узел для просмотра дополнительных модулей, связанных с зависимым модулем. Выбранный вами модуль определяет, какие поля, доступные для создания отчёта, появятся в разделе "Доступные поля".<br /><br />2) Щёлкните на поле в разделе "Доступны поля" чтобы сгруппировать записи по этому полю в вашем отчёте. Вы также можете производить поиск поля, набирая текст в окне данного раздела.<br /><br />После выделения любого количества полей в модуле, выбранном в разделе "Связанные модули", вы можете выбрать другой модуль и отметить в нём дополнительные поля. Число выбираемых полей не ограничено, однако. однако большее количество полей приведёт к более медленному созданию отчёта и снижению его читабельности.<br /><br />Вы можете изменять порядок полей путём перетаскивания их на желаемую позицию. Изменение порядка полей влияет на отображение столбцов в  результатах.',
  'LBL_DISPLAY_COLUMNS' => 'Отобразить столбцы',
  'LBL_DISPLAY_SUMMARIES' => 'Выберите отображение итогов',
  'LBL_DISPLAY_SUMMARY_HELP_DESC' => 'Шаги для выбора итогов отображения:<br /><br />1) В разделе "Связанные модули" щелкните на модуле, который Вы хотели бы использовать для группировки записей в отчёте. По умолчанию, будет выбран основной модуль (верхний узел в древовидном отображении).<br /><br />Вы можете выбрать связанный модуль (дочерний узел в древовидном отображении) путём нажатия на модуле. Разверните узел для просмотра дополнительных модулей, связанных с зависимым модулем. Выбранный модуль определяет, какие поля, доступные для создания отчёта, появятся в разделе "Доступные поля".<br /><br />2) Щёлкните на поле в разделе "Доступны поля" чтобы выбрать итоги для отчёта. Вы также может производить поиск поля набирая текст в окне данного раздела.<br /><br />После выделения любого количества полей в модуле, выбранном в разделе "Связанные модули", Вы можете выбрать другой модуль и отметить в нём неограниченное количество итогов для формирования отчёта.<br /><br />Для сводных отчётов Вы можете выбирать более одного поля для отображения множественных значений в клетке отчёта.',
  'LBL_DOES_NOT_CONTAIN' => 'Не содержит',
  'LBL_DOES_NOT_EQUAL' => 'Неравно',
  'LBL_DOWN' => 'Вниз',
  'LBL_DO_ROUND' => 'Округлять числа больше 100000',
  'LBL_DO_ROUND_HELP' => 'Число превышающее 100000 будет округлено в диаграмме. Например: 350000 будет отображаться как 350K.',
  'LBL_DUPLICATE_AS_MATRIX' => 'В виде сводного отчета',
  'LBL_DUPLICATE_AS_ORIGINAL' => 'Как тип оригинала',
  'LBL_DUPLICATE_AS_ROWS_AND_COLS' => 'Как строки и столбцы',
  'LBL_DUPLICATE_AS_SUMMATION_DETAILS' => 'Как итог с подробностями',
  'LBL_DUPLICATE_AS_SUMMATON' => 'Как итог',
  'LBL_EDIT' => 'Правка',
  'LBL_EDITLAYOUT' => 'Правка расположения',
  'LBL_EMAIL_REPORTS' => 'Отчеты по E-mail сообщению',
  'LBL_ENDS_WITH' => 'Заканчивается на',
  'LBL_END_DATE' => 'Дата окончания',
  'LBL_EQUALS' => 'Равно',
  'LBL_EXACT' => 'Точно',
  'LBL_EXPORT' => 'Экспорт',
  'LBL_FAILURE_REPORT' => 'НЕУДАЧА: Отчет',
  'LBL_FAVORITE' => 'Избранное',
  'LBL_FAVORITES_TITLE' => 'Мои избранные отчеты',
  'LBL_FAVORITE_REPORTS' => 'Избранное',
  'LBL_FAVORITE_REPORTS_TITLE' => 'Мои избранные отчеты',
  'LBL_FIELDS_PANEL_HELP_DESC' => 'Здесь отображаются все поля из выбранного модуля в "Связанных модулях", используемые для создания отчёта. Выберите поле.',
  'LBL_FIELD_NAME' => 'Поле',
  'LBL_FILTER' => 'Фильтр',
  'LBL_FILTERS' => 'Фильтры',
  'LBL_FILTERS_END' => 'из следующих фильтров.',
  'LBL_FILTERS_HELP_DESC' => 'Шаги для определения фильтров:<br /><br />1) В разделе "Связанные модули" щёлкните на модуле, для которого хотите задать фильтры. По умолчанию будет выбран основной модуль (верхний узел в древовидном отображении).<br /><br />Вы можете выбрать связанный модуль (дочерний узел в древовидном отображении) путём нажатия на модуле. Разверните узел для просмотра дополнительных модулей, связанных с зависимым модулем.<br /><br />2) Щёлкните на поле в разделе  "Доступные поля" чтобы добавить его к фильтрам. Вы также может производить поиск поля, набирая текст в окошке данного раздела.<br /><br />После выделения любого количества полей в модуле, выбранном в разделе "Связанные модули", Вы можете выбрать другой модуль и отметить в нём неограниченное количество полей для использования в качестве фильтров.<br /><br />3) Выберите логический оператор И или ИЛИ, чтобы определить, будут ли для создания отчёта использоваться все фильтры либо же любые фильтры, соответственно.<br /><br />4) [Выборочно] Щёлкните на "Добавить группу фильтров" для создания группы фильтров. Вы можете иметь неограниченное количество групп фильтров, а также неограниченное количество фильтров в каждой группе, чтобы создавать вложенные фильтры.<br /><br />5) [Выборочно] Выберите опцию фильтра "Во время работы", чтобы позволить пользователям использовать фильтр и настраивать отображение результатов непосредственно во время просмотра.',
  'LBL_FILTER_AND' => 'И',
  'LBL_FILTER_CONDITIONS' => 'Выберите тип условия:',
  'LBL_FILTER_DATE_RANGE_FINISH' => 'Кому',
  'LBL_FILTER_DATE_RANGE_START' => 'От',
  'LBL_FILTER_OR' => 'ИЛИ',
  'LBL_FISCAL_QUARTER' => 'Финансовый квартал',
  'LBL_FISCAL_YEAR' => 'Финансовый год',
  'LBL_FORECAST_REPORTS' => 'Отчёты о прогнозах',
  'LBL_FUNNEL' => 'Воронка',
  'LBL_GRAND_TOTAL' => 'Итого',
  'LBL_GREATER_THAN' => 'Больше, чем',
  'LBL_GREATER_THAN_EQUAL' => '',
  'LBL_GROUP_BY' => 'Группировать по',
  'LBL_GROUP_BY_HELP_DESC' => 'Шаги для определения групп:<br /><br />1) В разделе "Связанные модули" щелкните на модуле, который вы хотели бы использовать для группировки записей в вашем отчёте. По умолчанию, будет выбран основной модуль  (верхний узел в древовидном отображении).<br /><br />Вы можете выбрать связанный модуль (дочерний узел в древовидном отображении) путём нажатия на модуле. Разверните узел для просмотра дополнительных модулей, связанных с зависимым модулем. Выбранный вами модуль определяет, какие поля, доступные для создания отчёта, появятся в разделе "Доступные поля".<br /><br />2) Щёлкните на поле в разделе "Доступны поля" чтобы сгруппировать записи по этому полю в вашем отчёте. Вы также может производить поиск поля, набирая текст в окне данного раздела.<br /><br />После выделения любого количества полей в модуле, выбранном в разделе "Связанные модули", Вы можете выбрать другой модуль и отметить в нём неограниченное количество полей для группирования записей. Однако, отчёт становится менее читаемым, если Вы используете большое количество полей для группировки. <br /><br />Вы можете изменять порядок полей путём перетаскивания их на желаемую позицию. Изменение порядка влияет на отображаемые результаты. <br /><br />Для сводных отчётов вы можете использовать максимум три фильтра для группировки записей.',
  'LBL_GROUP_BY_REQUIRED' => 'По крайней мере один параметр группировки и один столбец итогов требуются для создания диаграммы.',
  'LBL_HELLO' => 'Здравствуйте',
  'LBL_HELP' => 'Справка',
  'LBL_HIDE_COLUMNS' => 'Спрятать столбцы',
  'LBL_HIDE_SUMMARIES' => 'Скрыть итоги',
  'LBL_HORIZ_BAR' => 'Горизонтальная черта',
  'LBL_IS' => 'Равно',
  'LBL_IS_BETWEEN' => 'Между',
  'LBL_IS_EMPTY' => 'Пустой',
  'LBL_IS_NOT' => 'Не',
  'LBL_IS_NOT_EMPTY' => 'Не является пустым',
  'LBL_IS_NOT_ONE_OF' => 'Не один из',
  'LBL_IS_PUBLISHED' => 'Опубликовано',
  'LBL_LABEL' => 'Метка',
  'LBL_LAST_30_DAYS' => 'Прошедшие 30 дней',
  'LBL_LAST_7_DAYS' => 'Прошедшие 7 дней',
  'LBL_LAST_MONTH' => 'Прошлый месяц',
  'LBL_LAST_QUARTER' => 'Прошлый квартал',
  'LBL_LAST_WEEK' => 'Прошлая неделя',
  'LBL_LAST_YEAR' => 'Прошлый год',
  'LBL_LEAD' => 'Предварительный контакт',
  'LBL_LEADS' => 'Предварительные контакты',
  'LBL_LEAD_REPORTS' => 'Отчеты по предварительному контакту',
  'LBL_LEFT' => 'Слева',
  'LBL_LESS_THAN' => 'Меньше, чем',
  'LBL_LESS_THAN_EQUAL' => '',
  'LBL_LINE' => 'Линия',
  'LBL_LIST_FORM_TITLE' => 'Отчеты',
  'LBL_LIST_PUBLISHED' => 'Опубликовано',
  'LBL_MATRIX_LAYOUT' => 'Опции внешнего вида:',
  'LBL_MATRIX_REPORT' => 'Сводный отчет',
  'LBL_MATRIX_REPORT_DESC' => 'Создать итоговый отчёт с отображением результатов в формате сетки и группировкой по максимальному значению из трёх полей.',
  'LBL_MAX' => 'Макс',
  'LBL_MAXIMUM_3_GROUP_BY' => 'Сводный отчёт не может иметь более трёх условий группировки.',
  'LBL_MEETING_REPORTS' => 'Отчеты по встрече',
  'LBL_MIN' => 'Мин',
  'LBL_MINIMUM_2_GROUP_BY' => 'Сводный отчет должен иметь как минимум два условия для группировки.',
  'LBL_MISSING_FIELDS' => 'Недостающие поля',
  'LBL_MISSING_INPUT_VALUE' => 'не хватает вводного значения.',
  'LBL_MISSING_SECOND_INPUT_VALUE' => 'не хватает второго вводного значения.',
  'LBL_MODULE' => 'Модуль',
  'LBL_MODULE_CHANGE_PROMPT' => 'Изменение выбранного модуля приведёт к потере файлов, столбцов отображения и т.д. Вы всё ещё хотите продолжить?',
  'LBL_MODULE_NAME' => 'Отчеты',
  'LBL_MODULE_NAME_SAVED' => 'Название модуля',
  'LBL_MODULE_NAME_SINGULAR' => 'Отчет',
  'LBL_MODULE_TITLE' => 'Отчеты - Главная',
  'LBL_MODULE_VIEWER_TITLE' => 'Обзор отчетов: Главная',
  'LBL_MONTH' => 'Месяц',
  'LBL_MORE' => 'Больше',
  'LBL_MY_ACCOUNT_REPORTS' => 'Мои отчеты по Контрагентам',
  'LBL_MY_BUG_REPORTS' => 'Отчеты моей команды по Ошибкам',
  'LBL_MY_CALL_REPORTS' => 'Отчеты моей команды по Звонкам',
  'LBL_MY_CASE_REPORTS' => 'Отчеты моей команды по Обращениям',
  'LBL_MY_CONTACT_REPORTS' => 'Отчеты моей команды по Контактам',
  'LBL_MY_CONTRACT_REPORTS' => 'Мои отчёты по контрактам',
  'LBL_MY_EMAIL_REPORTS' => 'Отчеты моей команды по E-mail',
  'LBL_MY_FORECAST_REPORTS' => 'Отчеты моей команды по Прогнозам',
  'LBL_MY_LEAD_REPORTS' => 'Отчеты моей команды по Предварительным контактам',
  'LBL_MY_MEETING_REPORTS' => 'Отчеты моей команды по Встречам',
  'LBL_MY_OPPORTUNITY_REPORTS' => 'Отчеты моей команды по Сделкам',
  'LBL_MY_PROJECT_TASK_REPORTS' => 'Мои отчеты по Проектным задачам',
  'LBL_MY_PROSPECT_REPORTS' => 'Отчёты о моих целях',
  'LBL_MY_QUOTE_REPORTS' => 'Отчеты моей команды по коммерческим предложениям',
  'LBL_MY_REPORTS' => 'Мои отчеты',
  'LBL_MY_SAVED_REPORTS' => 'Мои сохраненные отчеты',
  'LBL_MY_TASK_REPORTS' => 'Отчеты моей команды по Задачам',
  'LBL_MY_TEAMS_REPORTS' => 'Отчеты моей команды',
  'LBL_MY_TEAM_ACCOUNT_REPORTS' => 'Отчёты моей команды по контрагентам',
  'LBL_MY_TEAM_BUG_REPORTS' => 'Отчеты моей команды по Ошибкам',
  'LBL_MY_TEAM_CALL_REPORTS' => 'Отчеты моей команды по Звонкам',
  'LBL_MY_TEAM_CASE_REPORTS' => 'Отчеты моей команды по Обращениям',
  'LBL_MY_TEAM_CONTACT_REPORTS' => 'Отчеты моей команды по Контактам',
  'LBL_MY_TEAM_CONTRACT_REPORTS' => 'Отчеты моей команды по Контрактам',
  'LBL_MY_TEAM_EMAIL_REPORTS' => 'Отчеты моей команды по E-mail',
  'LBL_MY_TEAM_FORECAST_REPORTS' => 'Отчеты моей команды по Прогнозам',
  'LBL_MY_TEAM_LEAD_REPORTS' => 'Отчеты моей команды по Предварительным контактам',
  'LBL_MY_TEAM_MEETING_REPORTS' => 'Отчеты моей команды по Встречам',
  'LBL_MY_TEAM_OPPORTUNITY_REPORTS' => 'Отчёт моей команды по сделкам',
  'LBL_MY_TEAM_PROJECT_TASK_REPORTS' => 'Отчеты моей команды по Проектным задачам',
  'LBL_MY_TEAM_PROSPECT_REPORTS' => 'Отчёты по моей команды Адресатам',
  'LBL_MY_TEAM_QUOTE_REPORTS' => 'Отчеты моей команды по коммерческим предложениям',
  'LBL_MY_TEAM_TASK_REPORTS' => 'Отчеты моей команды по Задачам',
  'LBL_NEXT' => 'Дальше >',
  'LBL_NEXT_30_DAYS' => 'Следующие 30 дней',
  'LBL_NEXT_7_DAYS' => 'Следующие 7 дней',
  'LBL_NEXT_FISCAL_QUARTER' => 'Следующий финансовый квартал',
  'LBL_NEXT_FISCAL_YEAR' => 'Следующий финансовый год',
  'LBL_NEXT_MONTH' => 'Следующий месяц',
  'LBL_NEXT_QUARTER' => 'Следующий квартал',
  'LBL_NEXT_RUN' => 'Следующий E-mail',
  'LBL_NEXT_WEEK' => 'Следующая неделя',
  'LBL_NEXT_YEAR' => 'Следующий год',
  'LBL_NONE' => 'Нет',
  'LBL_NONE_STRING' => 'Нет',
  'LBL_NOTHING_WAS_SELECTED' => 'ничего не выбрано.',
  'LBL_NOT_ON' => 'Не входит в',
  'LBL_NO_ACCESS' => 'У Вас нет доступа к данной странице. Свяжитесь с вашим системным администратором для получения соответствующих прав.',
  'LBL_NO_CHART' => 'Нет диаграммы',
  'LBL_NO_CHART_DRAWN_MESSAGE' => 'Недостаточно данных для построения диаграммы',
  'LBL_NO_EXPORT_ACCESS' => '',
  'LBL_NO_FILTERS' => 'не имеет фильтров',
  'LBL_NO_IMAGE' => 'Нет изображения',
  'LBL_NO_REPORTS' => 'Нет результатов.',
  'LBL_OF' => 'из',
  'LBL_ON' => 'Конкретная дата',
  'LBL_ONE_OF' => 'Один из',
  'LBL_OPPORTUNITIES' => 'Сделки',
  'LBL_OPPORTUNITIES_BY_LEAD_SOURCE' => 'Сделки по источнику предварительного контакта',
  'LBL_OPPORTUNITY' => 'Сделка',
  'LBL_OPPORTUNITY_REPORTS' => 'Отчеты по сделке',
  'LBL_OPTIONAL_HELP' => 'Отметите эти поля, чтобы отображать записи основного модуля даже если связанный модуль не существует. Когда отметка сделана, записи основного модуля будут отображены только если они имеют одну или более привязанных записей из другого модуля.',
  'LBL_OPTIONAL_MODULES' => 'Дополнительные модули',
  'LBL_ORDER_BY' => 'Сортировать по',
  'LBL_OUTER_JOIN_CHECKBOX' => 'Выборочные связанные модули',
  'LBL_OWNER' => 'Ответственный (-ая)',
  'LBL_PARTNER_ACCOUNT_LIST' => 'Список контрагентов-партнёров',
  'LBL_PDF_TIMESTAMP' => 'Y_m_d_H_i',
  'LBL_PIE' => 'Круговая диаграмма',
  'LBL_PREVIEW_REPORT' => 'Предварительный просмотр',
  'LBL_PREVIOUS' => '< Назад',
  'LBL_PREVIOUS_FISCAL_QUARTER' => 'Предыдущий финансовый квартал',
  'LBL_PREVIOUS_FISCAL_YEAR' => 'Предыдущий финансовый год',
  'LBL_PROJECT_TASK_REPORTS' => 'Отчеты по Проектным задачам',
  'LBL_PROSPECT_REPORTS' => 'Отчёты по Адресатам',
  'LBL_PUBLISH' => 'опубликовать',
  'LBL_PUBLISHED_ACCOUNT_REPORTS' => 'Опубликованные отчеты по Контрагентам',
  'LBL_PUBLISHED_BUG_REPORTS' => 'Опубликованные отчеты по Ошибкам',
  'LBL_PUBLISHED_CALL_REPORTS' => 'Опубликованные отчеты по Звонкам',
  'LBL_PUBLISHED_CASE_REPORTS' => 'Опубликованные отчеты по Обращениям',
  'LBL_PUBLISHED_CONTACT_REPORTS' => 'Опубликованные отчеты по Контактам',
  'LBL_PUBLISHED_CONTRACT_REPORTS' => 'Опубликовать отчёты по контрактам',
  'LBL_PUBLISHED_EMAIL_REPORTS' => 'Опубликованные отчеты по Email',
  'LBL_PUBLISHED_FORECAST_REPORTS' => 'Опубликованные отчеты по Прогнозам',
  'LBL_PUBLISHED_LEAD_REPORTS' => 'Опубликованные отчеты по Предварительным контактам',
  'LBL_PUBLISHED_MEETING_REPORTS' => 'Опубликованные отчеты по Встречам',
  'LBL_PUBLISHED_OPPORTUNITY_REPORTS' => 'Опубликованные отчеты по Сделкам',
  'LBL_PUBLISHED_PROJECT_TASK_REPORTS' => 'Опубликованные отчеты по Проектным задачам',
  'LBL_PUBLISHED_PROSPECT_REPORTS' => 'Опубликованные отчёты по Адресатам',
  'LBL_PUBLISHED_QUOTA_REPORTS' => 'Отчеты по Квоте',
  'LBL_PUBLISHED_QUOTE_REPORTS' => 'Опубликованные отчеты по коммерческим предложениям',
  'LBL_PUBLISHED_TASK_REPORTS' => 'Опубликованные отчеты по Задачам',
  'LBL_QUARTER' => 'Квартал',
  'LBL_QUARTER_ABBREVIATION' => 'Q',
  'LBL_QUERY' => 'Запрос',
  'LBL_QUOTE_REPORTS' => 'Отчеты по коммерческому предложению',
  'LBL_RELATED' => 'Относится к:',
  'LBL_RELATED_MODULES' => 'Связанные модули',
  'LBL_RELATED_MODULES_PANEL_HELP_DESC' => 'Здесь отображаются Основной модуль и все связанные с ним модули. Выберите модуль.',
  'LBL_RELATED_TABLE_BLANK' => 'Пожалуйста, выберите модуль для установления связи.',
  'LBL_REMOVE' => 'Удалить',
  'LBL_REMOVED_FAVORITES' => 'отчет (-ы), удалленный (-ые) из Избранного.',
  'LBL_REMOVE_BTN_HELP' => 'Щёлкните, чтобы удалить эту группу фильтров',
  'LBL_REMOVE_GROUP' => 'Удалить группу фильтров',
  'LBL_REPORTS' => 'Отчеты',
  'LBL_REPORTS_TO' => 'Руководитель',
  'LBL_REPORT_ATT_MODULES' => 'Модули',
  'LBL_REPORT_ATT_NAME' => 'Название',
  'LBL_REPORT_COLLAPSE_ALL' => 'Свернуть все',
  'LBL_REPORT_DATA_COLUMN_ORDERS' => 'Этот отчёты содержит данные со следующим порядком столбцов:',
  'LBL_REPORT_DETAILS' => 'Подробности отчета',
  'LBL_REPORT_EXPAND_ALL' => 'Развернуть все',
  'LBL_REPORT_FILTER_MODIFIED_MESSAGE' => 'С момента последнего запуска фильтры отчёта были изменены.',
  'LBL_REPORT_GRAND_TOTAL' => 'Итого',
  'LBL_REPORT_GROUP_BY' => 'Группировать по',
  'LBL_REPORT_HIDE_CHART' => 'Скрыть график',
  'LBL_REPORT_HIDE_DETAILS' => 'Скрыть подробности',
  'LBL_REPORT_LAST_RUN_DATE' => 'Запрашивался последний раз',
  'LBL_REPORT_MODIFIED_MESSAGE' => 'С момента последнего запуска отчёт был изменён.',
  'LBL_REPORT_MODULES' => 'Модули отчетов',
  'LBL_REPORT_MODULE_VIEWER_TITLE' => 'Обзор отчетов',
  'LBL_REPORT_NAME' => 'Название отчета',
  'LBL_REPORT_RESET_FILTER' => 'Сбросить',
  'LBL_REPORT_RESULTS' => 'Результаты',
  'LBL_REPORT_RESULTS_MESSAGE' => 'Для просмотра результатов Нажмите "Создать отчёт".',
  'LBL_REPORT_RUN_WITH_FILTER' => 'Применить',
  'LBL_REPORT_SCHEDULE_TITLE' => 'Расписание',
  'LBL_REPORT_SHOW_CHART' => 'Показать график',
  'LBL_REPORT_SHOW_DETAILS' => 'Показать детали',
  'LBL_REPORT_TYPE' => 'Тип отчета:',
  'LBL_REPORT__ATT_TYPE' => 'Тип',
  'LBL_RIGHT' => 'Справа',
  'LBL_ROLLOVER' => 'Прокрутите полосу прокрутки для просмотра подробностей',
  'LBL_ROLLOVER_SQUARE' => 'Прокрутите квадратик для просмотра подробностей',
  'LBL_ROLLOVER_WEDGE' => 'Прокрутите клинообразный значок для просмотра подробностей',
  'LBL_ROWS_AND_COLUMNS_REPORT' => 'Отчет со столбцами и строками',
  'LBL_ROWS_AND_COLUMNS_REPORT_DESC' => 'Создать отчет в виде таблиц, который будет содержать значения выбранных полей вывода для записей, соответствующих указанному критерию.',
  'LBL_RUNTIME_FILTERS' => 'Фильтры, используемые во время выполнения',
  'LBL_RUNTIME_HELP' => 'Сделайте эту отметку, чтобы позволить пользователям изменять значение фильтра перед запуском отчёта.',
  'LBL_RUN_BUTTON_TITLE' => 'Запустить отчет [Alt+R]',
  'LBL_RUN_REPORT_BUTTON_KEY' => 'R',
  'LBL_RUN_REPORT_BUTTON_LABEL' => 'Запустить отчет',
  'LBL_RUN_TIME_LABEL' => 'Время запуска',
  'LBL_SAVED_SEARCH' => 'Имя текущего списка',
  'LBL_SAVE_AS' => 'Сохранить как',
  'LBL_SAVE_RUN' => 'Сохранить и запустить',
  'LBL_SCHEDULED_REPORT_MSG_BODY1' => 'и сохранен с именем "',
  'LBL_SCHEDULED_REPORT_MSG_BODY2' => '". Если Вы хотите изменить настройки отчетов, Вам необходимо зайти в приложение SugarCRM и пройти по вкладке "Отчеты"',
  'LBL_SCHEDULED_REPORT_MSG_INTRO' => 'В приложении - автоматически сгенерированный отчет, присланный Вам из приложения SugarCRM. Этот отчет был создан',
  'LBL_SCHEDULE_ACTIVE' => 'Активно',
  'LBL_SCHEDULE_EMAIL' => 'Запланировать отчет',
  'LBL_SCHEDULE_REPORT' => 'Запланировать отчет',
  'LBL_SCHEDULE_TYPE' => 'Тип расписания',
  'LBL_SEARCH_FORM_TITLE' => 'Список отчетов',
  'LBL_SELECT' => 'Выбрать',
  'LBL_SELECT_GROUP_BY' => 'Определить группу по',
  'LBL_SELECT_MODULE' => 'Выбор модуля',
  'LBL_SELECT_MODULE_BUTTON' => 'Кликните по ярлыку для выбора модуля.',
  'LBL_SELECT_RECORD' => 'Выбрать запись',
  'LBL_SELECT_REPORT_TYPE' => 'Щёлкните на иконке для выбора типа отчёта.',
  'LBL_SELECT_REPORT_TYPE_ICON' => 'Выбрать тип отчета',
  'LBL_SHOW' => 'Показать',
  'LBL_SHOW_DETAILS' => 'Показать детали',
  'LBL_SHOW_QUERY' => 'Показать запрос',
  'LBL_SORT' => 'Сортировка',
  'LBL_STARTS_WITH' => 'Начинается с',
  'LBL_START_DATE' => 'Дата начала',
  'LBL_STATUS' => 'Статус',
  'LBL_SUBJECT' => 'Тема',
  'LBL_SUBMIT_QUERY' => 'Отправить запрос',
  'LBL_SUCCESS_REPORT' => 'УСПЕШНО: Отчет',
  'LBL_SUM' => 'Сумма (итого)',
  'LBL_SUMMARY_COLUMNS' => 'Итоговые столбцы',
  'LBL_SUMMATION_REPORT' => 'Итоговый отчет',
  'LBL_SUMMATION_REPORT_DESC' => 'Создать отчет в виде таблиц, который выдаст рассчитанные данные для записей, соответствующих указанному критерию. Данные могут также быть предоставлены в виде графика.',
  'LBL_SUMMATION_REPORT_WITH_DETAILS' => 'Итоговый отчёт с подробностями',
  'LBL_SUMMATION_REPORT_WITH_DETAILS_DESC' => 'Создать итоговый отчёт, показывающий дополнительные данные, связанные с записями в результатах.',
  'LBL_SUMMATION_WITH_DETAILS' => 'Итог с подробностями',
  'LBL_TABLE_CHANGED' => 'Список модулей был изменён, пожалуйста, проверьте ещё раз критерии, введённые в панели Группа.',
  'LBL_TASK_REPORTS' => 'Отчеты по задаче',
  'LBL_TEAM' => 'Команды',
  'LBL_THERE_ARE_NO_REPORTS_OF_THIS_TYPE' => 'Нет отчётов данного типа.',
  'LBL_THIS_MONTH' => 'Этот месяц',
  'LBL_THIS_QUARTER' => 'Этот квартал',
  'LBL_THIS_WEEK' => 'Текущая неделя',
  'LBL_THIS_YEAR' => 'Этот год',
  'LBL_TIME_INTERVAL' => 'Период отчета',
  'LBL_TITLE' => 'Название',
  'LBL_TODAY' => 'Сегодня',
  'LBL_TOMORROW' => 'Завтра',
  'LBL_TOTAL' => 'Итого:',
  'LBL_TOTAL_IS' => 'Всего',
  'LBL_TO_PDF' => 'Сохранить в PDF',
  'LBL_TYPE' => 'Тип',
  'LBL_UNTITLED' => 'без названия',
  'LBL_UN_PUBLISH' => 'отменить публикацтю',
  'LBL_UP' => 'Вверх',
  'LBL_UPDATE_SCHEDULE' => 'Обновить расписание',
  'LBL_USER_EMPTY_HELP' => 'Для просмотра записей, не закреплённых ни за одним из пользователей, сделайте отметку напротив "Выборочные связанные записи" на стадии определения "Подробностей отчёта" в дополнение к использованию параметра "Пустой" для фильтра Назначенных пользователей. Это действие отобразит все записи, не связанные ни с одним из Пользователей.',
  'LBL_USE_COLUMN_FOR' => 'Группа данных',
  'LBL_VERT_BAR' => 'Вертикальная черта',
  'LBL_VIEW' => 'просмотр',
  'LBL_VIEWER_RUNTIME_HELP' => 'Задайте значения для Фильтров, используемых во время выполнения, и нажмите кнопку  "Применить фильтры", чтобы создать отчёт ещё раз.',
  'LBL_WAS_NOT_SAVED' => 'не был сохранен',
  'LBL_WAS_SAVED' => 'был сохранен',
  'LBL_WEIGHTED_AVG_AMOUNT' => 'Среднее количество',
  'LBL_WEIGHTED_SUM_AMOUNT' => 'Средняя сумма',
  'LBL_WHOSE_MAXIMUM' => 'где максимальное значение',
  'LBL_WHOSE_MINIMUM' => 'где минимальное значение',
  'LBL_WITH_AN_AVERAGE' => 'со средним значением',
  'LBL_WITH_A_TOTAL' => 'с итоговым значением',
  'LBL_WITH_DETAILS' => 'С подробностями',
  'LBL_WORKSHEET' => 'Планшет',
  'LBL_YEAR' => 'Год',
  'LBL_YESTERDAY' => 'Вчера',
  'LBL_YOU_HAVE_NO_SAVED_REPORTS.' => 'У Вас нет сохраненных отчетов.',
  'LNK_NEW_ACCOUNT' => 'Новый контрагент',
  'LNK_NEW_CALL' => 'Журнал звонков',
  'LNK_NEW_CASE' => 'Новое обращение',
  'LNK_NEW_CONTACT' => 'Новый контакт',
  'LNK_NEW_EMAIL' => 'Отправить E-mail в архив',
  'LNK_NEW_MEETING' => 'Назначить встречу',
  'LNK_NEW_NOTE' => 'Создать заметку или вложение',
  'LNK_NEW_OPPORTUNITY' => 'Новая сделка',
  'LNK_NEW_TASK' => 'Новая задача',
  'MSG_NO_PERMISSIONS' => 'У Вас нет прав редактировать этот отчет.',
  'MSG_UNABLE_PUBLISH_ANOTHER' => 'Невозможно опубликовать. Отчёт с таким именем уже опубликован.',
  'MSG_UNABLE_PUBLISH_YOU_OWN' => 'Невозможно отменить публикацию отчёта другого пользователя. У вас есть отчёт с таким же именем.',
  'REPORT_SCHEDULER_ACTIVE_ERROR' => '',
);

