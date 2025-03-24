{extends 'layout.tpl'}
{block name="content"}
<h2>Új poszt létrehozása</h2>

<form action="/post/create" method="POST">
    <input type="hidden" name="csrf_token" value="{$csrf_token}">
    <div>
        <label class="form-label" for="title">Cím:</label><br>
        <input class="form-control" type="text" id="title" name="title" required>
    </div>

    <div>
        <label class="form-label" for="content">Tartalom:</label><br>
        <textarea class="form-control" id="content" name="content" rows="10" cols="50" required></textarea>
    </div>

    <button type="submit">Poszt létrehozása</button>
</form>

<a href="/user/myposts">Vissza a posztjaimhoz</a>
{/block}