<?php if(!defined('IN_PHPMPS'))die('Access Denied'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset;?>" />
<title><?php echo $seo['title'];?></title>
<meta name="Keywords" content="<?php echo $seo['keywords'];?>">
<meta name="Description" content="<?php echo $seo['description'];?>">
<link href="<?php echo PHPMPS_PATH;?>templates/<?php echo $CFG['tplname'];?>/style/reset.css" type="text/css" rel="stylesheet" />
<link href="<?php echo PHPMPS_PATH;?>templates/<?php echo $CFG['tplname'];?>/style/style.css" type="text/css" rel="stylesheet" />
<link href="<?php echo PHPMPS_PATH;?>templates/<?php echo $CFG['tplname'];?>/style/user.css" type="text/css" rel="stylesheet" />
<link href="<?php echo PHPMPS_PATH;?>templates/<?php echo $CFG['tplname'];?>/style/useredit.css" type="text/css" rel="stylesheet" />
<script src="<?php echo PHPMPS_PATH;?>js/common.js"></script>
<script type="text/javascript" src="<?php echo PHPMPS_PATH;?>js/jquery.js"></script>
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
<div class="bigtitle">黄页信息管理</div>

<table width="100%" cellpadding="0" cellspacing="0" class="tx_box">
<tr>
<td valign="top" style="width:70px; text-align:center;"><img src="<?php echo PHPMPS_PATH;?>templates/<?php echo $CFG['tplname'];?>/images/icon1.gif" width="53" height="53" alt="" /></td>
<td class="tx_title"><span>重要提示：</span><br />
您可以编辑、删除您自己发布的信息

<br />
</td>
</tr>
</table>
<span ><div class="ptag"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="width:100px" class="<?php echo $style0;?>"><?php echo $url0;?></td><td class="card_line"></td><td style="width:100px" class="<?php echo $style1;?>"><?php echo $url1;?></td><td class="card_line"></td><td style="width:100px" class="<?php echo $style2;?>"><?php echo $url2;?></td>
<td class="card_line"></td>
</tr></table></div><br /></span><table id="ProOrderList" width="100%">
<tr>
<td>          
        <table border="0" cellpadding="1" cellspacing="1" class="tablelist" width="100%">
            <tr class="tabletitle">
                <td width="15%"><b>信息编号</b></td>
                <td width="36%"><b>信息标题</b></td>
<td width="19%"><b>审核</b></td>
                <td width="17%"><b>发布时间</b></td>
                <td width="13%"><b>操作</b></td>
            </tr>
<?php if(is_array($coms)) foreach($coms AS $row) { ?>
<tr class="tditem" style="text-align:center;" onmouseover="this.className='table_over';" onmouseout="this.className='tditem';">
<td><?php echo $row['comid'];?></td>
<td><a href="<?php echo $row['url'];?>" target="_blank"><?php echo $row['comname'];?></a></td>
<td><?php echo $row['is_check'];?></td>
<td><?php echo $row['postdate'];?></td>
<td align="center"><a href="member.php?act=editcom&id=<?php echo $row['comid'];?>">编辑</a> <a href="member.php?act=delcom&id=<?php echo $row['comid'];?>" onClick="if(!confirm('确定要删除吗？\n\n此操作不可以恢复！'))return false;">删除</a></td>
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
