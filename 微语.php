<?php
/**
 * 微语模板
 * 
 * 此模板为喵喵送给购买Sunny主题的小伙伴的礼物
 * 
 * 说明：此模板没有真正意义上限制第三方用户发表内容，可能会收到第三方恶意评论
 * 
 * 使用方法：将该文件放入网站根目的sunny_template文件夹中，并确保当前页开启了评论区
 */
?>
<style>
    <?php if (!$this->user->hasLogin()) :?>
        .respond {
            display: none;
        }
    <?php endif; ?>
    #comments .cat_comment_body:hover .replymengban {
        display: none;
    }
    #comments .cat_comment_reply {
        pointer-events: none;
        margin-bottom: auto;
        position: absolute;
        right: 0;
        top: calc(0rem - var(--margin) - 1rem);
        transform: translate(0, -50%);
    }
    #comments .cat_comment_body .content .substance.iscat {
        margin-left: 0;    
        max-width: 100%;
        background: unset;
        line-height: 2.5rem;
        font-size: 1.1rem;
    }
    #comments .cat_comment_body .content .user {
        display: none!important;
    }
    #comments .cat_comment_body .content .commentinfos{
        text-align: left;
    }
    #comments .cat_comment_body .avatar {
        width: 3.5rem;
        height: 3.5rem;
        border-radius: 50%;
        box-shadow: var(--box-shadow-full);
    }
</style>