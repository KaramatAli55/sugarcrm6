<?php 
 $GLOBALS["dictionary"]["Worksheet"]=array (
  'table' => 'worksheet',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_WK_ID',
      'type' => 'id',
      'reportable' => false,
      'comment' => 'Unique identifier',
    ),
    'user_id' => 
    array (
      'name' => 'user_id',
      'vname' => 'LBL_WK_USER_ID',
      'type' => 'id',
      'reportable' => false,
      'comment' => 'User to which this worksheet pertains',
    ),
    'timeperiod_id' => 
    array (
      'name' => 'timeperiod_id',
      'vname' => 'LBL_WK_TIMEPERIOD_ID',
      'type' => 'id',
      'reportable' => false,
      'comment' => 'ID of the associated time period for this worksheet',
    ),
    'forecast_type' => 
    array (
      'name' => 'forecast_type',
      'vname' => 'LBL_WK_FORECAST_TYPE',
      'type' => 'varchar',
      'len' => 100,
      'comment' => 'Indicator of whether worksheet is direct or rollup',
    ),
    'related_id' => 
    array (
      'name' => 'related_id',
      'vname' => 'LBL_WK_RELATED_ID',
      'type' => 'id',
      'reportable' => false,
      'comment' => 'User ID or Opportunity ID for this worksheet',
    ),
    'related_forecast_type' => 
    array (
      'name' => 'related_forecast_type',
      'vname' => 'LBL_WK_FORECAST_TYPE',
      'type' => 'varchar',
      'len' => 100,
      'comment' => 'Direct or rollup, or null if related_id is an Opportunity',
    ),
    'best_case' => 
    array (
      'name' => 'best_case',
      'vname' => 'LB_BEST_CASE_VALUE',
      'type' => 'long',
      'comment' => 'Best case worksheet amount',
    ),
    'likely_case' => 
    array (
      'name' => 'likely_case',
      'vname' => 'LB_LIKELY_VALUE',
      'type' => 'long',
      'comment' => 'Likely case worksheet amount',
    ),
    'worst_case' => 
    array (
      'name' => 'worst_case',
      'vname' => 'LB_WORST_CASE_VALUE',
      'type' => 'long',
      'comment' => 'Worst case worksheet amount',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'comment' => 'Date record modified',
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED_USER_ID',
      'type' => 'id',
      'len' => 36,
      'comment' => 'User ID that last modified record',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'worksheetpk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'related_calc_fields' => 
  array (
  ),
);