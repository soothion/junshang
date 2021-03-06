<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">
    <link rel="stylesheet" type="text/css" href="css/css.css" />
    <link rel="stylesheet" type="text/css" href="css/web.css" />
    <script type="text/javascript">
        // 设置为主页 
        function SetHome(obj, vrl) {
            try {
                obj.style.behavior = 'url(#default#homepage)';
                obj.setHomePage(vrl);
            } catch (e) {
                if (window.netscape) {
                    try {
                        netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
                    } catch (e) {
                        alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。");
                    }
                    var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
                    prefs.setCharPref('browser.startup.homepage', vrl);
                } else {
                    alert("您的浏览器不支持，请按照下面步骤操作：1.打开浏览器设置。2.点击设置网页。3.输入：" + vrl + "点击确定。");
                }
            }
        }
        // 加入收藏 兼容360和IE6 
        function shoucang(sTitle, sURL) {
            try {
                window.external.addFavorite(sURL, sTitle);
            } catch (e) {
                try {
                    window.sidebar.addPanel(sTitle, sURL, "");
                } catch (e) {
                    alert("加入收藏失败，请使用Ctrl+D进行添加");
                }
            }
        }
    </script>
</head>

<body>
    <div class="top">
        <div class="wrap owfl">
            <span class="l logo owfl"><a href="<?php echo siteurl($siteid);?>"><img src="images/index_01.jpg" alt="" /></a></span>
            <span class="r scang"><a href="javascript:SetHome(this,window.location)">设为首页</a> | <a href="javascript:shoucang(document.title,window.location)">加入收藏</a></span>
            <span class="r"><img src="images/tel.jpg" alt="" /></span>
            <div class="blank30"></div>
        </div>
    </div>
    <div class="nav">
        <ul class="wrap">
            <li class="nobg"><a href="<?php echo siteurl($siteid);?>">首页</a></li>
            <li><a href="index.php?m=content&c=index&a=show&catid=9&id=9">关于我们</a></li>
            <li><a href="index.php?m=content&c=index&a=show&catid=9&id=10">品牌推广</a></li>
            <li><a href="index.php?m=content&c=index&a=show&catid=9&id=11">营销策划</a></li>
            <li><a href="index.php?m=content&c=index&a=show&catid=9&id=12">文艺演出</a></li>
            <li><a href="index.php?m=content&c=index&a=lists&catid=10">经典案例</a></li>
            <li><a href="index.php?m=content&c=index&a=lists&catid=11">行业新闻</a></li>
            <li><a href="index.php?m=content&c=index&a=show&catid=9&id=13">招贤纳士</a></li>
            <li><a href="index.php?m=content&c=index&a=show&catid=9&id=14">联系我们</a></li>
        </ul>
    </div>
    <div class="blank0"></div>
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/html5zoo.js"></script>
    <script type="text/javascript" src="js/lovelygallery.js"></script>
    <!-- 轮播图 -->
    <div class="pics_wrap">
        <div id="html5zoo_1">
            <ul class="html5zoo-slides" style="display: none;">
                <li><img src="images/banner1.jpg" /></li>
                <li><img src="images/banner2.jpg" /></li>
                <li><img src="images/banner3.jpg" /></li>
            </ul>
        </div>
    </div>
    <!-- 轮播图结束 -->
    <div class="flashbg"></div>