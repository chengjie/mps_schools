<?php if(!defined('IN_PHPMPS'))die('Access Denied'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset;?>" />
<title><?php echo $seo['title'];?></title>
<meta name="Keywords" content="<?php echo $seo['keywords'];?>">
<meta name="Description" content="<?php echo $seo['description'];?>">
<link href="templates/<?php echo $CFG['tplname'];?>/style/reset.css" type="text/css" rel="stylesheet" />
<link href="templates/<?php echo $CFG['tplname'];?>/style/style.css" type="text/css" rel="stylesheet" />
<link href="templates/<?php echo $CFG['tplname'];?>/style/user.css" type="text/css" rel="stylesheet" />
<link href="templates/<?php echo $CFG['tplname'];?>/style/useredit.css" type="text/css" rel="stylesheet" />
<script src="js/common.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body class="home-page">
<div class="wrapper">

<?php include template(header); ?>

<!-- 主体 -->
<div id="content" class="clearfix">
<div class="col_main">
<div class="edit_box">
<div id="contentfloat">
        <div id="content">
<div class="bigtitle">我的信息管理</div>

<table width="100%" cellpadding="0" cellspacing="0" class="tx_box">
<tr>
<td valign="top" style="width:70px; text-align:center;"><img src="templates/<?php echo $CFG['tplname'];?>/images/icon1.gif" width="53" height="53" alt="" /></td>
<td class="tx_title"><span>重要提示：</span><br />
您可以编辑、删除您自己发布的信息

<br />
</td>
</tr>
</table>
<span ><div class="ptag"></div><br /></span><table id="ProOrderList" width="100%">
<tr>
<td>          
        <table border="0" cellpadding="1" cellspacing="1" class="tablelist" width="100%">
            <tr class="tabletitle">
                <td width="10%"><b>信息编号</b></td>
                <td width="40%"><b>信息标题</b></td>
<td width="5%"><b>推荐</b></td>
<td width="5%"><b>置顶</b></td>
<td width="5%"><b>审核</b></td>
                <td width="13%"><b>发布时间</b></td>
                <td width="20%"><b>操作</b></td>
            </tr>
<?php if(is_array($infos)) foreach($infos AS $info) { ?>
<tr class="tditem" style="text-align:center;" onmouseover="this.className='table_over';" onmouseout="this.className='tditem';">
<td><?php echo $info['id'];?></td>
<td><a href="<?php echo $info['url'];?>" target="_blank"><?php echo $info['title'];?></a></td>
<td><?php echo $info['is_pro'];?></td>
<td><?php echo $info['is_top'];?></td>
<td><?php echo $info['is_check'];?></td>
<td><?php echo $info['postdate'];?></td>
<td align="center"><a href="member.php?act=editinfo&id=<?php echo $info['id'];?>">编辑</a>|<a href="member.php?act=delinfo&id=<?php echo $info['id'];?>" onClick="if(!confirm('确定要删除吗？\n\n此操作不可以恢复！'))return false;">删除</a>|<a href="member.php?act=refer&id=<?php echo $info['id'];?>">一键刷新</a>|<a href="member.php?act=top&id=<?php echo $info['id'];?>">置顶</a></td>
</tr>

<?php } ?>

        </table>
    <div class="manu clearfix" style="text-align:center;">

<?php include template(page); ?>

</div></td>
</tr>
</table>
        </div>　
</div>
</div>
</div>
<div class="col_sub">
<!-- 侧边栏菜单 开始 -->
<div class="side_bar">
<ul>

<?php include template(member_left); ?>

</ul>
</div>
<!-- 侧边栏菜单 结束 -->
</div>
</div>
</form>
<!-- 主体 结束 -->

<?php include template(footer); ?>

</div>
</body>
</html>
