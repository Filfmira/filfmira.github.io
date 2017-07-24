<?php /* Smarty version 3.1.25-dev/4, created on 2015-06-11 21:18:51
         compiled from "/usr/users2/mieic2012/ei12021/public_html/venn/proj/templates/users/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15894942765579df1b6d4560_09855716%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63b8f73d023e7f087692342f80e1f2022b08258a' => 
    array (
      0 => '/usr/users2/mieic2012/ei12021/public_html/venn/proj/templates/users/home.tpl',
      1 => 1433778846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15894942765579df1b6d4560_09855716',
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/4',
  'unifunc' => 'content_5579df1b8310b1_83044360',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5579df1b8310b1_83044360')) {
function content_5579df1b8310b1_83044360 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15894942765579df1b6d4560_09855716';
?>
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="//html5shim.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
<![endif]-->

<?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<link href="../../css/home.css" rel="stylesheet">
</head>
<body>
<div class="header vert">
    <div class="container">
        <a href="#sec1" class="btn btn-default btn-lg">Log In</a>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('users/login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="featurette" id="sec2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Amazing Features</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-md-offset-3 text-center">
                <div class="featurette-item">
                    <i class="fa fa-circle-o"></i>
                    <h4>Friend Circles</h4>
                    <p>Categorize your friends by circles.</p>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <div class="featurette-item">
                    <i class="fa fa-lock"></i>
                    <h4>Custom Privacy</h4>
                    <p>Set custom post privacy.</p>
                </div>
            </div>
            <div class="col-md-2 text-center">
                <div class="featurette-item">
                    <i class="fa fa-clock-o "></i>
                    <h4>Scheduled Posts</h4>
                    <p>Set beginning and expiration dates for your posts.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('users/register.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ('users/password_recovery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>