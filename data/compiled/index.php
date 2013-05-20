<?php if(!defined('IN_PHPMPS'))die('Access Denied'); ?><!DOCTYPE html>
<html class="no-js" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset;?>" />
    <title><?php echo $seo['title'];?></title>
    <meta name="Keywords" content="<?php echo $seo['keywords'];?>">
    <meta name="Description" content="<?php echo $seo['description'];?>">
    <link href="templates/<?php echo $CFG['tplname'];?>/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link href="templates/<?php echo $CFG['tplname'];?>/bootstrap/css/bootstrap-responsive.css" type="text/css" rel="stylesheet" />
    <link href="templates/<?php echo $CFG['tplname'];?>/bootstrap/css/docs.css" type="text/css" rel="stylesheet" />
<body data-spy="scroll" data-target=".bs-docs-sidebar">

<?php include template(header); ?>

<div class="container" style="padding-top:5px;">
    <div class="row">
        <div id="category" class="span3">
            <div class="well">
            <?php if(is_array($cats_list)) foreach($cats_list AS $cat) { ?>
            <a class="label label-info" href="<?php echo $cat['caturl'];?>"><?php echo $cat['catname'];?></a>
            <ul class="inline">
                <?php if(is_array($cat[children])) foreach($cat[children] AS $child) { ?>
                <li><a href="<?php echo $child['url'];?>" data-toggle="tooltip" data-placement="top" title="<?php echo $child['description'];?>" data-original-title="<?php echo $child['description'];?>"><?php echo $child['name'];?></a></li>
                
<?php } ?>

            </ul>
            
<?php } ?>

            </div>
        </div>
        <div class="span6">
            <div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                    
<?php if(is_array($flash)) foreach($flash AS $key => $f) { ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $key;?>" class="<?php if($key==0) { ?>active<?php } ?>"></li>
                    
<?php } ?>

                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">
                    
