<?php /* Smarty version 2.6.11, created on 2017-09-26 04:32:04
         compiled from themes/Sugar/tpls/_dcmenu.tpl */ ?>
<?php if ($this->_tpl_vars['AUTHENTICATED']):  echo $this->_tpl_vars['DCSCRIPT']; ?>

<div id='dcmenutop'></div>
<div id='dcmenu' class='dcmenu dcmenuFloat' style="z-index: 20;">
<div id='ie8GradientFix'></div>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "themes/Sugar/tpls/_headerModuleList.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    
    <?php if ($this->_tpl_vars['AUTHENTICATED']): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "themes/Sugar/tpls/_quickcreate.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "themes/Sugar/tpls/_globalLinks.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "themes/Sugar/tpls/_search.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    
	<?php endif; ?>
</div>
<?php endif; ?>