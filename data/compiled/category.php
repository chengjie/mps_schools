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
        .info{
            padding: 8px 35px 8px 14px;
            margin-bottom: 10px;
            text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
            background-color: #fcf8e3;
            border: 1px solid #fbeed5;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
        }
        .info_list {
            border-radius: 4px;
            border: 1px #dddcba solid;
            margin: 10px 0;
            cursor: pointer;
        }
        .bk{
            padding: 10px;
        }
        .active{
            background-color: #fbeed5;
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
        <div class="span3">
            <!-- 类别列表 -->
            <!-- 详细搜索 -->
            <div class="well well-small">
                <h4>详细搜索</h4>
                <form class="form-horizontal" action="search.php" method="post" name="search" >
                    <div class="control-group">
                        <label class="control-label" for="id">分类</label>
                        <div class="controls">
                            <?php echo $s_cat;?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="area">地区</label>
                        <div class="controls">
                            <?php echo $s_area;?>
                        </div>
                    </div>
                    <?php if(is_array($cat_custom)) foreach($cat_custom AS $item) { ?>
                    <div class="control-group">
                        <label class="control-label" for="area"><?php echo $item['cusname'];?></label>
                        <div class="controls">
                            <?php echo $item['html'];?> <?php echo $item['unit'];?>
                        </div>
                    </div>
                    
<?php } ?>

                    <div class="control-group">
                        <label class="control-label" for="keywords">关键字</label>
                        <div class="controls">
                            <input type="text" name="keywords" id="keywords" />
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <input type="hidden" name="default_cat" value="<?php echo $catid;?>" />
                            <input type="hidden" name="default_area" value="<?php echo $areaid;?>" />
                            <button type="submit" name="Submit" class="btn">搜索</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="well well-small">
                <h5>热门信息</h5>
                <ul class="nav nav-list">
                    <?php if(is_array($cat_hot)) foreach($cat_hot AS $hot) { ?>
                    <li><a href="<?php echo $hot['url'];?>" target="_blank"><?php echo $hot['title'];?></a></li>
                    
<?php } ?>

                </ul>
            </div>
        </div>
        <div class="span9">
                <!-- 头部选择 -->
            <div class="row-fluid">
                <div class="span12 info">
                    <?php if($cat_arr || $area_arr) { ?>
                        <?php if($cat_arr) { ?>
                        <div class="">分类查找：
                            <?php if(is_array($cat_arr)) foreach($cat_arr AS $val) { ?>
                            <a href=<?php echo $val['url'];?>> <?php echo $val['catname'];?></a>&nbsp;
                            
<?php } ?>

                        </div>
                        <?php } ?>
                        <?php if($area_arr) { ?>
                        <div class="">区域查找：
                            <?php if(is_array($area_arr)) foreach($area_arr AS $val) { ?>
                            <a href=<?php echo $val['url'];?>> <?php echo $val['areaname'];?></a>&nbsp;
                            
<?php } ?>

                        </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
                <?php if(is_array($top_info)) foreach($top_info AS $article) { ?>
                <div class="row-fluid info_list">
                    <div class="span10">
                        <div class="bk">
                        <div class="row-fluid">
                            <div class="span2">
                                <?php if($article[thumb]) { ?>
                                <a href="<?php echo $article['url'];?>" target="_blank">
                                    <img src="<?php echo $article['thumb'];?>" width=120 height=120/>
                                </a>
                                <?php } ?>
                            </div>
                            <div class="span10">
                                <div><a href="<?php echo $article['url'];?>" target="_blank"><?php echo $article['intro'];?></a></div>
                                <div class="smallClass"><?php echo $article['catname'];?></div>
                                <div>
                                    地区：<?php echo $article['areaname'];?>&nbsp;
                                    <?php if(is_array($article[custom])) foreach($article[custom] AS $cus) { ?> <?php echo $cus['cusname'];?>：<?php echo $cus['cusvalue'];?>&nbsp;
                                    
<?php } ?>

                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="span2">
                        <div class="bk">
                        <small><?php echo $val['postdate'];?>发布</small>
                        </div>
                    </div>
                </div>
                
<?php } ?>

                <?php if(is_array($info)) foreach($info AS $val) { ?>
                <div class="info_list row-fluid">
                    <div class="span10">
                        <div class="bk">
                        <div class="row-fluid">
                            <div class="span2">
                                <?php if($val[thumb]) { ?>
                                <a href="<?php echo $val['url'];?>" target="_blank">
                                    <img src="<?php echo $val['thumb'];?>" width=120 height=120/>
                                </a>
                                <?php } ?>
                            </div>
                            <div class="span10">
                                <div><a href="<?php echo $val['url'];?>" target="_blank"><?php echo $val['intro'];?></a></div>
                                <div class="smallClass"><?php echo $val['catname'];?></div>
                                <div>
                                    地区：<?php echo $val['areaname'];?>&nbsp;
                                    <?php if(is_array($val[custom])) foreach($val[custom] AS $cus) { ?> <?php echo $cus['cusname'];?>：<?php echo $cus['cusvalue'];?>&nbsp;
                                    
<?php } ?>

                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="span2">
                        <div class="bk">
                        <small><?php echo $val['postdate'];?>发布</small>
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
    </div>
    <!-- 主体 结束 -->

</div>

<?php include template(footer); ?>

<script src="templates/<?php echo $CFG['tplname'];?>/bootstrap/js/jquery.js"></script>
<script src="templates/<?php echo $CFG['tplname'];?>/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
    $(function(){
       $(".info_list").hover(
               function(){$(this).addClass("active")},
               function(){$(this).removeClass("active")}
       );
    });
</script>
</body>
</html>