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


/**
 * Edit functions for EAPM
 */
function EAPMChange() {
    var apiName = '';
    var passwordPlaceholder = '::PASSWORD::';

    if ( EAPMFormName == 'EditView' ) {
        apiName = document.getElementById('application').value;
    } else {
        apiName = document.getElementById('application_raw').value;
    }
    if(SUGAR.eapm[apiName]){
        var apiOpts = SUGAR.eapm[apiName];

        var urlObj = new SUGAR.forms.VisibilityAction('url',(apiOpts.needsUrl?'true':'false'), EAPMFormName);
        urlObj.setContext(new SUGAR.forms.FormExpressionContext(this.form));
        if ( EAPMFormName == 'EditView' ) {
            EAPMSetFieldRequired('url',(apiOpts.needsUrl == true));
        }

        var userObj = new SUGAR.forms.VisibilityAction('name',((apiOpts.authMethod=='password')?'true':'false'), EAPMFormName);
        userObj.setContext(new SUGAR.forms.FormExpressionContext(this.form));
        if ( EAPMFormName == 'EditView' ) {
            EAPMSetFieldRequired('name',(apiOpts.authMethod == 'password'));
        }

        var passObj = new SUGAR.forms.VisibilityAction('password',((apiOpts.authMethod=='password')?'true':'false'), EAPMFormName);
        passObj.setContext(new SUGAR.forms.FormExpressionContext(this.form));
        if ( EAPMFormName == 'EditView' ) {
            EAPMSetFieldRequired('password',(apiOpts.authMethod == 'password'));
            var $el = $('#password');

            //Setup a toggle to prevent accidental password changes since we no longer send the real password
            //to the browser
            if ($el.val() == passwordPlaceholder) {
                var instructions = $(EAPMBClickToEdit);
                instructions.click(function(e) {
                    e.preventDefault();
                    $el.val('');
                    instructions.hide();
                    $el.show();
                    $el.focus();
                });
                $el.parent().append(instructions);
                $el.hide();
                $el.focusout(function() {
                    if ($el.val() == '') {
                        $el.val(passwordPlaceholder);
                        instructions.show();
                        $el.hide();
                    }
                });
            }
        }

        urlObj.exec();
        userObj.exec();
        passObj.exec();

        //hide/show new window notice
        var messageDiv = document.getElementById('eapm_notice_div');
        if ( typeof messageDiv != 'undefined' && messageDiv != null ) {
            if(apiOpts.authMethod){
                if(apiOpts.authMethod == "oauth"){
                    messageDiv.innerHTML = EAPMOAuthNotice;
                }else{
                    messageDiv.innerHTML = EAPMBAsicAuthNotice;
                }
            }else{
                messageDiv.innerHTML = EAPMBAsicAuthNotice;
            }
        }
    }
}

function EAPMSetFieldRequired(fieldName, isRequired) {
    var formname = 'EditView';
    for(var i = 0; i < validate[formname].length; i++){
		if(validate[formname][i][0] == fieldName){
            validate[formname][i][2] = isRequired;
		}
    }
}

function EAPMEditStart(userIsAdmin) {
    var apiElem = document.getElementById('application');

    EAPM_url_validate = null;
    EAPM_name_validate = null;
    EAPM_password_validate = null;

    apiElem.onchange = EAPMChange;

    setTimeout(EAPMChange,100);
    
    if ( !userIsAdmin ) {
        // Disable the assigned user picker for non-admins
        document.getElementById('assigned_user_name').parentNode.innerHTML = document.getElementById('assigned_user_name').value;
    }

    // Disable the app picker if we are editing an existing record.
    if ( apiElem.form.record.value != '' ) {
        apiElem.disabled = true;
    }
}

var EAPMPopupCheckCount = 0;
function EAPMPopupCheck(newWin, popup_url, redirect_url, popup_warning_message) {
    if ( newWin == false || newWin == null || typeof newWin.close != 'function' || EAPMPopupCheckCount > 35 ) {
        // Opening the popup failed, redirect them to the popup_url
        alert(popup_warning_message);
        document.location = redirect_url;
        return;
    }
    
    if ( typeof(newWin.innerHeight) != 'undefined' && newWin.innerHeight != 0 ) {
        // Popup was successful
        document.location = redirect_url;
        return;
    }

    // If we are here, we don't know if it worked or not.
    EAPMPopupCheckCount++;
    setTimeout(function() { EAPMPopupCheck(newWin, popup_url, redirect_url, popup_warning_message); },100);
}

function EAPMPopupAndRedirect(popup_url, redirect_url, popup_warning_message) {
    var newWin = false;

    try {
        newWin = window.open(popup_url + '&closeWhenDone=1&refreshParentWindow=1','_blank');
    } catch (e) {
        newWin = false;
    }

    EAPMPopupCheck(newWin, popup_url, redirect_url, popup_warning_message);
}