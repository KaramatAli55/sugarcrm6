{*

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




*}


<div style='width: 400px'>
<form name='configure_{$id}' action="index.php" method="post" onSubmit='return SUGAR.dashlets.postForm("configure_{$id}", SUGAR.mySugar.uncoverPage);'>
<input type='hidden' name='id' value='{$id}'>
<input type='hidden' name='module' value='{$module}'>
<input type='hidden' name='action' value='DynamicAction'>
<input type='hidden' name='DynamicAction' value='configureDashlet'>
<input type='hidden' name='to_pdf' value='true'>
<input type='hidden' name='configure' value='true'>
<input type='hidden' id='dashletType' name='dashletType' value='{$dashletType}' />
<table width="400" cellpadding="0" cellspacing="0" border="0" class="edit view" align="center">
<tr>
    <td valign='top' class='dataLabel' nowrap>{$LBL_TITLE} <br /></td>
    <td valign='top' class='dataField'>
    	<input type="text" value="{$dashlet_title}" size="30" name="pbss_dashlet_title"/>
    </td>
</tr>
<tr>
	<td valign='top' nowrap class='dataLabel'>{$LBL_CHART_TYPE} <br /></td>
	<td valign='top' class='dataField'>
    	<select name="pbss_chart_type">
    		{$chart_type_options}
    	</select>
    </td>
</tr>
<tr>
    <td valign='top' nowrap class='dataLabel'>{$LBL_DATE_START} <br><i>{$user_date_format}</i></td>
    <td valign='top' class='dataField'>
    	<input onblur="parseDate(this, '{$cal_dateformat}');" class="text" name="pbss_date_start" size='12' maxlength='10' id='date_start' value='{$date_start}'>
    	{sugar_getimage name="jscalendar" ext=".gif" alt=$LBL_ENTER_DATE other_attributes='align="absmiddle" id="date_start_trigger" '}
    </td>
</tr>
<tr>
    <td valign='top' nowrap class='dataLabel'>{$LBL_DATE_END}<br><i>{$user_date_format}</i></td>
    <td valign='top' class='dataField'>
    	<input onblur="parseDate(this, '{$cal_dateformat}');" class="text" name="pbss_date_end" size='12' maxlength='10' id='date_end' value='{$date_end}'>
    	{sugar_getimage name="jscalendar" ext=".gif" alt=$LBL_ENTER_DATE other_attributes='align="absmiddle" id="date_end_trigger" '}
    </td>
</tr>

    <tr>
    <td valign='top' class='dataLabel' nowrap>{$LBL_SALES_STAGES}</td>
    <td valign='top' class='dataField'>
    	<select name="pbss_sales_stages[]" multiple size='3'>
    		{$selected_datax}
    	</select></td>
    </tr>

<tr>
    <td align="right" colspan="2">
        <input type='submit' onclick="" class='button' value='{$LBL_SUBMIT_BUTTON_LABEL}'>
   	</td>
</tr>
</table>
</form>
{literal}
<script type="text/javascript">
Calendar.setup ({
    inputField : "date_start", ifFormat : "{/literal}{$cal_dateformat}{literal}", showsTime : false, button : "date_start_trigger", singleClick : true, step : 1, weekNumbers:false
});
Calendar.setup ({
    inputField : "date_end", ifFormat : "{/literal}{$cal_dateformat}{literal}", showsTime : false, button : "date_end_trigger", singleClick : true, step : 1, weekNumbers:false
});
{/literal}
</script>
</div>