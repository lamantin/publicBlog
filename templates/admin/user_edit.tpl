{extends 'layout.tpl'}
{block name="content"}
    <div class="container">
    <h2>Felhasználó szerkesztése: {$user.email}</h2>

    <form action="/admin/edituser/{$user.id}" method="POST">
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" value="{$user.email}" required>
        </div>
        <div class="form-group">
            <label for="password">Új jelszó:</label>
            <input type="password" id="password" name="password">
            <small>A jelszó módosításához itt adjon meg új jelszót.</small>
        </div>
        <button type="submit">Frissítés</button>
    </form>

    <a href="/admin/users">Vissza a felhasználók listájához</a>
    </div>
{/block}