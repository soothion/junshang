<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
    <div class="wrap">
        <?php include template("content","left"); ?>
        <div class="w646 r">
            <div class="m_nav">
                <h3><?php echo $title;?></h3><span>所在位置：<a href="<?php echo siteurl($siteid);?>">首页</a> - <a href="<?php echo $url;?>"><?php echo $title;?></a></span></div>
            <div class="blank20"></div>
            <div class="newslist">
                <div style="padding-top:8px; line-height:25px;">
                    <?php echo $content;?>
                </div>
            </div>
        </div>
    </div>
    <script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
<?php include template("content","footer"); ?>    