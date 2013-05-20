<?php if(!defined('IN_PHPMPS'))die('Access Denied'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset;?>" />
<title><?php echo $seo['title'];?></title>
<meta name="Keywords" content="<?php echo $seo['keywords'];?>">
<meta name="Description" content="<?php echo $seo['description'];?>">
    <link href="templates/<?php echo $CFG['tplname'];?>/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link href="templates/<?php echo $CFG['tplname'];?>/bootstrap/css/bootstrap-responsive.css" type="text/css" rel="stylesheet" />
    <link href="templates/<?php echo $CFG['tplname'];?>/bootstrap/css/docs.css" type="text/css" rel="stylesheet" />
    <script src="js/common.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<!-- phpmps -->
<script>
var lng = '<?php echo $mappoint['0'];?>';
var lat = '<?php echo $mappoint['1'];?>';
var address = '信息所在地';
function checkcomment()
{
if(document.comment.content.value==""){
alert('请输入评论内容！');
document.comment.content.focus();
return false;
}
if(document.comment.checkcode.value==""){
alert('请输入验证码！');
document.comment.checkcode.focus();
return false;
}
}
function chkreport()
{
var radios = document.getElementsByName("types"); 
var resualt = false;
for(i=0;i<radios.length;i++)
{
if(radios[i].checked)
{
    resualt = true;
}
}
if(!resualt)
{   
alert("请选择错误类型");
return false;
}
}
function chktype()
{
if(document.form3.password.value==""){
alert('请输入密码！');
document.form3.password.focus();
return false;
}
if(document.form3.act.value=="delinfo"){
return confirm('确认要删除吗？此操作不可恢复！')
}
}
</script>
    <style type="text/css">
        .form-horizontal .control-label  {
            width: 50px;
        }
        .form-horizontal .controls {
            margin-left: 70px;
        }
        .form-horizontal .controls select {
            width: 160px;
        }
        .form-horizontal .controls input {
            width: 145px;
        }
        .title {
            font-size: 18px;
            font-weight: bold;
            color: #727272;
            border-bottom: 1px #cfcfcf solid;
            margin-bottom: 18px;
        }
        .subtitle {
            margin:10px 0 5px 100px;
            font-size: 8px;
            color: #b1b1b1;
            font-weight: normal;
        }
    </style>
</head>
<body data-spy="scroll" data-target=".bs-docs-sidebar">

<?php include template(header); ?>

<div class="container" style="padding-top:5px;">
    <div class="row-fluid"><div class="span12">
<?php include template(here); ?>
</div></div>
<!-- 主体 -->
    <div class="row-fluid">
        <div class="span8">
            <div class="row-fluid">
                <div class="span12">
                    <div class="title">
                        <?php echo $title;?>
                        <div class="subtitle">
                            <?php echo $postdate;?><span class="text-error"><?php echo $infousername;?></span>发布， 有效期：<?php echo $lastdate;?>，
                            已经被阅读<span class="text-error"><?php echo $click;?></span>次
                            <span class="text-right">
                                <a href="javascript:copyToClipBoard();" class="btn btn-mini btn-primary">转 发</a>
                                <a href="#replay" class="btn btn-mini btn-inverse">回 复</a>
                            </span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row-fluid">
                <table width="100%" class="table_1" border="0" cellspacing="0">
                    <?php if(is_array($custom)) foreach($custom AS $val) { ?>
                    <tr>
                        <td align="right" bgcolor="#eff1f7" width="100px"><b><?php echo $val['name'];?>：</b></td>
                        <td align="left"><?php echo $val['value'];?>&nbsp;&nbsp;<?php echo $val['unit'];?></td>
                    </tr>
                    
<?php } ?>

                </table>
            </div>
            <div class="row-fluid">
                <p><?php echo $content;?></p>
                <?php if($images) { ?>
                <ul class="inline">
                    <?php if(is_array($images)) foreach($images AS $val) { ?>
                    <li>
                        <a href=<?php echo $val['path'];?> target="_blank" >
                            <img src=<?php echo $val['path'];?> class="img-rounded" alt="" border=0 width="200px" height="190px" />
                        </a>
                    </li>
                    
<?php } ?>

                </ul>
                <?php } ?>
            </div>
            <!-- 联系方式 -->
            <div class="row-fluid">
                <table class="table table-bordered">
                  <tr>
                    <td><strong>联系人：</strong><?php echo $linkman;?></td>
                    <td><strong>电话：</strong><?php echo $phone;?> &nbsp;
                        <?php if($phone) { ?>
                        <a href="javascript:void(0)" onclick="window.open('http://www.ip138.com:8080/search.asp?action=mobile&mobile=<?php echo $phone_c;?>')">
                            查看归属地
                        </a>
                        <?php } ?>
                    </td>
                  </tr>
                  <tr>
                    <td><strong>QQ：</strong><?php echo $qq;?>
                    <?php if($qq) { ?><?php if($CFG['visitor_view']) { ?><script language=javascript src="js.php?act=qq&qq=<?php echo $js_qq;?>"></script>
                    <?php } ?><?php } ?></td>
                    <td><strong>邮箱：</strong><?php echo $email;?></td>
                  </tr>
                  <tr>
                    <td><strong>联系地址：</strong><?php echo $address;?></td>
                    <td>
                        <strong>发布者所在地区：</strong>
                        <span class="blue_skin"><?php echo $postarea;?></span>
                    </td>
                  </tr>
                </table>
            </div>
            <!-- 评论 -->
            <div class="row-fluid">
                <div class="well" style="background-color: #ffffff">
                    <h4>网友回复</h4>
                    <div class="comment_zone" id="showcomment">
                        正在加载数据，请稍等......
                    </div>
                </div>
                <form class="form-horizontal" name="comment" action="member.php?act=comment" method="post" onsubmit="return checkcomment();">
                <a name="replay"></a>
                <textarea name="content" rows="8" class="span12"></textarea>
                <input name=checkcode placeholder="验证码" type=text id=checkcode size="5" maxlength="5" onfocus='get_code();this.onfocus=null;' />
                <span id=imgid></span>
                <span class="left"><input name="" value="提 交" type="submit" />
                <input type=hidden name=id value=<?=$id?> ><span id="checkshop"> (注意：仅限300汉字)</span></span>
            </form>
            </div>
        </div>
        <div class="span4">
            <div class="well well-small">
                <h4>编辑信息</h4>
                <?php if($infouserid>0 && $infouserid==$_userid) { ?>
                <div>
                    编辑：<a class="btn" href="member.php?act=editinfo&id=<?=$id?>">修改</a>
                    <a class="btn" href="member.php?act=delinfo&id=<?=$id?>" onClick="if(!confirm('确定要删除吗？\n\n此操作不可以恢复！'))return false;">删除</a>
                    <a class="btn" href="member.php?act=refer&id=<?=$id?>">一键更新</a>
                    <a class="btn" href="member.php?act=top&id=<?=$id?>">置顶</a>
                </div>
                <?php } else { ?>
                <form name="form3" action="member.php?act=editinfo" method=post class="form-horizontal">
                    <div class="control-group">
                        <label class="control-label" for="delpass">密码：</label>
                        <div class="controls">
                            <input name="password" type="password" id="delpass" size="10" maxLength=20/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="act">选择：</label>
                        <div class="controls">
                            <select name="act" id="act">
                                <option value="delinfo">删除</option>
                                <option value="editinfo">修改</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <input type=hidden name=id value=<?php echo $id;?> />
                            <input onClick="return chktype();" type="submit" value="提交" class="btn" name="submit">
                        </div>
                    </div>
                </form>
                <?php } ?>
                </div>
            <!-- 信息地图 -->
            <?php if($mappoint) { ?>
            <div class="well well-small">
                <h4>信息地图</h4>
                <div>
                    <iframe id="map_iframe" src="do.php?act=small_map&show=1&p=<?php echo $CFG['map'];?>&width=220&height=212" frameborder="0" scrolling="no" width="220" height="212"></iframe>
                </div>
            </div>
            <?php } ?>
            <!-- 相关信息 -->
            <?php if($match_info) { ?>
            <div class="well well-small">
                <h4>相关信息</h4>
                <div>
                    <ul>
                        <?php if(is_array($match_info)) foreach($match_info AS $val) { ?>
                        <li><a href="<?php echo $val['url'];?>" target=_blank><?php echo $val['title'];?></a></li>
                        
<?php } ?>

                    </ul>
                </div>
            </div>
            <?php } ?>
            <!-- 发送邮件 -->
            <?php if($CFG['sendmailtype'] && $crypt_email) { ?>
            <div class="well well-small">
                <h4>发送邮件</h4>
                <div class="bd">
                <form name="send" method="post" action="member.php?act=send_info_mail" >
                    <div class="control-group">
                        <label class="control-label" for="title">标题：</label>
                        <div class="controls">
                            <input type="text" name="title" id="title" size="35" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="content">内容：</label>
                        <div class="controls">
                            <textarea name="content" id="content" cols='35' rows="5"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <input type="hidden" name="email" value="<?php echo $crypt_email;?>" />
                            <input type="submit" name="submit" value="发送" class="btn" />
                        </div>
                    </div>
                </form>
                </div>
            </div>
            <?php } ?>
            <!-- 举报 -->
            <div class="well well-small">
<div class="bd">
<div class="blank10"></div>
 <form class="form-horizontal" name="report" method="post" action="member.php" onsubmit="return chkreport()">
   如果您发现这条信息有问题，请举报。
                             <label class="radio">
                                 <input type="radio" name="types" value="1">非法信息
                             </label>
                             <label class="radio">
                                 <input type="radio" name="types" value="2">分类错误
                             </label>
                             <label class="radio">
                                 <input type="radio" name="types" value="3">中介信息
                             </label>
                             <label class="radio">
                                 <input type="radio" name="types" value="4">信息失效
                             </label>
<input type="hidden" name="id" value="<?php echo $id;?>">
<input type="hidden" name="act" value="report">
<input class="btn" type="submit" name="submit" value="提交">
  </form>
</div>
<span class="ft_bg"></span>
</div>
        </div>
    </div>
<!-- 主体 结束 -->
</div>

<?php include template(footer); ?>

<script src="templates/<?php echo $CFG['tplname'];?>/bootstrap/js/jquery.js"></script>
<script src="templates/<?php echo $CFG['tplname'];?>/bootstrap/js/bootstrap.js"></script>
<div class="floatBar"><a href="#"><img src="templates/<?php echo $CFG['tplname'];?>/images/top_go.png" alt="返回顶部"></a></div>
<!-- 评论 -->
<iframe id="icomment" name="icomment" src="comment.php?infoid=<?=$id?>" frameborder="0" scrolling="no" width="0" height=0></iframe>
</body>
</html>
