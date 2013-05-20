<?php if(!defined('IN_PHPMPS'))die('Access Denied'); ?><footer class="footer">
    <div class="container">
        <div class="row">
            <div class="span3 text-left">
                <h5><a href="help.php?act=list">帮助中心</a></h5>
                <ul class="unstyled">
                    <?php if(is_array($helps)) foreach($helps AS $help) { ?>
                    <li><small><a href="<?php echo $help['url'];?>" target="_blank"><?php echo $help['title'];?></a></small></li>
                    
<?php } ?>

                </ul>
            </div>
            <div class="span3 text-left">
                <h5>联系方式</h5>
                <ul class="unstyled">
                    <li>
                        <small>
                            <i class="icon-comment"></i>热线电话：<?php echo $CFG['phone'];?>
                        </small>
                    </li>
                    <li>
                        <small>
                            QQ：<?php if(is_array($CFG['qq'])) foreach($CFG['qq'] AS $qq) { ?>
                            <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $qq;?>&amp;Site=<?php echo $CFG['webname'];?>&amp;Menu=yes" target="_blank"><img style="display:inline" src="http://wpa.qq.com/pa?p=1:<?php echo $qq;?>:4" height="16" border="0" alt="QQ" /><?php echo $qq;?></a>
                            
<?php } ?>

                        </small>
                    </li>
                    <li>
                        <small>
                            <i class="icon-user"></i>QQ群：<?php echo $CFG['qqun'];?>
                        </small>
                    </li>
                </ul>

            </div>
            <div class="span3 text-left">
                <h5>便民服务</h5>
                <ul class="unstyled">
                    <?php if(is_array($fac)) foreach($fac AS $fac) { ?>
                    <li><?php echo $fac['title'];?>: <?php echo $fac['phone'];?></li>
                    
<?php } ?>

                </ul>
            </div>
            <div class="span3 text-left">
                <h5>友情连接</h5>
                <ul class="unstyled">
                    <?php if(!empty($links[txt])) { ?>
                    <?php if(is_array($links[txt])) foreach($links[txt] AS $link) { ?>
                    <li><a href="<?php echo $link['url'];?>" target=_blank title="<?php echo $link['webname'];?>"><?php echo $link['webname'];?></a></li>
                    
<?php } ?>

                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="row">
            <hr>
            <div class="span12">
                <p class="text-center">
                    <a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('<?=$CFG[weburl]?>');return(false);" style="cursor:pointer;">设为首页</a> |
                    <a href=javascript:window.external.AddFavorite('<?php echo $CFG['weburl'];?>','<?php echo $CFG['webname'];?>')>加为收藏</a> |  <a href="./wap">wap</a> |
                    
<?php if(is_array($about)) foreach($about AS $key => $val) { ?>
                    <a href=<?php echo $val['url'];?> target=_blank><?php echo $val['title'];?></a>
                    <?php if($key<(count($about)-1)) { ?> | <?php } ?>
                    
<?php } ?>

                </p>
                <p>
                    <a href="rss.php"><img src="templates/<?php echo $CFG['tplname'];?>/images/rss_xml.gif" border="0" /></a>
                </p>
            </div>
        </div>
    </div>

</footer>

<!--
&lt;!&ndash; 页脚 &ndash;&gt;
<div id="footer" class="clearfix">
  <div class="foot_info">

    Powered by <a href=http://www.phpmps.com target=_blank><strong>Phpmps</strong></a>&copy; 2008-2009 Phpmps Inc. 
&lt;!&ndash;<?php if(!empty($CFG['qq'])) { ?>&ndash;&gt;
QQ:	
&lt;!&ndash;<?php if(is_array($CFG['qq'])) foreach($CFG['qq'] AS $qq) { ?>&ndash;&gt;
<a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $qq;?>&amp;Site=<?php echo $CFG['webname'];?>&amp;Menu=yes" target="_blank"><img style="display:inline" src="http://wpa.qq.com/pa?p=1:<?php echo $qq;?>:4" height="16" border="0" alt="QQ" /><?php echo $qq;?></a>
&lt;!&ndash;
<?php } ?>
&ndash;&gt;
&lt;!&ndash;<?php } ?>&ndash;&gt;<br />
<?php echo $CFG['copyright'];?>&nbsp;&nbsp; ICP备案号：<a href=http://www.miibeian.gov.cn target=_blank><?php echo $CFG['icp'];?></a>&nbsp;&nbsp; &lt;!&ndash;<?php if($CFG['count']) { ?>&ndash;&gt;
<?php echo $CFG['count'];?>
&lt;!&ndash;<?php } ?>&ndash;&gt;</div>
  <div class="clear"></div>
  <div class="bor"></div>
</div>
&lt;!&ndash; 页脚 结束 &ndash;&gt;-->
