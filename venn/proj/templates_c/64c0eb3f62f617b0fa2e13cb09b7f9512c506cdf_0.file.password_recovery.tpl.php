<?php /* Smarty version 3.1.25-dev/4, created on 2015-06-11 21:18:51
         compiled from "/usr/users2/mieic2012/ei12021/public_html/venn/proj/templates/users/password_recovery.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10351492865579df1b9df625_81926723%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64c0eb3f62f617b0fa2e13cb09b7f9512c506cdf' => 
    array (
      0 => '/usr/users2/mieic2012/ei12021/public_html/venn/proj/templates/users/password_recovery.tpl',
      1 => 1433778846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10351492865579df1b9df625_81926723',
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/4',
  'unifunc' => 'content_5579df1ba07f03_04423813',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5579df1ba07f03_04423813')) {
function content_5579df1ba07f03_04423813 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10351492865579df1b9df625_81926723';
?>
<section id="password_recovery">
    <div class="blurb" id="sec5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Forgot your password? Don't worry!</h1>
                    <div id="login_container" class="container">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="login-panel panel panel-default">
                                    <div class="panel-body">
                                        <form id="registerForm" action="../../actions/users/pw_recovery.php" method="post" enctype="multipart/form-data">
                                            <fieldset>

                                                <div class="form-group">
                                                    <input class="form-control" placeholder="E-mail" name="email" type="email" required>
                                                </div>

                                                <div id="error_message"></div>
                                                <div class="login_btns col-md-4">
                                                    <input class="btn btn-lg btn-success" type="submit" value="Send">
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }
}
?>