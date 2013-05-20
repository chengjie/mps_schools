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
        .border{
            border-bottom: 1px #d1d1d2 solid;
            margin-bottom: 20px;
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
<div id="content" class="row-fluid">
<div class="span9">
            <div class="row-fluid border">
                <div class="span12"><h4><?php echo $title;?></h4></div>
                <div class="span12"><small>发布时间: <?php echo $addtime;?></small></div>
            </div>
            <div class="row-fluid">
                <div class="span12"><?php echo $content;?></div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    上一条：<a class="label label-info" href="<?php echo $pre['url'];?>"><?php echo $pre['title'];?></a>
                    下一条：<a class="label label-info" href="<?php echo $next['url'];?>"><?php echo $next['title'];?></a>
                </div>
            </div>
</div>
<div class="span3">
            <div class="well well-small">
<!-- 推荐阅读排行 -->
                <h4>推荐阅读排行</h4>
                <ul class="unstyled">
                    <?php if(is_array($pro_articles)) foreach($pro_articles AS $article) { ?>
                    <li><a href="<?php echo $article['url'];?>"><?php echo $article['title'];?></a></li>
                    
<?php } ?>

                </ul>
            </div>

<?php if($match_article) { ?>
            <div class="well well-small">
                <h4>相关新闻</h4>
                <ul class="unstyled">
                    <?php if(is_array($match_article)) foreach($match_article AS $row) { ?>
                        <li><a href="<?php echo $row['url'];?>"><?php echo $row['title'];?></a></li>
                    
<?php } ?>

                </ul>
            </div>
<?php } ?>
</div>
</div>
<!-- 主体 结束 -->
</div>

<?php include template(footer); ?>

<script src="templates/<?php echo $CFG['tplname'];?>/bootstrap/js/jquery.js"></script>
<script src="templates/<?php echo $CFG['tplname'];?>/bootstrap/js/bootstrap.js"></script>
</body>
</html>