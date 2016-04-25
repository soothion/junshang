<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
    <div class="wrap">
        <?php include template("content","left"); ?>
        <div class="w646 r">
            <div class="m_nav">
                <h3><?php echo $CATEGORYS[$catid]['catname'];?></h3><span>所在位置：<a href="<?php echo siteurl($siteid);?>">首页</a> - <a href="<?php echo $CATEGORYS[$catid]['url'];?>"><?php echo $CATEGORYS[$catid]['catname'];?></a></span></div>
            <div class="blank20"></div>
            <div id="newscontent" class="inner_con">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=25256913db4f95728b4961ef53c20376&action=lists&catid=11&order=id+DESC&num=10&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'11','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'11','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                     <ul>
                         <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
                            <li>
                                <i class="fr"><?php echo date('Y-m-d',$val[inputtime]);?></i>
                                <a href="<?php echo $val['url'];?>" title="<?php echo $val['title'];?>"><?php echo $val['title'];?></a>
                            </li>
                         <?php $n++;}unset($n); ?>
                     </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <div class="pageinfo"><?php echo $pages;?></div>
            </div>
        </div>
    </div>
<?php include template("content","footer"); ?>