<?php if(!defined('IN_PHPMPS'))die('Access Denied'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset;?>" />
<title><?php echo $seo['title'];?></title>
<meta name="Keywords" content="<?php echo $seo['keywords'];?>">
<meta name="Description" content="<?php echo $seo['description'];?>">
    <link href="templates/<?php echo $CFG['tplname'];?>/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet"/>
    <link href="templates/<?php echo $CFG['tplname'];?>/bootstrap/css/bootstrap-responsive.css" type="text/css" rel="stylesheet"/>
    <link href="templates/<?php echo $CFG['tplname'];?>/bootstrap/css/docs.css" type="text/css" rel="stylesheet"/>
    <script src="js/common.js"></script>
<body data-spy="scroll" data-target=".bs-docs-sidebar">

<?php include template(header); ?>

<div class="container" style="padding-top:5px;">
    <div class="row">
        <div class="span12">
            <strong>发布步骤：</strong><span class="current">1.选择分类</span><span>2.填写内容</span><span>3.发布完成</span>
        </div>
    </div>
    <div class="row">
        <div class="span12">
            <div class="alert alert-error">
                <ol>
                    <li>只允许发布<strong><?php echo $city;?></strong>本地相关信息</li>
                    <li>请不要肆意发布垃圾信息、虚假信息、重复信息</li>
                    <li>所有信息发布必须严格遵守中华人民共和国所有法律法规及本地、本行业相关规定，严禁发布带有任何违法或违规色彩的信息</li>
                    <li>信息发布者必须自行对信息的有效性、真实性承担一切责任</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span12">
            <?php if(is_array($cats)) foreach($cats AS $cat) { ?>
            <span class="label label-inverse"><?php echo $cat['catname'];?>：</span>
            <ul class="inline">
                <?php if(!empty($cat[children])) { ?>
                <?php if(is_array($cat[children])) foreach($cat[children] AS $chi) { ?>
                <li><a href="<?php echo $CFG['postfile'];?>?act=post&id=<?=$chi['id']?>" data-toggle="tooltip" data-placement="top" title="<?php echo $child['description'];?>" data-original-title="<?php echo $child['description'];?>" ><?php echo $chi['name'];?></a></li>
                
<?php } ?>

                <?php } ?>
            </ul>
            
<?php } ?>

        </div>
    </div>
</div>

<?php include template(footer); ?>

<script src="templates/<?php echo $CFG['tplname'];?>/bootstrap/js/jquery.js"></script>
<script src="templates/<?php echo $CFG['tplname'];?>/bootstrap/js/bootstrap.js"></script>

</body>
</html>
