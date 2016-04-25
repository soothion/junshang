<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
    <div class="wrap">
        <?php include template("content","left"); ?>
        <div class="w646 r">
            <div class="m_nav">
                <h3><?php echo $title;?></h3><span>所在位置：<a href="<?php echo siteurl($siteid);?>">首页</a> - <a href="<?php echo $url;?>"><?php echo $title;?></a></span></div>
            <div class="blank20"></div>
            <div id="showcon" class="inner_con">
                <h3><?php echo $title;?></h3>
                <div class="sec_tit">
                    <!--span>来源：</span--><span>更新：<?php echo date('Y-m-d',$r[inputtime]);?></span>阅读：<span id="hits"></span></div>
                <div class="content">
                    <?php echo $content;?>
                </div>
                <div class="page" style="border-top:1px dashed #CCCCCC; padding-top:5px;"><span class="fl">上一篇：<a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a></span><span class="fr">下一篇：<a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a></span></div>
            </div>
        </div>
    </div>
    <script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
<?php include template("content","footer"); ?>