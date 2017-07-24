<?php /* Smarty version 3.1.25-dev/4, created on 2015-06-11 21:18:58
         compiled from "/usr/users2/mieic2012/ei12021/public_html/venn/proj/templates/common/sidebar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2503771205579df22b67ab4_79539496%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c05faee4137a7f00bf323fc2eab68c6cdb1ce39' => 
    array (
      0 => '/usr/users2/mieic2012/ei12021/public_html/venn/proj/templates/common/sidebar.tpl',
      1 => 1433778846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2503771205579df22b67ab4_79539496',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/4',
  'unifunc' => 'content_5579df22b87860_34488872',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5579df22b87860_34488872')) {
function content_5579df22b87860_34488872 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2503771205579df22b67ab4_79539496';
?>
<div  id="sidebar" class="sidebar sidebar-collapse" role="navigation">
    <div class="sidebar-ul" >
        <div id="search-toggle" class="sidebar-item">
            <div class="vcentered-content">
                <div class="vcentered-space"></div>
                <div class="vcentered-space sidebar-item-content">
                    <!--<a href="index.php">-->
                    <i class="fa fa-search fa-2x button-toggle-grey" ></i>
                    <p class="button-toggle-grey"> Search </p>
                    <!--</a>-->
                </div>
                <div class="vcentered-space"></div>
            </div>
        </div>

        <div class="sidebar-item">
            <div class="vcentered-content">
                <div class="vcentered-space"></div>
                <div class="vcentered-space sidebar-item-content">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">

                        <i class="fa fa-home fa-2x button-toggle-grey"></i>
                        <p class="button-toggle-grey"> Home </p>
                    </a>
                </div>
                <div class="vcentered-space"></div>
            </div>
        </div>

        <div class="sidebar-item">
            <div class="vcentered-content">
                <div class="vcentered-space"></div>
                <div class="vcentered-space sidebar-item-content">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/profile.php">
                        <i class="fa fa-user fa-2x button-toggle-grey"></i>
                        <p class="button-toggle-grey"> Profile </p>
                    </a>
                </div>
                <div class="vcentered-space"></div>
            </div>
        </div>

        <div class="sidebar-item">
            <div class="vcentered-content">
                <div class="vcentered-space"></div>
                <div class="vcentered-space sidebar-item-content">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/circles.php">
                        <i class="fa fa-circle-thin fa-2x button-toggle-grey"></i>
                        <p class="button-toggle-grey"> Circles </p>
                    </a>
                </div>
                <div class="vcentered-space"></div>
            </div>
        </div>
    </div>

    <div id="search-field" class="search-field">
       <div id="search-container">
           <div class="top-search">
               <input id="text-search" type="text" name="search">
           </div>
           <div class="form-inline bottom-search">
               <label for="radio-posts"> <input id="radio-posts" type="radio" name="search-scope" value="posts" checked="checked">Posts</label>
               <label for="radio-people"><input id="radio-people" type="radio" name="search-scope" value="people">People</label>
               <button id="search-btn" type="button" class="btn">Search</button>
           </div>
       </div>


    </div>
</div><?php }
}
?>