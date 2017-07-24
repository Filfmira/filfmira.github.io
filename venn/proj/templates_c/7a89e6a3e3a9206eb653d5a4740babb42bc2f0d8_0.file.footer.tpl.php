<?php /* Smarty version 3.1.25-dev/4, created on 2015-06-11 21:18:51
         compiled from "/usr/users2/mieic2012/ei12021/public_html/venn/proj/templates/common/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11876106915579df1ba1e8e8_63043444%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a89e6a3e3a9206eb653d5a4740babb42bc2f0d8' => 
    array (
      0 => '/usr/users2/mieic2012/ei12021/public_html/venn/proj/templates/common/footer.tpl',
      1 => 1433778846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11876106915579df1ba1e8e8_63043444',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'current_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/4',
  'unifunc' => 'content_5579df1bb09174_33033360',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5579df1bb09174_33033360')) {
function content_5579df1bb09174_33033360 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11876106915579df1ba1e8e8_63043444';
?>
<footer>
    <p>Copyright © 2015 Venn</p>
</footer>

<!-- jQuery -->
<?php echo '<script'; ?>
 type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"><?php echo '</script'; ?>
>

<!-- Bootstrap core JavaScript-->
<?php echo '<script'; ?>
 type="text/javascript" src="../../assets/frameworks/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<!-- Metis Menu Plugin JavaScript -->
<?php echo '<script'; ?>
 type="text/javascript" src="../../assets/frameworks/metisMenu/dist/metisMenu.min.js"><?php echo '</script'; ?>
>

<!-- Custom Theme JavaScript -->
<?php echo '<script'; ?>
 type="text/javascript" src="../../assets/frameworks/sb-admin-2.js"><?php echo '</script'; ?>
>

<!-- Custom actions -->
<?php echo '<script'; ?>
 type="text/javascript" src="../../assets/js/home-scripts.js"><?php echo '</script'; ?>
>

<!-- slide search field -->
<?php echo '<script'; ?>
 src="http://jquery-ui.googlecode.com/svn/tags/latest/ui/jquery.effects.core.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://jquery-ui.googlecode.com/svn/tags/latest/ui/jquery.effects.slide.js"><?php echo '</script'; ?>
>

<!-- drop down menus-->
<?php echo '<script'; ?>
 type="text/javascript" src="../../assets/frameworks/bootstrap/js/dropdowns-enhancement.js"><?php echo '</script'; ?>
>

<!-- drop down menus-->
<?php echo '<script'; ?>
 type="text/javascript" src="../../assets/frameworks/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"><?php echo '</script'; ?>
>

<!-- crop image-->

<!--<?php echo '<script'; ?>
 src="../../assets/frameworks/crop-image/js/cropper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../assets/frameworks/crop-image/js/main.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../../assets/frameworks/crop-image/js/qunit.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript" src="../../assets/frameworks/jasny-bootstrap/jasny-bootstrap.js"><?php echo '</script'; ?>
>
        -->

<?php echo '<script'; ?>
>
    var base_url = "<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
";
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
<?php echo '</script'; ?>
>

<?php ob_start();
echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).('pages/');
$_tmp1=ob_get_clean();
$_smarty_tpl->tpl_vars['current_page'] = new Smarty_Variable(explode($_tmp1,$_SERVER['REQUEST_URI']), null, 0);?>
<?php if (strpos($_smarty_tpl->tpl_vars['current_page']->value[1],'home/home.php',0) === 0) {?>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/register/checkPasswordStrength.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/posts/post.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/posts/comments.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/posts/votes.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/users/home.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/users/circles.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/posts/report.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/posts/feed.js"><?php echo '</script'; ?>
>
<?php } elseif (strpos($_smarty_tpl->tpl_vars['current_page']->value[1],'posts/single_post.php',0) === 0) {?>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/posts/post.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/posts/comments.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/posts/votes.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/users/home.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/users/circles.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/posts/report.js"><?php echo '</script'; ?>
>
<?php } elseif (strpos($_smarty_tpl->tpl_vars['current_page']->value[1],'posts/post_search.php',0) === 0) {?>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/posts/post.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/posts/comments.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/posts/votes.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/users/home.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/users/circles.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/posts/report.js"><?php echo '</script'; ?>
>
<?php } elseif (strpos($_smarty_tpl->tpl_vars['current_page']->value[1],'users/profile.php',0) === 0) {?>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/posts/votes.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/posts/post.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/posts/comments.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/users/circles.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/posts/report.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/users/profile.js"><?php echo '</script'; ?>
>
<?php } elseif (strpos($_smarty_tpl->tpl_vars['current_page']->value[1],'users/tagview.php',0) === 0) {?>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/posts/votes.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/posts/post.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/posts/report.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/posts/comments.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/users/circles.js"><?php echo '</script'; ?>
>
<?php } elseif (strpos($_smarty_tpl->tpl_vars['current_page']->value[1],'users/circles.php',0) === 0) {?>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/posts/report.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/users/circles.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../js/users/friends.js"><?php echo '</script'; ?>
>
<?php }?>

</body>
</html>
<?php }
}
?>