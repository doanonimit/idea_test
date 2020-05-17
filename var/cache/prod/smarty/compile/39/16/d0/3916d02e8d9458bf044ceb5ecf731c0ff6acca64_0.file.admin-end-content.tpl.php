<?php
/* Smarty version 3.1.33, created on 2020-05-16 07:01:37
  from '/home/a0439042/domains/a0439042.xsph.ru/public_html/modules/ps_mbo/views/templates/admin/admin-end-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ebf65a1482eb1_14142672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3916d02e8d9458bf044ceb5ecf731c0ff6acca64' => 
    array (
      0 => '/home/a0439042/domains/a0439042.xsph.ru/public_html/modules/ps_mbo/views/templates/admin/admin-end-content.tpl',
      1 => 1589540446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebf65a1482eb1_14142672 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <div id="admin-end-content-footer" class="container">

 </div>

<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function(){

        $.ajax({
            type: 'POST',
            headers: { "cache-control": "no-cache" },
            url: '<?php echo $_smarty_tpl->tpl_vars['admin_module_ajax_url_psmbo']->value;?>
',
            async: true,
            cache: false,
            dataType : "html",
            data: {
                ajax: '1',
                action:'fetchModules',
                controller_page: '<?php echo $_smarty_tpl->tpl_vars['controller_page']->value;?>
',
                legacy: '0'
            },
            beforeSend: function() {
                $('#admin-end-content-footer').html('<i class="icon-refresh icon-spin"></i>');
            },
            success: function(data) {
                $('#admin-end-content-footer').html(data);
            }
        });


        $('.controller-quick-view').each(function() {
            $(this).fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                },
                href: $(this).attr('href') + '&action=GetModuleQuickView&module_name=' + $(this).attr('data-name') + '&ajax=1'
            });
        });
    });
<?php echo '</script'; ?>
>
<?php }
}
