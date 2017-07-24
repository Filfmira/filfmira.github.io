<?php /* Smarty version 3.1.25-dev/4, created on 2015-06-11 21:18:58
         compiled from "/usr/users2/mieic2012/ei12021/public_html/venn/proj/templates/posts/reportModal.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16383330495579df22e8c3b8_88695644%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ee0355e81174864627ab3e97d3e0dd9736429e4' => 
    array (
      0 => '/usr/users2/mieic2012/ei12021/public_html/venn/proj/templates/posts/reportModal.tpl',
      1 => 1433778846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16383330495579df22e8c3b8_88695644',
  'variables' => 
  array (
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/4',
  'unifunc' => 'content_5579df22eb6cc4_42353273',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5579df22eb6cc4_42353273')) {
function content_5579df22eb6cc4_42353273 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16383330495579df22e8c3b8_88695644';
?>
<div id="report-modal" class="modal report-modal fade" post-id="" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Report</h4>
            </div>

            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="control-group">
                        <label class="control-label"> Tell us why you are reporting: </label>
                        <div class="question-text form-group-lg">
                            <input id="report-msg" type="text" class="form-control" size="100" placeholder="Write report message" required autocomplete="off">
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button class="btn" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary btn-report" data-dismiss="modal" id="report-btn-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">Send Report</button>
            </div>
        </div>
    </div>
</div><?php }
}
?>