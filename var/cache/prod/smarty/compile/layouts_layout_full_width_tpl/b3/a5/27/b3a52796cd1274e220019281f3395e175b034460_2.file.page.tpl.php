<?php
/* Smarty version 3.1.33, created on 2020-05-16 06:58:07
  from '/home/a0439042/domains/a0439042.xsph.ru/public_html/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ebf64cf562061_18083954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3a52796cd1274e220019281f3395e175b034460' => 
    array (
      0 => '/home/a0439042/domains/a0439042.xsph.ru/public_html/themes/classic/templates/page.tpl',
      1 => 1587040546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebf64cf562061_18083954 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3074187785ebf64cf55d1b7_80231207', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_3593314315ebf64cf55dde8_40360904 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_17155692235ebf64cf55d707_06918828 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3593314315ebf64cf55dde8_40360904', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_7933643215ebf64cf55fc68_20947200 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_3458761995ebf64cf5603f2_70055286 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_12140723925ebf64cf55f736_24941862 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7933643215ebf64cf55fc68_20947200', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3458761995ebf64cf5603f2_70055286', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_9294084185ebf64cf561364_58368959 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_14867357665ebf64cf560ea0_70538966 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9294084185ebf64cf561364_58368959', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_3074187785ebf64cf55d1b7_80231207 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3074187785ebf64cf55d1b7_80231207',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_17155692235ebf64cf55d707_06918828',
  ),
  'page_title' => 
  array (
    0 => 'Block_3593314315ebf64cf55dde8_40360904',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_12140723925ebf64cf55f736_24941862',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_7933643215ebf64cf55fc68_20947200',
  ),
  'page_content' => 
  array (
    0 => 'Block_3458761995ebf64cf5603f2_70055286',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_14867357665ebf64cf560ea0_70538966',
  ),
  'page_footer' => 
  array (
    0 => 'Block_9294084185ebf64cf561364_58368959',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17155692235ebf64cf55d707_06918828', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12140723925ebf64cf55f736_24941862', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14867357665ebf64cf560ea0_70538966', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
