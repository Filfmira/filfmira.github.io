<?php /* Smarty version 3.1.25-dev/4, created on 2015-06-11 21:18:58
         compiled from "/usr/users2/mieic2012/ei12021/public_html/venn/proj/templates/posts/feed.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1714182195579df228d0421_56025076%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9758dd7e272bffceaef03bd3a2c41e6266b7dcd5' => 
    array (
      0 => '/usr/users2/mieic2012/ei12021/public_html/venn/proj/templates/posts/feed.tpl',
      1 => 1433778846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1714182195579df228d0421_56025076',
  'variables' => 
  array (
    'recent_posts' => 0,
    'n' => 0,
    'user_circles' => 0,
    'circle' => 0,
    'circles_posts' => 0,
    'user_in_circle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/4',
  'unifunc' => 'content_5579df22a39b40_00500442',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5579df22a39b40_00500442')) {
function content_5579df22a39b40_00500442 ($_smarty_tpl) {
if (!is_callable('smarty_function_counter')) require_once '/usr/users2/mieic2012/ei12021/public_html/venn/proj/lib/smarty-master/libs/plugins/function.counter.php';

$_smarty_tpl->properties['nocache_hash'] = '1714182195579df228d0421_56025076';
echo $_smarty_tpl->getSubTemplate ("common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Venn - Feed"), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("common/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div id="page-wrapper">

    <div class="">

        <!-- left column -->
        <div class=" col-lg-6 clearfix left-panel">
            <h1>People</h1>
            <?php
$_from = $_smarty_tpl->tpl_vars['recent_posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['post'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['post']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
$foreach_post_Sav = $_smarty_tpl->tpl_vars['post'];
?>
                <?php echo $_smarty_tpl->getSubTemplate ("posts/post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <?php
$_smarty_tpl->tpl_vars['post'] = $foreach_post_Sav;
}
?>
        </div>

        <!-- right column -->
        <div class="col-lg-6 clearfix right-panel">
            <h1>Circles
                <div class="dropdown pull-right" id="select-circles-feed">
                    <div class="btn-group">
                        <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle pull-right" data-placeholder="Select Circles" >Visibility <span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-form pull-right">
                            <?php echo smarty_function_counter(array('start'=>0,'skip'=>1,'print'=>false),$_smarty_tpl);?>

                            <?php ob_start();
echo smarty_function_counter(array(),$_smarty_tpl);
$_tmp1=ob_get_clean();
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable($_tmp1, null, 0);?>
                            <li><input id="circle-public-<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" class="" name="visibility[]" value="0" type="checkbox"><label for="circle-public-<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
">All</label></li>
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
$_tmp2=ob_get_clean();
$_smarty_tpl->tpl_vars['n'] = new Smarty_Variable($_tmp2, null, 0);?>
                                <li><input id="circle-<?php echo $_smarty_tpl->tpl_vars['circle']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['n']->value;?>
" class="right-circle-checkbox" name="visibility[]" value="<?php echo $_smarty_tpl->tpl_vars['circle']->value['id'];?>
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
            </h1>
            <div class="right-panel-posts">
                <!--publication-->
                <?php $_smarty_tpl->tpl_vars['isRightFeed'] = new Smarty_Variable(true, null, 0);?>
                <?php
$_from = $_smarty_tpl->tpl_vars['circles_posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['user_in_circle'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['user_in_circle']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['user_in_circle']->value) {
$_smarty_tpl->tpl_vars['user_in_circle']->_loop = true;
$foreach_user_in_circle_Sav = $_smarty_tpl->tpl_vars['user_in_circle'];
?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['user_in_circle']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['post'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['post']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
$foreach_post_Sav = $_smarty_tpl->tpl_vars['post'];
?>
                        <?php echo $_smarty_tpl->getSubTemplate ("posts/post.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                    <?php
$_smarty_tpl->tpl_vars['post'] = $foreach_post_Sav;
}
?>
                <?php
$_smarty_tpl->tpl_vars['user_in_circle'] = $foreach_user_in_circle_Sav;
}
?>
            </div>
        </div>

    </div> <!-- end independant-scroll-container -->

</div>


<?php echo $_smarty_tpl->getSubTemplate ("posts/reportModal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("posts/voteModal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ('posts/edit_post_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<?php }
}
?>