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
function closePopup(){var closePopup=window.opener.get_close_popup();if(closePopup)
{window.close();}}
function confirmDialog(arrayContents,formName){var newData='';var labels='';var oldData='';eval("var data = {"+arrayContents.join(",")+"}");var opener=window.opener.document;for(var key in data)
{var displayValue=replaceHTMLChars(data[key]);if(opener.forms[formName]&&opener.getElementById(key+'_label')!=null&&!key.match(/account/))
{var dataLabel=opener.getElementById(key+'_label').innerHTML.replace(/\n/gi,'').replace(/<\/?[^>]+(>|$)/g,"");labels+=dataLabel+' \n';newData+=dataLabel+' '+displayValue+'\n';if(window.opener.document.forms[formName].elements[key]){oldData+=dataLabel+' '+opener.forms[formName].elements[key].value+'\n';}}}
var popupConfirm=0;if(data['account_id']&&(newData.split("\n").length-1)>2)
{if(newData!=oldData&&oldData!=labels)
{if(confirm(SUGAR.language.get('app_strings','NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM')+'\n\n'+newData))
{popupConfirm=1;}else{popupConfirm=-1;}}}
return popupConfirm;}
function send_back(module,id)
{var associated_row_data=associated_javascript_data[id];eval("var temp_request_data = "+window.document.forms['popup_query_form'].request_data.value);if(temp_request_data.jsonObject){var request_data=temp_request_data.jsonObject;}else{var request_data=temp_request_data;}
var passthru_data=Object();if(typeof(request_data.passthru_data)!='undefined')
{passthru_data=request_data.passthru_data;}
var form_name=request_data.form_name;var field_to_name_array=request_data.field_to_name_array;var call_back_function=eval("window.opener."+request_data.call_back_function);var array_contents=Array();var fill_array_contents=function(the_key,the_name)
{var the_value='';if(module!=''&&id!=''){if(associated_row_data['DOCUMENT_NAME']&&the_key.toUpperCase()=="NAME"){the_value=associated_row_data['DOCUMENT_NAME'];}else if((the_key.toUpperCase()=='USER_NAME'||the_key.toUpperCase()=='LAST_NAME'||the_key.toUpperCase()=='FIRST_NAME')&&typeof(is_show_fullname)!='undefined'&&is_show_fullname&&form_name!='search_form'){the_value=associated_row_data['FULL_NAME'];}else{the_value=associated_row_data[the_key.toUpperCase()];}}
if(typeof(the_value)=='string'){the_value=the_value.replace(/\r\n|\n|\r/g,'\\n');}
array_contents.push('"'+the_name+'":"'+the_value+'"');}
for(var the_key in field_to_name_array)
{if(the_key!='toJSON')
{if(YAHOO.lang.isArray(field_to_name_array[the_key])){for(var i=0;i<field_to_name_array[the_key].length;i++){fill_array_contents(the_key,field_to_name_array[the_key][i]);}}
else{fill_array_contents(the_key,field_to_name_array[the_key]);}}}
var popupConfirm=confirmDialog(array_contents,form_name);eval("var name_to_value_array = {"+array_contents.join(",")+"}");closePopup();var result_data={"form_name":form_name,"name_to_value_array":name_to_value_array,"passthru_data":passthru_data,"popupConfirm":popupConfirm};call_back_function(result_data);}
function send_back_teams(module,form,field,error_message,request_data,form_team_id)
{var array_contents=Array();if(form_team_id){array_contents.push(form_team_id);}else{var j=0;for(i=0;i<form.elements.length;i++){if(form.elements[i].name==field){if(form.elements[i].checked==true){array_contents.push(form.elements[i].value);}}}}
if(array_contents.length==0){window.alert(error_message);return;}
var field_to_name_array=request_data.field_to_name_array;var array_teams=new Array();for(team_id in array_contents){if(typeof array_contents[team_id]=='string'){var team={"team_id":associated_javascript_data[array_contents[team_id]].ID,"team_name":associated_javascript_data[array_contents[team_id]].NAME};array_teams.push(team);}}
var passthru_data=Object();if(typeof request_data.call_back_function=='undefined'&&typeof request_data=='object'){request_data=YAHOO.lang.JSON.parse(request_data.value);}
if(typeof(request_data.passthru_data)!='undefined')
{passthru_data=request_data.passthru_data;}
var form_name=request_data.form_name;var field_name=request_data.field_name;closePopup();var call_back_function=eval("window.opener."+request_data.call_back_function);var result_data={"form_name":form_name,"field_name":field_name,"teams":array_teams,"passthru_data":passthru_data};call_back_function(result_data);}
function send_back_selected(module,form,field,error_message,request_data)
{var array_contents=Array();var j=0;for(i=0;i<form.elements.length;i++){if(form.elements[i].name==field){if(form.elements[i].checked==true){++j;array_contents.push('"'+"ID_"+j+'":"'+form.elements[i].value+'"');}}}
if(array_contents.length==0){window.alert(error_message);return;}
eval("var selection_list_array = {"+array_contents.join(",")+"}");eval("var temp_request_data = "+window.document.forms['popup_query_form'].request_data.value);if(temp_request_data.jsonObject){var request_data=temp_request_data.jsonObject;}else{var request_data=temp_request_data;}
var passthru_data=Object();if(typeof(request_data.passthru_data)!='undefined')
{passthru_data=request_data.passthru_data;}
var form_name=request_data.form_name;var field_to_name_array=request_data.field_to_name_array;closePopup();var call_back_function=eval("window.opener."+request_data.call_back_function);var result_data={"form_name":form_name,"selection_list":selection_list_array,"passthru_data":passthru_data,"select_entire_list":form.select_entire_list.value,"current_query_by_page":form.current_query_by_page.value};call_back_function(result_data);}
function toggleMore(spanId,img_id,module,action,params){toggle_more_go=function(){oReturn=function(body,caption,width,theme){$(".ui-dialog").find(".open").dialog("close");var el='#'+spanId+' img';if(action=='DisplayInlineTeams')
{el='#'+spanId;}
var $dialog=$('<div class="open"></div>').html(body).dialog({autoOpen:false,title:caption,width:300,position:{my:'right top',at:'left top',of:$(el)}});var width=$dialog.dialog("option","width");var pos=$(el).offset();var ofWidth=$(el).width();if((pos.left+ofWidth)-40<width){$dialog.dialog("option","position",{my:'left top',at:'right top',of:$(el)});}
$dialog.dialog('open');}
success=function(data){eval(data.responseText);SUGAR.util.additionalDetailsCache[spanId]=new Array();SUGAR.util.additionalDetailsCache[spanId]['body']=result['body'];SUGAR.util.additionalDetailsCache[spanId]['caption']=result['caption'];SUGAR.util.additionalDetailsCache[spanId]['width']=result['width'];SUGAR.util.additionalDetailsCache[spanId]['theme']=result['theme'];ajaxStatus.hideStatus();return oReturn(SUGAR.util.additionalDetailsCache[spanId]['body'],SUGAR.util.additionalDetailsCache[spanId]['caption'],SUGAR.util.additionalDetailsCache[spanId]['width'],SUGAR.util.additionalDetailsCache[spanId]['theme']);}
if(typeof SUGAR.util.additionalDetailsCache[spanId]!='undefined')
return oReturn(SUGAR.util.additionalDetailsCache[spanId]['body'],SUGAR.util.additionalDetailsCache[spanId]['caption'],SUGAR.util.additionalDetailsCache[spanId]['width'],SUGAR.util.additionalDetailsCache[spanId]['theme']);if(typeof SUGAR.util.additionalDetailsCalls[spanId]!='undefined')
return;ajaxStatus.showStatus(SUGAR.language.get('app_strings','LBL_LOADING'));url='index.php?module='+module+'&action='+action+'&'+params;SUGAR.util.additionalDetailsCalls[spanId]=YAHOO.util.Connect.asyncRequest('GET',url,{success:success,failure:success});return false;}
SUGAR.util.additionalDetailsRpcCall=window.setTimeout('toggle_more_go()',250);}
SUGAR.util.doWhen("window.document.forms['popup_query_form'] != null "
+"&& typeof(window.document.forms['popup_query_form'].request_data) != 'undefined'",function(){if(window.document.forms['popup_query_form'].request_data.value=="")
{window.document.forms['popup_query_form'].request_data.value=window.opener.get_popup_request_data();}});$(document).ready(function(){$("ul.clickMenu").each(function(index,node){$(node).sugarActionMenu();});});