<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
    <div class="wrap">
        <div style="width:auto; height:auto; margin-top:15px;_margin-top:15px;margin-bottom:15px;_margin-bottom:15px;">
            <!-- 酒店融资或转让 -->
            <div class="jiudian">
                <a href="index.php?m=content&c=index&a=show&catid=9&id=10" title="品牌推广">品牌推广</a>
                <a href="index.php?m=content&c=index&a=show&catid=9&id=11" title="营销策划">营销策划</a>
                <a href="index.php?m=content&c=index&a=show&catid=9&id=12" title="文艺演出">文艺演出</a>
            </div>
        </div>
        <div class="blank20"></div>
        <div class="w663 l">
            <!-- 经典案例 -->
            <div class="ind_tit">
                <h3>经典案例</h3><em>/CASE</em><span><a href="index.php?m=content&c=index&a=lists&catid=10">MORE</a></span></div>
            <div class="anli">

                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5c4f1cdf38145c840cb1d1ad0088af1a&action=lists&catid=10&order=id+DESC&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'10','order'=>'id DESC','limit'=>'8',));}?>
                     <ul>
                         <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
                            <li>
                            <a href="<?php echo $val['url'];?>" title="<?php echo $val['title'];?>">
                                <img src="<?php echo $val['thumb'];?>" width="295" height="200" alt="<?php echo $val['title'];?>" />
                                <h3><?php echo $val['title'];?></h3>
                            </a>
                            </li>
                         <?php $n++;}unset($n); ?>
                     </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
        <div class="w317 r">
            <div class="ind_tit">
                <h3>行业新闻</h3><em>/NEWS</em><span><a href="index.php?m=content&c=index&a=lists&catid=11">MORE</a></span></div>
            <div class="hyxw">

                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e3ebe8dc98297f78b531983ef0c94075&action=lists&catid=11&order=id+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'11','order'=>'id DESC','limit'=>'6',));}?>
                     <dl>
                        <?php $n=1;?>
                        <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
                            <?php if($n==1) { ?>
                                <dt><span style="height:30px; line-height:30px;">[<?php echo date('Y-m-d',$val['inputtime']);?>]</span>
                                    <h3 style="height:30px; line-height:30px;"><a href="<?php echo $val['url'];?>" title="<?php echo $val['title'];?>"  style="font-weight:bold;"><?php echo str_cut($val[title],56,'...');?></a></h3>
                                    <p style="line-height:25px;">
                                        <a href="news-show-8.html" title="<?php echo $val['title'];?>"><img src="<?php echo $val['thumb'];?>" width="120" height="90" border="0" style="float:left; margin-right:6px;" alt="<?php echo $val['title'];?>" /></a>
                                        <?php echo str_cut($val[description],160,'...');?></p>
                                </dt>
                            <?php } else { ?>
                              <dd><span>[<?php echo date('Y-m-d',$val['inputtime']);?>]</span><a href="<?php echo $val['url'];?>" title="<?php echo $v['title'];?>" target="_blank"><?php echo str_cut($val[title],56,'...');?></a></dd>
                            <?php } ?>
                            <?php $n++;?>
                        <?php $n++;}unset($n); ?>
                     </dl>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

            </div>
            <div class="blank10"></div>
            <div class="hezuo">
                <ul>
                    <li>
                        <a href="javascript:void(0);"><img src="images/rfw1.jpg" alt="" width="315" /></a>
                    </li>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=239dbfeb1a07f824bc56e2b6426dcc28&action=lists&catid=6&order=id+DESC&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'6','order'=>'id DESC','limit'=>'8',));}?>
                   
                         <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
                         <li style="background:#075CAF; height:61px; line-height:61px; width:283px; padding-left:32px;"><a href="<?php echo $val['url'];?>" title="<?php echo $val['title'];?>" style="font-size:20px; font-weight:bold; color:#FFFFFF;"><?php echo $val['title'];?></a></li>
                         <?php $n++;}unset($n); ?>
            
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
                <div class="blank10"></div>
            </div>
        </div>
    </div>
<?php include template("content","footer"); ?>    