<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="left l">
    <div class="fuwu">
        <img alt="标题标题" src="images/index_13.jpg" />
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=239dbfeb1a07f824bc56e2b6426dcc28&action=lists&catid=6&order=id+DESC&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'6','order'=>'id DESC','limit'=>'8',));}?>
                 <ul>
                     <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
                     <li> <a href="<?php echo $val['url'];?>" style="font-size:18px; font-weight:bold; color:#FFFFFF;"><?php echo $val['title'];?></a></li>
                     <?php $n++;}unset($n); ?>
                 </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <div class="blank40"></div>
    <div class="ind_tit">
        <h3>联系方式</h3><em>/Contact</em><span><a href="#">MORE</a></span></div>
    <div class="lianxi fs14">
        咨询热线：020-29175887
        <br> 吴董Tel：15622226222
        <br> Email：hezuo@junshangmedia.com
        <br> 地址：广州增城市新塘镇长风国际23栋102

    </div>
</div>