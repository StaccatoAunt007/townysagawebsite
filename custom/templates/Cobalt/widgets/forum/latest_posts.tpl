<div class="card widget-card">
    <div class="card-header header-theme widget-header">{$LATEST_POSTS}</div>
    <div class="card-body">
        {foreach from=$LATEST_POSTS_ARRAY item=post name=latest_posts}
            <div class="widget-post-flex"{if not $smarty.foreach.latest_posts.last} style="margin-bottom: 15px"{/if}>
                <div class="post-avatar">
                    <img src="{$post.last_reply_avatar}" alt="{$post.last_reply_username}" />
                </div>
                <div class="post-info">
                    <a class="white-link" href="{$post.last_reply_link}">{$post.topic_title}</a><br />
                    <a class="username" href="{$post.last_reply_profile_link}" style="{$post.last_reply_style}" data-poload="{$USER_INFO_URL}{$post.last_reply_user_id}" data-html="true" data-placement="top">{$post.last_reply_username}</a><br />
                    <span data-toggle="tooltip" data-trigger="hover" data-original-title="{$post.last_reply}">{$post.last_reply_rough}</span>
                </div>
            </div>
        {foreachelse}
            {$NO_POSTS_FOUND}
        {/foreach}
    </div>
</div>

{*  
 *  ImJusThat1Guy
 *  21683
 *  158113
 *  1724111909
 *  31c0c8332f9afa81b380571686031a5f
 *  1a8101034ebba6e396565918f6649d6a
 *}