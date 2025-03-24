{extends 'layout.tpl'}

{block name="content"}
    <div class="container">
        <h2>Új poszt létrehozása</h2>

        <!-- Form a post létrehozásához -->
        <form action="/admin/posts_create" method="POST">
            <input type="hidden" name="csrf_token" value="{$csrf_token}">
            <div class="mb-3">
                <label for="title" class="form-label">Cím</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Tartalom</label>
                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Bejegyzés mentése</button>
            </div>
        </form>
    </div>
{/block}
