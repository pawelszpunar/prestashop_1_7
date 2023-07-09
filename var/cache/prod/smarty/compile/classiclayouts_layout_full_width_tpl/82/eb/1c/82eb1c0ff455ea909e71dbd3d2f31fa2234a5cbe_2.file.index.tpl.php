<?php
/* Smarty version 3.1.48, created on 2023-07-09 22:34:07
  from '/var/www/html/prest17/prestashop17/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64ab19bf85ebb9_01196123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82eb1c0ff455ea909e71dbd3d2f31fa2234a5cbe' => 
    array (
      0 => '/var/www/html/prest17/prestashop17/themes/classic/templates/index.tpl',
      1 => 1681999934,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ab19bf85ebb9_01196123 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50142961064ab19bf85cbf1_51779559', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_4631268664ab19bf85d104_17407953 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_41323191164ab19bf85dc04_91463383 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_129195946664ab19bf85d836_49049491 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41323191164ab19bf85dc04_91463383', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_50142961064ab19bf85cbf1_51779559 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_50142961064ab19bf85cbf1_51779559',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_4631268664ab19bf85d104_17407953',
  ),
  'page_content' => 
  array (
    0 => 'Block_129195946664ab19bf85d836_49049491',
  ),
  'hook_home' => 
  array (
    0 => 'Block_41323191164ab19bf85dc04_91463383',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4631268664ab19bf85d104_17407953', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129195946664ab19bf85d836_49049491', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
