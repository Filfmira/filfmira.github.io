<?php /* Smarty version 3.1.25-dev/4, created on 2015-06-11 21:18:58
         compiled from "/usr/users2/mieic2012/ei12021/public_html/venn/proj/templates/posts/voteModal.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9125410955579df22ecc007_77054857%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7490333e91f8cbb2a80cdea37ff5c8507c0cb39c' => 
    array (
      0 => '/usr/users2/mieic2012/ei12021/public_html/venn/proj/templates/posts/voteModal.tpl',
      1 => 1433778846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9125410955579df22ecc007_77054857',
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/4',
  'unifunc' => 'content_5579df22ef5915_97170719',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5579df22ef5915_97170719')) {
function content_5579df22ef5915_97170719 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9125410955579df22ecc007_77054857';
?>
<div id="voteModal" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Votes</h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    Close</button>
            </div>
        </div>
    </div>
</div><?php }
}
?>