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
    <style type="text/css">
        .title {
            font-size: 20px;
            color: #656565;
        }
    </style>
</head>
<body data-spy="scroll" data-target=".bs-docs-sidebar">

<?php include template(header); ?>

<div class="container" style="padding-top:5px;">
    <div class="row-fluid"><div class="span12">
<?php include template(here); ?>
</div></div>
    <div class="row-fluid">
        <div class="span9">
            <div class="row-fluid">
                <div class="span12 title"><?php echo $seo['title'];?></div>
            </div>
            <?php if(is_array($articles)) foreach($articles AS $row) { ?>
            <div class="row-fluid">
                <div class="span10"><a href="<?php echo $row['url'];?>" target="_blank"><?php echo $row['title'];?></a></div>
                <div class="span2"><small><?php echo $row['addtime'];?></small></div>
            </div>
            
<?php } ?>

            <div class="row-fluid">
                <div class="span12">
<?php include template(page); ?>
</div>
            </div>
        </div>
        <div class="span3">
            <div class="well well-small">
                <h4>推荐阅读排行</h4>
                <ul class="unstyled">
                    <?php if(is_array($pro_articles)) foreach($pro_articles AS $row) { ?>
                    <li><a href="<?php echo $row['url'];?>" target="_blank"><?php echo $row['title'];?></a></li>
                    
<?php } ?>

                </ul>
            </div>
            <div class="well well-small">
                <h4>资讯分类列表</h4>
                <ul class="unstyled">
                    <?php if(is_array($type)) foreach($type AS $row) { ?>
                    <li><a href="<?php echo $row['url'];?>"><?php echo $row['typename'];?></a></li>
                    
<?php } ?>

                </ul>
            </div>

        </div>
    </div>

</div>
<!-- 主体 结束 -->
</div>

<?php include template(footer); ?>

<script src="templates/<?php echo $CFG['tplname'];?>/bootstrap/js/jquery.js"></script>
<script src="templates/<?php echo $CFG['tplname'];?>/bootstrap/js/bootstrap.js"></script>
</body>
</html>