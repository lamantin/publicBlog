{extends file="layout.tpl"}

{block name="content"}
    <h1>Tesztfeladat Blog</h1>
    <div class="row">
        {foreach $posts as $post}
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{$post.title}</h5>
                        <p 
class="card-text">{$post.content|truncate:100}</p>
                        <a href="/post/show/{$post.id}" class="btn
btn-primary">Tovább ..</a>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
{/block}