<?php if(is_array($flash)) foreach($flash AS $key => $flash) { ?>
                    <div class="<?php if($key==0) { ?>active<?php } ?> item">
                        <img src="<?php echo $flash['image'];?>"/>
                        <div class="carousel-caption">
                            <?php echo $flash['description'];?>
                        </div>
                    </div>
                    
<?php } ?>

                </div>
                <!-- Carousel nav -->
                <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
            </div>
            <div class="">
                <ul class="unstyled">
                    <?php if(is_array($comments)) foreach($comments AS $comment) { ?>
                    <li><b><?php echo $comment['username'];?></b>&nbsp;对&nbsp;<a href="<?php echo $comment['url'];?>" target="_blank" class="pinglbt2"><?php echo $comment['title'];?></a>&nbsp;的评论</li>
                    
<?php } ?>

                </ul>
            </div>
        </div>
        <div class="span3">
            <div class="well sidebar-nav">
                <ul class="nav nav-list">
                    <li class="nav-header">屌丝快报<span class="pull-right"><a href="article.php">更多</a> </span> </li>
                    <?php if(is_array($articles)) foreach($articles AS $val) { ?>
                    <li><a href="<?php echo $val['url'];?>" target="_blank" title="<?php echo $val['title'];?>"><?php echo $val['ctitle'];?></a></li>
                    
<?php } ?>

                </ul>
            </div>
            <div class="well sidebar-nav">
                <ul class="nav nav-list">
                    <li class="nav-header">热门推荐<span class="pull-right"><a href="article.php">更多</a> </span> </li>
                    <?php if(is_array($pro_info)) foreach($pro_info AS $val) { ?>
                    <li><a href="<?php echo $val['url'];?>"  target=_blank><?php echo $val['title'];?></a><span><?php echo $val['catname'];?></span> -<span><?php echo $val['areaname'];?></span></li>
                
<?php } ?>

                </ul>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="span9">
            <div class="tabbable">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active">
                        <a href="#tab1" data-toggle="tab">二手教材</a>
                    </li>
                    <li>
                        <a href="#tab2" data-toggle="tab">手机</a>
                    </li>
                    <li>
                        <a href="#tab3" data-toggle="tab">电脑</a>
                    </li>
                    <li>
                        <a href="#tab4" data-toggle="tab">数码相机</a>
                    </li>
                    <li>
                        <a href="#tab5" data-toggle="tab">闲置服装</a>
                    </li>
                    <li>
                        <a href="#tab6" data-toggle="tab">数码</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                        <ul class="thumbnails">
                            <?php if(is_array($thumb_info)) foreach($thumb_info AS $thumb) { ?>
                            <?php if($thumb[catid]==3) { ?>
                            <li class="span2">
                                <a class="thumbnail" href="<?php echo $thumb['url'];?>" title="<?php echo $thumb['title'];?>" target=_blank>
                                    <img data-src="<?php echo $thumb['thumb'];?>/300x200" src="<?php echo $thumb['thumb'];?>" alt="<?php echo $thumb['title'];?>" />
                                    <span class="title"><?php echo $thumb['title'];?></span>
                                </a>
                            </li>
                            <?php } ?>
                            
<?php } ?>

                        </ul>
                    </div>
                    <div class="tab-pane" id="tab2">
                        <ul class="thumbnails">
                            <?php if(is_array($thumb_info)) foreach($thumb_info AS $thumb) { ?>
                            <?php if($thumb[catid]==6) { ?>
                            <li class="span2">
                                <a class="thumbnail" href="<?php echo $thumb['url'];?>" title="<?php echo $thumb['title'];?>" target=_blank>
                                    <img data-src="<?php echo $thumb['thumb'];?>/300x200" src="<?php echo $thumb['thumb'];?>" alt="<?php echo $thumb['title'];?>" />
                                    <span class="title"><?php echo $thumb['title'];?></span>
                                </a>
                            </li>
                            <?php } ?>
                            
<?php } ?>

                        </ul>
                    </div>
                    <div class="tab-pane" id="tab3">
                        <ul class="thumbnails">
                            <?php if(is_array($thumb_info)) foreach($thumb_info AS $thumb) { ?>
                            <?php if($thumb[catid]==8) { ?>
                            <li class="span2">
                                <a class="thumbnail" href="<?php echo $thumb['url'];?>" title="<?php echo $thumb['title'];?>" target=_blank>
                                    <img data-src="<?php echo $thumb['thumb'];?>/300x200" src="<?php echo $thumb['thumb'];?>" alt="<?php echo $thumb['title'];?>" />
                                    <span class="title"><?php echo $thumb['title'];?></span>
                                </a>
                            </li>
                            <?php } ?>
                            
<?php } ?>

                        </ul>
                    </div>
                    <div class="tab-pane" id="tab4">
                        <ul class="thumbnails">
                            <?php if(is_array($thumb_info)) foreach($thumb_info AS $thumb) { ?>
                            <?php if($thumb[catid]==7) { ?>
                            <li class="span2">
                                <a class="thumbnail" href="<?php echo $thumb['url'];?>" title="<?php echo $thumb['title'];?>" target=_blank>
                                    <img data-src="<?php echo $thumb['thumb'];?>/300x200" src="<?php echo $thumb['thumb'];?>" alt="<?php echo $thumb['title'];?>" />
                                    <span class="title"><?php echo $thumb['title'];?></span>
                                </a>
                            </li>
                            <?php } ?>
                            
<?php } ?>

                        </ul>
                    </div>
                    <div class="tab-pane" id="tab5">
                        <ul class="thumbnails">
                            <?php if(is_array($thumb_info)) foreach($thumb_info AS $thumb) { ?>
                            <?php if($thumb[catid]==14) { ?>
                            <li class="span2">
                                <a class="thumbnail" href="<?php echo $thumb['url'];?>" title="<?php echo $thumb['title'];?>" target=_blank>
                                    <img data-src="<?php echo $thumb['thumb'];?>/300x200" src="<?php echo $thumb['thumb'];?>" alt="<?php echo $thumb['title'];?>" />
                                    <span class="title"><?php echo $thumb['title'];?></span>
                                </a>
                            </li>
                            <?php } ?>
                            
<?php } ?>

                        </ul>
                    </div>
                    <div class="tab-pane fade" id="tab6">
                        <ul class="thumbnails">
                            <?php if(is_array($thumb_info)) foreach($thumb_info AS $thumb) { ?>
                            <?php if($thumb[catid]==11) { ?>
                            <li class="span2">
                                <a class="thumbnail" href="<?php echo $thumb['url'];?>" title="<?php echo $thumb['title'];?>" target=_blank>
                                    <img data-src="<?php echo $thumb['thumb'];?>/300x200" src="<?php echo $thumb['thumb'];?>" alt="<?php echo $thumb['title'];?>" />
                                    <span class="title"><?php echo $thumb['title'];?></span>
                                </a>
                            </li>
                            <?php } ?>
                            
<?php } ?>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="span3">
            <div class="well sidebar-nav">
                <ul class="nav nav-list">
                    <li class="nav-header">最新信息</li>
                    <?php if(is_array($new_info)) foreach($new_info AS $val) { ?>
                    <li><a href="<?php echo $val['url'];?>" data-toggle="tooltip" data-placement="top" data-original-title="" target=_blank><?php echo $val['title'];?></a><span><?php echo $val['catname'];?></span></li>
                    
<?php } ?>

                </ul>
            </div>
            <div class="well sidebar-nav">
                <ul class="nav nav-list">
                    <li class="nav-header">热门信息</li>
                    <?php if(is_array($hot_info)) foreach($hot_info AS $val) { ?>
                    <li><a href="<?php echo $val['url'];?>" data-toggle="tooltip" data-placement="top" data-original-title="" target=_blank><?php echo $val['title'];?></a><span><?php echo $val['catname'];?></span></li>
                    
<?php } ?>

                </ul>
            </div>
        </div>
    </div>
</div>

<?php include template(footer); ?>

<script src="templates/<?php echo $CFG['tplname'];?>/bootstrap/js/jquery.js"></script>
<script src="templates/<?php echo $CFG['tplname'];?>/bootstrap/js/bootstrap.js"></script>
<script src="templates/<?php echo $CFG['tplname'];?>/bootstrap/js/jquery.scrollUp.min.js"></script>
<script>
    $('body').tooltip({ selector: "#category a" });
    $('.carousel').carousel({
        interval: 5000
    });
   /* $('#myTab a').mouseHooks(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });*/
    $(document).ready(function(){
        $("img.lazy").unveil();
        $("#start-intro").click(function(){
            bootstro.start();
        });
        $.scrollUp({
            scrollName: 'scrollUp', // Element ID
            topDistance: '300', // Distance from top before showing element (px)
            topSpeed: 300, // Speed back to top (ms)
            animation: 'fade', // Fade, slide, none
            animationInSpeed: 200, // Animation in speed (ms)
            animationOutSpeed: 200, // Animation out speed (ms)
            scrollText: '', // Text for element
            activeOverlay: false  // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        });
    });

</script>
<a id="scrollUp" href="#top" title="" style="position: fixed; z-index: 2147483647; display: block;"></a>
</body>
</html>