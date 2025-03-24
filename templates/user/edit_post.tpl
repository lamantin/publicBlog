<h2>Poszt szerkesztése</h2>

<form action="/user/editPost/{$post.id}" method="POST">
    <input type="hidden" name="csrf_token" value="{$csrf_token}">
    <div>
        <label for="title">Cím:</label><br>
        <input type="text" id="title" name="title" value="{$post.title|escape}" required>
    </div>

    <div>
        <label for="content">Tartalom:</label><br>
        <textarea id="content" name="content" rows="10" cols="50" required>{$post.content|escape}</textarea>
    </div>

    <button type="submit">Mentés</button>
</form>

<a href="/user/myposts">Vissza a listához</a>
