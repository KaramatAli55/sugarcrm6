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
  'ERROR_EMPTY_RECORD_ID' => 'エラー: レコードIDが指定されていないか空です。',
  'ERROR_EMPTY_SOURCE_ID' => 'エラー: ソースIDが指定されていないか空です。',
  'ERROR_EMPTY_WRAPPER' => 'エラー: ソース[{$source_id}]へのラッパーインスタンスを取得できません。',
  'ERROR_NO_ADDITIONAL_DETAIL' => 'エラー: このレコードへの追加の詳細が見つかりません。',
  'ERROR_NO_CONNECTOR_DISPLAY_CONFIG_FILE' => 'エラー: このモジュールへコネクタが関連付けられていません。',
  'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'エラー: 結果に表示するモジュールフィールドが関連付けられていません。システム管理者に連絡してください。',
  'ERROR_NO_FIELDS_MAPPED' => 'エラー: モジュールのそれぞれのエントリのモジュールフィールドに少なくとも１つのコネクタフィールドを関連付けなければいけません。',
  'ERROR_NO_SEARCHDEFS_DEFINED' => 'このコネクタへモジュールが有効化されていません。コネクタを有効化ページでこのコネクタへのモジュールを選択してください。',
  'ERROR_NO_SEARCHDEFS_MAPPED' => 'エラー: 検索フィールドが定義されたコネクタが有効になっていません。',
  'ERROR_NO_SEARCHDEFS_MAPPING' => 'エラー: モジュールとコネクタに１つも検索フィールドが定義されていません。システム管理者に連絡してください。',
  'ERROR_NO_SOURCEDEFS_FILE' => 'エラー: sourcedefs.phpファイルが見つかりません。',
  'ERROR_NO_SOURCEDEFS_SPECIFIED' => 'エラー: どのデータを取得するかを指定したソースが見つかりません。',
  'ERROR_RECORD_NOT_SELECTED' => 'エラー: 実行前にリストからレコードを選択してください。',
  'LBL_ADDRCITY' => '市区町村',
  'LBL_ADDRCOUNTRY' => '国',
  'LBL_ADDRCOUNTRY_ID' => '国ID',
  'LBL_ADDRSTATEPROV' => '都道府県',
  'LBL_ADD_MODULE' => '追加',
  'LBL_ADMINISTRATION' => 'コネクタ管理者',
  'LBL_ADMINISTRATION_MAIN' => 'コネクタ設定',
  'LBL_AVAILABLE' => '利用可能',
  'LBL_BACK' => '< 戻る',
  'LBL_CLOSE' => '完了',
  'LBL_COMPANY_ID' => '会社ID',
  'LBL_CONFIRM_CONTINUE_SAVE' => 'いくつかの必須フィールドが空白のままです。変更を保存しますか？',
  'LBL_CONNECTOR' => 'コネクタ',
  'LBL_CONNECTOR_FIELDS' => 'コネクタフィールド',
  'LBL_DATA' => '日付',
  'LBL_DEFAULT' => 'デフォルト',
  'LBL_DELETE_MAPPING_ENTRY' => '本当にこのエントリを削除してよいですか？',
  'LBL_DISABLED' => '無効',
  'LBL_DUNS' => 'DUNS(企業識別コード)',
  'LBL_EMPTY_BEANS' => '検索条件に適合するものはありません。',
  'LBL_ENABLED' => '有効',
  'LBL_EXTERNAL' => 'このコネクタ用の外部アカウントの作成をユーザに許可します。',
  'LBL_EXTERNAL_SET_PROPERTIES' => 'このコネクタを利用するには、コネクタプロパティの設定でプロパティを設定する必要があります。',
  'LBL_FINSALES' => 'Finsales',
  'LBL_INFO_INLINE' => '情報',
  'LBL_MARKET_CAP' => '時価総額',
  'LBL_MERGE' => 'マージ',
  'LBL_MODIFY_DISPLAY_DESC' => 'それぞれのコネクタでどのモジュールを有効化するか選択してください。',
  'LBL_MODIFY_DISPLAY_PAGE_TITLE' => 'コネクタ設定: コネクタを有効化',
  'LBL_MODIFY_DISPLAY_TITLE' => 'コネクタを有効化',
  'LBL_MODIFY_MAPPING_DESC' => 'どのコネクタのデータがモジュールのレコードに対して表示・マージされるかを決めるため、コネクタフィールドとモジュールフィールドを関連付けます。',
  'LBL_MODIFY_MAPPING_PAGE_TITLE' => 'コネクタ設定: コネクタフィールドの関連付け',
  'LBL_MODIFY_MAPPING_TITLE' => 'コネクタフィールドを関連付け',
  'LBL_MODIFY_PROPERTIES_DESC' => 'それぞれのコネクタのプロパティの設定 (URLやAPIキーを含む)',
  'LBL_MODIFY_PROPERTIES_PAGE_TITLE' => 'コネクタ設定: コネクタプロパティの設定',
  'LBL_MODIFY_PROPERTIES_TITLE' => 'コネクタプロパティの設定',
  'LBL_MODIFY_SEARCH' => '検索',
  'LBL_MODIFY_SEARCH_DESC' => 'それぞれのモジュールのデータを検索する際に利用するコネクタフィールドを選択してください。',
  'LBL_MODIFY_SEARCH_PAGE_TITLE' => 'コネクタ設定: コネクタ検索の管理',
  'LBL_MODIFY_SEARCH_TITLE' => 'コネクタ検索の管理',
  'LBL_MODULE_FIELDS' => 'モジュールフィールド',
  'LBL_MODULE_NAME' => 'コネクタ',
  'LBL_MODULE_NAME_SINGULAR' => 'コネクタ',
  'LBL_NO_PROPERTIES' => 'このコネクタに設定できるプロパティはありません。',
  'LBL_PARENT_DUNS' => '親DUNS(企業識別コード)',
  'LBL_PREVIOUS' => '< 戻る',
  'LBL_QUOTE' => '見積',
  'LBL_RECNAME' => '会社名',
  'LBL_RESET_BUTTON_TITLE' => 'リセット [Alt+R]',
  'LBL_RESET_TO_DEFAULT' => 'デフォルトに戻す',
  'LBL_RESET_TO_DEFAULT_CONFIRM' => '本当にデフォルト設定に戻してよいですか？',
  'LBL_RESULT_LIST' => 'データリスト',
  'LBL_RUN_WIZARD' => 'ウィザードの実行',
  'LBL_SAVE' => '保存',
  'LBL_SEARCHING_BUTTON_LABEL' => '検索中...',
  'LBL_SHOW_IN_LISTVIEW' => 'マージ一覧画面に表示',
  'LBL_SMART_COPY' => 'スマートコピー',
  'LBL_STEP1' => 'データの検索と閲覧',
  'LBL_STEP2' => 'レコードのマージ',
  'LBL_SUMMARY' => '概要',
  'LBL_TEST_SOURCE' => 'コネクタのテスト',
  'LBL_TEST_SOURCE_FAILED' => 'テスト失敗',
  'LBL_TEST_SOURCE_RUNNING' => 'テスト実行中...',
  'LBL_TEST_SOURCE_SUCCESS' => 'テスト成功',
  'LBL_TITLE' => 'データマージ',
  'LBL_ULTIMATE_PARENT_DUNS' => 'ルートDUNS(企業識別コード)',
);

