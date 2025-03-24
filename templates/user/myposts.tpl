{extends 'layout.tpl'}
{block name="content"}
<h2>Saját posztjaim</h2>

{if $posts|@count > 0}
    <table class="table table-dark">
        <thead>
        <tr>
            <th>Cím</th>
            <th>Létrehozva</th>
            <th>Műveletek</th>
        </tr>
        </thead>
        <tbody>
        {foreach from=$posts item=post}
            <tr>
                <td>{$post.title|escape}</td>
                <td>{$post.created_at}</td>
                <td>
                    <a href="/user/editPost/{$post.id}">Szerkesztés</a> |
                    <a href="/user/deletePost/{$post.id}" onclick="return confirm('Biztosan törlöd?');">Törlés</a>
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
{else}
    <p>Még nincs saját posztod.</p>
{/if}

<a href="/post/create">Új poszt hozzáadása</a>
{/block}