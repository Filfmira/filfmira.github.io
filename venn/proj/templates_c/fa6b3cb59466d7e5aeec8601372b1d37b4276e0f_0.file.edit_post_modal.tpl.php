<?php /* Smarty version 3.1.25-dev/4, created on 2015-06-11 21:18:58
         compiled from "/usr/users2/mieic2012/ei12021/public_html/venn/proj/templates/posts/edit_post_modal.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10731786745579df22f0c2c7_08636209%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa6b3cb59466d7e5aeec8601372b1d37b4276e0f' => 
    array (
      0 => '/usr/users2/mieic2012/ei12021/public_html/venn/proj/templates/posts/edit_post_modal.tpl',
      1 => 1433778846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10731786745579df22f0c2c7_08636209',
  'variables' => 
  array (
    'n' => 0,
    'user_circles' => 0,
    'circle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/4',
  'unifunc' => 'content_5579df230035c9_73660338',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5579df230035c9_73660338')) {
function content_5579df230035c9_73660338 ($_smarty_tpl) {
if (!is_callable('smarty_function_counter')) require_once '/usr/users2/mieic2012/ei12021/public_html/venn/proj/lib/smarty-master/libs/plugins/function.counter.php';

$_smarty_tpl->properties['nocache_hash'] = '10731786745579df22f0c2c7_08636209';
?>
<div id="editModal" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Post</h4>
            </div>
            <div class="modal-body">

                <form id="edit_post_form" action="../../actions/post/edit_post.php" accept-charset="UTF-8" method="POST" enctype="multipart/form-data">

                    <input id='hiddenPostId' type="hidden" name="post_id" value=""/>
                    <textarea id="edit-post-textarea" maxlength="600" class="form-control counted" name="message" placeholder="Type in your post" rows="5" style="margin-bottom:10px;" required></textarea>

                    <div class="form-group"">
                    <input id="edit-post-url" class="form-control" name="url" placeholder="Share a website" style="margin-bottom:10px;">
            </div>

            <div class="form-group">
                <input id="edit-post-tags" class="form-control" name="tags" placeholder="Write post tags here, separated by commas or space" style="margin-bottom:10px;">
            </div>

            <div class="form-inline form-group">
                <label class="datepickerdiv datepicker">   <i class="fa fa-calendar"></i> Start date:</label>
                <input class="form-control" type="text" name="dateInit" placeholder="Click to select "  id="datePickerEdit1">
                <label class="datepickerdiv datepicker"><i class="fa fa-calendar"></i>  Expiration date:</label>
                <input class="form-control" type="text" name="dateFinal" placeholder="Click to select"  id="datePickerEdit2">
            </div>

            <div class=form-inline">
                <div class="dropdown" style="display: inline">
                    <div class="btn-group">
                        <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle pull-right" data-placeholder="Visibility" >Visibility <span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-form">
                            <?php echo smarty_function_counter(array('start'=>0,'skip'=>1,'print'=>false),$_smarty_tpl);?>

                            <?php ob_start();
echo smarty_function_counter(array(),$_smarty_tpl);
$_tmp3=ob_get_clean();
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable($_tmp3, null, 0);?>
                            <li><input id="circle-public-<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" class="input-circle-visibility" name="visibility[]" value="0" type="checkbox"><label for="circle-public-<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
">Public</label></li>
                            <?php
$_from = $_smarty_tpl->tpl_vars['user_circles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['circle'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['circle']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['circle']->value) {
$_smarty_tpl->tpl_vars['circle']->_loop = true;
$foreach_circle_Sav = $_smarty_tpl->tpl_vars['circle'];
?>
                                <?php ob_start();
echo smarty_function_counter(array(),$_smarty_tpl);
$_tmp4=ob_get_clean();
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable($_tmp4, null, 0);?>
                                <li><input id="circle-<?php echo $_smarty_tpl->tpl_vars['circle']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" class="input-circle-visibility" name="visibility[]" value="<?php echo $_smarty_tpl->tpl_vars['circle']->value['id'];?>
" type="checkbox"><label for="circle-<?php echo $_smarty_tpl->tpl_vars['circle']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['circle']->value['name'];?>
</label></li>
                            <?php
$_smarty_tpl->tpl_vars['circle'] = $foreach_circle_Sav;
}
?>
                        </ul>
                    </div>
                </div>

                <input id="submitEditedPost" type="submit" value="Edit post" class="pull-right btn btn-info" style="margin-left:10px">
                <h6 class="pull-right" id="counter-remaining-chars">600 characters remaining </h6>
            </div>
            </form>
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