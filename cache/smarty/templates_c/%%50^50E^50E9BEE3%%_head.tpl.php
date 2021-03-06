<?php /* Smarty version 2.6.11, created on 2017-09-26 04:32:04
         compiled from themes/Sugar/tpls/_head.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'themes/Sugar/tpls/_head.tpl', 24, false),array('function', 'sugar_getimagepath', 'themes/Sugar/tpls/_head.tpl', 32, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html <?php echo $this->_tpl_vars['langHeader']; ?>
>
<head>
<link rel="SHORTCUT ICON" href="<?php echo $this->_tpl_vars['FAVICON_URL']; ?>
">
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['APP']['LBL_CHARSET']; ?>
">
<title><?php echo $this->_tpl_vars['SYSTEM_NAME']; ?>
</title>
<?php echo $this->_tpl_vars['SUGAR_CSS']; ?>

<?php if ($this->_tpl_vars['AUTHENTICATED']): ?>
<link rel='stylesheet' href='<?php echo smarty_function_sugar_getjspath(array('file' => "include/ytree/TreeView/css/folders/tree.css"), $this);?>
'/>
<link rel='stylesheet' href='<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarCharts/Jit/css/base.css"), $this);?>
'/>
<?php endif;  echo $this->_tpl_vars['SUGAR_JS']; ?>

<?php echo '
<script type="text/javascript">
<!--
SUGAR.themes.theme_name      = \'';  echo $this->_tpl_vars['THEME'];  echo '\';
SUGAR.themes.hide_image      = \'';  echo smarty_function_sugar_getimagepath(array('file' => "hide.gif"), $this); echo '\';
SUGAR.themes.show_image      = \'';  echo smarty_function_sugar_getimagepath(array('file' => "show.gif"), $this); echo '\';
SUGAR.themes.loading_image      = \'';  echo smarty_function_sugar_getimagepath(array('file' => "img_loading.gif"), $this); echo '\';
if ( YAHOO.env.ua )
    UA = YAHOO.env.ua;
-->


</script>
'; ?>

</head>