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

    <div class="row-fluid border">
        <div class="span12"><h4><?php echo $title;?></h4></div>
    </div>
    <div class="row-fluid">
        <div class="span12"><?php echo $content;?></div>
    </div>
<!-- 主体 结束 -->
</div>

<?php include template(footer); ?>

<script src="templates/<?php echo $CFG['tplname'];?>/bootstrap/js/jquery.js"></script>
<script src="templates/<?php echo $CFG['tplname'];?>/bootstrap/js/bootstrap.js"></script>
</body>
</html>
