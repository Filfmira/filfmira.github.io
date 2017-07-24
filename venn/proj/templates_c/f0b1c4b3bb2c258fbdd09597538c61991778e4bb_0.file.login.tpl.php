<?php /* Smarty version 3.1.25-dev/4, created on 2015-06-11 21:18:51
         compiled from "/usr/users2/mieic2012/ei12021/public_html/venn/proj/templates/users/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8257094405579df1b979de3_17671851%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0b1c4b3bb2c258fbdd09597538c61991778e4bb' => 
    array (
      0 => '/usr/users2/mieic2012/ei12021/public_html/venn/proj/templates/users/login.tpl',
      1 => 1433778846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8257094405579df1b979de3_17671851',
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/4',
  'unifunc' => 'content_5579df1b986bb9_89292797',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5579df1b986bb9_89292797')) {
function content_5579df1b986bb9_89292797 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8257094405579df1b979de3_17671851';
?>

<section id="login">
    <div id="sec1" class="blurb">
        <div class="container">
            <div id="login_container" class="container">
                <h1>Log In</h1>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="login-panel panel panel-default">
                            <div class="panel-body">
                                <form role="form" id="loginForm" method="post" enctype="multipart/form-data">
                                    <fieldset>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="E-mail" name="email" type="email">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                        </div>
                                        <div id="error_message"></div>
                                        <div class="login_btns">
                                            <a id="recover_back" href="#sec5"> Forgot password? </a>
                                            <a id="signup_back" href="#sec4"> Create an account </a>
                                            <input class="btn btn-lg btn-success" type="submit" value="Login">
                                        </div>

                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php }
}
?>