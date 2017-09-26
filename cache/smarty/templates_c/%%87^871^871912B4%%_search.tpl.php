<?php /* Smarty version 2.6.11, created on 2017-09-26 04:32:53
         compiled from themes/Sugar/tpls/_search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getimagepath', 'themes/Sugar/tpls/_search.tpl', 5, false),)), $this); ?>
<div class="dcmenuDivider" id="searchDivider"></div>
<div id="dcmenuSearchDiv">
        <div id="sugar_spot_search_div">
            <input size=20 id='sugar_spot_search' accesskey="0" title='' <?php if ($this->_tpl_vars['ACTION'] == 'spot' && $this->_tpl_vars['FULL'] == 'true'): ?>style="display: none;"<?php endif; ?>/>
            <img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "info-del.png"), $this);?>
" id="close_spot_search"/>
            <div id="sugar_spot_search_results" style="display:none;">
                <?php if ($this->_tpl_vars['FTS_AUTOCOMPLETE_ENABLE']): ?>
                <div align="right">
                    <p class="fullResults"><a href="index.php?module=Home&action=spot&full=true"><?php echo $this->_tpl_vars['APP']['LNK_ADVANCED_SEARCH']; ?>
</a></p>
                </div>
                <?php endif; ?>
            </div>

            <div id="sugar_spot_ac_results"></div>
        </div>
    <?php if ($this->_tpl_vars['FTS_AUTOCOMPLETE_ENABLE']): ?>
        <div id="glblSearchBtn" title='<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_TIPS']; ?>
' <?php if ($this->_tpl_vars['ACTION'] == 'spot' && $this->_tpl_vars['FULL'] == 'true'): ?>style="display: none;"<?php endif; ?>><?php echo $this->_tpl_vars['ICONSEARCH']; ?>

    <?php else: ?>
        <div id="glblSearchBtn" title='<?php echo $this->_tpl_vars['APP']['LBL_ALT_SPOT_SEARCH']; ?>
' <?php if ($this->_tpl_vars['ACTION'] == 'spot' && $this->_tpl_vars['FULL'] == 'true'): ?>style="display: none;"<?php endif; ?>><?php echo $this->_tpl_vars['ICONSEARCH']; ?>

    <?php endif; ?>
    </div>
</div>

</div>

<script>
    var search_text = '<?php echo $this->_tpl_vars['APP']['LBL_SEARCH']; ?>
';
    var searchTip = '<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_TIPS']; ?>
';
    var searchTip2 = '<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_TIPS_2']; ?>
';
<?php echo '
$("#sugar_spot_search").ready(function() {
    $("#sugar_spot_search").val(search_text);
    $("#sugar_spot_search").css(\'color\', \'grey\');
    $("#sugar_spot_search").focus(function() {
        if ($("#sugar_spot_search").val()==search_text) {
            $("#sugar_spot_search").val(\'\');
            $(\'#sugar_spot_search\').css(\'color\', \'black\');
        }
    });
});
'; ?>

</script>

<?php if ($this->_tpl_vars['FTS_AUTOCOMPLETE_ENABLE']):  echo '
<script>
    $("#glblSearchBtn").click(function(){
        SUGAR.util.doWhen(function(){
            return document.getElementById(\'SpotResults\') != null;
        }, SUGAR.themes.resizeSearch);
    });
    var data = encodeURIComponent(YAHOO.lang.JSON.stringify({\'method\':\'fts_query\',\'conditions\':[]}));
    var autoCom = $( "#sugar_spot_search" ).autocomplete({
        source: \'index.php?to_pdf=true&module=Home&action=quicksearchQuery&append_wildcard=true&data=\'+data,
        minLength: 3,
        search: function(event,ui){
            $("#glblSearchBtn").attr(\'title\', searchTip2 + " \'" + $("#sugar_spot_search").val() + "\'.");
            $("#glblSearchBtn").tipTip({maxWidth: "auto", edgeOffset: 10});
            $("#glblSearchBtn").mouseover();
            setTimeout("$(\'#glblSearchBtn\').mouseout();$(\'#glblSearchBtn\').attr(\'title\', searchTip);$(\'#glblSearchBtn\').tipTip({maxWidth: \'auto\', edgeOffset: 10});", 7500);
        var el = $("#sugar_spot_search_results");
                   if ( !el.is(":visible") ) {
                       el.html(\'\');
                       el.show();
                   }
            $(\'#sugar_spot_search_results\').showLoading();
        }
    	}).data( "autocomplete" )._response = function(content)
        {
            var el = $("#sugar_spot_search_results");
            if ( !el.is(":visible") ) {
                el.show();
            }
            if(typeof(content.results) != \'undefined\'){
                el.html( content.results);
            }
            this.pending--;

            $(\'#sugar_spot_search_results\').hideLoading();
        };


    $( "#sugar_spot_search" ).bind( "focus.autocomplete", function() {

        //If theres old data, clear it.
          if( $("#sugar_spot_search_results").find(\'section\').length > 0 )
              $("#sugar_spot_search_results").html(\'\');
        //$(\'#sugar_spot_search_div\').css("width",240);
		//$(\'#sugar_spot_search\').css("width",215);
        $("#sugar_spot_search_results").show();
    });


</script>
'; ?>

<?php endif; ?>