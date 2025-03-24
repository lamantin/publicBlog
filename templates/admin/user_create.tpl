{* Ha van sikerüzenet, azt megjelenítjük *}
{extends 'layout.tpl'}
{block name="content"}
    {* Ha van sikerüzenet, azt megjelenítjük *}
    {if $message}
        <div class="alert alert-success">
            {$message}
        </div>
    {/if}

    {* Ha van hibaüzenet, azt megjelenítjük *}
    {if $error}
        <div class="alert alert-danger">
            {$error}
        </div>
    {/if}

    <h2>Felhasználó létrehozása</h2>

    <form method="POST" action="">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password">Jelszó:</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        {*
        * is_admin mező hozzáadása
        * A felhasználó kiválaszthatja, hogy admin-e vagy sem.
        * Default false (nem admin)
        *}
        <div class="form-group">
            <label for="is_admin">Admin jogosultság:</label>
            <select name="is_admin" id="is_admin" class="form-control">
                <option value="0">Nem</option>
                <option value="1">Igen</option>
            </select>
        </div>

        {*
        * is_active mező hozzáadása
        * A felhasználó kiválaszthatja, hogy aktív-e vagy sem.
        * Default true (aktív)
        *}
        <div class="form-group">
            <label for="is_active">Felhasználó aktív:</label>
            <select name="is_active" id="is_active" class="form-control">
                <option value="1">Igen</option>
                <option value="0">Nem</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Felhasználó létrehozása</button>
    </form>

    {* Ha a felhasználó már létre lett hozva, megjelenhet egy visszajelzés *}
    {if $message}
        <p class="mt-3"><a href="/admin/createuser">Új felhasználó hozzáadása</a></p>
    {/if}

{/block}