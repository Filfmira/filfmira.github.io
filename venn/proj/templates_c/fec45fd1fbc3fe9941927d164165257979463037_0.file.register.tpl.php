<?php /* Smarty version 3.1.25-dev/4, created on 2015-06-11 21:18:51
         compiled from "/usr/users2/mieic2012/ei12021/public_html/venn/proj/templates/users/register.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1957688005579df1b99bf19_21270729%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fec45fd1fbc3fe9941927d164165257979463037' => 
    array (
      0 => '/usr/users2/mieic2012/ei12021/public_html/venn/proj/templates/users/register.tpl',
      1 => 1433778846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1957688005579df1b99bf19_21270729',
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/4',
  'unifunc' => 'content_5579df1b9cb7e5_86987405',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5579df1b9cb7e5_86987405')) {
function content_5579df1b9cb7e5_86987405 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1957688005579df1b99bf19_21270729';
?>
<section id="register">
    <div class="blurb" id="sec4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Not a member yet? Don't wait any longer!</h1>
                    <div id="register_container" class="container">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="login-panel panel panel-default">
                                    <div class="panel-body">
                                        <form id="registerForm" role="form" method="post" enctype="multipart/form-data">
                                            <fieldset>
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Name" name="username" type="text" required>
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="E-mail" name="email" type="email" required>
                                                </div>
                                                <div id="inputPasswordDiv" class="form-group">
                                                    <input id="register-password" class="form-control" placeholder="Password" name="password" type="password" value="" required>
                                                </div>
                                                <div class="form-group" id="inputPasswordConfirmDiv">
                                                    <input id="register-confirm-password" class="form-control" placeholder="Repeat Password" name="confirmPassword" type="password" value="" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="radio-inline"><input type="radio" name="gender" value="M"> Male </label>
                                                    <label class="radio-inline"><input type="radio" name="gender" value="F"> Female </label>
                                                    <label class="radio-inline"><input type="radio" name="gender" value="O"> Other </label>
                                                </div>
                                                <div id="error_message"></div>
                                                <div class="login_btns">
                                                    <input class="btn btn-lg btn-success" type="submit" value="Sign Up">
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