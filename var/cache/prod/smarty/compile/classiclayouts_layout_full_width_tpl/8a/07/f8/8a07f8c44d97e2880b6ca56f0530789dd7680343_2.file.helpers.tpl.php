<?php
/* Smarty version 3.1.48, created on 2023-07-09 22:34:07
  from '/var/www/html/prest17/prestashop17/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64ab19bf884a10_34651997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a07f8c44d97e2880b6ca56f0530789dd7680343' => 
    array (
      0 => '/var/www/html/prest17/prestashop17/themes/classic/templates/_partials/helpers.tpl',
      1 => 1681999934,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ab19bf884a10_34651997 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/html/prest17/prestashop17/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/8a/07/f8/8a07f8c44d97e2880b6ca56f0530789dd7680343_2.file.helpers.tpl.php',
    'uid' => '8a07f8c44d97e2880b6ca56f0530789dd7680343',
    'call_name' => 'smarty_template_function_renderLogo_213352001764ab19bf87d630_40318753',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_213352001764ab19bf87d630_40318753 */
if (!function_exists('smarty_template_function_renderLogo_213352001764ab19bf87d630_40318753')) {
function smarty_template_function_renderLogo_213352001764ab19bf87d630_40318753(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_213352001764ab19bf87d630_40318753 */
}
