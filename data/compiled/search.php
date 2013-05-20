<?php if(!defined('IN_PHPMPS'))die('Access Denied'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset;?>"/>
    <title><?php echo $seo['title'];?></title>
    <meta name="Keywords" content="<?php echo $seo['keywords'];?>">
    <meta name="Description" content="<?php echo $seo['description'];?>">
    <link href="templates/<?php echo $CFG['tplname'];?>/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet"/>
    <link href="templates/<?php echo $CFG['tplname'];?>/bootstrap/css/bootstrap-responsive.css" type="text/css" rel="stylesheet"/>
    <link href="templates/<?php echo $CFG['tplname'];?>/bootstrap/css/docs.css" type="text/css" rel="stylesheet"/>
    <script src="js/common.js"></script>
    <style type="text/css">
        .border {
            border-bottom: 1px #d1d1d2 solid;
            margin-bottom: 20px;
        }
    </style>
</head>
<body data-spy="scroll" data-target=".bs-docs-sidebar">

<?php include template(header); ?>

<div class="container" style="padding-top:5px;">
    <!-- 主体 -->
    <div id="content" class="row-fluid">
        <div class="span9" id="node_box">
            <div class="mainBar">
                <!-- 头部选择 -->
                <div class="top_selsct">
                    <div>
                    </div>
                </div>

                <!-- 内容列表 -->
                <div class="zone clearfix" id="node_bg">
                    <?php if(is_array($articles)) foreach($articles AS $article) { ?>
                    <div class="list_module bg">
                        <div class="hd clearfix">
                            <span class="right_f"><b class="time"><?php echo $article['postdate'];?></b>发布</span>
                            <span class="title"><a href="<?php echo $article['url'];?>" target="_target"><?php echo $article['title'];?></a></span>
                            <span class="smallClass"><?php echo $article['catname'];?></span>
                        </div>
                        <div class="bd clearfix">
                            <div class="pic"></div>
                            <div class="cont">
                                <div class="info"><?php echo $article['intro'];?></div>
                                <div class="ft">
                                    地区：<b><?php echo $article['areaname'];?></b>
                                    <?php if(is_array($article[custom])) foreach($article[custom] AS $cus) { ?> <?php echo $cus['cusname'];?>：<b><?php echo $cus['cusvalue'];?></b>
                                    
<?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    
<?php } ?>

                    <div class="pagination_module clearfix" style="margin-top:7px;">
                        <span class="right2"><a href="#top" style="border:0; color:#36c;">返回顶部 ↑</a></span>
                        <span class="right2" style="float:left;">
<?php include template(page); ?>
</span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="span3">
            <div class="well well-small">
                <h4>热门信息</h4>
                <ul class="unstyled">
                    <?php if(is_array($cat_hot)) foreach($cat_hot AS $hot) { ?>
                    <li><a href="<?php echo $hot['url'];?>" target=_blank><?php echo $hot['title'];?></a></li>
                    
<?php } ?>

                </ul>
            </div>
        </div>
    </div>
</div>


<?php include template(footer); ?>

<script src="templates/<?php echo $CFG['tplname'];?>/bootstrap/js/jquery.js"></script>
<script src="templates/<?php echo $CFG['tplname'];?>/bootstrap/js/bootstrap.js"></script>
</body>
</html>
