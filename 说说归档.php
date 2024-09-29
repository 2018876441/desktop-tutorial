<?php
/**
 * 说说归档模板
 * 
 * 此模板为喵喵送给购买Sunny主题的小伙伴的礼物
 * 
 * 说明：此模板将Sunny主题中所有的说说类型(wechat类型、microblog类型和browers类型)的文章做个归档
 * 
 * 使用方法：将该文件放入网站根目的sunny_template文件夹中，并确保当前页开启了评论区
 */
?>
<style>
.cat_guidang .item{
    line-height: 2.5rem;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    overflow: hidden;
    padding: 0.5rem 0;
}
</style>

<div class="cat_guidang">
        <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($cat_post);
            $year=0; $mon=0; $i=0; $j=0;
            $output = '<div class="cat_block" style="width: 100%;">';
            while($cat_post->next()):
                if ($cat_post->template == 'wechat' || $cat_post->template == 'microblog' || $cat_post->template == 'browers') {
                    $year_tmp = date('Y',$cat_post->created);
                    $mon_tmp = date('n',$cat_post->created);
                    $y=$year; $m=$mon;
                    if ($mon != $mon_tmp && $mon > 0) $output .= '</ul></li>';
                    if ($year != $year_tmp && $year > 0) $output .= '</ul>';
                    if ($year != $year_tmp) {
                        $year = $year_tmp;
                        $output .= '<h3 style="text-align: center;padding: 2rem;">📒 '. $year .' 年</h3><ul>'; 
                    }
                    if ($mon != $mon_tmp) {
                        $mon = $mon_tmp;
                        $output .= '<li><div style="margin: var(--margin);">📅 '. $year .' 年 '. $mon .' 月</div><ul class="cat_block" style="padding: 0 var(--margin);width: calc(100% - 2 * var(--margin));margin: var(--margin);">';
                    }
                    $output .= '<li class="item"><b>📜 '.date('j日',$cat_post->created).'的说说：</b><a href="'.$cat_post->permalink .'">'. get_Abstract($cat_post,100) .'</a></li>';
            }
            endwhile;
            $output .= '</ul></li></ul></div>';
            echo $output;
        ?>
</div>