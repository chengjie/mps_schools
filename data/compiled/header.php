<?php if(!defined('IN_PHPMPS'))die('Access Denied'); ?><div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="/">一屌丝</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <?php if(is_array($nav)) foreach($nav AS $nav) { ?><li><a href="<?php echo $nav['url'];?>" target="<?php echo $nav['target'];?>"><?php echo $nav['navname'];?></a></li>
<?php } ?>

                </ul>
            </div>
            <a class="btn pull-right btn-primary" href="<?php echo $CFG['postfile'];?>"><strong>发布消息</strong></a>
            <?php if($_userid) { ?>
            <span class="brand brand-right"><?php echo $_username;?></span>
            <a class="brand brand-right" href="member.php?act=logout&mid=<?php echo $_userid;?>">[退出]</a>
            <?php if($_status<=0) { ?>
            <a class="brand brand-right" href="member.php?act=send_check_email"><font color='red'>[验证邮件]</font></a>
            <?php } ?>
            <a class="brand brand-right" href="member.php">[个人中心]</a>
            <?php } else { ?>
            <a class="brand brand-right" href="member.php?act=register">[注册]</a>
            <a class="brand brand-right" href="member.php?act=login&refer=<?php echo $PHP_URL;?>">[登录]</a>
            <?php } ?>

        </div>
    </div>
</div>
<div class="jumbotron subhead">
    <div class="container">
        <div class="span2">
            <h1>一屌丝</h1>
        </div>
        <div class="span6 pull-right">
            <div class="input-append" style="margin-top: 20px;">
                <form  style="margin-bottom: 0" name="form" action="search.php" method="post">
                    <input class="span5" id="appendedInputButtons" type="text" placeholder="请输入要搜索的关键词">
                    <input type="submit" class="btn" name="search"  value="搜 索">
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="span6 pull-right">
            <?php if($CFG['annouce']) { ?>
            <i class="icon-volume-up"></i><small>公告：<?php echo $CFG['annouce'];?></small>
            <?php } ?>
        </div>
    </div>
</div>