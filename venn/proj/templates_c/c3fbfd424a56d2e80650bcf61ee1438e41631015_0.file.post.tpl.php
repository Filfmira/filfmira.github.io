<?php /* Smarty version 3.1.25-dev/4, created on 2015-06-11 21:18:58
         compiled from "/usr/users2/mieic2012/ei12021/public_html/venn/proj/templates/posts/post.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7521946135579df22b9c039_10679058%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3fbfd424a56d2e80650bcf61ee1438e41631015' => 
    array (
      0 => '/usr/users2/mieic2012/ei12021/public_html/venn/proj/templates/posts/post.tpl',
      1 => 1433778846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7521946135579df22b9c039_10679058',
  'variables' => 
  array (
    'post' => 0,
    'BASE_URL' => 0,
    'userFromID' => 0,
    'imagePath' => 0,
    'vote' => 0,
    'tags' => 0,
    'tag' => 0,
    'yturl' => 0,
    'image' => 0,
    'isRightFeed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/4',
  'unifunc' => 'content_5579df22ccdc04_51504323',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5579df22ccdc04_51504323')) {
function content_5579df22ccdc04_51504323 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7521946135579df22b9c039_10679058';
if ($_smarty_tpl->tpl_vars['post']->value['user_id'] == $_SESSION['id'] || isVisibleTo($_smarty_tpl->tpl_vars['post']->value['id'],$_smarty_tpl->tpl_vars['post']->value['user_id'],$_SESSION['id'])) {?>
    <!--publication-->
    <div class="panel panel-default panel-feed" id="panel-feed-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
        <div class="panel-heading">
            <?php $_smarty_tpl->tpl_vars['imagePath'] = new Smarty_Variable(getProfilePic($_smarty_tpl->tpl_vars['post']->value['user_id']), null, 0);?>
            <h4><?php $_smarty_tpl->tpl_vars['userFromID'] = new Smarty_Variable(getUserFromID($_smarty_tpl->tpl_vars['post']->value['user_id']), null, 0);?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/profile.php?user=<?php echo $_smarty_tpl->tpl_vars['userFromID']->value['hashid'];?>
" style="text-decoration: none; color: inherit">


                    <img class="profilePic" width="40" height="40" style="border-radius:50%" style="border-radius:50%" src="../../images/users/<?php echo $_smarty_tpl->tpl_vars['imagePath']->value;?>
" alt="profilePic">
                    <?php echo $_smarty_tpl->tpl_vars['userFromID']->value['name'];?>

                </a>
            </h4>
        </div>

        <div class="panel-body">
            <!-- voting section -->
            <div class="vote-section" >
                <table style="text-align:center;">
                    <?php $_smarty_tpl->tpl_vars['vote'] = new Smarty_Variable(getVote($_SESSION['id'],$_smarty_tpl->tpl_vars['post']->value['id']), null, 0);?>
                    <tr>
                        <td><i id="upvote-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" class="fa fa-sort-asc upvote-btn"
                               style="<?php if ($_smarty_tpl->tpl_vars['vote']->value['positive'] == '1') {?> color:rgb(92,184,92); <?php }?>"}></i></td>
                    </tr>
                    <tr>
                        <?php if ($_smarty_tpl->tpl_vars['post']->value['user_id'] != $_SESSION['id']) {?>
                            <td class="votedifference-x" id="td-votedifference-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
                                <?php if ($_smarty_tpl->tpl_vars['post']->value['votedifference'] < 0) {?> <i class="fa fa-minus-square-o" style="color:rgb(176, 49, 33)"></i>
                                <?php } else { ?> <i class="fa"><?php echo $_smarty_tpl->tpl_vars['post']->value['votedifference'];?>
</i>
                                <?php }?>
                            </td>
                        <?php } else { ?>
                            <td class="votedifference" id="td-votedifference-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"  data-toggle="tooltip" data-placement="bottom" title="Check who voted">
                                <?php if ($_smarty_tpl->tpl_vars['post']->value['votedifference'] < 0) {?> <i class="fa fa-minus-square-o" style="color:rgb(176, 49, 33)"></i>
                                <?php } else { ?> <i class="fa"><?php echo $_smarty_tpl->tpl_vars['post']->value['votedifference'];?>
</i>
                                <?php }?>
                            </td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td><i id="downvote-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" class="fa fa-sort-desc downvote-btn"
                               style="<?php if ($_smarty_tpl->tpl_vars['vote']->value['positive'] == '0') {?> color:rgb(176, 49, 33); <?php }?>"}></i>
                        </td>
                    </tr>
                </table>
            </div>

            <!-- publication -->
            <div class="post-msg-div"><?php echo $_smarty_tpl->tpl_vars['post']->value['message'];?>
</div>
            <?php $_smarty_tpl->tpl_vars['tags'] = new Smarty_Variable(getTagNamesFromPost($_smarty_tpl->tpl_vars['post']->value['id']), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['tags']->value != NULL) {?>
                <p>
                    <?php
$_from = $_smarty_tpl->tpl_vars['tags']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tag']->_loop = false;
$_smarty_tpl->tpl_vars['tag']->total= $_smarty_tpl->_count($_from);
$_smarty_tpl->tpl_vars['tag']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
$_smarty_tpl->tpl_vars['tag']->iteration++;
$_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration == $_smarty_tpl->tpl_vars['tag']->total;
$foreach_tag_Sav = $_smarty_tpl->tpl_vars['tag'];
?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/posts/tagview.php?tagname=<?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
">#<?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a> <?php if (!$_smarty_tpl->tpl_vars['tag']->last) {?> , <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['tag'] = $foreach_tag_Sav;
}
?>
                </p>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['post']->value['url']) {?>
                <?php if ((yt($_smarty_tpl->tpl_vars['post']->value['url']) != $_smarty_tpl->tpl_vars['post']->value['url'])) {?>
                    <?php $_smarty_tpl->tpl_vars['yturl'] = new Smarty_Variable(yt($_smarty_tpl->tpl_vars['post']->value['url']), null, 0);?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['yturl']->value) {?>
                    <div class="video-container post-url-div"><?php echo $_smarty_tpl->tpl_vars['yturl']->value;?>
</div>
                <?php } else { ?>
                    <div class="post-url-div"><a href=<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
><?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
</a></div>
                <?php }?>
            <?php }?>

            <?php $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable(getImagePathFromPost($_smarty_tpl->tpl_vars['post']->value['id']), null, 0);?>

            <?php if (($_smarty_tpl->tpl_vars['image']->value[0]['path'] != NULL)) {?>
                <img src="../../images/users/<?php echo $_smarty_tpl->tpl_vars['image']->value[0]['path'];?>
" alt="" class="img-responsive" style="border: 1px solid #fff;" />
            <?php }?>
        </div>

        <!--footer-->
        <div class="panel-footer clearfix ">
            <!-- section with the time and comments button -->
            <div class="fill-flow">
                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/posts/single_post.php?post_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" data-toggle="tooltip" data-placement="bottom" title="Check this post"
                   class="btn btn-default" id="clock-panel">
                    <i class="fa fa-clock-o"></i>
                    <?php if ($_smarty_tpl->tpl_vars['post']->value['start_date']) {?> <?php echo $_smarty_tpl->tpl_vars['post']->value['start_date'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['post']->value['post_date'];?>
 <?php }?>
                </a>

                <?php if ($_smarty_tpl->tpl_vars['isRightFeed']->value) {?>
                    <button class="btn btn-default btn-comments rightFeed" id="btn-comments-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" type="button" data-toggle="collapse" data-target="#comments-rightfeed-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" aria-expanded="false" aria-controls="comments">
                        <i class="fa fa-comments"></i> Comments
                    </button>
                <?php } else { ?>
                    <button class="btn btn-default btn-comments" id="btn-comments-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" type="button" data-toggle="collapse" data-target="#comments-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" aria-expanded="false" aria-controls="comments">
                        <i class="fa fa-comments"></i> Comments
                    </button>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['post']->value['user_id'] != $_SESSION['id']) {?>
                    <button class="btn btn-default btn-repost" id="btn-repost-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"><i class="fa fa-retweet"></i> Repost</button>
                    <a href="javascript:void" class="btn btn-default btn-flag-report" data-toggle="tooltip" data-placement="bottom" title="Report this post" data-toggle="modal" id="btn-report-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"> <i class="fa fa-flag"></i></a>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['post']->value['user_id'] == $_SESSION['id']) {?>
                    <button class="btn btn-default btn-delete" id="btn-delete-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"><i class="fa fa-trash-o"></i> Delete</button>
                    <button class="btn btn-default btn-edit" data-toggle="modal" data-target="#editModal" id="btn-edit-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"><i class="fa fa-pencil"></i> Edit</button>
                <?php }?>
            </div>

            <!-- comment section-->
            <?php if ($_smarty_tpl->tpl_vars['isRightFeed']->value) {?>
                <div class="collapse" id="comments-rightfeed-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
                    <div class="col-lg-20" id="comments_section">
                        <h4>Comments</h4>
                        <div class="input-group commentform" id="commentform-rightfeed-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
                            <textarea placeholder="Type comment" class="form-control" rows="1" style="resize:none"></textarea>
                            <span class="input-group-addon btn btn-primary btn-comment">Comment</span>
                            <div id="error_message"></div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="collapse" id="comments-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
                    <div class="col-lg-20" id="comments_section">
                        <h4>Comments</h4>
                        <div class="input-group commentform" id="commentform-<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
                            <textarea placeholder="Type comment" class="form-control" rows="1" style="resize:none"></textarea>
                            <span class="input-group-addon btn btn-primary btn-comment">Comment</span>
                            <div id="error_message"></div>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
<?php }

}
}
?>