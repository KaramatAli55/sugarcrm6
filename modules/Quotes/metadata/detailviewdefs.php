<?php
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

$viewdefs['Quotes']['DetailView'] = array(
'templateMeta' => array('form' =>array('closeFormBeforeCustomButtons' => true,
						'links'=> array('{$MOD.PDF_FORMAT} <select name="sugarpdf" id="sugarpdf">{$LAYOUT_OPTIONS}</select></form>'),
                        'buttons'=> array('EDIT', 'DUPLICATE', 'DELETE',
		                                         array('customCode'=>'<form action="index.php" method="POST" name="Quote2Opp" id="form"><input type="hidden" name="module" value="Quotes"><input type="hidden" name="record" value="{$fields.id.value}"><input type="hidden" name="user_id" value="{$current_user->id}"><input type="hidden" name="team_id" value="{$fields.team_id.value}"><input type="hidden" name="user_name" value="{$current_user->user_name}"><input type="hidden" name="action" value="QuoteToOpportunity"><input type="hidden" name="opportunity_subject" value="{$fields.name.value}"><input type="hidden" name="opportunity_name" value="{$fields.name.value}"><input type="hidden" name="opportunity_id" value="{$fields.billing_account_id.value}"><input type="hidden" name="amount" value="{$fields.total.value}"><input type="hidden" name="valid_until" value="{$fields.date_quote_expected_closed.value}"><input type="hidden" name="currency_id" value="{$fields.currency_id.value}"><input title="{$APP.LBL_QUOTE_TO_OPPORTUNITY_TITLE}" class="button" type="submit" name="opp_to_quote_button" value="{$APP.LBL_QUOTE_TO_OPPORTUNITY_LABEL}"></form>'),
		                                         array('customCode'=>'<form action="index.php" method="{$PDFMETHOD}" name="ViewPDF" id="form"><input type="hidden" name="module" value="Quotes"><input type="hidden" name="record" value="{$fields.id.value}"><input type="hidden" name="action" value="sugarpdf"><input type="hidden" name="email_action"><input title="{$APP.LBL_EMAIL_PDF_BUTTON_TITLE}" class="button" type="submit" name="button" value="{$APP.LBL_EMAIL_PDF_BUTTON_LABEL}" onclick="this.form.email_action.value=\'EmailLayout\';"> <input title="{$APP.LBL_VIEW_PDF_BUTTON_TITLE}" class="button" type="submit" name="button" value="{$APP.LBL_VIEW_PDF_BUTTON_LABEL}">')
		                                         ),
                        'footerTpl'=>'modules/Quotes/tpls/DetailViewFooter.tpl'),
                        'maxColumns' => '2', 
                        'widths' => array(
                                        array('label' => '10', 'field' => '30'), 
                                        array('label' => '10', 'field' => '30')
                                        ),
                        ),
'panels' => array (

	'lbl_quote_information' => array(  
	  array (
		    array (
		      'name' => 'name',
		      'label' => 'LBL_QUOTE_NAME',
		    ),
		    array(
	          'name'=>'opportunity_name', 
	        ),
	  ),
	  
	  array (
		    'quote_num',
		    'quote_stage',
	  ),
	  
	  array (
		    'purchase_order_num',
		    
		    array (
		      'name' => 'date_quote_expected_closed',
		      'label' => 'LBL_DATE_QUOTE_EXPECTED_CLOSED',
		    ),
	  ),
	  
	  array (
		    'payment_terms',
		    'original_po_date',
	  ),
	  
	  array (
	        'billing_account_name',
	        'shipping_account_name',
	  ),
	  
	  array (
		    'billing_contact_name',
		    'shipping_contact_name'
	  ),  
	  
	  array (
	  
	      array (
		      'name' => 'billing_address_street',
		      'label'=> 'LBL_BILL_TO',
		      'type' => 'address',
		      'displayParams'=>array('key'=>'billing'),
	      ),
	      
	      array (
		      'name' => 'shipping_address_street',
		      'label'=> 'LBL_SHIP_TO',
		      'type' => 'address',
		      'displayParams'=>array('key'=>'shipping'),      
	      ),
	    ),
	  
	  array (
		    'description',
	  ),
	),
	'LBL_PANEL_ASSIGNMENT' => array(
        array (
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          array (
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
          ),
        ),
        array (
		  'team_name', 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          ),
        ),	
	),
  
) 
);

?>
