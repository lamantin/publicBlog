{extends 'layout.tpl'}

{block content}
    <h1>{$post.title}</h1>
    <p><strong>By: {$post.user_id}</strong></p>
    <p><strong>Published on: {$post.publish_at}</strong></p>
    <div>
        <p>{$post.content}</p>
    </div>
{/block}
