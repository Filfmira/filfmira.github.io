<?php /* Smarty version 3.1.25-dev/4, created on 2015-06-11 21:18:58
         compiled from "/usr/users2/mieic2012/ei12021/public_html/venn/proj/templates/common/navbar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16039156165579df22abe633_31396289%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd3efb3267475596e7caa4266a0af4529a3134fa' => 
    array (
      0 => '/usr/users2/mieic2012/ei12021/public_html/venn/proj/templates/common/navbar.tpl',
      1 => 1433778846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16039156165579df22abe633_31396289',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'friendRequests' => 0,
    'friendRequest' => 0,
    'username' => 0,
    'imagePath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/4',
  'unifunc' => 'content_5579df22b2bd76_71647545',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5579df22b2bd76_71647545')) {
function content_5579df22b2bd76_71647545 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16039156165579df22abe633_31396289';
?>
<link href="../../css/navbar.css" rel="stylesheet">

<link href="../../css/sidebar.css" rel="stylesheet">

<!-- Navigation -->
<nav id="navbar" class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" id="navbar-toggle-black" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar" id="navbar-toggle-icon-black"></span>
            <span class="icon-bar" id="navbar-toggle-icon-black"></span>
            <span class="icon-bar" id="navbar-toggle-icon-black"></span>
        </button>
        <a class="navbar-brand" id="navbar-brand-white" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">Venn</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right pull-right">
        <li class="dropdown">
            <a class="dropdown-toggle dropdown-toggle-white" data-toggle="dropdown" href="#">
                <i class="fa fa-users fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <?php if ($_smarty_tpl->tpl_vars['friendRequests']->value) {?>
                <ul class="dropdown-menu dropdown-messages">
                    <?php
$_from = $_smarty_tpl->tpl_vars['friendRequests']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['friendRequest'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['friendRequest']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['friendRequest']->value) {
$_smarty_tpl->tpl_vars['friendRequest']->_loop = true;
$foreach_friendRequest_Sav = $_smarty_tpl->tpl_vars['friendRequest'];
?>
                        <li>
                            <div>
                                <?php $_smarty_tpl->tpl_vars['username'] = new Smarty_Variable(getUserFromID($_smarty_tpl->tpl_vars['friendRequest']->value['requestedBy_id']), null, 0);?>
                                <strong class="pull-right text-muted" style="margin-right:10px "> <em><?php echo $_smarty_tpl->tpl_vars['friendRequest']->value['date'];?>
</em></strong>

                                <?php $_smarty_tpl->tpl_vars['imagePath'] = new Smarty_Variable(getProfilePic($_smarty_tpl->tpl_vars['username']->value['id']), null, 0);?>
                                <h4>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/profile.php?user=<?php echo $_smarty_tpl->tpl_vars['username']->value['hashid'];?>
" style="text-decoration: none; color: inherit">
                                        <img class="profilePic" width="40" height="40" style="border-radius:50%" src="../../images/users/<?php echo $_smarty_tpl->tpl_vars['imagePath']->value;?>
" alt="profilePic">
                                        <?php echo $_smarty_tpl->tpl_vars['username']->value['name'];?>

                                    </a>
                                </h4>
                            </div>

                            <div>
                                <a href="" class="accept_friend_request" id="accept_friend_request-<?php echo $_smarty_tpl->tpl_vars['friendRequest']->value['requestedBy_id'];?>
"> <span class="text-muted"> <i class="fa fa-check"></i> Accept </span></a>
                                <a href="" class="decline_friend_request" id="decline_friend_request-<?php echo $_smarty_tpl->tpl_vars['friendRequest']->value['requestedBy_id'];?>
"><span class="text-muted"> <i class="fa fa-times"></i> Decline </span></a>
                            </div>

                        </li>
                        <li class="divider"></li>
                    <?php
$_smarty_tpl->tpl_vars['friendRequest'] = $foreach_friendRequest_Sav;
}
?>
                </ul>
            <?php }?>
            <!-- /.dropdown-messages -->
        </li>
        <!-- /.dropdown -->

        <li class="dropdown">
            <a class="dropdown-toggle dropdown-toggle-white" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/profile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/profile_settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/double_scroll_toggle.php"><i class="fa fa-caret-square-o-up"></i> Double-scroll</a>
                </li>
                <li class="divider"></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->
</nav>

<?php echo $_smarty_tpl->getSubTemplate ('./sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>